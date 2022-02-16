<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="5Xl8c2VMRKAMnqS3KIlqu1UpioYDXonjTy1aq56p" />
    <title>InkCasa Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/dist/css/AdminLTE.min.css?ver=1.0.0.0">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/dist/css/skins/_all-skins.css?ver=1.0.0.0">
    <!-- Morris chart -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- bootstrap wysihtml5 - text editor -->

    <link rel="stylesheet" href="https://stage.inkcasa.com/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
 
</head>

<body class="hold-transition skin-black-light sidebar-mini">

    <!-- <style>
    .sidebar-menu{
       background-color: #xx15babd;
    }
    
</style> -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <!-- <span class="logo-lg"><b>INK</b>CASA</span> -->
                <img src="https://www.inkcasa.com/Content/images/logow.png" alt="" width="120" height="40">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->


                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">

                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="https://stage.inkcasa.com/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">


                                    <!-- Menu Footer-->

                                    <!-- Control Sidebar Toggle Button -->
                                <li>
                                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                                </li>
                            </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="https://www.kindpng.com/picc/m/699-6997452_administrator-network-icons-system-avatar-computer-transparent-admin.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p style="font-weight: bold; font-size: medium;">username</p>
                        <a style="color: green;" href="#"> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">

                    <li>
                        <a href="#">
                            <svg style="color: blue;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg> <span style="color: blue;">Dashboard</span>

                        </a>

                    </li>

                    <li>
                        <a href="leads" id="leads">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg> <span>Leads</span>

                        </a>

                    </li>

                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg></i> <span>Enquiries</span>

                        </a>

                    </li>




                    <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Masters</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> -->
                    <!-- <ul class="treeview-menu">
            <li><a href="https://stage.inkcasa.com/admin/designcategories"><i class="fa fa-circle-o"></i> Design Categories</a></li>
            <li><a href="https://stage.inkcasa.com/admin/pallettes"><i class="fa fa-circle-o"></i> Palette List</a></li>
            <li><a href="https://stage.inkcasa.com/admin/themes"><i class="fa fa-circle-o"></i> Theme Types</a></li>
            <li><a href="https://stage.inkcasa.com/admin/shapes"><i class="fa fa-circle-o"></i> Shape Master</a></li>
            <li><a href="https://stage.inkcasa.com/admin/finishes"><i class="fa fa-circle-o"></i> Finishes Master</a></li>
            <li><a href="https://stage.inkcasa.com/admin/brands"><i class="fa fa-circle-o"></i> Brand Master</a></li>
            <li><a href="https://stage.inkcasa.com/admin/category"><i class="fa fa-circle-o"></i> Category Master</a></li>
            <li><a href="https://stage.inkcasa.com/admin/products"><i class="fa fa-circle-o"></i> Product Master</a></li>
            <li><a href="https://stage.inkcasa.com/admin/quotationtemplates"><i class="fa fa-circle-o"></i> Quotations Templates</a></li>
            <li><a href="https://stage.inkcasa.com/admin/uoms"><i class="fa fa-circle-o"></i> Uom Master</a></li>
          </ul>
        </li> -->



                </ul>
            </section>

            <!-- /.sidebar -->
        </aside>
        <section class="content" style="padding-left: 15%">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List Of Themes</h3>


                            <a href="https://stage.inkcasa.com/admin/newthemes" class="btn btn-default btn-primary pull-right active"><i class="fa fa-plus"></i> Add New</a>

                            <!--<div class="box-tools">

                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">

                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>-->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Site</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Shubhangi 4BHK Matunga</td>
                                        <td></td>
                                        <td></td>

                                        <td></td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/49">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>25353000000049005</td>
                                        <td>Dr Kakoli Saha</td>
                                        <td>heartclinic999@gmail.com</td>
                                        <td>+917208025922</td>

                                        <td>Roma C 1203, Lodha Fiorenza, Goregaon (E), Mumbai</td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/48">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>25353000000057027</td>
                                        <td>Manish Yadav</td>
                                        <td></td>
                                        <td></td>

                                        <td></td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/47">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>25353000000060005</td>
                                        <td>Deepak C</td>
                                        <td>dpkchauhan@gmail.com</td>
                                        <td>9867744998</td>

                                        <td></td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/46">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>25353000000077005</td>
                                        <td>Leora Sanker</td>
                                        <td>leorasanker@yahoo.com</td>
                                        <td>+919769147307</td>

                                        <td>Kanjurmarg</td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/45">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>25353000000095005</td>
                                        <td>Gurvinder Dhillon Rimpy</td>
                                        <td>nitinpillais@gmail.com</td>
                                        <td>9819163673</td>

                                        <td>201, Menaka, Chembur</td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/44">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>70084000003117037</td>
                                        <td>Pallavi Aggarwal</td>
                                        <td>pallavi.taneja14@gmail.com</td>
                                        <td>9158099922</td>

                                        <td>Ajmera, Wadala</td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/43">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>70084000003377033</td>
                                        <td>Sambit Roy</td>
                                        <td>sambit.sr@gmail.com</td>
                                        <td>9820899819</td>

                                        <td>Mulund</td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/42">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>70084000003406027</td>
                                        <td>Yigael Samuel</td>
                                        <td></td>
                                        <td></td>

                                        <td></td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/41">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>70084000003406061</td>
                                        <td>Nikash Shubham</td>
                                        <td></td>
                                        <td></td>

                                        <td></td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/40">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>70084000003406095</td>
                                        <td>Indu Thakare</td>
                                        <td></td>
                                        <td></td>

                                        <td></td>
                                        <td><a href="https://stage.inkcasa.com/admin/vieworder/39">View</a></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>

</body>

