<?php
  session_start();
  
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"></script>
    
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php 
            include('includes/headerhome.php');
      ?>
      <div id="slides" class="carousel slide container-fluid" data-ride="carousel" >
        <ul class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
        </ul> 
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <img src="img/khenthuong1.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/quocte2.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/totnghiep3.jpg">
          </div>
        </div> 
      </div>
      <!-- Content -->
      <div class="container-fluid padding" >
        <div  class="row welcome text-center">
          <div class="col-12">
            <h1 class="displlay-4">WELCOME TO CSE TLU 
            </h1>
            <hr>
            <div class="col-12">
              <p class="lead">
                Khoa công nghệ thông tin Đại học thủy lợi là một trong những khoa hàng đầu của trường, cơ sở vật chất đầy đủ , có liên kết quốc tế.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Đội ngũ giảng viên -->
      <div class="container-fluid padding">
      <div class="row welcome text-center">
        <div class="col-12">
          <h1 class="display-4">Đội ngũ giảng viên</h1>
        </div>
        <hr>
      </div>
      </div>
      <div class="container-fluid padding">
       <div class="row padding">
        <div class="col-md-4">
          <div class="card">
            <img class="card-imd-top" src="img/ktz.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Kiểu Tuấn Dũng</h4>
              <p>-Lập trình di động</p>
              <p>-Lập trình web</p>
              <p>-Hệ thống phân tán</p>
              <p>-Hệ thống thông tin địa lý</p>
              <p>-Email:dungkt@tlu.edu.vn</p>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-imd-top" src="img/ntt.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Nguyễn Thanh Tùng</h4>
              <p>-Học máy</p>
              <p>-Numerical Modeling and Risk Analysis</p>
              <p>-Khai phá dữ liệu</p>
              <p>-Phân tích dữ liệu lớn</p>
              <p>-Email:namnv@tlu.edu.vn</p>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-imd-top" src="img/ttn1.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Trần Thị Ngân</h4>
              <p>-Optimization</p>
              <p>-Data Mining</p>
              <p>-Machine learning and statistics</p>
              <p>-Email:ngantt@tlu.edu.vn</p>

            </div>
          </div>
        </div>

       </div> 
      </div>


      <!-- Connect -->
      <div class="container-fluid padding">
      <div class="row text-center padding">
        <div class="col-12 ">
          <h2>Connect</h2>
        </div>
        
      </div>
      </div>


      <!-- <-----Footer-----> 
      <?php 
            include('includes/footer.php');
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>