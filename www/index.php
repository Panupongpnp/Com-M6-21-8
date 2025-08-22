<?php
include("connect.php");

$sql ="SELECT em.employeeNumber as emp_id, em.firstName as emp_fname, em.lastName as emp_lname, off.city as office_city, off.country as office_country
FROM employees em
LEFT OUTER JOIN offices off ON em.officeCode = off.officeCode";

$result = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">ข้อมูลพนักงาน</h1>
        <div class="การปรับเเต่งปุ่ม">
            <button onclick="window.location.href='2.php'" class="but">ไปหน้า 2</button>
            <button onclick="window.location.href='3.php'" class="but">ไปหน้า 3</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>รหัสพนักงาน</td>
                    <td >ชื่อพนักงาน</td>
                    <td >นามสกุลพนักงาน</td>
                    <td >เมืองที่ตั้งของสำนักงานที่ทำงาน</td>
                    <td >ประเทศที่ตั้งของสำนักงานที่ทำงาน</td>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['emp_id'];?></td>
                        <td ><?php echo $row['emp_fname'];?></td>
                        <td><?php echo $row['emp_lname'];?></td>
                        <td><?php echo $row['office_city'];?></td>
                        <td><?php echo $row['office_country'];?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>

    </div>
</body>

</html>
