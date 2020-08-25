<template>
   <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-4 col-xs-3">
							<h4 class="page-title">Files</h4>
						</div>
						<div class="col-sm-8 col-xs-9 text-right m-b-20">
							<router-link to="/add-file" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add File</router-link>
							
						</div>
					</div>
					
					<div class="row staff-grid-row">
						<div v-for="file in files" :key="file.id" class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis">{{ file.file_title }}</h4>
								<!-- <h5 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html">Barry Cuda</a></h5> -->
								<div class="small text-muted">{{ file.created_at | dateFormat }}</div>
								<!-- <button  type='button' @click="downloadFile()" class="btn btn-default btn-sm m-t-10">Download</button> -->
								<a :href="'/api/download/'+file.id" class="btn btn-default btn-sm m-t-10">Download File</a>
								<button class="btn btn-default btn-sm m-t-10" @click="deleteFile(file.id)">Delete File</button>
							</div>
						</div>
					</div>
                </div>

</template>

<script>
    export default {
        data(){
            return {
                files: {},
            }
        },

        methods: {
            fileList(){
                axios.get('/api/file-list/'+this.$route.params.id).then(({data}) => (this.files =data));
			},

			deleteFile(value){
				axios.get('/api/delete/'+value);
				this.fileList();
			}
        },

        created() {
            this.fileList();
        }
    }
</script>
