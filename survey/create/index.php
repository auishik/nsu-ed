<?php
  require_once("../../includes/head.php");
  if($USERNAME==NULL) jump("/index.php");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Survey - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
	<script src="/js/html5shiv.min.js"></script>
	<script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_survey_format">
<?php require_once("../../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-sort-by-alphabet glyphicon-pad"></span> Survey Format</h1>
    <div class="content-block">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
      </ol>
    </div>
    <div class="row clearfix">
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="survey_mcq_no" class="col-sm-2 control-label">MCQ(s)</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="survey_mcq_no" min="1" placeholder="4">
            </div>
          </div>
          <div class="form-group">
            <label for="survey_option_no" class="col-sm-2 control-label">Options per MCQ</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="survey_option_no" min="2" placeholder="4">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
          </div>
        </form>
      </div><!--/.column-->
    </div><!--/.row-->
  </div><!--/.container-->

<?php require_once("../../includes/footer.php"); ?>

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
