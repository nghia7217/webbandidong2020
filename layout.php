<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cửa hàng di động</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!-- <link href="css/bootstrap.min.css" rel="stylesheet" />-->
 <!-- <script src="js/jquery.min.js" ></script>-->
 <!-- <script src="js/bootstrap.min.js"></script>-->
  <link rel="stylesheet" href="css/layout.css"/>
  <link rel="stylesheet" href="css/HangHoa.css">
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>
<div style="background-color: whitesmoke;">
<!-- logo-->
<div style="height:40px; background-color: red;">
        <div class="col-sm-6" style=" float: left;font-size: 20px;color:white">Cửa hàng di động</div>
        
</div>
<div class="navbar navbar-inverse row" id="bd">
            <ul class="nav navbar-nav" >
                <li><a href="layout.php">Trang chủ</a></li>
                <li><a href="layout.php?page=gioithieu">Giới thiệu</a></li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="layout.php?id=1">Iphone</a></li>
                            <li><a href="layout.php?id=2">Nokia</a></li>
                            <li><a href="layout.php?id=3">Samsung</a></li>
                            <li><a href="layout.php?id=4">Xiaomi</a></li>
                            <li><a href="layout.php?id=5">Huawei</a></li>
                            <li><a href="layout.php?id=6">Sony</a></li>
                        </ul>
                    </li>
                <li><a href="layout.php?page=lienhe">Liên hệ</a></li>
                <li><a href="layout.php?page=hoidap">Hỏi đáp</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="layout.php?page=dn">Đăng nhập</a></li>
                        <li><a href="layout.php?page=dk">Đăng ký thành viên</a></li>
                        <li class="divider"></li>
                        <li><a href="layout.php?page=dx">Đăng xuất</a></li>
                        <li><a href="layout.php?page=doimatkhau">Đổi mật khẩu</a></li>
                        <li><a href="layout.php?page=capnhathoso">Cập nhật hồ sơ</a></li>
                        <li class="divider"></li>
                        <li><a href="layout.php?page=dh">Đơn hàng</a></li>
                        <li><a href="layout.php?page=dhdd">Hàng đã mua</a></li>
                    </ul>
                </li>
                <li><a href="admin/admin.php"
                <?php
                    if(!empty($_SESSION['TenDN'])){
                        $tendn = $_SESSION['TenDN'];
                        if($tendn=='admin')echo "style='display:block'";
                        else echo "style='display:none'";
                    }
                    else echo "style='display:none'";
                ?>
                >Admin</a></li>
                <li> <a href="" style="margin-left:400px">
                <?php if(!empty($_SESSION['TenDN'])){
                    $tendn = $_SESSION['TenDN'];
                    echo "<div style='color:white'>Hello $tendn!</div>";}
                ?>
                </a>
                </li>
            </ul>
    </div>

<div class="container" >
    <div class="row" >
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="./images/1.1.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>UY TÍNH-THÂN THIỆN-NHANH GỌN</h3>
            <p style="color: white; ">CHÀO MỪNG ĐẾN VỚI CHÚNG TÔI</p>
          </div>      
        </div>

        <div class="item">
          <img src="./images/1.2.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>HÀNG CHẤT LƯỢNG CAO</h3>
            <p>FREESHIP GIAO HÀNG TOÀN QUỐC </p>
          </div>      
        </div>
    </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
    <a href="layout.php?id=1"><div><img src="./IMAGES/123.jpg" ><div ></div></div></a>
    </div>  
  </div>
</div>
</div>
<!-- khuyến mãi -->
<div class="container" style="background-color: white; ">
<div class="row">
    <div>
                <!-- Wrapper for slides -->
            <div  style="padding-bottom: 20px;padding-top: 20px;background-color: whitesmoke;">

            </div>
    </div>
