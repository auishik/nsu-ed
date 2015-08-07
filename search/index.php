<?php
  require_once("../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_search">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-search glyphicon-pad"></span> Search Results</h1>
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
          <form class="m-margin-bottom">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="User's previous search query">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
          </form>

          <ul class="nav nav-pills">
            <li class="active"><a href="#search_posts" data-toggle="tab"><span class="glyphicon glyphicon-paperclip visible-xs-inline-block"></span><span class="hidden-xs">Posts</span></a></li>
            <li><a href="#search_groups" data-toggle="tab"><span class="glyphicon glyphicon-briefcase visible-xs-inline-block"></span><span class="hidden-xs">Groups</span></a></li>
            <li><a href="#search_surveys" data-toggle="tab"><span class="glyphicon glyphicon-sunglasses visible-xs-inline-block"></span><span class="hidden-xs">Surveys</span></a></li>
            <li><a href="#search_users" data-toggle="tab"><span class="glyphicon glyphicon-user visible-xs-inline-block"></span><span class="hidden-xs">Users</span></a></li>
          </ul><!--/.nav-tabs-->
          <!--pills data-->
          <div class="tab-content xs-margin-top">
            <div class="tab-pane fade active in" id="search_posts">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
              </div>
            </div>
            <!--/#search_posts-->

            <div class="tab-pane fade" id="search_groups">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">CSE 311 Labs <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open glyphicon-pad"></span> public</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">CSE 311 Labs <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-eye-close glyphicon-pad"></span> private</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">CSE 311 Labs <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open glyphicon-pad"></span> public</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">CSE 311 Labs <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open glyphicon-pad"></span> public</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
              </div>
            </div>
            <!--/#search_groups-->

            <div class="tab-pane fade" id="search_surveys">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <p class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                      <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</button>
                    </div>
                  </p>
                </a>
              </div>
            </div>
            <!--/#search_surveys-->

            <div class="tab-pane fade" id="search_users">
              <div class="list-group">
                <a href="#" class="list-group-item"><img class="avatar img-rounded" src="/img/avatar.jpg"> <strong>Jafar Iqbal</strong> <em>@Jafar</em></a>
                <a href="#" class="list-group-item"><img class="avatar img-rounded" src="/img/avatar.jpg"> <strong>Jafar Iqbal</strong> <em>@Jafar</em></a>
                <a href="#" class="list-group-item"><img class="avatar img-rounded" src="/img/avatar.jpg"> <strong>Jafar Iqbal</strong> <em>@Jafar</em></a>
                <a href="#" class="list-group-item"><img class="avatar img-rounded" src="/img/avatar.jpg"> <strong>Jafar Iqbal</strong> <em>@Jafar</em></a>
                <a href="#" class="list-group-item"><img class="avatar img-rounded" src="/img/avatar.jpg"> <strong>Jafar Iqbal</strong> <em>@Jafar</em></a>
              </div>
            </div>
            <!--/#search_users-->
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
