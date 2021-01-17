<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <!--Custom CSS-->
  <link rel="stylesheet" href="../CSS/style.css" type="text/css" />
  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!--Custom JS-->
  <script type="text/javascript" src="../js/custom.js"></script>
  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <!--jQuery JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Menu -->
  <?php include '../shared/main-menu.html' ?>
  <!-- Bannière -->
  <div id="main-banner">
    <img src="../Image/Bannière LBT.png" alt="La Bio Touch" />
  </div>
</head>

<body class="grey-background">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Image/img1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../Image/img2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../Image/img3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</body>

<footer class="fixed-bottom">
  <?php include '../shared/main-footer.html' ?>
</footer>

</html>