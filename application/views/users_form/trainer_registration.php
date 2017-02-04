<?php 
    if ($this->session->flashdata('resultTrainer') != NULL) {
        $resultTrainer = $this->session->flashdata('resultTrainer');
    }
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trainer registration | GymPla-Net</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css?4">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row jumbotron">
                <h3>GymPla-Net, trainer registration</h3>
            </div>
            
            <?php if (validation_errors() != NULL) {?>
                <div class="row">
                    <div class="alert alert-danger alert-dismissible" role="alert" id="validacio" style="z-index: 2;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <p><strong>Alerta!</strong> <?php echo validation_errors(); ?></p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($resultTrainer)) { ?>
                <div class="row">
                    <?php if ($resultTrainer == 1) { ?>
                        <div class="alert alert-success alert-dismissible" role="alert" id="successTrainer" style="z-index: 2;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
                            <p><strong>Success!</strong> Your subscription was successfully submitted. You will shortly receive an email with the acceptance / denial of your request! </p>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-warning alert-dismissible" role="alert" id="warningTrainer" style="z-index: 2;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
                            <p><strong>Warning!</strong> Something was wrong! </p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#contact-sec" aria-controls="home" role="tab" data-toggle="tab">1) Trainer profile</a>
                </li>
                <li role="presentation">
                    <a href="#shipping-sec" aria-controls="profile" role="tab" data-toggle="tab">2) Address</a>
                </li>
                <li role="presentation">
                    <a href="#preferences-sec" aria-controls="profile" role="tab" data-toggle="tab">3) Experience and CV</a>
                </li>
            </ul>

            <div role="main">
                <form method="post" id="trainerForm" class="form-horizontal" action="<?php echo base_url('register-trainer'); ?>" enctype="multipart/form-data">
                    <div class="tab-content">
                      <div id="contact-sec" role="tabpanel"  class="tab-pane fade in active">
                        <h4>Trainer profile</h4>

                        <div class="file-field input-field" data-toggle="tooltip" data-placement="top" title="Upload your profile picture. A 320x320 jpeg image.">
                          <div class="btn">
                            <span>Photo</span>
                            <input type="file" id="frmPPhoto" name="profilePhoto" accept="jpg|png|jpeg">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="frmNameA" class="col-lg-2 control-label">Name</label>
                          <div class="col-lg-10">
                            <input name="name" id="frmNameA" class="form-control validate" autocomplete="given-name"
                            placeholder="name" id="frmSurnameA" class="form-control validate" autocomplete="family-name"
                            placeholder="Surname">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="frmEmailA" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="email" name="email" class="form-control validate" id="frmEmailA" autocomplete="email"
                            placeholder="name@example.com">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="frmEmailC" class="col-lg-2 control-label">Confirm Email</label>
                          <div class="col-lg-10">
                            <input type="email" name="emailC" class="form-control validate" id="frmEmailC" autocomplete="email"
                                   placeholder="name@example.com">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="frmPasswordA" class="col-lg-2 control-label">Password</label>
                          <div class="col-lg-10">
                            <input type="password" name="password" class="form-control validate" id="frmPasswordA" autocomplete="password" ></div>
                        </div>
                        <div class="form-group">
                          <label for="frmPasswordC" class="col-lg-2 control-label">Confirm Password</label>
                          <div class="col-lg-10">
                            <input type="password" name="passwordC" class="form-control validate" id="frmPasswordC" autocomplete="password" ></div>
                        </div>

                        <div class="form-group">
                          <label for="frmPhoneNumA" class="col-lg-2 control-label">Phone</label>
                          <div class="col-lg-10">
                            <input type="tel" name="phone" id="frmPhoneNumA" class="form-control validate" autocomplete="tel"
                            placeholder="+1-650-450-1212"></div>
                        </div>

                        <div class="form-group">
                          <label for="frmNIDNum" class="col-lg-2 control-label">National ID Number</label>
                          <div class="col-lg-10">
                            <input name="nationalIdNumber" id="frmNIDNum" class="form-control validate" ></div>
                        </div>

                      </div>

                    <div role="tabpanel" class="tab-pane fade in" id="shipping-sec">
                      <h4>Address</h4>
                      <div class="form-group">
                        <label for="frmAddressS" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-10">
                          <input name="ship-address" class="form-control validate" id="frmAddressS" autocomplete="shipping street-address"></div>
                      </div>

                      <div class="form-group">
                        <label for="frmCityS" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                          <input name="ship-city" class="form-control validate" id="frmCityS" placeholder="Barcelona" autocomplete="shipping address-level2"></div>
                      </div>
                      <div class="form-group">
                        <label for="frmStateS" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-10">
                          <input name="ship-state" class="form-control validate" id="frmStateS" placeholder="CA" autocomplete="shipping address-level3"></div>
                      </div>

                      <div class="form-group">
                        <label for="frmZipS" class="col-lg-2 control-label">Zip</label>
                        <div class="col-lg-10">
                          <input name="ship-zip" class="form-control validate" id="frmZipS" placeholder="08001" autocomplete="shipping postal-code"></div>
                      </div>

                      <div class="form-group">
                        <label for="frmCountryS" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-10">
                          <input name="ship-country" class="form-control validate" id="frmCountryS" placeholder="Spain" autocomplete="shipping country"></div>
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade in" id="preferences-sec">
                      <br />
                        <p>We use the following information to determine your eligibility to be a Wello Trainer. We are looking for high-quality fitness experts. If this describes you, complete the application below. Please be thorough and complete all required fields. Email <a href="">hello@gympla.net</a> if you have any questions. We look forward to welcoming you to the GymPla-Net Training Team!</p>
                        <p>Your application cannot be saved so please finish it before you leave this page.</p>
                      <hr/>
                      <h4>Experience and Resumé</h4>
                      <h5>Resumé</h5>

                        <div class="file-field input-field" data-toggle="tooltip" data-placement="top" title="Upload your resumé. Only .pdf accepted.">
                          <div class="btn">
                            <span>Upload</span>
                            <input type="file" id="frmCurriculum" name="curriculum" accept="pdf" required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" >
                          </div>
                        </div>
                          <div class="row">
                            <div class="input-field col s10">
                                <textarea id="frmLangSessionA" class="materialize-textarea" name="languages"></textarea>
                              <label for="frmLangSessionA">Into how many languages can you run a session? (separated by comma)</label>
                            </div>
                          </div>

                          <div class="row">
                            <div class="input-field col s10">
                              <textarea id="frmTStreamingExperienceA" class="materialize-textarea" name="experienceOnVideo" length="200"></textarea>
                              <label for="frmTStreamingExperienceA">Do you have experience training via live video, if so please elaborate</label>
                            </div>
                          </div>

                      <h5>Activity type experience</h5>
                      <?php foreach ($sportsAvailable as $sport) { ?>
                            <div class="row">
                                <div class="col s10">
                                    <input type="checkbox" name="sports[]" id="frmATY<?php echo $sport['nom']; ?>" value="<?php echo $sport['id']; ?>" class="filled-in">
                                    <label for="frmATY<?php echo $sport['nom']; ?>"><?php echo $sport['esport']; ?></label>
                                </div>
                            </div>
                      <?php } ?>
                      
                      <h5>Timetable preference</h5>
                      
                        <div class="row">
                          <div class="col s10">
                            <?php foreach ($daysAvailable as $week) { ?>
                                <input type="checkbox" name="week[]" value="<?php echo $week['id']; ?>" id="frmT<?php echo $week['id']; ?>" class="filled-in">
                                <label for="frmT<?php echo $week['id']; ?>" class="margin-right-3per"><?php echo $week['dia']; ?></label>
                              <?php } ?>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col s10">
                            <?php foreach ($timesAvailable as $time) { ?>
                                <input type="radio" name="timetable" value="<?php echo $time['id']; ?>" id="frmT<?php echo $time['id']; ?>">
                                <label for="frmT<?php echo $time['id']; ?>" class="margin-right-3per"><?php echo date("H:i", strtotime($time['hora_inici']))."-".date("H:i", strtotime($time['hora_fi'])); ?></label>
                              <?php } ?>
                          </div>
                        </div> 

                      <h5>User preference</h5>

                        <div class="row">
                          <div class="col s10">
                              <?php foreach ($sexPreference as $sex) { ?>
                                <input type="radio" name="gender" value="<?php echo $sex['id']; ?>" id="frmT<?php echo $sex['sexe']; ?>">
                                <label for="frmT<?php echo $sex['sexe']; ?>" class="margin-right-3per"><?php echo ucfirst($sex['sexe']); ?></label>
                              <?php } ?>
                          </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="form-group">
                  <div class="col-lg-12">
                    <button type="submit" id="butCheckout" class="btn btn-success">Submit Application</button>
                  </div>
                </div>
                <p><small>By joining and by using GymPla-Net I confirm that I have read, understood and agree to be bound by the GymPla-Net Terms of Use and Privacy Policy. I also confirm that I am at least 18 years of age.</small></p>
              </form>
        </div>
        </div>
        
        <!-- Peu de pàgina -->
        
        <!-- Latest compiled JavaScript -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
