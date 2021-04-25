<? ob_start();?>
<?php
session_start();
/* Load factory class */
require_once("config.php");
$main = new WConfig();
include 'condb.php';
?>

<html>

<meta charset="utf-8"> 
 <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" >

<head>
<?php include 'head_admin.php'?>
</head>

<body>


<h4 align="center" class="text-muted">แจ้งความประสงค์</h4>
<ul class="nav nav-pills">

	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	  <br><br>
	<li class=""><a href="admin.php" class="btn btn-outline-primary active" >หอ 1-2</a></li>
	<li ><a>&nbsp;</a></li>
	<li class=""><a href="admintb2.php" class="btn btn-outline-primary">หอ 3</a></li>
	<li ><a>&nbsp;</a></li>
	<li class=""><a href="admintb3.php" class="btn btn-outline-primary">หอชาย</a></li>
	<li ><a>&nbsp;</a></li>
	<li class=""><a href="admintb4.php" class="btn btn-outline-primary">รวม</a></li>
	<li ><a>&nbsp;</a></li>
	<li class=""><a href="addadmin.php" class="btn btn-outline-primary">Add Admin</a></li>
    </ul>
<?php
$sql_staff = 'select * from dor12'
;
$result = mysqli_query($mysqli, $sql_staff);
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-striped table-hover table-bordered" width="100%">
		<tr>
			<th width="2%">No</th>
			<th width="7%">คำนำหน้า</th>
			<th width="8%">ชื่อ</th>
			<th width="8%">สกุล</th>
			<th width="5%">รหัส</th>
			<th width="3%">ชั้น</th>
			<th width="3%">ห้อง</th>
			<th width="8%">สิ่งของ</th>
			<th width="20%">รายละเอียด</th>
			<th width="8%">สถาณะ</th>

		</tr>
		<?php  while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC )){?>
		<tr>
			<td><?php echo $row["No"]?></td>
			<td><?php echo $row["title"]?></td>
			<td><?=$row["name"]?></td>
			<td><?=$row["lastname"]?></td>
			<td><?=$row["studentid"]?></td>
			<td><?=$row["class"]?></td>
			<td><?=$row["room"]?></td>
			<td><?=$row["object"]?></td>
			<td><?=$row["detail"]?></td>
			<td><?=$row["status"]?></td>
		</tr>
		<?php } ?>
	  </table>
    </div>
  </div>
	
	
	
</div>
<br><br>
<h4 align="center" class="text-muted">อัพเดทข้อมูล</h4>
	<p class="my-5"></p>  
    
<div class="container bg-light p-3">
<form action="sql_update.php" method="post">	
	
    <div class="row p-3">

	<div class="col-lg-3">
        <label class="form-label">&nbsp;</label>
      </div>

      <div class="col-lg-3">
        <label class="form-label">No</label>
        <input type="text" name="no" class="form-control" required>
      </div>

	<div class="col-lg-3">
	    <label class="form-label">อัพเดทสถาณะ</label>
        <select name="status" class="form-select" required>
          <option value="" disabled="" selected="">โปรดเลือก</option>
          <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
          <option value="ช่างกำลังทำงาน">ช่างกำลังทำงาน</option>
          <option value="เสร็จสิ้น">เสร็จสิ้น</option>
        </select>
      </div>

<div class="row p-3">

	<div class="col-lg-3">
        <label class="form-label">&nbsp;</label>
      </div>

	  <div class="col-lg-3">
        <label class="form-label">&nbsp;</label>
      </div>

	<div class="col-lg-2">
        <input type="submit" class="btn btn-success" value="บันทึก">
      </div>


</div>

	 </div>
</form>
	

</div>
</body>


</html>