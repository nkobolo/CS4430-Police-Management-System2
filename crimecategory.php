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
                        <h1>Crime Category Encoding </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">file:///home/codelord/Videos/police1
                        
                            <div class="card-header">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>&nbsp; Add</button>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background-color: #a5a5a5;">
                                            <th style="width: 90%">Category Description</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Forcible rape, aggravated assault, and robbery</td>
                                            <td><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button><button type="button" class="btn btn-sm btn-danger"   ><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td> Forcible rape, aggravated assault, and robbery</td>
                                            <td><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button><button type="button" class="btn btn-sm btn-danger"   ><i class="fa fa-trash"></i></button></td>
                                    </tbody>
                                        </tr>
                                            <tr style="background-color: #a5a5a5;">
                                            <th>Category Description</th>
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




                <!-- <form action="registration.php" method="post">
		 		<fieldset id="names">
				<div class="form-header" style="background-color: dodgerblue"><legend>Registration Form</legend></div>
                <hr>
                <label>First Name</label>
                <input type="text" name="firstName" placeholder="First Name" required/>
                <label>Last Name</label>
                <input type="text" name="lastName" placeholder="Surname" required/>
				<div>
					<label for="gender">Gender</label>
					<div>
						<input type="radio" required name="gender" id="male" value="m">
						<label for="male">Male</label>
						<input type="radio" required name="gender" id="female" value="f">
						<label for="female">Female</label>
						<input type="radio" required name="gender" id="other" value="o">
						<label for="others">Other</label>
					</div>
				</div><hr>
				<label >Grade</label>
                <select name="grade" id="grade" required>
                        <option value="">None</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
				</select><hr>
				<div>
					<label>School Name</label>
					<input type="text" name="school" placeholder="School Name" required/>
	                <label>Password</label>
	                <input type="password" name="password" required minlength="5" required maxlength="15" placeholder="Password" required/> <h4>Please use M-pesa registered number you will use to pay for registration!</h4>                     
	                <label>Phone Number</label>
                     <input type="tel" name="phone" required minlength="8" required maxlength="13" placeholder="Phone Number" required/>

                     <fieldset id="pay">
                        <h3>In order to register with Lesotho Online Library, you must pay M100 in our M-pesa Number +26657117662 and enter the Transaction ID below to confirm.</h3>
                        <h3>After this payment you will be able to access the library for the whole year!</h3>
                        <h3>To complete your proof of payment, please enter the Transaction ID from the sms that you received below.</h3> 
                        <input type="text" name="transactID" style="background-color: #D3F4FF" required maxlength="10" required minlength="10" placeholder="Enter ID" id="transactID" required/>
                    </fieldset>
	                <input type="submit">
                </div>
             	</fieldset>
              </form> -->








        <form method="post">
        <div class="modal-header">
            <h5 class="modal-title" id="smallmodalLabel">Add Crime Category Description: </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
                      <div class="modal-body">
                     <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Category Description :</label>
                   <textarea name="category" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
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
                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="meduimmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <form>
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Update Crime Category Description: </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                          </div>
                      <div class="modal-body">
                     <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Category Description :</label>
                   <textarea name="textarea-input" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
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
                        </div>    </div><!-- /#right-panel -->

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
