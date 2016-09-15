<body>
    <?php if (validation_errors() != NULL) {?>
        <div class="alert alert-danger pull-right alert-dismissible" role="alert" id="validacio" style="z-index: 2;">
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <p><strong>Alerta!</strong> <?php echo validation_errors(); ?></p>
        </div>
    <?php } ?>

    <?php if (isset($userIsCreated) && $userIsCreated == 1) {?>
        <div class="alert alert-danger pull-right alert-dismissible" role="alert" id="userCreated" style="z-index: 2;">
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <p><strong>Alert!</strong> User is already created! </p>
        </div>
    <?php } ?>
        
    <?php if (isset($success) && $success == 1) {?>
        <div class="alert alert-success pull-right alert-dismissible" role="alert" id="successUser" style="z-index: 2;">
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <p><strong>Success!</strong> User is created! </p>
        </div>
    <?php } ?>
    
    <div class="container">
        <div class="row jumbotron">
            <h3>GymPla-Net, user registration</h3>
        </div>
        
        <div role="main">
            <form method="post" id="userForm" class="form-horizontal" action="<?php echo base_url('register'); ?>">
                <div id="contact-sec" role="tabpanel"  class="tab-pane fade in active">

                    <div class="form-group">
                        <label for="frmNameA" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input name="name" id="frmNameA" class="form-control validate" autocomplete="given-name"
                            placeholder="name" id="frmSurnameA" class="form-control validate" autocomplete="family-name"
                            placeholder="Surname" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="frmEmailA" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="email" class="form-control validate" id="frmEmailA" autocomplete="email"
                            placeholder="name@example.com" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="frmEmailC" class="col-lg-2 control-label">Confirm Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="emailC" class="form-control validate" id="frmEmailC" autocomplete="email"
                            placeholder="name@example.com" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="frmPasswordA" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" name="password" class="form-control validate" id="frmPasswordA" autocomplete="password" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="frmPasswordC" class="col-lg-2 control-label">Confirm Password</label>
                        <div class="col-lg-10">
                            <input type="password" name="passwordC" class="form-control validate" id="frmPasswordC" autocomplete="password" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="frmPhoneNumA" class="col-lg-2 control-label">Phone</label>
                        <div class="col-lg-10">
                            <input type="tel" name="phone" id="frmPhoneNumA" class="form-control validate" autocomplete="tel"
                            placeholder="+1-650-450-1212" required />
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <button type="submit" id="butCheckout" class="btn btn-success">Submit</button>
                    </div>
                </div>
                <p><small>By joining and by using GymPla-Net I confirm that I have read, understood and agree to be bound by the GymPla-Net Terms of Use and Privacy Policy. I also confirm that I am at least 18 years of age.</small></p>
            </form>
        </div>
