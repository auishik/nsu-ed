<?php
  require_once("../../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Group - NSU-ED</title>
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
<?php require_once("../../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-folder-open glyphicon-pad"></span> CSE 311 Labs <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> report</a></h1>
<?php require_once("../../includes/breadcrumb.php"); ?>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
        <div class="col-lg-12"><!--content-->
          <!--group pills-->
          <ul class="nav nav-pills">
            <li class="active"><a href="#group_posts" data-toggle="tab"><span class="glyphicon glyphicon-question-sign visible-xs-inline-block"></span><span class="hidden-xs">Posts</span></a></li>
            <li><a href="#group_create_post" data-toggle="tab"><span class="glyphicon glyphicon-pencil visible-xs-inline-block"></span><span class="hidden-xs">Create</span></a></li>
            <li><a href="#group_add_member" data-toggle="tab"><span class="glyphicon glyphicon-plus-sign visible-xs-inline-block"></span><span class="hidden-xs">Add</span></a></li>
            <li><a href="#group_search" data-toggle="tab"><span class="glyphicon glyphicon-search visible-xs-inline-block"></span><span class="hidden-xs">Search</span></a></li>
            <li><a href="#group_mission" data-toggle="tab"><span class="glyphicon glyphicon-wrench visible-xs-inline-block"></span><span class="hidden-xs">Mission</span></a></li>
          </ul><!--/.nav-tabs-->
          <!--pills data-->
          <div class="tab-content xs-margin-top">
            <div class="tab-pane fade active in" id="group_posts">
              <div class="list-group">
                <li href="#" class="list-group-item notify">
                  <a href="#">
                    <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account?</h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>

                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> bts</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> css</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> html</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> js</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> jQuery</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> normalize</a>
                  </div>
                </li>
                <li href="#" class="list-group-item">


                  <a href="#">
                    <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account?</h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>

                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> bts</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> css</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> html</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> js</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> jQuery</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> normalize</a>
                  </div>
                </li>
                <li href="#" class="list-group-item">


                  <a href="#">
                    <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account?</h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>

                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> bts</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> css</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> html</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> js</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> jQuery</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> normalize</a>
                  </div>
                </li>
                <li href="#" class="list-group-item">


                  <a href="#">
                    <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account?</h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>

                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> php</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> bts</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> css</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> html</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> js</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> jQuery</a>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> normalize</a>
                  </div>
                </li>
              </div>
            </div><!--/#group_posts-->
            <div class="tab-pane fade" id="group_create_post">
              <form>
                <div class="form-group">
                  <label for="group_title">Title</label>
                  <input type="text" class="form-control" id="group_title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="group_intro">Body</label>
                  <textarea class="form-control" rows="6" id="group_intro"></textarea>
                </div>
                <div class="form-group">
                  <label for="group_tags">Tags</label>
                  <input type="text" class="form-control" id="group_tags" placeholder="php, js, html">
                  <p class="help-block">separate tags with a comma <kbd>,</kbd>.</p>
                </div>
                <button type="submit" class="btn btn-default">Post</button>
              </form>
            </div><!--/#group_create_post-->
            <div class="tab-pane fade" id="group_add_member">
              <form>
                <div class="form-group">
                  <label for="group_search_member">Search for users</label>
                  <input type="text" class="form-control" id="group_search_member" placeholder="Username">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--/#groups_add_member-->
            <div class="tab-pane fade" id="group_search">
              <form>
                <div class="form-group">
                  <label for="groups_search_input">Search for posts</label>
                  <input type="text" class="form-control" id="groups_search_input" placeholder="Post title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--/#groups_mission-->
            <div class="tab-pane fade" id="group_mission">
              <!--plans to add members list-->
              <form>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" rows="4" maxlength="140">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</textarea>
                </div>
                <span id="helpBlock" class="help-block">within 140 characters</span>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="set_private" checked> Set group as private
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--/#groups_search-->
          </div><!--/.tab-content ends-->
          <!--#groups ends-->
        </div><!--/.col+content-->
      </div><!--/.col-->
<?php require_once("../../includes/panel.php"); ?>
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
