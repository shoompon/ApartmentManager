<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบจัดการห้องพัก หอพักต้นตระกูลเพลสอพาร์ทเม้นต์</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- START UI MENU use this code in every page -->
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"><strong>หอพักต้นตระกูลเพลสอพาร์ทเม้นต์</strong></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="FindAvailableRoom.php"><i class="fa fa-fw fa-search"></i> ค้นหาห้องว่าง</a>
                    </li>
					
					<li class="active">
                        <a href="booking.php"><i class="fa fa-fw fa-calendar"></i> จองห้องพัก</a>
                    </li>
					
					<li>
                        <a href="checkin.php"><i class="fa fa-fw fa-plus-square"></i> ย้ายเข้า</a>
                    </li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#idCustomerManagement"><i class="fa fa-fw fa-pencil-square"></i> ระบบจัดการลูกค้า <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="idCustomerManagement" class="collapse">
                            <li>
                                <a href="addCustomer.php"><i class="fa fa-fw fa-edit"></i>เพิ่มข้อมูลลูกค้า</a>
                            </li>
                            <li>
                                <a href="FindCustomer.php"><i class="fa fa-fw fa-edit"></i> แก้ไขข้อมูลลูกค้า</a>
                            </li>
                        </ul>
                    </li>
					
					<li>
                        <a href="checkout.php"><i class="fa fa-fw fa-remove"></i> ย้ายออก</a>
                    </li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#idPaymentManagement"><i class="fa fa-fw fa-eur"></i> จัดการการเงิน <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="idPaymentManagement" class="collapse">
                            <li>
								<a href="ReportIncome.php"><i class="fa fa-fw fa-eur"></i> บันทึกรายรับของหอพัก</a>
							</li>
							<li>
								<a href="ReportOwner.php"><i class="fa fa-fw fa-eur"></i> บันทึกรายจ่ายของหอพัก</a>
							</li>
							<li>
								<a href="PrepareBill.php"><i class="fa fa-fw fa-print"></i> เตรียมบิล</a>
							</li>
						</ul>
                    </li>
					                  
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#idPrintSummaryReport"><i class="fa fa-fw fa-table"></i> ออกรายงานสรุป <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="idPrintSummaryReport" class="collapse">
                            <li>
                                <a href="SummaryIncome.php"><i class="fa fa-fw fa-print"></i> รายงานรายรับ</a>
                            </li>
                            <li>
                                <a href="SummaryOwner.php"><i class="fa fa-fw fa-print"></i> รายงานการเข้าพัก</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		<!-- END UI MENU -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12ห">
                        <h1 class="page-header">
							ระบบจองห้องพัก: <small> ค้นหาห้องว่าง</small>
                        </h1>
						
						<!-- Menu Tab -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#">1. ค้นหาห้องว่าง</a></li>
							<li><a href="#">2. ค้นหาข้อมูลลูกค้า</a></li>
							<li><a href="#">3. สรุปข้อมูลการจอง</a></li>
							<!-- <li><a href="#">ขั้นตอนที่ 4</a></li> -->
						</ul>
						
						<!--  -->
                        <br></br>
                        <div>
							<table>
								<tr>
									<td><label>วันที่เข้า: &nbsp;</label></td>
									<td><input type="date" class="form-control" id="DateCheckIn" placeholder="DD/MM/YYYY"></td>
								</tr>
								<tr>
									<td><label>วันที่ออก: &nbsp;</label></td>
									<td><input type="date" class="form-control" id="DateCheckIn" placeholder="DD/MM/YYYY"></td>
								</tr>
								<tr>
									<!-- <td align = "right"> -->
									<td>
										<label for="BookingCodeInput">ประเภทห้อง: &nbsp;</label>
									</td>
									<td>
										<div class="dropdown">
											<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" 
												data-toggle="dropdown" aria-expanded="true">เลือกประเภทห้อง
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
												<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ห้องแอร์</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ห้องพัดลม</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td><label>จำนวนห้องที่ต้องการ: &nbsp;</label></td>
									<td><input type=text class=form-control></td>
								</tr>
                            </table>
                        </div>
						
						<!-- Display Table Room Available -->
						<!-- ----------------------------------------------------- -->
						<div class="container">
							<h2>รายละเอียดห้องว่าง</h2>
								<table class="table table-hover">
									<thead>
										<tr>
											<th class="text-center">เลือก</th>
											<th class="text-center">ลำดับที่</th>
											<th>หมายเลขห้อง</th>
										</tr>
									</thead>
								<tbody>
									<tr>
										<td class="col-md-1 text-center" > <input type="checkbox" name="multiplecheckboxesinline-0" id="multiplecheckboxesinline-0-0" value="1"></td>
										<td class="col-md-1 text-center">1</td>
										<td>411</td>
									</tr>
									<tr>
										<td class="col-md-1 text-center" > <input type="checkbox" name="multiplecheckboxesinline-0" id="multiplecheckboxesinline-0-0" value="1"></td>
										<td class="col-md-1 text-center" >2</td>
										<td>412</td>
									</tr>
									<tr>
										<td class="col-md-1 text-center" > <input type="checkbox" name="multiplecheckboxesinline-0" id="multiplecheckboxesinline-0-0" value="1"></td>
										<td class="col-md-1 text-center">3</td>
										<td>413</td>
									</tr>
								</tbody>
							</table>
						</div>
						
						

						<!-- Display Table Room Available -->
						<!-- ----------------------------------------------------- -->
						<div class="container-fluid">
							<form class="form-horizontal" role="form">
								<td><a href="booking_02.php" class="btn btn-primary btn-md pull-right" role="button">ถัดไป</a></td>
							</form>
						</div>
						
                    </div>
                

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
