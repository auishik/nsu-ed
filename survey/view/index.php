<?php
  require_once("../../includes/head.php");
  if($USERNAME==NULL) jump("/index.php");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Survey - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_survey_view">
<?php require_once("../../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-sunglasses glyphicon-pad"></span> Jafar's Survey <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> report</a></h1>
    <div class="content-block">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
      </ol>
    </div>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
        <div class="col-lg-12"><!--content-->
          <p class="text-info bg-info errata sm-margin-bottom">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <form>
            <h4><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> 1. You know nothing, Who knows nothing?</h4>
            <div class="radio">
              <label>
                <input type="radio" name="q_1" id="q_1" value="opt_1" checked>
                John Snow
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_1" id="q_1" value="opt_2">
                Jafar Iqbal
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_1" id="q_1" value="opt_3">
                Don Samdani
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_1" id="q_1" value="opt_4">
                Khaleesi
              </label>
            </div>


            <h4><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> 2. You know nothing, Who knows nothing?</h4>
            <div class="radio">
              <label>
                <input type="radio" name="q_2" id="q_2" value="opt_1" checked>
                John Snow
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_2" id="q_2" value="opt_2">
                Jafar Iqbal
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_2" id="q_2" value="opt_3">
                Don Samdani
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_2" id="q_2" value="opt_4">
                Khaleesi
              </label>
            </div>


            <h4><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> 3. You know nothing, Who knows nothing?</h4>
            <div class="radio">
              <label>
                <input type="radio" name="q_3" id="q_3" value="opt_1" checked>
                John Snow
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_3" id="q_3" value="opt_2">
                Jafar Iqbal
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_3" id="q_3" value="opt_3">
                Don Samdani
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_3" id="q_3" value="opt_4">
                Khaleesi
              </label>
            </div>

            <h4><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> 4. You know nothing, Who knows nothing?</h4>
            <div class="radio">
              <label>
                <input type="radio" name="q_4" id="q_4" value="opt_1" checked>
                John Snow
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_4" id="q_4" value="opt_2">
                Jafar Iqbal
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_4" id="q_4" value="opt_3">
                Don Samdani
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="q_4" id="q_4" value="opt_4">
                Khaleesi
              </label>
            </div>

            <button type="submit" class="btn btn-primary sm-margin-top">Submit</button>
          </form>
        </div><!--/.col+content-->
      </div><!--/.col-->

      <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 sidebar-offcanvas" id="sidebar">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h6><span class="glyphicon glyphicon-flash glyphicon-pad"></span> Go To</h6>
          </div>
          <ul class="list-group">
            <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> ask</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-map-marker glyphicon-pad"></span> activites</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-apple glyphicon-pad"></span> groups</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-check glyphicon-pad"></span> survey</a>
          </ul>
        </div>
      </div><!--/.sidebar-offcanvas-->
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
