<?php
require_once('../../admin/config.php');
 
if(!empty($_POST)){
    $id=$ho=$ten=$email=$chude=$noidung='';
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }
    if(isset($_POST['ho'])){
        $ho=$_POST['ho'];
    }

    if(isset($_POST['ten'])){
        $ten=$_POST['ten'];
    }

    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    if(isset($_POST['chude'])){
        $chude=$_POST['chude'];
    }
    if(isset($_POST['noidung'])){
        $noidung=$_POST['noidung'];
    }
    
    $sql="INSERT INTO user(id,ho,ten,email,chude,noidung) 
    value('$id','$ho','$ten','$email','$chude','$noidung')";
    if (mysqli_query($conn, $sql)) {
        ?><script> alert('Thêm Dữ Liệu Thành Công');</script><?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về Chúng Tôi- Đội Ngũ Xây Dựng</title>
    <link rel="stylesheet" href="style.1.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="bootrap/bootstrap.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      body,html{
        font-family:'Times New Roman', Times, serif;
        width: 100%;
        height: 100%;
      }
    </style>
</head>
<body>
  <div class="bg-image img1">
    <nav class="navbar navbar-expand-sm  fixed-top pt-3 " id="navbar" >
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a href="" class="nav-link" id="navlogo"> <img src="img/Logo_white.png" alt=""></a>
        </li>
        <li class="nav-item">
          <a href="../../index.php" class="nav-link " id="nav"> <h4 > Ymeetme là gì </h4></a>
        </li>
        <li class="nav-item">
          <a href="../About-us/index.1.php" class="nav-link " id="nav"> <h4> Về chúng tôi <hr style="height:2px;background-color:#59d9ca;" ></h4></a>
        </li>
        <li class="nav-item">
          <a href="../Technology/index.2.php" class="nav-link" id="nav"> <h4> Công nghệ</h4></a>
        </li>
        <li class="nav-item">
          <a href="../Presskit/index.3.php" class="nav-link " id="nav"> <h4> Presskit</h4></a>
        </li>
      </ul>
    </nav>
  </div>
    <img src="img/BackgroundAbout.png" alt="" style="width: 100%;">
    <img src="img/Mission.png" alt=""  class="cangiua">
  <div class="text-center" style="text-align: center;">
    <h2><b> SỨ MỆNH <hr></b></h2>
    <div class="text-muted " id="text1">
      <p> Xây dựng dịch vụ hẹn hò trực tuyến an toàn
      <br> và hiệu quả cho người độc thân </p>
    </div>
    <div class="row">
      <img src="img/Circle.png" alt=""  style="position: absolute; width: 285px;">
      <div class="text-center " >
        <h2 style="margin-top: 98px;"><b> ĐỘI NGŨ YMEETME <hr></b></h2>
        <div class="row" style="margin-left: 367px;">
          <div class="col-sm-7 text-muted " id="text2"> Là những người trẻ và giàu mơ ước, mỗi thành viên trong đội ngũ YmeetME, với mong muốn đem đến một dịch vụ hẹn hò thực sự hiệu quả và an toàn,
            đều đang nỗ lực hàng ngày để khiến YmeetMe tốt hơn, phù hợp hơn với người dùng. Sự hạnh phúc và thoải mái của người sử dụng chính là động lực cũng nhưư niềm khao khát mà chúng tôi hướng đến. Và hơn thế nữa!
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-left: 283px;">
        <div class="ima" style="margin-right: 50px;">
          <img src="img/ima-avatar.png" alt="">
          <h4 style="color:#17a1c9;"><b> Mr.Imamura </b></h4>
          <h5 style="color: #858585;">Product team Leader</h5>
        </div>
        <div class="ima" style="margin-right: 50px;">
          <img src="img/luan-avatar.png" alt="">
          <h4 style="color:#17a1c9;"> <b> Mr.Luận </b></h4>
          <h5 style="color: #858585;"> Dev team Leader </h5>
        </div>
        <div class="ima" style="margin: 0px;">
          <img src="img/hanh-avatar.png" alt="">
          <h4 style="color:#17a1c9;"> <b> Ms.Hạnh </b></h4>
          <h5 style="color: #858585;"> Test team Leader</h5>
        </div>
    </div>
    <img src="img/shadow-bg.png" alt="" style="margin-top: 20px;">
    <div class="text-center" style="margin-top: 40px;"> 
      <h2><b> VĂN HÓA YMEETME <hr></b></h2>
    </div>
    <div class="text-left" id="text3" style="margin: 55px;">
      <p> Hướng tới xây dựng dịch vụ hẹn hò thực sự hiệu quả và an toàn, YmeetMe được đội ngũ thành viên tạo nên với 3 niềm tin: tình yêu với cống nghệ, sự chia sẻ và luôn được là chính mình.</p>
      <h5><b> Tình yêu với công nghệ </b></h5>
      <p>Hiệu quả được xây dựng dựa trên sụ tính toán có chủ đích, những thuật toán thông minh, công nghệ máy học... và nhiều thứ thú vị chúng tôi đã và đang làm hàng ngày giúp người dùng sớm tìm được một nửa phù hợp nhất cho mình!</p>
      <h5><b>Sự chia sẻ</b></h5>
      <p> Thấu hiểu và cảm thông với những vấn đề trong hẹn hò, đặc biệt đối với phụ nữ, Ymeetme mong muốn được chia sẻ và lắng nghe, tương tác nhiều hơn với người sử dụng.</p>
      <h5><b>Luôn được là chính mình</b></h5>
      <p> Được lựa chọn đối tường mà bạn cảm thấy phù hợp nhất, được yêu và được là chính mình là điều mà mỗi người dùng sẽ cảm nhận được khi sử dụng Ymeetme.</p>
    </div>
  </div>
  <img src="img/BackgroundTeam.png" alt=""  style="background-size: contain; width: 100%;">
  <div class="row text-left" style="margin-top: 149px; margin-bottom: 149px; margin-left: 311px;">
    <div class="col-sm-4" id="apvn">
      <h3 style="margin-bottom: 40px;"><b>  VĂN PHÒNG  VIỆT NAM  </b></h3>
      <h5><b> TRỤ SỞ TẠI HÀ NỘI </b></h5>
      <h6><b>Địa chỉ:</b> <samp> Tầng 17, Hl Tower, 82 Duy Tân, Hà Nội</samp></h6>
      <h6><b> Điện thoại:</b> <samp>(+84)02466873572</samp></h6>
      <h6 style="padding-bottom: 100px;">Email: <samp>contact@ymeet.me</samp></h6>
    </div>
    <div class="col-sm-4" id="apjapan">
      <h3><b>VĂN PHÒNG NHẬT BẢN </b></h3>
      <h5><b> TRỤ SỞ CHÍNH KYOTO </b></h5>
      <h6><b> Địa chỉ:</b> <samp>Yoshida Izumiden cho, Kyoto City</samp></h6>
      <h6><b> Điện thoại: </b><samp>+84-75-771-2881</samp></h6>
      <h5><b> CHI NHÁNH TOKYO </b></h5>
      <h6><b> Địa chỉ: </b><samp>Akasaka, Minato, Japan</samp></h6>
      <h6 style="padding-bottom: 50px;"><b> Điện thoại:</b> <samp>+84-3-5474-0838</samp></h6>
    </div>
  </div>
  <div class="text-center" id="btn">
    <a href="" class="btn-apply text-lg"><b> ỨNG TUYỂN NGAY </b></a>
  </div>
  <div class="container-fluid" id="brackgroud5">
    <form action="" method="post" class="needs-validation" novalidate>
      <div class="row" >
        <div class="col-sm-1"></div>
        <div class="col-sm-5 "  style="margin-top: 50px; margin-right: 100px; ">
          <div class="row">
            <div class="form-group" style="margin-left: 20px;">
              <input type="text" name="ho" placeholder="Họ" id="form" value size="20" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Trường thông tin bắt buộc</div>
            </div>
            <div class="form-group">
              <input type="text" name="ten" placeholder="Tên"id="form" value size="20" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Trường thông tin bắt buộc</div>
            </div>
          </div>
          <div class="form-group"> 
            <label for=""></label>
            <input type="email" name="email" placeholder=" Email"id="form" value size="50" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Trường thông tin bắt buộc</div>
          </div>
          <div class="form-group">
            <label for=""></label>
            <input type="text" name="chude" placeholder=" Chủ đề"id="form" value size="50" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Trường thông tin bắt buộc</div>
          </div>
          <div class="form-group">
            <textarea name="noidung" id="form" rows="9" cols="55" placeholder="Nội Dung" required></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Trường thông tin bắt buộc</div>
          </div>
          <div class="button" style="text-align: center;"> 
            <button type="submit" name="save" class="btn-submit" style="text-align: center;">Gửi</button>
          </div>
        </div>
        <div class="col-sm-4" style="text-align: right; color: white;" >
          <h2 style="margin-top: 150px;"> <b style="font-size: 1.95313rem; margin-bottom: 25px;"> HÃY CHIA SẺ QUAN ĐIỂM <br> CHÚNG TÔI SẼ LẮNG NGHE </b></h2>
          <p style="line-height: 2;" >
             Nếu bạn có bất kì góp ý hay thắc mắc nào về <br>
             YmeetMe, hãy liên hệ với chúng tôi qua mẫu này <br>
             và YmeetMe sẽ phản hồi lại bạn sớm nhất có thể!</p>
          </div>
        </div>
      </div>
    </from>
  </div>
  <div class="container-fluid" id="backgroud6">
    <div class="row">
      <div class="col-md-3 mt-3">
        <div class="text-center mb-lg-5">
          <a href="http://127.0.0.1:5500/BTLON/index.html">
            <img src="img/logo-2.png" alt="YmeetMe - Hẹn hò an toàn cho phụ nữ">
          </a>
        </div>
      </div>
      <div class="col-md-9 mt-4">
        <ul class="list-inline text-left mb-md-5">
          <div class="row">
            <li>
              <a class="text-color-invert" target="_blank" href="">YmeetMe</a>
            </li>
            <li>
              <a class="text-color-invert" target="_blank" href="">Blog tâm sự</a>
            </li>
            <li>
              <a class="text-color-invert" target="_blank" href="">Blog công nghệ</a>
            </li>
            <li>
              <a class="rounded link-social" target="_blank" href="https://www.facebook.com/ymeet.me/">
                <span class="fa-stack fa-lg">
                  <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li>
              <a class="rounded link-social" target="_blank" href="https://twitter.com/ymeetme">
                <span class="fa-stack fa-lg">
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
              </a>
            </li>
          </div>
        </ul>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 ">
        <div class="d-inline-block text-left  mb-md-3">
          <a target="_blank" href="https://apps.apple.com/us/app/ymeet-me-app-h%E1%BA%B9n-h%C3%B2-k%E1%BA%BFt-b%E1%BA%A1n/id1280333225">
            <img src="img/Appstore (1).png" alt="YmeetMe hẹn hò trực tuyến an toàn cho phụ nữ">
          </a>
        </div>
        <div class="d-inline-block text-left mb-md-3"></div>
        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.ymmrnt">
          <img src="img/Google+play (1).png" alt="YmeetMe hẹn hò trực tuyến an toàn cho phụ nữ">
        </a>
      </div>
    </div>
    <div class="row mb-lg-5">
      <div class="col-md-4 text-white ">
        <ul class="text-left ">
          <h3 style="margin-right: 10px;">Công ty TNHH Game Changer</h3>
          <li>Địa chỉ: Tầng 17, Toà nhà HL Tower, Lô A2B, Đường Duy Tân, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội, Việt Nam</li>
          <li>Điện thoại: (+84)0246687352</li>
          <li>Email: contact@ymeet.me</li>
        </ul>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="text-center mb-lg-3">
          <a target="_blank" href="http://online.gov.vn/Home/WebDetails/47807">
            <img class="img-150" style="width: 200px " src="img/dathongbao.png" alt="">
          </a>
        </div>
      </div>
    </div>
    <div class="text-white text-center" style="padding-bottom: 60px;" > Game Changer, 2018</div>
  </div>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="script.js"></script>
</body>
</html>