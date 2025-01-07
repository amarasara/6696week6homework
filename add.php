<!DOCTYPE html>
<html lang="en">

    <?php
    include("conn.php");
    ?>

<head>
    <!-- เพิ่ม boostost --
    <! Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Sriracha&display=swap" rel="stylesheet">

<style>
    body {
  font-family: "IBM Plex Sans Thai", serif;
  font-weight: 500;
  font-style: normal;
  margin-left: 700px;
  margin-right: 100px;
  margin-top: 100px;
  margin-bottom: 200px;
  color:#8B3A3A;
    }

</style>
<!-- สิ้นสุดเพิ่ม font -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>เก็บข้อมูลอาการป่วยของสัตว์เลี้ยง</h1>
<br>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อเจ้าของ</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputEmail3"name="yourname">
    </div>
  </div>

  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="email">
     </div>
    </div>

    <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">เบอร์โทร</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="phone">
    </div>
  </div>
 
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อสัตว์เลี้ยง</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="namepet">
    </div>
  </div>
  
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">ชนิด</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="species">
    </div>
  </div>

  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">สายพันธ์</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="breed">
    </div>
  </div>

  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">อายุ</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="age">
    </div>
  </div>

  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">U/D</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="UD">
    </div>
  </div>

  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">อาการป่วย</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="condition">
    </div>
  </div>

  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">เพิ่มเติม</label>
    <div class="col-sm-3">
      <input type="taxt" class="form-control" id="inputPassword3"name="addd">
    </div>
  </div>

  </div>
  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button> 
  <button type="reset" class="btn btn-danger">ยกเลิกคำสั่ง</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yourname=$_POST["yourname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $namepet=$_POST["namepet"];
    $species=$_POST["species"];
    $breed=$_POST["breed"];
    $age=$_POST["age"];
    $UD=$_POST["UD"];
    $condition=$_POST["condition"];
    $addd=$_POST["addd"];


try {
 
    $sql = "INSERT INTO animal (yourname , email ,phone , namepet , species , breed , age ,UD , condition ,addd)
    VALUES ('$yourname','$email','$phone','$namepet','$species','$breed','$age','$UD','$condition','$addd')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo  "<div class='alert alert-success'>
    <strong> บันทึกสำเร็จ! </strong> ยินดีด้วย คุณได้บันทึกข้อมูลเข้าไปใหม่ 1 รายการ </div>";
  } catch(PDOException $e) {
    echo $sql . "บันทึกข้อมูลผิดพลาด <br>" . $e->getMessage();
  }
  
  $conn = null;


}
?>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>