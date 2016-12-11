<body>
    <?php if (validation_errors() != NULL) {?>
        <div class="alert alert-danger pull-right alert-dismissible" role="alert" id="validacio" style="z-index: 2;">
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <p><strong>Alerta!</strong> <?php echo validation_errors(); ?></p>
        </div>
    <?php } ?>

    <?php if (isset($userIsCreated) && $userIsCreated == 1) { ?>
        <div class="alert alert-danger pull-right alert-dismissible" role="alert" id="userCreated" style="z-index: 2;">
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <p><strong>Alert!</strong> User is already created! </p>
        </div>
    <?php } ?>
        
    <?php if (isset($success) && $success == 1) { ?>
        <div class="alert alert-success pull-right alert-dismissible" role="alert" id="successUser" style="z-index: 2;">
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <p><strong>Success!</strong> User is created! </p>
        </div>
    <?php } ?>
    
    <div class="container">
        <div class="row jumbotron">
            <h3>GymPla-Net, trainer registration</h3>
        </div>
        
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
                        <input type="file" id="frmPPhoto" name="uploadPhoto">
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
                        placeholder="Surname" required></div>
                    </div>
                    <div class="form-group">
                      <label for="frmEmailA" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-10">
                        <input type="email" name="email" class="form-control validate" id="frmEmailA" autocomplete="email"
                        placeholder="name@example.com" required ></div>
                    </div>
                    <div class="form-group">
                      <label for="frmEmailC" class="col-lg-2 control-label">Confirm Email</label>
                      <div class="col-lg-10">
                        <input type="email" name="emailC" class="form-control validate" id="frmEmailC" autocomplete="email"
                        placeholder="name@example.com" required ></div>
                    </div>
                    <div class="form-group">
                      <label for="frmPasswordA" class="col-lg-2 control-label">Password</label>
                      <div class="col-lg-10">
                        <input type="password" name="password" class="form-control validate" id="frmPasswordA" autocomplete="password" required ></div>
                    </div>
                    <div class="form-group">
                      <label for="frmPasswordC" class="col-lg-2 control-label">Confirm Password</label>
                      <div class="col-lg-10">
                        <input type="password" name="passwordC" class="form-control validate" id="frmPasswordC" autocomplete="password" required ></div>
                    </div>

                    <div class="form-group">
                      <label for="frmPhoneNumA" class="col-lg-2 control-label">Phone</label>
                      <div class="col-lg-10">
                        <input type="tel" name="phone" id="frmPhoneNumA" class="form-control validate" autocomplete="tel"
                        placeholder="+1-650-450-1212" required></div>
                    </div>

                    <div class="form-group">
                      <label for="frmNIDNum" class="col-lg-2 control-label">National ID Number</label>
                      <div class="col-lg-10">
                        <input name="nationalidnumber" id="frmNIDNum" class="form-control validate" required></div>
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
                        <input type="file" id="frmPPhoto" name="cv" required>
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>
                      <div class="row">
                        <div class="input-field col s10">
                            <textarea id="frmLangSessionA" class="materialize-textarea" name="languages" required></textarea>
                          <label for="frmLangSessionA">Into how many languages can you run a session?</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s10">
                          <textarea id="frmTStreamingExperienceA" class="materialize-textarea" name="experienceOnVideo"></textarea>
                          <label for="frmTStreamingExperienceA">Do you have experience training via live video, if so please elaborate</label>
                        </div>
                      </div>

                  <h5>Activity type experience</h5>

                    <div class="row">
                      <div class="col s10">
                        <input type="checkbox" name="activitytypeyoga" id="frmATYoga" required value="yoga" class="filled-in">
                        <label for="frmATYoga">Yoga / Mind & Body</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col s10">
                        <input type="checkbox" name="activitytypegeneraltraining" id="frmATGeneral" required value="generaltraining" class="filled-in">
                        <label for="frmATGeneral">General training</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col s10">
                        <input type="checkbox" name="activitytypepilates" id="frmATPilates" required value="pilates" class="filled-in">
                        <label for="frmATPilates">Pilates method</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col s10">
                        <input type="checkbox" name="activitytypeperformance" id="frmATPerformance" required value="performance" class="filled-in">
                        <label for="frmATPerformance">Sports / Performance</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col s10">
                        <input type="checkbox" name="activitytyperehab" id="frmATRehab" required value="rehab" class="filled-in">
                        <label for="frmATRehab">Therapy / Rehab</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col s10">
                        <input type="checkbox" name="activitytypeaerobics" required id="frmATAerobics" value="aerobics" class="filled-in">
                        <label for="frmATAerobics">Aerobics</label>
                      </div>
                    </div>

                  <h5>User preference</h5>

                    <div class="row">
                      <div class="col s10">
                        <input type="radio" name="gender" id="frmTMale">
                        <label for="frmTMale">Male</label>
                        <input type="radio" name="gender" id="frmTFemale">
                        <label for="frmTFemale">Female</label>
                        <input type="radio" name="gender" id="frmTBoth" checked>
                        <label for="frmTBoth">Both</label>
                      </div>
                    </div>

                  <h5>Timetable preference</h5>

                    <div class="row">
                      <div class="col s10">
                        <input type="radio" name="timetable" id="frmTT06001000" checked>
                        <label for="frmTT06001000">06:00 10:00</label>
                        <input type="radio" name="timetable" id="frmTT10001400">
                        <label for="frmTT10001400">10:00 14:00</label>
                        <input type="radio" name="timetable" id="frmTT14001800">
                        <label for="frmTT14001800">14:00 18:00</label>
                        <input type="radio" name="timetable" id="frmTT18002200">
                        <label for="frmTT18002200">18:00 22:00</label>
                      </div>
                    </div>

                  <h5>Additional information</h5>
                    <div class="row">
                        <div class="input-field col s12">
                          <select>
                            <option value="" selected>Choose your option</option>
                            <option value="1">Linkedin</option>
                            <option value="2">Facebook</option>
                            <option value="3">Google</option>
                            <option value="3">A client</option>
                            <option value="3">A fellow trainer</option>
                          </select>
                            <label>How did you hear about GymPla-Net?</label>
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

