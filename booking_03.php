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
								<a href="PrintReciept.php"><i class="fa fa-fw fa-print"></i> พิมพ์ใบแจ้งหนี้รายเดือน</a>
							</li>	
							<li>
								<a href="PrintInvoice.php"><i class="fa fa-fw fa-print"></i> พิมพ์ใบเสร็จรายเดือน</a>
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

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
							ระบบจองห้องพัก: <small> สรุปข้อมูลการจอง</small>
                        </h1>
						
						<!-- Menu Tab -->
						<ul class="nav nav-tabs">
							<li><a href="#">1. ค้นหาห้องว่าง</a></li>
							<li><a href="#">2. ค้นหาข้อมูลลูกค้า</a></li>
							<li class="active"><a href="#">3. สรุปข้อมูลการจอง</a></li>
						</ul>
						
						<!--  -->
                        <br></br>
						<!--  -->
						
						<div><h2 align = "center">สรุปการจอง</h2></div>
						<div align = "center">วันที่ทำรายการ: 20 มีนาคม 2558</div>
						
						<br class=transparent>
						<br class=transparent>
												
						<!-- Customer Detail -->
						<div class="panel panel-primary">
							<div class="panel-heading"><h4>ข้อมูลลูกค้า</h4></div>
							<div class="panel-body">
							
								<table width="70%">							
									<tr>
										<td align = "right">
											<label> คำนำหน้า:&nbsp; </label>
										</td>
										<td>นาย<td>
										</td>
										
									</tr>
									
									<tr>
										<td align = "right">
											<label for="name"> ชื่อ: &nbsp;</label>
										</td>
										<td>
											สมเกียรติ
										<td align = "right">
											<label>&nbsp; สกุล: &nbsp;</label>
										</td>
										<td>ทองมี
										</td>
									</tr>
									
									<tr >
										<td align = "right">
											<label>&nbsp; เลขที่บัตร: &nbsp;</label>
										</td>
										<td>
											1234567890123
										</td>
									</tr>
									
									<tr>
										<td align = "right">
											<label for="name"> เลขที่: &nbsp;</label>
										</td>
										<td>
											119
										 <td align = "right">
											<label>&nbsp; หมู่ที่: &nbsp;</label>
										 </td>
										 <td>
											1
										 </td>
									</tr>
									
									<tr>
										<td align = "right">
											<label for="name"> ซอย: &nbsp;</label>
										</td>
										<td>
											อดุลยาราม
										 <td align = "right">
											<label>&nbsp; ถนน: &nbsp;</label>
										 </td>
										 <td>
											อดุลยาราม
										 </td>
									</tr>
									
									<tr>
										<td align = "right">
											
											<label for="name"> ตำบล: &nbsp;</label>
										</td>
										<td>
											ในเมือง
										 <td align = "right">
											<label>&nbsp; อำเภอ: &nbsp;</label>
										 </td>
										 <td>
											เมือง
										 </td>
									</tr>
									
									<tr>
										<td align = "right">
											<label for="name"> จังหวัด: &nbsp;</label>
										</td>
										<td>
											ขอนแก่น
										 <td align = "right">
											<label>รหัสปรษณีย์: &nbsp;</label>
										 </td>
										 <td>
											40000
										 </td>
									</tr>
									
									<tr>
										<td align = "right">
											<label>&nbsp; โทร: &nbsp;</label>
										</td>
										<td>
											0812345678                                        
										</td>
									</tr>
									
								</table>
								<br></br>
								
								<div> <h4>ข้อมูลติดต่อฉุกเฉิน</h4></div>
								
								<table>
									<tr>
										<td align="right"><label for="name"> ชื่อ-สกุล: &nbsp;</label></td>
										<td>นายสมชาย  ทองมี</td>
									</tr>
									<tr>
										<td align="right"><label for="name"> เกี่ยวข้องเป็น: &nbsp;</label></td>
										<td>บิดา</td>
									</tr>
									<tr>
										<td align="right"><label for="name"> โทร: &nbsp;</label></td>
										<td>0925678453</td>
									</tr>
								</table>
							</div>
						</div>
						
						
						<!-- Room Detail -->
						<div class="panel panel-warning">
							<div class="panel-heading"><h4>ข้อมูลห้อง</h4></div>
							<div class="panel-body">
								<table>
									<tr>
										<td align="right"><label>จำนวนห้องพักที่จอง:&nbsp</label></td>
										<td>1</td>
									</tr>
									
									<tr>
										<td align="right"><label>ประเภทห้อง:&nbsp</label></td>
										<td>ห้องแอร์</td>
									</tr>
									
									<tr>
										<td align="right"><label>วันที่เริมเข้าพัก:&nbsp</label></td>
										<td>27/03/2558</td>
									</tr>
									
									<tr>
										<td align="right"><label>วันที่ย้ายออก:&nbsp</label></td>
										<td>-</td>
									</tr>
									
									<tr>
										<td align="right"><label>จ่ายเงินค่ามัดจำแล้วเป็นจำนวน:&nbsp</label></td>
										<td>1,000 บาท</td>
										
									</tr>
									
								</table>
							</div>
						</div>
					

						<!-- Display Table Room Available -->
						<!-- ----------------------------------------------------- -->
						<div class="container-fluid">
							<form class="form-horizontal" role="form">
								<td><a href="booking_02.php" class="btn btn-primary btn-md" role="button">ย้อนกลับ</a></td>
								<button type="button" class="btn btn-primary btn-md pull-right">พิมพ์ใบจอง</button>
								<button type="button" class="btn btn-primary btn-md pull-right">ยืนยันการจอง</button>
								
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
