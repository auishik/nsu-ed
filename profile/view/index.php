<?php
  require_once("../../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jafar Iqbal - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_profile_view">
<?php require_once("../../includes/header.php"); ?>
  <div class="container">
<?php
  $query= "SELECT first_name, last_name FROM nsu_sims WHERE id = $USERID";
  $result= query($query);
  $row= mysqli_fetch_array($result);
  $full_name = $row["first_name"] . " " . $row["last_name"];
?>
    <h1 class="page-header"><span class="glyphicon glyphicon-user glyphicon-pad"></span> <?php echo $full_name; ?></h1>
<?php require_once("../../includes/breadcrumb.php"); ?>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
        <div class="col-lg-12"><!--content-->
          <div class="col-sm-4 text-center text-muted">
            <img class="avatar-big img-rounded" src="/img/avatar.jpg"><br>
            <h3><?php echo $full_name; ?></h4>
            <h4><?php echo "@$USERNAME" ?></h4>
          </div>
          <div class="col-sm-8 text-left" id="score">
<?php
    $query= "SELECT coins FROM user WHERE username = '$USERNAME'";
    $result= query($query);
    $row= mysqli_fetch_array($result);
    $coins= $row[0];
?>
            <h6 class="h1 text-alert"><span class="glyphicon glyphicon-star glyphicon-pad"></span> <?php echo $coins ?></h6>
            <h6 class="h1 text-warning"><span class="glyphicon glyphicon-king glyphicon-pad"></span> Novice</h6>
          </div>
        </div><!--/.col+content-->
      </div><!--/.col-->
<?php require_once("../../includes/panel.php"); ?>
      <div class="col-lg-12 clearfix clear-both"></div>
    </div><!--/row-->
  </div><!--/.container-->

<?php require_once("../../includes/footer.php"); ?>

  <!--js scripts -->
  <!--page unspecific--><!--
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="/js/jquery-1.11.3.min.js"><\/script>')
  </script>-->
  <!--testing--><script src="/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/jquery.placeholder.min.js"></script>
  <!--Init tabs - page specific-->
  <script type="text/javascript">
    $(function() {
      $('.nav-tabs a:first').tab('show')
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active')
      });
    });
  </script>
  <script type="text/javascript">
    $('input, textarea').placeholder();
  </script>
</body>

</html>
<?php CloseDb(); ?>
