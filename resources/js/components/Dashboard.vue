<template>
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>112</h3>
                    <span>Projects</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>44</h3>
                    <span>Clients</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
                <div class="dash-widget-info">
                    <h3>37</h3>
                    <span>Tasks</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>218</h3>
                    <span>Employees</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Payments</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table m-b-0">
                            <thead>
                                <tr>
                                    <th>Invoice ID</th>
                                    <th>Client</th>
                                    <th>Payment Type</th>
                                    <th>Paid Date</th>
                                    <th>Paid Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="invoice-view.html">#INV-0004</a></td>
                                    <td>
                                        <h2><a href="#">Barry Cuda</a></h2>
                                    </td>
                                    <td>Paypal</td>
                                    <td>11 Jun 2017</td>
                                    <td>$380</td>
                                </tr>
                                <tr>
                                    <td><a href="invoice-view.html">#INV-0005</a></td>
                                    <td>
                                        <h2><a href="#">Tressa Wexler</a></h2>
                                    </td>
                                    <td>Paypal</td>
                                    <td>21 Jul 2017</td>
                                    <td>$500</td>
                                </tr>
                                <tr>
                                    <td><a href="invoice-view.html">#INV-0006</a></td>
                                    <td>
                                        <h2><a href="#">Ruby Bartlett</a></h2>
                                    </td>
                                    <td>Paypal</td>
                                    <td>28 Aug 2017</td>
                                    <td>$60</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="payments.html" class="text-primary">View all payments</a>
                </div>
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
