      
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
<?php include 'head_add.php'?>
</head>

<body>

	  <p class="my-5"></p>  
    
<div class="container bg-light p-3">
<form action="sql_insert.php" method="post">	
	
    <div class="row p-3">
      <div class="col-lg-3">
        <label class="form-label">คำนำหน้าชื่อ</label>
        <select name="stitle" class="form-select" required>
          <option value="" disabled="" selected="">คำนำหน้าชื่อ</option>
          <option value="นาย">นาย</option>
          <option value="นาง">นาง</option>
          <option value="นางสาว">นางสาว</option>
        </select>
      </div>
      <div class="col-lg-3">
        <label class="form-label">ชื่อ</label>
        <input type="text" name="sname" class="form-control" required>
      </div>
      <div class="col-lg-3">
        <label class="form-label">นามสกุล</label>
        <input type="text" name="slastname" class="form-control" required>
      </div>
	  <div class="col-lg-3">
        <label class="form-label">รหัสนักศึกษา</label>
        <input type="text" name="sid" class="form-control" required>
      </div>

    </div>


    <div class="row p-3">
      <div class="col-lg-3">
        <label class="form-label">หอพัก</label>
        <select name="dor" class="form-select" required>
		  <option value="" disabled="" selected="">โปรดระบุ</option>
          <option value="dor12">หอ 1-2</option>
		  <option value="dor3">หอ 3</option>
			<option value="dor">หอชาย</option>
  
        </select>
      </div>
      
      
      <div class="col-lg-3">
        <label class="form-label">ชั้น</label>
        <select name="class" class="form-select" required>
		<option value="" disabled="" selected="">โปรดระบุ</option>
		<option value = "A">A</option>
		<option value = "B">B</option>
		<option value = "C">C</option>
		<option value = "D">D</option>
		<option value = "E">E</option>
		<option value = "F">F</option>
		<option value = "G">G</option>
		<option value = "H">H</option>
        </select>
      </div>

	  <div class="col-lg-3">
        <label class="form-label">ห้อง</label>
        <select name="room" class="form-select" required>
		<option value="" disabled="" selected="">โปรดระบุ</option>
		<option value = "1">1</option>
		<option value = "2">2</option>
		<option value = "3">3</option>
		<option value = "4">4</option>
		<option value = "5">5</option>
		<option value = "6">6</option>
		<option value = "7">7</option>
		<option value = "8">8</option>
		<option value = "9">9</option>
		<option value = "10">10</option>
		<option value = "11">11</option>
		<option value = "12">12</option>
		<option value = "13">13</option>
		<option value = "14">14</option>
		<option value = "15">15</option>
		<option value = "16">16</option>
		<option value = "17">17</option>
		<option value = "18">18</option>
		<option value = "19">19</option>
		<option value = "20">20</option>
		<option value = "21">21</option>
		<option value = "22">22</option>
		<option value = "23">23</option>
		<option value = "24">24</option>
		<option value = "25">25</option>
        </select>
      </div>

	    <div class="col-lg-3">
        <label class="form-label">สิ่งของ</label>
        <select name="object" class="form-select" required>
		<option value="" disabled="" selected="">โปรดระบุ</option>
		<option value = "โต๊ะ">โต๊ะ</option>
		<option value = "เก้าอี้">เก้าอี้</option>
		<option value = "เตียง">เตียง</option>
		<option value = "ตู้เสื้อผ้า">ตู้เสื้อผ้า</option>
		<option value = "หลอดไฟ">หลอดไฟ</option>
		<option value = "หลอดไฟ">หลอดไฟ(ระเบียง)</option>
		<option value = "ก๊อกน้ำ">ก๊อกน้ำ</option>
		<option value = "อ่างล้างหน้า">อ่างล้างหน้า</option>
        </select>
      </div>
		
    </div>

	
	<div class="row p-3">

	<div class="col-lg-12">
    <label class="form-label">รายละเอียด</label>
    <input type="text" name="detail" class="form-control" required>
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