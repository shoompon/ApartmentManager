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
                <a class="navbar-brand" href="index.html">หอพักต้นตระกูลเพลสอพาร์ทเม้นต์</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <!-- <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> จองห้องพัก</a>
                    </li> -->
					<li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-search"></i> ค้นหาห้องว่าง</a>
                    </li>
					
					<li>
                        <a href="tables.html"><i class="fa fa-fw fa-calendar"></i> จองห้องพัก</a>
                    </li>
					
					<li>
                        <a href="tables.html"><i class="fa fa-fw fa-plus-square"></i> ย้ายเข้า</a>
                    </li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#idCustomerManagement"><i class="fa fa-fw fa-pencil-square"></i> ระบบจัดการลูกค้า <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="idCustomerManagement" class="collapse">
                            <li>
                                <a href="#">เพิ่มข้อมูลลูกค้า</a>
                            </li>
                            <li> <a href="#">แก้ไข/ลบข้อมูลลูกค้า</a> </li>
                         </ul>
                    </li>
					
					<li>
                        <a href="tables.html"><i class="fa fa-fw fa-remove"></i> ย้ายออก</a>
                    </li>
					
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-eur"></i> บันทึกรายรับของหอพัก</a>
                    </li>
					<li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-eur"></i> บันทึกรายจ่ายของหอพัก</a>
                    </li>
					<li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-print"></i> พิมพ์ใบแจ้งหนี้รายเดือน</a>
                    </li>
					<li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-print"></i> พิมพ์ใบเสร็จรายเดือน</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#idPrintSummaryReport"><i class="fa fa-fw fa-print"></i> ออกรายงานสรุป <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="idPrintSummaryReport" class="collapse">
                            <li>
                                <a href="#">รายงานรายรับ</a>
                            </li>
                            <li>
                                <a href="#">รายงานการเข้าพักและการจอง</a>
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
                      <h1 class="page-header">บันทึกรายจ่ายของหอพัก: <small><font color="#777777">บันทึกค่าใช้จ่าย ห้อง 414</font></small></h1>
						
						<!-- Menu Tab -->
						<ul class="nav nav-tabs">
							<li><a href="#">1.ค้นหาการเข้าพัก</a></li>
							<li class="active"><a href="#" >2.บันทึกค่าใช้จ่าย</a></li>
						</ul>
						
						<div class="container">
							<h2>ค่าน้ำ-ค่าไฟ</h2>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="label" class="col-sm-1 control-label">ค่าน้ำ</label>
									<label for="label" class="col-sm-2 control-label"></label>									
									<label for="label" class="col-sm-1 control-label">ค่าไฟ</label>
									
								</div>
								<div class="form-group">
									<label for="ElecMeterOld" class="col-sm-2 control-label">เลขมิเตอร์ก่อนหน้า   : </label>
										<div class="col-sm-1">
											<input type="text" class="form-control" id="ElecMeterOld" placeholder="หน่วย">
										</div>
									<label for="ElecMeterOld" class="col-sm-2 control-label">เลขมิเตอร์ก่อนหน้า   : </label>
										<div class="col-sm-1">
											<input type="text" class="form-control" id="ElecMeterOld" placeholder="หน่วย">
										</div>
								</div>
								<div class="form-group">
									<label for="ElecMeterNew" class="col-sm-2 control-label">เลขมิเตอร์ปัจจุบัน   : </label>
										<div class="col-sm-1">
											<input type="text" class="form-control" id="ElecMeterNew" placeholder="หน่วย">
										</div>
									<label for="ElecMeterNew" class="col-sm-2 control-label">เลขมิเตอร์ปัจจุบัน   : </label>
										<div class="col-sm-1">
											<input type="text" class="form-control" id="ElecMeterNew" placeholder="หน่วย">
										</div>	
								</div>
								
								<div class="form-group">
									<label for="RoomNum" class="col-sm-2 control-label">คิดเป็น(หน่วย) : </label>
										<div class="col-sm-1">
											<input type="text" class="form-control" id="RoomNum" placeholder="บาท" readonly>
										</div>
									<label for="RoomNum" class="col-sm-2 control-label">คิดเป็น(หน่วย) : </label>
										<div class="col-sm-1">
											<input type="text" class="form-control" id="RoomNum" placeholder="บาท" readonly>
										</div>	
								</div>								
                            </form>
                        </div>
                      
                       
						
						<!-- Display Table Room Available -->
						<!-- ----------------------------------------------------- -->
						<div class="container">
						<div class="col-lg-8">
						  <h2>ค่าบริการอื่นๆ</h2>
						  <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><label for="RoomNum" class="col-sm-2 control-label">ลำดับ</label></th>
                                        <th><label for="RoomNum" class="col-sm-2 control-label">รายการ</label></th>
                                        <th><label for="RoomNum" class="col-sm-2 control-label">หน่วย</label></th>
                                        <th><label for="RoomNum" class="col-sm-2 control-label">ราคา</label></th>
                                    </tr>
                                </thead>
                                <tbody>
									<tr [checked]>
										<td class="text-center">1</td>
										<td><div class="col-sm-15"><input type="text" class="form-control" name=""></div></td>
										<td><div class="col-sm-7"><input type="text" class="form-control" name=""></div></td>
										<td><div class="col-sm-7"><input type="text" class="form-control" name=""></div></td>
										
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td><div class="col-sm-15"><input type="text" class="form-control" name=""></div></td>
										<td><div class="col-sm-7"><input type="text" class="form-control" name=""></div></td>
										<td><div class="col-sm-7"><input type="text" class="form-control" name=""></div></td>
										
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td><div class="col-sm-15"><input type="text" class="form-control" name=""></div></td>
										<td><div class="col-sm-7"><input type="text" class="form-control" name=""></div></td>
										<td><div class="col-sm-7"><input type="text" class="form-control" name=""></div></td>
										
									</tr>
                                   
									
								</tbody>
								
                            </table>
							<div class="form-group">
									<button type="button" class="btn btn-primary btn-md pull-right">เพิ่มรายการ</button>	
							</div>
							</div>
                        </div>
						</div>
		
						<!-- Display Table Room Available -->
						<!-- ----------------------------------------------------- -->
						<div class="container-fluid">
							<form class="form-horizontal" role="form">
								<div class="col-sm-1">
								<button type="button" class="btn btn-danger btn-md pull-right">ยกเลิก</button>
								</div>
								<div class="col-sm-1">
								<button type="button" class="btn btn-primary btn-md pull-right">บันทึก</button>
								</div>
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
