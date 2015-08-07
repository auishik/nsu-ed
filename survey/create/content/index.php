<?php
  require_once("../../../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
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

<body id="page_survey_pop">
<?php require_once("../../../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-sort-by-alphabet glyphicon-pad"></span> Survey Format</h1>
<?php require_once("../../../includes/breadcrumb.php"); ?>
    <div class="row clearfix">
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <form class="form-horizontal">
          <!--question 1-->
          <div class="form-bundle">
            <div class="form-group">
              <label for="q_1" class="col-sm-2 control-label">Question 1</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_1" placeholder="Question">
              </div>
            </div>
            <div class="form-group">
              <label for="q_1_opt_1" class="col-sm-2 control-label">Option 1</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_1_opt_1" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_1_opt_2" class="col-sm-2 control-label">Option 2</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_1_opt_2" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_1_opt_3" class="col-sm-2 control-label">Option 3</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_1_opt_3" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_1_opt_4" class="col-sm-2 control-label">Option 4</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_1_opt_4" placeholder="Option">
              </div>
            </div>
          </div>

          <!--question 2-->
          <div class="form-bundle">
            <div class="form-group">
              <label for="q_2" class="col-sm-2 control-label">Question 2</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_1" placeholder="Question">
              </div>
            </div>
            <div class="form-group">
              <label for="q_2_opt_1" class="col-sm-2 control-label">Option 1</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_2_opt_1" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_2_opt_2" class="col-sm-2 control-label">Option 2</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_2_opt_2" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_2_opt_3" class="col-sm-2 control-label">Option 3</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_2_opt_3" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_2_opt_4" class="col-sm-2 control-label">Option 4</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_2_opt_4" placeholder="Option">
              </div>
            </div>
          </div>



          <!--question 3-->
          <div class="form-bundle">
            <div class="form-group">
              <label for="q_3" class="col-sm-2 control-label">Question 3</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_1" placeholder="Question">
              </div>
            </div>
            <div class="form-group">
              <label for="q_3_opt_1" class="col-sm-2 control-label">Option 1</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_3_opt_1" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_3_opt_2" class="col-sm-2 control-label">Option 2</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_3_opt_2" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_3_opt_3" class="col-sm-2 control-label">Option 3</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_3_opt_3" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_3_opt_4" class="col-sm-2 control-label">Option 4</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_3_opt_4" placeholder="Option">
              </div>
            </div>
          </div>

          <!--question 4-->
          <div class="form-bundle">
            <div class="form-group">
              <label for="q_5" class="col-sm-2 control-label">Question 4</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_1" placeholder="Question">
              </div>
            </div>
            <div class="form-group">
              <label for="q_5_opt_1" class="col-sm-2 control-label">Option 1</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_5_opt_1" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_5_opt_2" class="col-sm-2 control-label">Option 2</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_5_opt_2" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_5_opt_3" class="col-sm-2 control-label">Option 3</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_5_opt_3" placeholder="Option">
              </div>
            </div>
            <div class="form-group">
              <label for="q_5_opt_4" class="col-sm-2 control-label">Option 4</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="q_5_opt_4" placeholder="Option">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary">Submit <span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
          </div>
        </form>
      </div><!--/.column-->
    </div><!--/.row-->
  </div><!--/.container-->

<?php require_once("../../../includes/footer.php"); ?>

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
