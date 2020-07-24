
<?php
include_once("../DataProvide_PDO.php");
$result = DataProvider_PDO::ExecuteQuery("SELECT * FROM dienthoai");
echo "<table border='1' style='margin-left:370px;width: 1002px;'>
    <tr>
        <th>Mã điện thoại</th>
        <th>Mã loại</th>
        <th>Tên điện thoại</th>
        <th>Giá bán</th>
        <th>Mô tả</th>
        <th>Hình</th>
    </tr>";
    while($dt=$result->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<th>$dt[MaDT]</th>";
        echo "<th>$dt[MaLoai]</th>";
        echo "<th>$dt[TenDT]</th>";
        echo "<th>$dt[GiaBan]</th>";
        echo "<th>$dt[ThongTin]</th>";
        echo "<th><img src='../dienthoai/{$dt['Hinh']}' style='width:150px; height:200px;'/></th>";
        echo "<th><a href='admin.php?page=themdt'>Thêm</a></th>";
        echo "<th><a href='suadt.php?page=suadt&&id=$dt[MaDT]'>Sữa</a></th>";
        echo "<th><a href='xoadt.php?id=$dt[MaDT]'>Xóa</a></th>";
    echo "</tr>";
    }
  echo "</table>";
   $conn = mysqli_connect("localhost","root","")or die ("connected fail");
    mysqli_select_db($conn,'qldd') or die("cannot select DB");
     $output="";
      if(isset($_post['btnSearch'])){
     $search =$_post['txtSearch'];
     if($search!=""){
         $query = mysqli_query($conn,"select * FROM dienthoai Where TenDT LIKE '%$search%'")or die("could not search!");
         $result =mysqli_num_rows($query);
         if($result == 0){
             $output = "<span>No result with keyword'$search'</span>";
         } else {
             $output .="<span>all result with keyword'$search'</span>";
             while ($row =mysqli_fetch_array($query)){
                 $MaDT = $row ['MaDT'];
                 $MaLoai = $row ['MaLoai'];
                 $TenDT = $row ['TenDT'];
                 $GiaBan = $row ['GiaBan'];
                 $ThongTin = $row ['ThongTin'];

                 $output .="<div>$id<br>$MaDT $TenDT <br>$address<br><br></div>";
             }
         }
     }else{
         $output .="<span>please enter your keyword</span>";
     }
 }
?>



<!DOCTYPE html>
<html>
<head>
  <meta charser="UTF-8">
  </head>
<!-- logo-->
<body>
</body>
</html>
