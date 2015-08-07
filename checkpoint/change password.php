<?php
  require_once("../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkpoint - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
	<script src="/js/html5shiv.min.js"></script>
	<script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_verify">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-bell glyphicon-pad"></span> Change Password</h1>
    <div class="row clearfix">
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
<?php
  if(isset($_POST["old"]) && isset($_POST["new"])) {
    $query= "SELECT password FROM user WHERE username = '$USERNAME'";
    $result= query($query);
    $row= mysqli_fetch_array($result);
    $pass= $row[0]; //password from Db
    $new= $_POST["new"];

    if($pass == $_POST["old"] && $new==$_POST["repeat"]) {
      $query= "UPDATE user SET password = '$new' WHERE username = '$USERNAME'";
      query($query);

      echo "Password changed successfully!";
    } else {
?>
        <p class="errata alert-danger"><span class="glyphicon glyphicon-info-sign glyphicon-pad"></span> Password didn't match.</p>
<?php
    }
  } else {
?>
        <h2 class="text-center">Enter your password!</h2>
        <p class="errata text-muted">Te hinc laudem sea. Virtute fabellas mea no, et duis intellegam cum. Cu tota adhuc quo, dicit dolor nec an. Quando vocibus scribentur eam ex, <a class="text-info" href="#">North South University</a> principes ea. Ignota equidem id has, no quis molestiae eam, denique deseruisse nec id. Ne elaboraret adversarium mea.</p>
        <form action="Change password.php" method="post">
          <div class="form-group">
            <label for="old_password">Old Password</label>
            <input type="password" class="form-control" id="old_password" name="old" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="password" class="form-control" id="new_password" name="new" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="confirm_new_password">Confirm new Password</label>
            <input type="password" class="form-control" id="confirm_new_password" name="repeat" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p class="text-info bg-info errata sm-margin-top">In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready.</p>
<?php
  }
?>
      </div><!--/.column-->
    </div><!--/.row-->
  </div><!--/.container-->

<?php require_once("../includes/footer.php"); ?>

  <!--js scripts -->
  <!--page unspecific-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="/js/jquery-1.11.3.min.js"><\/script>')
  </script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<!--Init tabs - page specific-->
  <script>
  	$(function() {
  		$('.nav-tabs a:first').tab('show')
  	});
  </script>
</body>

</html>
