<?php 
if(isset($_GET['phongDelete'])){
    $department =  $_GET['phongDelete'];
    $sqlCheck = "SELECT * FROM `tbl_user` WHERE `department`='$department'"  ;
    $result = $mysqli->query($sqlCheck);
    if ($result->num_rows > 0) {
        echo '<script>';
        echo 'alert("Phòng có thành viên từ trước, Không xóa !");';
        echo 'window.location.href = "admin.php?job=QLNS&action=department";';
        echo '</script>';

    }
    else{
        $sqlDel = "DELETE FROM `tbl_department` WHERE `name`='$department'"  ;
        mysqli_query($mysqli, $sqlDel);
        echo '<script>';
        echo 'alert("Xóa thành công!");';
        echo 'window.location.href = "admin.php?job=QLNS&action=department";';
        echo '</script>';

    }
}
?>