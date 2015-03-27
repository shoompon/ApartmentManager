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
                            <li class="active">
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
								<a href="PrintInvoice.php"><i class="fa fa-fw fa-print"></i> พิมพ์ใบแจ้งหนี้รายเดือน</a>
							</li>	
							<li>
								<a href="PrintReciept.php"><i class="fa fa-fw fa-print"></i> พิมพ์ใบเสร็จรายเดือน</a>
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
                    <h1 class="page-header"> ระบบจัดการลูกค้า: <small>แก้ไขข้อมูลลูกค้า </small></h1>
                    <h3> &nbsp; ข้อมูลลูกค้า </h3>
                    <table width="70%" >
                       <tr>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td><label for="exampleInputFile">เพิ่มภาพถ่าย</label>
                             <br><img src="file:///C|/Users/Admin/Desktop/SAD_20150320/oscar-wilde-portrait.png" width="150" height="200" alt=""/>
                         <input id="exampleInputFile" type="file" name="เพิ่มภาพถ่าย"></td>
                       </tr>
                       <tr>
                         <td align = "right"><label> คำนำหน้า:&nbsp; </label></td>
                         <td><select name="คำนำหน้า" [multiple]>
                           <option value="นาย" [selected]> นาย </option>
                           <option value="นาง" > นาง </option>
                           <option value="นางสาว" > นางสาว </option>
                           <option value="อื่นๆ" > อื่นๆ </option>
                         </select>
                         <td></td>
                       </tr>
                       <tr>
                         <td align = "right"><label for="name"> ชื่อ &nbsp;</label></td>
                         <td><input type="text" name="name" value="สมเกียรติ">
                         <td align = "right"><label>&nbsp; สกุล &nbsp;</label></td>
                         <td><input type="text" name="surname" value="ทองมี"></td>
                       </tr>
                       <tr >
                         <td align = "right"><label>&nbsp; เลขที่บัตร &nbsp;</label></td>
                         <td><input type="text" name="id" value="1234567890123"></td>
                       </tr>
                       <tr>
                         <td align = "right"><label for="name"> เลขที่ &nbsp;</label></td>
                         <td><input type="text" name="" value="119">
                         <td align = "right"><label>&nbsp; หมู่ที่ &nbsp;</label></td>
                         <td><input type="text" name="" value="1" ></td>
                       </tr>
                       <tr>
                         <td align = "right"><label for="name"> ซอย &nbsp;</label></td>
                         <td><input type="text" name="" value="อดุลยาราม">
                         <td align = "right"><label>&nbsp; ถนน &nbsp;</label></td>
                         <td><input type="text" name="" value="อดุลยาราม"></td>
                       </tr>
                       <tr>
                         <td align = "right"><label for="name"> ตำบล &nbsp;</label></td>
                         <td><input type="text" name="" value="ในเมือง">
                         <td align = "right"><label>&nbsp; อำเภอ &nbsp;</label></td>
                         <td><input type="text" name="" value="เมือง" ></td>
                       </tr>
                       <tr>
                         <td align = "right"><label for="name"> จังหวัด &nbsp;</label></td>
                         <td><input type="text" name="" value="ขอนแก่น">
                         <td align = "right"><label>&nbsp; รหัสปรษณีย์ &nbsp;</label></td>
                         <td><input type="text" name="" value="40000"></td>
                       </tr>
                       <tr>
                         <td align = "right"><label>&nbsp; โทร &nbsp;</label></td>
                         <td><input type="text" name="id" value="0812345678" ></td>
                       </tr>
    </td>
  
    </tr>
  
  <!-- End of Customer Information -->
  <tr>
    <td><h3> &nbsp; ข้อมูลติดต่อกรณีฉุกเฉิน</h3></td>
  </tr>
  <tr>
    <td align = "right"><label for="name"> ชื่อ-สกุล &nbsp;</label></td>
    <td><input type="text" name="" value="นายสมชาย ทองมี">
    <td align = "right"><label>&nbsp; เกี่ยวข้องเป็น &nbsp;</label></td>
    <td><input type="text" name="" value="บิดา"></td>
  </tr>
  <tr>
    <td align = "right"><label>&nbsp; โทร &nbsp;</label></td>
    <td><input type="text" name="id" value="0887654321"></td>
  </tr>
  <tr> &nbsp; </tr>
                     </table>
<div> <!-- Display Table Room Available -->
			 <!-- ----------------------------------------------------- -->
			 <div class="container-fluid">
							<form class="form-horizontal" role="form">
								<td><a href="FindCustomer.php" class="btn btn-primary btn" role="button">ย้อนกลับ</a></td>
                                <button type="button" class="btn btn-primary btn-md pull-right">บันทึก</button> 
								<button type="button" class="btn btn-primary  btn-md pull-right">ลบ</button>
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
