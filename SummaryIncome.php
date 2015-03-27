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
					
					<li>
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
					                  
					<li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#idPrintSummaryReport"><i class="fa fa-fw fa-table"></i> ออกรายงานสรุป <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="idPrintSummaryReport" class="collapse">
                            <li class="active">
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

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
							<!-- ย้ายออก: <small> ค้นหาการเข้าพัก</small> -->รายงานรายรับ </h1>
						<table>
								<tr>
									<td><label>ต้้งแต่วันที่: &nbsp;</label></td>
									<td><input type="date" class="form-control" id="DateCheckIn" placeholder="DD/MM/YYYY"></td>
								
									<td><label> &nbsp;  &nbsp; ถึงวันที่: &nbsp;</label></td>
									<td><input type="date" class="form-control" id="DateCheckIn" placeholder="DD/MM/YYYY"></td>
									<td>&nbsp;</td>
									<td> <button type="button" class="btn btn-success btn-md pull-right">ค้นหา</button></td>
								</tr>
						</table>
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="col-md-2 text-center">หมายเลขห้อง</th>
									<th class="col-md-2">ค่าห้อง</th>
									<th class="col-md-2">ค่าบริการอื่นๆ</th>
                                    <th class="col-md-2">ค่าน้ำ</th>
                                    <th class="col-md-2">ค่าไฟ</th>
                                    <th class="col-md-2">รวม</th>
									
								</tr>
							</thead>
						<tbody>
							<tr>
								<td class="text-center">411</td>
								<td>3500</td>
								<td>0</td>
								<td>100</td>
                                <td>380</td>
                                <td>3980</td>
							</tr>
							<tr>
								<td class="text-center">412</td>
								<td>3300</td>
								<td>0</td>
								<td>80</td>
                                <td>295</td>
                                <td>3675</td>
							</tr>
							<tr>
								<td class="text-center">413</td>
								<td>3300</td>
								<td>0</td>
								<td>120</td>
                                <td>320</td>
                                <td>3740</td>
							</tr>
							<tr>
								<td class="text-center">414</td>
								<td>3500</td>
								<td>150</td>
								<td>135</td>
                                <td>400</td>
                                <td>4185</td>
							</tr>
							<tr>
								<td class="text-center">415</td>
								<td>3500</td>
								<td>0</td>
								<td>100</td>
                                <td>328</td>
                                <td>3928</td>
							</tr>
							<tr>
								<td class="text-center">416</td>
								<td>400</td>
								<td>0</td>
								<td>0</td>
                                <td>0</td>
                                <td>400</td>
							</tr>
							<tr>
								<td class="text-center">417</td>
								<td>3500</td>
								<td>0</td>
								<td>110</td>
                                <td>390</td>
                                <td>4000</td>
							</tr>
                            <tr>
                            	<td class="text-center">รวม</td>
								<td>21000</td>
								<td>150</td>
								<td>645</td>
                                <td>2113</td>
                                <td>23908</td>
                            
							</tr>
						</table>
						
						<br class="transparent">
						<br class="transparent">
						
						
						
						
					

						<!-- Display Table Room Available -->
						<!-- ----------------------------------------------------- -->
						<div class="container-fluid">
							<form class="form-horizontal" role="form">
								<!-- <button type="button" class="btn btn-primary btn-md">ก่อนหน้า</button> -->
								<button type="button" class="btn btn-primary btn-md pull-right">พิมพ์</button>
							</form>
						</div>
						
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
