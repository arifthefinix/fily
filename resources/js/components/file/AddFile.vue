<template>
   <div class="content container-fluid">
       <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">File Add</h4>
            </div>
            <div class="col-xs-8 text-right m-b-20">
                <router-link to="/files" class="btn btn-primary rounded pull-right"><i class="fa fa-plus"></i> Files</router-link>
            </div>
        </div>
        <div class="row staff-grid-row">
            <div class="m-b-30">
	               <form @submit.prevent="uploadFile()" enctype="multipart/form-data">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                        <label class="control-label">File Name <span class="text-danger">*</span></label>
                                        <input v-model="name" type="text" class="form-control" required>
                                   </div>
                               </div>
							</div>
                            <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                        <label class="control-label">Share With <span class="text-danger">*</span></label>
                                        <select v-model="user_id" id="" class="form-control" multiple>
                                            <option v-for="user in users" :key="user.id" :value="user.id">{{ user.name  }}</option>
                                        </select>
                                   </div>
                               </div>
							</div>
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">File <span class="text-danger">*</span></label>
                                       <input type="file" @change="selectFile" class="form-control" name="file_name" required>
                                   </div>
                               </div>
							</div>

                        </div>
                        <div class="m-t-20 text-center">
                            <button type="" class="btn btn-primary">Add File</button>
                        </div>
                    </form>
			</div>

        </div>
   </div>

</template>

<script>
    export default {
        data(){
            return{
                name: '',
                user_id: [],
                attatchment: '',
                users: {},
                form: new FormData,
            }
        },
        methods: {
            selectFile(e){
               let selectedFile = e.target.files[0];
               this.attatchment = selectedFile;
            },
            uploadFile(){
                this.form.append('file_name',this.attatchment);
                this.form.append('name',this.name);
                this.form.append('user_id',this.user_id);

                const config = { headers: { 'content-Type': 'multipart/form-data'} };
                
                axios.post('file/upload',this.form,config).then(response=>{
                    toast.fire({
                        icon: 'success',
                        title: 'File uploaded successfully'
                        });
                    });
                this.$router.push('files');
            },
            listUsers(){
                axios.get('api/user').then(({data}) => (this.users =data));
            }
        },
        created() {
            this.listUsers();
        }
    }
</script>
