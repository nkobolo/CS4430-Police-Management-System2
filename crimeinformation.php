



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crime Reporting System </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">LMPS PIMS</a>
                <a class="navbar-brand hidden" href="./">F</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Home</a>
                    </li>
                    <h3 class="menu-title">Form Management</h3><!-- /.menu-title -->
                    <li>
                        <a href="crimeinformation.php"> <i class="menu-icon fa fa-folder"></i>Report Crime</a>
                    </li>
                    <li>
                        <a href="policeoffinformation.php"> <i class="menu-icon fa fa-file"></i>Add Police</a>
                    </li>
                    <li >
                        <a href="responseinformation.php"> <i class="menu-icon fa fa-file"></i>Crimes Attended</a>
                    </li>
                    <li >
                        <a href="residentinformation.php"> <i class="menu-icon fa fa-file"></i>Criminal Records</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->


    <div id="right-panel" class="right-panel" style="background-image: url('images/224.jpeg'); height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="index.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Crime Information</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>&nbsp; Add</button>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background-color: #a5a5a5;">
                                            <th>#</th>
                                            <th>Date Reported</th>
                                            <th>Time Reported</th>
                                            <th>Location</th>
                                            <th>Reporter Name</th>
                                            <th>Crime Description</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="user-avatar rounded-square" src="images/admin.jpg" alt="User Avatar"></td>
                                            
                                            <td>January 12, 2022</td>
                                            <td>10:30pm</td>
                                            <td>Data</td>
                                            <td>Lieketseng Tshebe</td>
                                            <td>Bosholu ba liphoofolo Ha Rifi, mosali o tshoaroa ka bosholu ba liphoofolo motseng oa ha rifi Leribe</td>
                                            <td><span class="badge badge-primary">Theft</span></td>
                                            <td><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button><button type="button" class="btn btn-sm btn-danger"   ><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="user-avatar rounded-square" src="images/admin.jpg" alt="User Avatar"></td>
                                            
                                            <td>September 12, 2021</td>
                                            <td>10:30pm</td>
                                            <td>Data</td>
                                            <td>Keneuoe Lesiba</td>
                                            <td>Ngoanana o tshoaroa ka boqhekanyetsi Motseng oa Ha Ponto Lithabaneng Qacha</td>
                                            <td><span class="badge badge-danger">Extortion</span></td>
                                            <td><<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i></button></td>
                                    </tbody>
                                        </tr>
                                            <tr style="background-color: #a5a5a5;">
                                            <th>#</th>
                                            <th>Date Reported</th>
                                            <th>Time Reported</th>
                                            <th>Location</th>
                                            <th>Reporter Name</th>
                                            <th>Crime Description</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
                    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="meduimmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <form method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Add Crime Information : </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                          </div>
                      <div class="modal-body">
                     <div class="card-body card-block">
                          <div class="form-group">
                             <select name="select" id="select" class="form-control">
                               <option value="0">Select Category Description</option>
                                 <option value="1">Data</option>
                            </select>
                        </div>
                          <div class="form-group">
                             <select name="select" id="select" class="form-control">
                               <option value="0">Select Resident</option>
                                 <option value="1">Data</option>
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Crime Description :</label>
                   <textarea name="description" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">Location : </label>
                    <input type="text" name="location" id="company" placeholder="Enter Location Here" class="form-control">
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">Status : </label>
                    <input type="text" name="status" id="company" placeholder="Enter Status" class="form-control">
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">Date Reported : </label>
                    <input type="text" name="dateReported" id="company" placeholder="MM  /  DD /  YY" class="form-control">
                </div>
            </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 66%">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
            </div>
            </div>
                </div>
                <!-- MODAL END -->
            
            
            
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="meduimmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                <form method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">Update Crime Information : </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                <div class="card-body card-block">
                    <div class="form-group">
                        <select name="categoryDescription" id="select" class="form-control">
                        <option value="0">Select Category Description</option>
                            <option value="1">Data</option>
                            
                    </select>
                </div>
                    <div class="form-group">
                        <select name="selectResident" id="select" class="form-control">
                        <option value="0">Select Resident</option>
                            <option value="1">Data</option>
                    </select>
                </div>
            <div class="form-group">
                <label for="company" class=" form-control-label">Crime Description :</label>
            <textarea name="crimeDescription" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
        </div>
        <div class="form-group">
                <label for="company" class=" form-control-label">Location : </label>
            <input type="text" name="location" id="company" placeholder="Enter Location Here" class="form-control">
        </div>
        <div class="form-group">
                <label for="company" class=" form-control-label">Status : </label>
            <input type="text" name="status" id="company" placeholder="Enter Status" class="form-control">
        </div>
        <div class="form-group">
                <label for="company" class=" form-control-label">Date Reported : </label>
            <input type="text" name="dateReported" id="company" placeholder="MM  /  DD /  YY" class="form-control">
        </div>
    </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 66%">Cancel</button>
            <button type="submit" class="btn btn-primary">Confirm</button>
    </div>
        </form>
            </div>
            </div>
                </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
