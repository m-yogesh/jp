<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="../Resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Resources/css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="../Job_Seeker/Home.php">Job Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../Job_Seeker/profileInfo.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../Job_Seeker/searchJob.php">Search Job</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../Job_Seeker/viewJob.php">View Job</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../Login/Logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
      if( $_SESSION["userInfo"][2]){
    ?>
      <section>
      <div class="alert alert-danger">
        <strong>Warning!</strong> Dear <?php $_SESSION["userInfo"][3]?>, Please note that your profile as a job seeker is not complete.
        <br/>
        You'll be <b>restricted</b> to apply for a job without your account infomation completed.
        <br/>
        <i>You can click on the button link to fill in the necessary information you missed.</i>
        <b><u><a href="../Job_Seeker/addInfoJS.php" target="_self">Complete your account information</a></u></b>
      </div>
      </section>
    <?php
      }
  ?>
    <!-- Bootstrap core JavaScript -->
    <script src="../Resources/js/jquery.min.js"></script>
    <script src="../Resources/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../Resources/js/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="../Resources/js/scrolling-nav.js"></script>

  </body>

</html>
