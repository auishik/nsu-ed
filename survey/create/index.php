 <?php
  require_once("../../includes/head.php");
  require_once("../../includes/functions.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
  //if(!isset($_POST["survey_title"])) jump("/survey/");
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
<?php require_once("../../includes/breadcrumb.php"); ?>
<?php
  $title= $_POST["survey_title"];
  $body= $_POST["survey_body"];
  $time= time();

  $query= "INSERT INTO survey VALUES (NULL,'$title','$body',$USERID,$time,0)";
  query($query);
  $survey_key= GetDbId();

  //tag processor
  $tags= $_POST["survey_tags"];
  AddTag($tags,$survey_key,"survey");
?>
    <div class="row clearfix">
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <form action="/survey/create/content/?id=<?php echo $survey_key; ?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label for="survey_mcq_no" class="col-sm-2 control-label">MCQ(s)</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="survey_mcq_no" id="survey_mcq_no" min="1" placeholder="4">
            </div>
          </div>
          <div class="form-group">
            <label for="survey_option_no" class="col-sm-2 control-label">Options per MCQ</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="survey_option_no" id="survey_option_no" min="2" placeholder="4">
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
