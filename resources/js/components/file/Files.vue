<template>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Users</h4>
            </div>
            <div class="col-xs-8 text-right m-b-20">
                <router-link to="/add-file" class="btn btn-primary rounded pull-right"><i class="fa fa-plus"></i> Add File</router-link>
            </div>
        </div>
        <div class="row staff-grid-row">
           
            <div v-for="user in users" :key="user.id" class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        
                        <router-link class="avatar" :to="{ name: 'fileList', params:{id:user.id}}">P</router-link>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><router-link :to="{ name: 'fileList', params:{id:user.id}}">{{ user.name }}</router-link></h4>
                </div>
            </div>
         
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                users: {},
            }
        },

        methods: {
            listUsers(){
                axios.get('api/user').then(({data}) => (this.users =data));
            }
        },

        created() {
            this.listUsers();
        }
    }
</script>
