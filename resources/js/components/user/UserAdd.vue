<template>
   <div class="content container-fluid">
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
	               <form @submit.prevent="createUser()" >
                       <div class="row">
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">Name <span class="text-danger">*</span></label>
                                       <input placeholder="New User Name" v-model="form.name" type="text" name="name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                       <has-error :form="form" field="name"></has-error>
                                   </div>
                               </div>
							</div>
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                      <label class="control-label">Email <span class="text-danger">*</span></label>
                                       <input placeholder="New User Email" v-model="form.email" type="email" name="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                       <has-error :form="form" field="email"></has-error>
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
                            <button type="submit" class="btn btn-primary">Create User</button>
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
                form: new Form({
                    name: '',
                    email: '',
                })
            }
        },
        methods: {
            createUser(){
                this.form.post('/api/user');
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
