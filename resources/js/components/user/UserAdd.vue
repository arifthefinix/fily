<template>
   <div>
       <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Users</h4>
            </div>
            <div class="col-xs-8 text-right m-b-20">
                <router-link to="/users" class="btn btn-primary rounded pull-right"><i class="fa fa-plus"></i> All Users</router-link>
            </div>
        </div>
        <div class="row staff-grid-row">
            <div class="m-b-30">
	               <form action="" method="post">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">Name <span class="text-danger">*</span></label>
                                       <input placeholder="Enter New User Name" value="" type="text" class="form-control" name="name" required>
                                   </div>
                               </div>
							</div>
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">Email <span class="text-danger">*</span></label>
                                       <input placeholder="Enter New User Email" value="" type="text" class="form-control" name="email" required>
                                   </div>
                               </div>
							</div>
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">Password <span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" readonly value="12345678">
                                   </div>
                               </div>
							</div>

                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary">Create User</button>
                        </div>
                    </form>
			</div>

        </div>
   </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
