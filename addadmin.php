      
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
	
<ul class="nav nav-pills">

	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li ><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	  <br><br>
	<li class=""><a href="admin.php" class="btn btn-outline-primary" >หอ 1-2</a></li>
	<li ><a>&nbsp;</a></li>
	<li class=""><a href="admintb2.php" class="btn btn-outline-primary">หอ 3</a></li>
	<li ><a>&nbsp;</a></li>
	<li class=""><a href="admintb3.php" class="btn btn-outline-primary">หอชาย</a></li>
	<li ><a>&nbsp;</a></li>
	<li class=""><a href="admintb4.php" class="btn btn-outline-primary">รวม</a></li>
	<li ><a>&nbsp;</a></li>
	<li class=""><a href="addadmin.php" class="btn btn-outline-primary active">Add Admin</a></li>
    </ul>

<h4 align="center" class="text-muted">เพิ่มแอดมิน</h4>

	  <p class="my-5"></p>  
    
<div class="container bg-light p-3">
<form action="sql_insertadmin.php" method="post">	
	
    <div class="row p-3">
	  <div class="col-lg-2">
        &nbsp;
      </div>
      <div class="col-lg-2">
        <label class="form-label">คำนำหน้าชื่อ</label>
        <select name="atitle" class="form-select" required>
          <option value="" disabled="" selected="">คำนำหน้าชื่อ</option>
          <option value="นาย">นาย</option>
          <option value="นาง">นาง</option>
          <option value="นางสาว">นางสาว</option>
        </select>
      </div>
      <div class="col-lg-3">
        <label class="form-label">ชื่อ</label>
        <input type="text" name="aname" class="form-control" required>
      </div>
      <div class="col-lg-3">
        <label class="form-label">นามสกุล</label>
        <input type="text" name="alastname" class="form-control" required>
      </div>

    </div>


	<div class="row p-3">
      <div class="col-lg-3">
        &nbsp;
      </div>
      <div class="col-lg-3">
        <label class="form-label">Username</label>
        <input type="text" name="user" class="form-control" required>
      </div>
      <div class="col-lg-3">
        <label class="form-label">Password</label>
        <input type="password" name="pass" class="form-control" required>
      </div>


    </div>


	
	
	
	<div class="row p-3">
      
    <div class="col-lg-5">

    </div>   
      
      <div class="col-lg-1">
        <input type="submit" class="btn btn-success" value="บันทึก">
      </div>

		
    </div>

</body>


</html>