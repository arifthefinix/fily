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
                                        <input v-model="name" type="text" class="form-control">
                                      
                                   </div>
                               </div>
							</div>
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">File <span class="text-danger">*</span></label>
                                       <input type="file" @change="selectFile" class="form-control" name="file_name" >
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
                attatchment: '',
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

                const config = { headers: { 'content-Type': 'multipart/form-data'} };
                
                axios.post('/api/file/upload',this.form,config).then(response=>{

                })
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
