
<?php 
function adddotstring($strNum) {
 
 $len = strlen($strNum);
 $counter = 3;
 $result = "";
 while ($len - $counter >= 0)
 {
     $con = substr($strNum, $len - $counter , 3);
     $result = '.'.$con.$result;
     $counter+= 3;
 }
 $con = substr($strNum, 0 , 3 - ($counter - $len) );
 $result = $con.$result;
 if(substr($result,0,1)=='.'){
     $result=substr($result,1,$len+1);   
 }
 return $result;
}
?>
<?php
    $madt=$_GET['id'];
    echo "<article class='col-md-9'>";
    include_once("DataProvide_PDO.php");
    $madt=$_GET['id'];
    $sql=DataProvider_PDO::ExecuteQuery("SELECT* FROM dienthoai WHERE MaDT='$madt'");
    $dienthoai= $sql->fetch(PDO::FETCH_ASSOC);
    $gia=adddotstring($dienthoai['GiaBan']);
    echo "<h1 >{$dienthoai['TenDT']}</h1>";
    echo "<img src='./dienthoai/{$dienthoai['Hinh']}' style='height:300px; width:200px'/>";
        echo "<h1>Giá bán :$gia</h1>";
    echo "<h1>Thông tin:{$dienthoai['ThongTin']}</h1>";
    
?>
<form method="POST">
    Số lượng:
    <input type="text" name="soluong" value="1" min="1">
    <input type='submit' name='sub' value='Thêm vào giỏ'/>
    </article>
</form>
<?php
    
    if(isset($_POST['sub'])){
        $tendn=$_SESSION['TenDN'];
        $kh=DataProvider_PDO::ExecuteQuery("SELECT * FROM khachhang WHERE TenDN='$tendn'");
        $makh=$kh->fetch(PDO::FETCH_ASSOC);
        $kh=$makh['MaKH'];
        $diachi=$makh['DiaChi'];
        $soluong=$_POST['soluong'];
        $ngaydat=date('Y/m/d');
        DataProvider_PDO::ExecuteQuery("INSERT INTO hoadon(MaKH,MaDT,SoLuong,NoiGiao) VALUES ('$kh','$madt','$soluong','$diachi');");
        echo "<script>window.location='layout.php?page=dh';</script>";
    }
    
?>