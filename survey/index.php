<?php
  require_once("../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
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

<body id="page_survey">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-sunglasses glyphicon-pad"></span> Surveys</h1>
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
          <!--#survey starts-->
          <!--post pills-->
          <ul class="nav nav-pills">
            <li class="active"><a href="#surveys_recent" data-toggle="tab"><span class="glyphicon glyphicon-play visible-xs-inline-block"></span><span class="hidden-xs">Recent</span></a></li>
            <li><a href="#surveys_trending" data-toggle="tab"><span class="glyphicon glyphicon-fire visible-xs-inline-block"></span><span class="hidden-xs">Trending</span></a></li>
            <li><a href="#surveys_my" data-toggle="tab"><span class="glyphicon glyphicon-briefcase visible-xs-inline-block"></span><span class="hidden-xs">My</span></a></li>
            <li><a href="#surveys_create" data-toggle="tab"><span class="glyphicon glyphicon-pencil visible-xs-inline-block"></span><span class="hidden-xs">Create</span></a></li>
            <li><a href="#surveys_search" data-toggle="tab"><span class="glyphicon glyphicon-search visible-xs-inline-block"></span><span class="hidden-xs">Search</span></a></li>
          </ul><!--/.nav-tabs-->
          <!--pills data-->
          <div class="tab-content xs-margin-top">
            <div class="tab-pane fade active in" id="surveys_recent">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
              </div>
            </div><!--/#surveys_recent-->
            <div class="tab-pane fade" id="surveys_trending">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
              </div>
            </div><!--/#surveys_trending-->
            <div class="tab-pane fade" id="surveys_my">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                    <ul class="list-horizontal list-item-tags-list text-muted">
                      <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                      <li>php, </li>
                      <li>bts, </li>
                      <li>css, </li>
                      <li>html, </li>
                      <li>js, </li>
                      <li>jQuery, </li>
                      <li>normalize</li>
                    </ul>
                  </div>
                </a>
              </div>
            </div><!--/#surveys_my-->
            <div class="tab-pane fade" id="surveys_create">
              <form>
                <div class="form-group">
                  <label for="survey_title">Title</label>
                  <input type="text" class="form-control" id="post_title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="survey_body">Body</label>
                  <textarea class="form-control" maxlength="140" id="post_body" placeholder="short description"></textarea>
                  <p class="help-block">within 140 characters.</p>
                </div>
                <div class="form-group">
                  <label for="survey_tags">Tags</label>
                  <input type="text" class="form-control" id="posts_tags" placeholder="php, js, html">
                  <p class="help-block">separate tags with a comma <kbd>,</kbd>.</p>
                </div>
                <button type="submit" class="btn btn-primary">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
              </form>
            </div><!--/#surveys_ask-->
            <div class="tab-pane fade" id="surveys_search">
              <form>
                <div class="form-group">
                  <label for="surveys_search_input">Search for posts</label>
                  <input type="text" class="form-control" id="surveys_search_input" placeholder="Survey title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--#posts_search-->
          </div><!--/.tab-content ends-->

          <!--/#survey ends-->
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
