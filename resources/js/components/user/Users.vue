<template>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Users</h4>
            </div>
            <div class="col-xs-8 text-right m-b-20">
                <router-link to="/add-user" class="btn btn-primary rounded pull-right"><i class="fa fa-plus"></i> Add User</router-link>
            </div>
        </div>
        <div class="row staff-grid-row">
           
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="#" class="avatar">C</a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <!-- <li><a href="{{ route('user.destroy',$user->id) }}"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li> -->
                        </ul>
                    </div>
                    <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">Catherine Manseau</a></h4>
                    <div class="small text-muted">Android Developer</div>
                </div>
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
