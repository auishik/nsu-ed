<?php
  require_once("../includes/head.php");
  /*session_start();
  if(isset($_SESSION["username"])) $USERNAME= $_SESSION["username"];
  else $USERNAME= NULL;
  $USERID= GetId($USERNAME);*/
  if($USERNAME==NULL) jump("/index.php?id=1");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_profile">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-user glyphicon-pad"></span> Profile</h1>
<?php require_once("../includes/breadcrumb.php"); ?>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
<?php
  if(isset($_POST["email"]) && isset($_POST["phone"])) {
    $new_email= $_POST["email"];
    $new_phone= $_POST["phone"];

    if(!empty($new_email)){
      $query= "UPDATE user SET email= '$new_email' WHERE id= $USERID";
      query($query);
    }
    if(!empty($new_phone)){
      $query= "UPDATE user SET phone= $new_phone WHERE id= $USERID";
      query($query);
    }
?>
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <h3 class="h1 text-center"><span class="glyphicon glyphicon-thumbs-up text-success"></span></h3>
        <p class="text-info bg-info errata">Profile updated!</p>
      </div><!--/.column-->
<?php
  }

  $query= "SELECT n.first_name, n.last_name, u.email, u.phone, u.coins FROM nsu_sims n JOIN user u";
  $query .= " ON (n.id=u.id) WHERE n.id = $USERID";
  $result= query($query);
  $row= mysqli_fetch_array($result);

  $full_name = $row["first_name"] . " " . $row["last_name"];
  $email= $row["email"];
  $phone= $row["phone"];
  $coins= $row["coins"];
?>
        <div class="col-lg-12"><!--content-->
          <div class="row avatar-form">
            <div class="col-sm-2 col-lg-2 avatar-label">Avatar</div>
            <div class="col-sm-10 col-lg-10 avatar-control"><img class="avatar img-rounded" src="/img/avatar.jpg">
              <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#change_avatar"> <span class="glyphicon glyphicon-edit"></span> Change avatar</button>
            </div>
          </div>
          <form class="form-horizontal" action="/profile/" method="post">
            <div class="form-group">
              <label class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="<?php echo $full_name; ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="<?php echo "@$USERNAME"; ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Identification</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="<?php echo $USERID; ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="<?php echo $email; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <p class="form-control-static"><a href="/checkpoint/change password.php" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-edit"></span> Change password</a></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Phone</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" name="phone" placeholder="<?php echo $phone; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Stars</label>
              <div class="col-sm-10">
                <p class="form-control-static text-alert"><span class="glyphicon glyphicon-star"></span> <?php echo $coins; ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Badge</label>
              <div class="col-sm-10">
                <p class="form-control-static text-warning"><span class="glyphicon glyphicon-king"></span> Novice</p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </form><hr>
          <p class="text-right"><a href="/profile/view/?id=<?php echo $USERID; ?>">view as public</a></p>
        </div><!--/.col+content-->
      </div><!--/.col-->
<?php require_once("../includes/panel.php"); ?>
      <div class="col-lg-12 clearfix clear-both"></div>
    </div><!--/row-->
  </div><!--/.container-->

  <!--#change_avatar-->
  <div class="modal fade" id="change_avatar">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button><!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
          <h4 class="modal-title">Change avatar</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="avatar_upload">Choose an image</label>
              <input type="file" id="avatar_upload">
              <p class="help-block">width and height of 150px or larger give best results</p>
            </div>
            <div class="modal-submit text-right">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

<?php require_once("../includes/footer.php"); ?>

  <!--js scripts -->
  <!--page unspecific-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="/js/jquery-1.11.3.min.js"><\/script>')
  </script>
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
