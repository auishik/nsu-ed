<?php
  require_once("../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_survey">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-paperclip glyphicon-pad"></span> Post <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> report</a> <a href="#" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-remove"></span> delete</a></h1>
<?php require_once("../includes/breadcrumb.php"); ?>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
        <div class="col-lg-12"><!--content-->
          <!--if solved-->
          <h2 class="errata sm-margin-bottom alert-success text-center"><span class="glyphicon glyphicon-ok"></span> Solved</h2>

          <!--post starts-->
          <div class="post errata bg-info">
            <div class="post-votes">
              <span class="badge">40</span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <button type="button" class="btn btn-success btn-xs"><span class="hidden-xs">vote up </span><span class="glyphicon glyphicon-thumbs-up"></span></button>
                <button type="button" class="btn btn-warning btn-xs"><span class="hidden-xs">vote down </span><span class="glyphicon glyphicon-thumbs-down"></span></button>
              </span>
            </div>
            <h4 class="post-heading">How to do the node.js and js and jQuery and all and all?</h4>
            <p class="post-body">The less/, js/, and fonts/ are the source code for our CSS, JS, and icon fonts (respectively). The dist/ folder includes everything listed in the precompiled download section above. The docs/ folder includes the source code for our documentation, and examples/ of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
            <div class="post-owner text-right">
              asked by <a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> Jafar</a>
            </div>
            <div class="post-tags text-left xs-margin-top">
              <a class="btn btn-xs btn-primary" href="#"><span class="glyphicon glyphicon-tag glyphicon-pad"></span> php</a>
              <a class="btn btn-xs btn-primary" href="#"><span class="glyphicon glyphicon-tag glyphicon-pad"></span> js</a>
              <a class="btn btn-xs btn-primary" href="#"><span class="glyphicon glyphicon-tag glyphicon-pad"></span> html</a>
              <a class="btn btn-xs btn-primary" href="#"><span class="glyphicon glyphicon-tag glyphicon-pad"></span> bts</a>
            </div>
          </div>
          <!--/.post-->

          <div class="comment errata m-margin-top bg-success">
            <div class="comment-best text-success text-center">
              <span class="glyphicon glyphicon-ok glyphicon-pad"></span> Best Answer
            </div>
            <div class="comment-votes">
              <span class="badge">40</span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <button type="button" class="btn btn-success btn-xs"><span class="hidden-xs">vote up </span><span class="glyphicon glyphicon-thumbs-up"></span></button>
                <button type="button" class="btn btn-warning btn-xs"><span class="hidden-xs">vote down </span><span class="glyphicon glyphicon-thumbs-down"></span></button>
                <button type="button" class="btn btn-danger btn-xs"><span class="hidden-xs">report </span><span class="glyphicon glyphicon-remove"></span></button>
              </span>
            </div>
            <h4 class="comment-heading">How to do the node.js and js and jQuery and all and all?</h4>
            <p class="comment-body">The less/, js/, and fonts/ are the source code for our CSS, JS, and icon fonts (respectively). The dist/ folder includes everything listed in the precompiled download section above. The docs/ folder includes the source code for our documentation, and examples/ of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
            <div class="comment-owner text-right">
              comment by <a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> Jafar</a>
            </div>
          </div>

          <div class="comment errata m-margin-top bg-warning">
            <div class="comment-votes">
              <span class="badge">40</span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <button type="button" class="btn btn-success btn-xs"><span class="hidden-xs">vote up </span><span class="glyphicon glyphicon-thumbs-up"></span></button>
                <button type="button" class="btn btn-warning btn-xs"><span class="hidden-xs">vote down </span><span class="glyphicon glyphicon-thumbs-down"></span></button>
                <button type="button" class="btn btn-danger btn-xs"><span class="hidden-xs">report </span><span class="glyphicon glyphicon-remove"></span></button>
              </span>
            </div>
            <h4 class="comment-heading">How to do the node.js and js and jQuery and all and all?</h4>
            <p class="comment-body">The less/, js/, and fonts/ are the source code for our CSS, JS, and icon fonts (respectively). The dist/ folder includes everything listed in the precompiled download section above. The docs/ folder includes the source code for our documentation, and examples/ of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
            <div class="comment-owner text-right">
              comment by <a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> Jafar</a>
            </div>
          </div>
          <div class="m-margin-top comment-input errata">
            <h3>Comment on the post</h3>
            <form>
              <div class="form-group">
                <label for="comment_title">Title</label>
                <input type="text" class="form-control" id="comment_title" placeholder="Comment Title">
              </div>

              <div class="form-group">
                <label for="comment_body">Body</label>
                <textarea class="form-control" maxlength="140">Your comment</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div><!--/.col+content-->
      </div><!--/.col-->
<?php require_once("../includes/panel.php"); ?>
      <div class="col-lg-12 clearfix clear-both"></div>
    </div><!--/row-->
  </div><!--/.container-->

<?php require_once("../includes/footer.php"); ?>

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