</div>
<!--  trang chu  -->
    
     
    <div class="nn-sheet row">
    <aside class="col-md-3">
            
            
            <!--Nhà cung cấp-->
            <div class="panel panel-default">

                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    <strong>Nhà cung cấp</strong>
                </div>

                <div class="list-group">
                    <a href="layout.php?id=1" class="list-group-item">Iphone</a>
                    <a href="layout.php?id=2" class="list-group-item">Nokia</a>
                    <a href="layout.php?id=3" class="list-group-item">Samsung</a>
                    <a href="layout.php?id=4" class="list-group-item">Xiaomi</a>
                    <a href="layout.php?id=5" class="list-group-item">Huawei</a>
                    <a href="layout.php?id=6" class="list-group-item">Sony</a>
                </div>
            </div>
            <!--/Nhà cung cấp-->

            <!--Gia Bán-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <strong>Giá bán</strong>
                </div>

                <div class="list-group">
                    <a href="layout.php?p=tang" class="list-group-item">Tăng theo giá</a>
                    <a href="layout.php?p=giam" class="list-group-item">Giảm theo giá</a>
                    <a href="layout.php?p=d2t" class="list-group-item">Dưới 2 triệu</a>
                    <a href="layout.php?p=2t5t" class="list-group-item">2 triệu - 5 triệu</a>
                    <a href="layout.php?p=5t10t" class="list-group-item">5 triệu - 10 triệu</a>
                    <a href="layout.php?p=t10t" class="list-group-item">Trên 10 triệu</a>
                </div>
            </div>
            <!--/Giá bán-->
        </aside>
<?php
    if(!isset($_GET['page'])){
            include 'menu/trangchu.php';
    }
    else{
            $page=$_GET['page'];
            switch($page){
                case 'gioithieu': include 'menu/gioithieu.php'; break;
                case 'lienhe': include 'menu/lienhe.php';break;
                case 'hoidap': include 'menu/webchat.php';break;
                case 'dn': include 'taikhoan/dangnhap.php'; break;
                case 'dx': include 'taikhoan/dangxuat.php';break;
                case 'dk':include 'taikhoan/dangki.php';break;
                case 'doimatkhau':include 'taikhoan/doimatkhau.php';break;
                case 'capnhathoso':include 'taikhoan/capnhathoso.php';break;
                case 'dh':include 'muahang/hoadon.php';break;
                case 'tt':include 'sanpham/thongtin.php';break;
                case 'xldh':include 'muahang/xldh.php';break;
                case 'dhdd':include 'muahang/dhdd.php';break;
            }
    }
?>




</div>
</div>

 <div class="container" >
    <div class="title_module_main" style="text-align: center;">
		   <h2>
				<a>Sản phẩm nổi bật</a>
		    </h2>
     </div>
  </div>
  <!---->
 <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <div style="background-color:white;">
  <table class="table  table-striped">
    <tbody id="myTable">
          <div class="container-fluid">
                <div class="row">
                <div class="col-sm-3" style="background-color:lavender;"><td><a href="layout.php?page=tt&amp;id=4"><div class="hanghoa"><img src="./dienthoai/4.jpg" class="hinh"><div class="giaban">60.000</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">iphone</div><div class="giasoc"></div></div></a></td></div>
                <div class="col-sm-3" style="background-color:lavenderblush;"><td><a href="layout.php?page=tt&amp;id=8"><div class="hanghoa"><img src="./dienthoai/8.jpg" class="hinh"><div class="giaban">76.543</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">Samsung </div><div class="giasoc"></div></div></a></td></div>
                <div class="col-sm-3" style="background-color:lavender;"> <td><a href="layout.php?page=tt&amp;id=1"><div class="hanghoa"><img src="./dienthoai/1.jpg" class="hinh"><div class="giaban">1.500.000</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">Nokia</div><div class="giasoc"></div></div></a></td></div>
                <div class="col-sm-3" style="background-color:lavender;"> <td><a href="layout.php?page=tt&amp;id=6"><div class="hanghoa"><img src="./dienthoai/6.jpg" class="hinh"><div class="giaban">600.000</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">Sony</div><div class="giasoc"></div></div></a></td></div>
                <div class="col-sm-3" style="background-color:lavender;"> <td><a href="layout.php?page=tt&amp;id=5"><div class="hanghoa"><img src="./dienthoai/5.jpg" class="hinh"><div class="giaban">12.000.000</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">Xiaomi</div><div class="giasoc"></div></div></a></td></div>
               </div>
            </div>
    </tbody>
  </table>
 </div>
  <!---->
  <!---->
 <table class="table table-striped" style="background-color:white;">
    <tbody id="myTable">
          <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3" style="background-color:lavender;"><td><a href="layout.php?page=tt&amp;id=4"><div class="hanghoa"><img src="./dienthoai/4.jpg" class="hinh"><div class="giaban">60.000</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">IPHONEXZ</div><div class="giasoc"></div></div></a></td></div>
                <div class="col-sm-3" style="background-color:lavenderblush;"><td><a href="layout.php?page=tt&amp;id=8"><div class="hanghoa"><img src="./dienthoai/8.jpg" class="hinh"><div class="giaban">76.543</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">samsungZIP</div><div class="giasoc"></div></div></a></td></div>
                <div class="col-sm-3" style="background-color:lavender;"> <td><a href="layout.php?page=tt&amp;id=1"><div class="hanghoa"><img src="./dienthoai/1.jpg" class="hinh"><div class="giaban">1.500.000</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">samsung2020 </div><div class="giasoc"></div></div></a></td></div>
                <div class="col-sm-3" style="background-color:lavender;"> <td><a href="layout.php?page=tt&amp;id=6"><div class="hanghoa"><img src="./dienthoai/6.jpg" class="hinh"><div class="giaban">600.000</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">sony2020</div><div class="giasoc"></div></div></a></td></div>
                <div class="col-sm-3" style="background-color:lavender;"> <td><a href="layout.php?page=tt&amp;id=5"><div class="hanghoa"><img src="./dienthoai/5.jpg" class="hinh"><div class="giaban">12.000.000</div><img src="./images/icon-new.png" class="iconnew"><div class="ten">XIAOMI2020</div><div class="giasoc"></div></div></a></td></div>
               </div>
          </div>
    </tbody>
  </table>
