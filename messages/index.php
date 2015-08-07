<?php
  require_once("../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Message - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_message">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-inbox glyphicon-pad"></span> Messages</h1>
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
          <!--#message starts-->
          <!--message pills-->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#msg_conversation" data-toggle="tab"><span class="glyphicon glyphicon-inbox visible-xs-inline-block"></span><span class="hidden-xs">Inbox</span></a></li>
            <li><a href="#msg_compose" data-toggle="tab"><span class="glyphicon glyphicon-pencil visible-xs-inline-block"></span><span class="hidden-xs">Create</span></a></li>
            <li><a href="#msg_search" data-toggle="tab"><span class="glyphicon glyphicon-search visible-xs-inline-block"></span><span class="hidden-xs">Search</span></a></li>
          </ul><!--/.nav-tabs-->
          <!--pills data-->
          <div class="tab-content tab-bordered">
            <div class="tab-pane fade active in" id="msg_conversation">
              <div class="row clearfix">
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2" id="msg_contact"><!--
                  <div class="list-group">
                    <a href="#Jafar" class="list-group-item active" data-toggle="tab">Jafar</a>
                    <a href="#Mansur" class="list-group-item" data-toggle="tab">Mansur</a>
                    <a href="#Auishik" class="list-group-item" data-toggle="tab">Auishik</a>
                    <a href="#Liton" class="list-group-item" data-toggle="tab">Liton</a>
                    <a href="#Nodi" class="list-group-item" data-toggle="tab">Nodi</a>
                    <a href="#Liam" class="list-group-item" data-toggle="tab">Liam</a>
                    <a href="#Naim" class="list-group-item" data-toggle="tab">Naim</a>
                    <a href="#Yahoo" class="list-group-item" data-toggle="tab">Yahoo</a>
                    <a href="#Kryp" class="list-group-item" data-toggle="tab">Kryp</a>
                    <a href="#Yalen" class="list-group-item" data-toggle="tab">Yalen</a>
                  </div>-->
                  <div class="list-group">
                    <a href="#Jafar" class="list-group-item active">Jafar</a>
                    <a href="#Mansur" class="list-group-item">Mansur</a>
                    <a href="#Auishik" class="list-group-item">Auishik</a>
                    <a href="#Liton" class="list-group-item">Liton</a>
                    <a href="#Nodi" class="list-group-item">Nodi</a>
                    <a href="#Liam" class="list-group-item">Liam</a>
                    <a href="#Naim" class="list-group-item">Naim</a>
                    <a href="#Yahoo" class="list-group-item">Yahoo</a>
                    <a href="#Kryp" class="list-group-item">Kryp</a>
                    <a href="#Yalen" class="list-group-item">Yalen</a>
                  </div>
                </div>
                <div class="col-xs-8 col-sm-9 col-md-9 col-lg-10 clearfix" id="msg_inbox"><!--msg content-->
                  <div class="msg_recieved pull-left clear-both bg-success">Hi! Jafar. Are you free tonight? I was thinking of a coding fest. What do you think?
                  </div>
                  <div class="msg_sent pull-right clear-both bg-warning">Well Hi! How are you? How do you do? and How does the did do in doodle do. Ba dum tass.
                  </div>
                  <div class="msg_recieved pull-left clear-both bg-success">Hi! Jafar. Are you free tonight? I was thinking of a coding fest. What do you think?
                  </div>
                  <div class="msg_sent pull-right clear-both bg-warning">Well Hi! How are you? How do you do? and How does the did do in doodle do. Ba dum tass.
                  </div>
                  <div class="msg_recieved pull-left clear-both bg-success">Hi! Jafar. Are you free tonight? I was thinking of a coding fest. What do you think?
                  </div>
                  <div class="msg_sent pull-right clear-both bg-warning">Well Hi! How are you? How do you do? and How does the did do in doodle do. Ba dum tass.
                  </div>
                  <div class="msg_sent pull-right clear-both bg-warning">Well Hi! How are you? How do you do? and How does the did do in doodle do. Ba dum tass.
                  </div>
                </div>
              </div>
              <div class="row sm-padding-top msg_option">
                <div class="btn-group pull-right">
                  <button type="button" class="btn btn-default">reply</button>
                  <button type="button" class="btn btn-default">delete</button>

                  <div class="btn-group dropup">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      More
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Settings</a></li>
                      <li><a href="#">Refresh</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!--/#msg_conversation-->
            <div class="tab-pane fade" id="msg_compose">
              <form>
                <div class="form-group">
                  <label for="group_title">To</label>
                  <input type="text" class="form-control" id="group_title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="group_intro">Message</label>
                  <textarea class="form-control" maxlength="140" id="group_intro"></textarea>
                  <p class="help-block">within 140 characters.</p>
                </div>
                <button type="submit" class="btn btn-primary">Send <span class="glyphicon glyphicon-chevron-right"></span></button>
              </form>
            </div><!--#msg_compose-->
            <div class="tab-pane fade" id="msg_search">
              <form>
                <div class="form-group">
                  <label for="groups_search_input">Search for messages</label>
                  <input type="text" class="form-control" id="groups_search_input" placeholder="Group title">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
              </form>
            </div><!--/#msg_search-->
          </div><!--/.tab-content ends-->

          <!--#groups ends-->
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
