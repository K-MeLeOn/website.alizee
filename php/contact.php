<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <!--Custom CSS-->
  <link rel="stylesheet" href="../CSS/style.css" type="text/css" />
  <link href="../CSS/contact.css" rel="stylesheet" type="text/css" />
  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!--FontAwesome all-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
  <!--Custom JS-->
  <script type="text/javascript" src="../js/custom.js"></script>
  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <!--jQuery JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Menu -->
  <?php include '../shared/main-menu.html' ?>
</head>

<body id="contact-background">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 pb-5">


        <!--Form with header-->
        <!--Pas encore fait le mailer (mail.php)-->
        <form action="mail.php" method="post">
          <div class="card border-primary rounded-0">
            <div class="card-header p-0">
              <div class="bg-info text-white text-center py-2">
                <h3><i class="fa fa-envelope"></i> Nous contacter</h3>
                <p class="m-0">Nous vous aiderons volontiers</p>
              </div>
            </div>
            <div class="card-body p-3">

              <!--Body-->
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                  </div>
                  <input type="name" class="form-control" id="nombre" name="nombre" placeholder="Prénom et nom" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                  </div>
                  <input type="email" class="form-control" id="nombre" name="email" placeholder="exemple@gmail.com" required>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                  </div>
                  <textarea class="form-control" placeholder="Nous envoyer votre message" required></textarea>
                </div>
              </div>

              <div class="text-center">
                <input type="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2">
              </div>
            </div>

          </div>
        </form>
        <!--Form with header-->

      </div>
    </div>
  </div>
</body>

<footer>
  <?php include '../shared/main-footer.html' ?>
</footer>
</html>