</div>
  <!---->
 <div class="policy" style="padding-bottom:20px;"> 
            <div class="category-container">
                <div class="policy-row" style="display:flex;">
                    <div class="policy-item" style="width: calc(100% / 4);">
                        <a href="javascript:void(0)" class="policy-inner text-center" style="cursor:unset">
                            <div class="policy-picture" >
                                <img src="./images/g1.png" alt="">
                            </div>
                            <div class="policy-inf">
                                <div class="policy-title">Thương hiệu đảm bảo</div>
                                <div class="policy-mess">Nhập khẩu và bảo hành chính hãng</div>
                            </div>
                        </a>
                    </div>
                    <div class="policy-item" style="width: calc(100% / 4);">
                        <a href="javascript:void(0)" class="policy-inner text-center" style="cursor:unset">
                            <div class="policy-picture">
                                <img src="./images/g2.png" alt="">
                            </div>
                            <div class="policy-inf">
                                <div class="policy-title">Đổi trả dễ dàng</div>
                                <div class="policy-mess">Theo chính sách đổi trả tại FPTShop</div>
                            </div>
                        </a>
                    </div>
                    <div class="policy-item" style="width: calc(100% / 4);">
                        <a href="javascript:void(0)" class="policy-inner text-center" style="cursor:unset">
                            <div class="policy-picture">
                                <img src="./images/g3.png" alt="">
                            </div>
                            <div class="policy-inf">
                                <div class="policy-title">Giao hàng tận nơi</div>
                                <div class="policy-mess">Trong vòng 60 Phút (Bán kính 10km)</div>
                            </div>
                        </a>
                    </div>
                    <div class="policy-item" style="width: calc(100% / 4);">
                        <a href="javascript:void(0)" class="policy-inner text-center" style="cursor:unset">
                            <div class="policy-picture">
                                <img src="./images/g4.png" alt="">
                            </div>
                            <div class="policy-inf">
                                <div class="policy-title">Sản phẩm chất lượng</div>
                                <div class="policy-mess">Đảm bảo tương thích và độ bền cao</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
 </div>






 <div class="container-fluid">
  <div class="row" style="background-color:white;">
    <div class="col-sm-4" style="background-color:white;text-align: center;">
   <p> THÔNG TIN</p>
  <p>Giới thiệu </p>
  <p>LIÊN HỆ </p>
  <p>HỎI ĐÁP </p>
  </div>
    <div class="col-sm-4" style="background-color:white;text-align: center;">
   <p> CHÍNH SÁCH MUA HÀNG </p>
  <P>MUA TRẢ GỚP</P>
  <P>MUA THANH TOÁN TRỰC TIẾP</P>
  </div>
    <div class="col-sm-4" style="background-color:white;text-align: center;">
   <p> HỖ TRỢ KHÁCH HÀNG </p>
    <P>CHI NHÁNH</P>
    <P>HƯỚNG DẪN MUA HÀNG</P>
  </div>
 </div>


<!--Ham xu ly-->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</div>
  <div style="text-align:center"> &copy; 2020</div>
       
   
</div>
</div>
</html>
