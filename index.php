<?php
$conn = mysqli_connect("127.0.0.1:3307","root", "111111", "finalproject");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Final Project</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">
    <style>
    #grid1{
      font-size: 35px;
      display: grid;
      grid-template-columns: 220px 1fr 1fr;

    }
    #grid1 ul{
      border-right: 2px solid gray;
      padding-right: 40px;
    }
    #grid2{
      border-right: 2px solid gray;
      padding-right: 40px;
    }
    #grid{
      font-size: 35px;
      display: grid;
      grid-template-columns: 270px 1fr;

    }
    #grid ul{

    border-right: 2px solid gray;
    padding-right: 40px;

    }
    </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">무인통</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/hong.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Main Screen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">ERdiagram</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Sales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Awaiter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Order</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">무인
            <span class="text-primary">시스템</span>
          </h1>
          <div class="subheading mb-5">Final Project

          </div>
          <p class="mb-5" style="text-align:right"> 학번:143023<br>학과:산업공학과<br>이름:홍차령<br></p>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">ER-diagram</h2>

            <img  src="img/기말과제.jpg" alt="">


        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Menu</h2>


            <div class="resume-content mr-auto">
              <div class="subheading mb-3"  id=grid><ul><?php
              $sql = "SELECT * From food";
              $result = mysqli_query($conn, $sql);

              while($row = mysqli_fetch_array($result)){
                echo "<li>{$row['fname']}</li> ";
              }
              ?></ul>
              <div>
                <?php
                $sql = "SELECT * From food";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)){
                  echo "&emsp; {$row['price']}<br>";
                }
                ?>
              </div>

            </div>
          </div>
            <div class="resume-date text-md-right">

            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Sales</h2>

           <div class="subheading mb-3"  id=grid1><ul><?php
            $sql = "SELECT * From sale";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result)){
              echo "<li>{$row['td']}</li> ";
            }
            ?></ul>
            <div id=grid2>
              <?php
              $sql = "SELECT * From sale";
              $result = mysqli_query($conn, $sql);

              while($row = mysqli_fetch_array($result)){
                echo "&emsp; {$row['fname']}<br>";
              }
              ?>
            </div>
            <div>
              <?php
              $sql = "SELECT * From sale";
              $result = mysqli_query($conn, $sql);

              while($row = mysqli_fetch_array($result)){
                echo "&emsp; {$row['sl']}<br>";
              }
              ?>
            </div>

          </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Awaiter</h2>
          <p><div style="font-size:30px"><ol><?php
          $sql = "SELECT * From orders";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            echo "<li>&ensp;{$row['oid']}번&ensp;  {$row['fname']}</li>";
          }
          ?></ol></p>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Order & Cancell</h2>
          <form action="process.php" method="POST">
          <h3 class="mb-0">Order</h3>
          <div class="subheading mb-3"><input type="text" name="fname" placeholder="Order Food"><br>
            <input type="text" name="pay" placeholder="Cash or Card"></div>
          <div><input type="submit" placeholder="Order"></div>
        </form>
          <p><div style="color:red">*주의: 주문을 하시면 2분 이내에만 취소가 가능합니다.</div></p>
          <form action="Delete.php" method="POST">
              <h3 class="mb-0">Cancell</h3>
          <div><input type="text" name="id" placeholder="Order Number">
            <input type="submit" placeholder="Order"></div>
        </form>

        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
