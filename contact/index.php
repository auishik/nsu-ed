<?php
  require_once("../includes/head.php");
?>

<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
	<script src="/js/html5shiv.min.js"></script>
	<script src="/js/respond.min.js"></script>
<![endif]-->
</head>
<body id="page_contact">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-envelope glyphicon-pad"></span> Contact Us</h1>
    <div class="content-block">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
      </ol>
    </div>
    <div class="m-margin-top row clearfix">
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <form class="form-horizontal"><!--
          <div class="form-group has-error has-feedback">
            <label class="col-md-2 col-sm-2 control-label" for="contact_name">Name</label>
            <div class="col-md-8 col-sm-10">
              <input type="text" class="form-control" id="contact_name">
              <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>-->
          <div class="form-group">
            <label for="contact_name" class="col-md-2 col-sm-2 control-label">Name</label>
            <div class="col-md-8 col-sm-10">
              <input type="text" class="form-control" id="contact_name" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <label for="contact_email" class="col-md-2 col-sm-2 control-label">Email</label>
            <div class="col-md-8 col-sm-10">
              <input type="email" class="form-control" id="contact_email" placeholder="Email">
            </div>
          </div><!--
          <div class="form-group has-error has-feedback">
            <label class="col-md-2 col-sm-2 control-label" for="contact_email">Email</label>
            <div class="col-md-8 col-sm-10">
              <input type="email" class="form-control" id="contact_email">
              <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>-->
          <div class="form-group">
            <label for="contact_subject" class="col-md-2 col-sm-2 control-label">Subject</label>
            <div class="col-md-8 col-sm-10">
              <select name="contact_subject" class="form-control">
                <option selected>Feedback</option>
                <option>Complain</option>
                <option>Account</option>
                <option>Technical</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="contact_msg" class="col-md-2 col-sm-2 control-label">Message</label>
            <div class="col-md-8 col-sm-10">
              <textarea class="form-control" id="contact_msg" rows="3" placeholder="Message"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form><!--/.form-horizontal-->
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
