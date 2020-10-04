<template>
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ shared }}</h3>
                    <span>Files Shared by you</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ sharedWith}}</h3>
                    <span>Files Shared with you</span>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
    export default {
        data(){
            return {
                shared: '',
                sharedWith: '',
            }
        },

        methods: {
            sharedByMe(){
                axios.get('api/dashboard/shared-by-me').then(({data}) => (this.shared =data));
            },
            sharedWithMe(){
                axios.get('api/dashboard/shared-with-me').then(({data}) => (this.sharedWith =data));
            }
        },

        created() {
            this.sharedByMe();
            this.sharedWithMe();
        }
    }
</script>
