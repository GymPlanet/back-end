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
    <!-- iCheck -->
    <link href=".<?php echo base_url(); ?>assets/css/admin/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/css/admin/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/css/admin/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/css/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url('admin'); ?>" class="site_title"><i class="fa fa-circle"></i> <span>Gym Planet</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Director</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li class="active"><a><i class="fa fa-user-plus"></i> Registers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: block;">
                      <li><a href="#">Total List</a></li>
                      <li class="active"><a href="#">Pending to accept</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Partners <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Total List</a></li>
                      <li><a href="#">Actives</a></li>
                      <li><a href="#">Finished subscription</a></li>
                      <li><a href="#">Not finished subscription</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user-secret"></i> Trainers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Total List</a></li>
                      <li><a href="#">Actives</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> Lessons <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Total List</a></li>
                      <li><a href="#">Actives</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-list"></i> Sports available <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Total List</a></li>
                      <li><a href="#">Add sport</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cogs"></i>General <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Global Settings</a></li>
                      <li><a href="#">Global information</a></li>
                      <li><a href="#">Statistics</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>assets/images/img.jpg" alt="">John Doe
                    <span class="fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="<?php echo base_url('logOut-action'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registers <small>pending to accept her subscription</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>DNI</th>
                          <th>Phone Number</th>
                          <th>Modalities</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger</td>
                          <td>Nixon</td>
                          <td>tigernx61@gmail.com</td>
                          <td>23894578P</td>
                          <td>610923846</td>
                          <td>Fitness, Running, Yoga</td>
                        </tr>
                        <tr>
                          <td>Garrett</td>
                          <td>Winters</td>
                          <td>garretwinters63@hotmail.com</td>
                          <td>12903212F</td>
                          <td>623895016</td>
                          <td>Spinning, Pilates</td>
                        </tr>
                        <tr>
                          <td>Cedric</td>
                          <td>Kelly</td>
                          <td>cedricky22@gmail.com</td>
                          <td>49820043S</td>
                          <td>604239851</td>
                          <td>Crossfit, Zumba, Relax</td>
                        </tr>
                        <tr>
                          <td>Tiger</td>
                          <td>Nixon</td>
                          <td>tigernx61@gmail.com</td>
                          <td>23894578P</td>
                          <td>610923846</td>
                          <td>Fitness, Running, Yoga</td>
                        </tr>
                        <tr>
                          <td>Garrett</td>
                          <td>Winters</td>
                          <td>garretwinters63@hotmail.com</td>
                          <td>12903212F</td>
                          <td>623895016</td>
                          <td>Spinning, Pilates</td>
                        </tr>
                        <tr>
                          <td>Cedric</td>
                          <td>Kelly</td>
                          <td>cedricky22@gmail.com</td>
                          <td>49820043S</td>
                          <td>604239851</td>
                          <td>Crossfit, Zumba, Relax</td>
                        </tr>
                        <tr>
                          <td>Tiger</td>
                          <td>Nixon</td>
                          <td>tigernx61@gmail.com</td>
                          <td>23894578P</td>
                          <td>610923846</td>
                          <td>Fitness, Running, Yoga</td>
                        </tr>
                        <tr>
                          <td>Garrett</td>
                          <td>Winters</td>
                          <td>garretwinters63@hotmail.com</td>
                          <td>12903212F</td>
                          <td>623895016</td>
                          <td>Spinning, Pilates</td>
                        </tr>
                        <tr>
                          <td>Cedric</td>
                          <td>Kelly</td>
                          <td>cedricky22@gmail.com</td>
                          <td>49820043S</td>
                          <td>604239851</td>
                          <td>Crossfit, Zumba, Relax</td>
                        </tr>
                        <tr>
                          <td>Tiger</td>
                          <td>Nixon</td>
                          <td>tigernx61@gmail.com</td>
                          <td>23894578P</td>
                          <td>610923846</td>
                          <td>Fitness, Running, Yoga</td>
                        </tr>
                        <tr>
                          <td>Garrett</td>
                          <td>Winters</td>
                          <td>garretwinters63@hotmail.com</td>
                          <td>12903212F</td>
                          <td>623895016</td>
                          <td>Spinning, Pilates</td>
                        </tr>
                        <tr>
                          <td>Cedric</td>
                          <td>Kelly</td>
                          <td>cedricky22@gmail.com</td>
                          <td>49820043S</td>
                          <td>604239851</td>
                          <td>Crossfit, Zumba, Relax</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Gym Planet © 2016 - All Rights Reserved
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/css/admin/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/css/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/css/admin/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/css/admin/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/css/admin/iCheck/icheck.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/admin/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/css/admin/build/js/custom.min.js"></script>
    
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>
