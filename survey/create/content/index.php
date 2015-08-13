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
<?php
  if(isset($_POST["survey_mcq_no"]))
    $mcq_no= $_POST["survey_mcq_no"];
  if(isset($_POST["survey_option_no"]))
    $option_no= $_POST["survey_option_no"];
  if(isset($_GET["id"]))
    $survey_key= $_GET["id"];

  if(isset($_POST["questions"])) {
    $questions= $_POST["questions"];
    $options= $_POST["options"];
    $m_no= $_GET["m"];
    $o_no= $_GET["o"];

    for($i=0;$i<$m_no;$i++) {
      //insert Question
      $q= $questions[$i];
      $query= "INSERT INTO question VALUES (NULL,$survey_key,'$q')";
      query($query);
      $qid= GetDbId();
      //insert Option
      for($j=$i*$o_no;$j<$o_no*($i+1);$j++) {
        $o= $options[$j];
        $query= "INSERT INTO options VALUES (NULL,$qid,0,'$o')";
        query($query);
      }
    }
?>
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <p class="text-info bg-info errata">Survey created!</p>
      </div><!--/.column-->
<?php
  }
  else {
?>
    <div class="row clearfix">
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <form action="index.php?<?php echo "id=$survey_key&m=$mcq_no&o=$option_no";?>" method="post" class="form-horizontal">
          <!--question 1-->
<?php
    for($i=1;$i<=$mcq_no;$i++) {
?>
          <div class="form-bundle">
            <div class="form-group">
              <label for="q_<?php echo $i; ?>" class="col-sm-2 control-label">Question <?php echo $i; ?></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="questions[]" id="q_<?php echo $i; ?>"; placeholder="Question">
              </div>
            </div>
<?php
      for($j=1;$j<=$option_no;$j++) {
?>
            <div class="form-group">
              <label for="opt_<?php echo $i."_".$j;?>" class="col-sm-2 control-label">Option <?php echo $j; ?></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="options[]" id="opt_<?php echo $i."_".$j;?>" placeholder="Option">
              </div>
            </div>
<?php   } ?>
          </div>
<?php } ?>

          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary">Submit <span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
          </div>
        </form>
<?php } ?>
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
