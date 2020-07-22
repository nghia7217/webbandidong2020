<?php
   $conn = mysqli_connect("localhost","root","")or die ("connected fail");
   mysqli_select_db($conn,'qldd') or die("cannot select DB");
    $output="";
    if(isset($_post['btnSearch'])){
        $search =$_post['txtSearch'];
        if($search!=""){
            $query = mysqli_query("select * FROM dienthoai Where TenDT LIKE '%$search%'")or die("could not search!");
            $result =mysqli_num_rows($query);
            if($result == 0){
                $output = "<span>No result with keyword'$search'</span>";
            } else {
                $output .="<span>all result with keyword'$search'</span>";
                while ($row =mysqli_fetch_array($query)){
                    $id = $row ['MaDT'];
                    $id = $row ['MaLoai'];
                    $id = $row ['TenDT'];
                    $id = $row ['GiaBan'];
                    $id = $row ['ThongTin'];

                    $output .="<div>$id<br>$MaDT $TenDT <br>$address<br><br></div>";
                }
            }
        }else{
            $output .="<span>please enter your keyword</span>";
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
<!-- logo-->
<div style="height:40px; background-color: yellow;">
        <div class="col-sm-6" style=" float: left;font-size: 20px;">Cửa hàng di động</div>
        <div class="col-sm-6" style="font-family: tahoma"; font-size: 20px; color:green;>
            <form action="#" methhod="POST" style=" FLOAT: RIGHT;"> 
                 <input  type="text" name="txtSearch" placeholder="Tên sản phẩm cần tìm..." style="width: 308px; height: 36px;"/>
                 <input type="submit" name="btnSearch" value="Search" style="height:36px"/>
             </form>
             <?php
                    echo $output;
             ?>
        </div> 
</div>

</div>
</div>
</html>
