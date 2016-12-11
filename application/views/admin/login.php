<?php
    $classError = "";
    if ($this->session->flashdata('error')) {
        $classError = "class='item bad'";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gym Planet | Admin Panel</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>assets/css/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url(); ?>assets/css/admin/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="<?php echo base_url(); ?>assets/css/admin/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>assets/css/admin/build/css/custom.min.css" rel="stylesheet">
        
        <!-- Custom Style Admin -->
        <link href="<?php echo base_url(); ?>assets/css/admin/style_admin.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <h1 class="text-center"><i class="fa fa-circle-o"></i> Gym-Planet</h1>
                    <section class="login_content">
                        <form method="post" action="<?php echo base_url('logIn-action'); ?>">
                            <h1>Admin Panel</h1>
                            <div <?php echo $classError; ?>>
                                <input type="text" class="form-control" placeholder="Mail" name="mail" required />
                            </div>
                            <div <?php echo $classError; ?>>
                                <input type="password" class="form-control" placeholder="Password" name="password" required />
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success no-float no-margin-left" value="Entry" />
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <p>© 2016 All Rights Reserved. Privacy and Terms</p>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
