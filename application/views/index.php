<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>I-Exchange Online Exchange Manager V.1.0</title>


        <link href="<?= base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url() ?>bootstrap/css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?= base_url() ?>bootstrap/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url() ?>bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">






    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">เข้าสู่ระบบ</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" id="myform" name="myform" method="post" action="<?php echo base_url() ?>login/p_login">
                                <input type="hidden" name="method" value="login">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control"  placeholder="ผู้ใช้งาน" name="username" type="username" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control"  placeholder="รหัสผ่าน" name="password" type="password">
                                    </div>
                                    <!--div class="checkbox">
                                        <label>
                                            <input name="usertype" type="checkbox" value="1">Admin User
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="เข้าสู่ระบบ">
                                </fieldset>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>



    </body>

</html>
<!-- jQuery -->
<script src="<?= base_url() ?>bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>bootstrap/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?= base_url() ?>bootstrap/js/plugins/morris/raphael.min.js"></script>
<script src="<?= base_url() ?>bootstrap/js/plugins/morris/morris.min.js"></script>
<script src="<?= base_url() ?>bootstrap/js/plugins/morris/morris-data.js"></script>