<?php
  require_once("../includes/head.php");
  require_once("../includes/functions.php");
  /*session_start();
  if(isset($_SESSION["username"])) $USERNAME= $_SESSION["username"];
  else $USERNAME= NULL;
  $USERID= GetId($USERNAME);*/
  if($USERNAME==NULL) jump("/index.php?id=1");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_home">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-home glyphicon-pad"></span> Home</h1>
<?php require_once("../includes/breadcrumb.php"); ?>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
<?php CreatePost(0,$USERID); ?>
<?php CreateGroup($USERID); ?>
        <div class="col-lg-12"><!--content-->
          <!--#posts starts-->

          <h2 class="xs-margin-bottom"><span class="glyphicon glyphicon-paperclip glyphicon-pad"></span> Posts</h2>
          <!--post pills-->
          <ul class="nav nav-pills">
            <li class="active"><a href="#posts_recent" data-toggle="tab"><span class="glyphicon glyphicon-play visible-xs-inline-block"></span><span class="hidden-xs">Recent</span></a></li>
            <li><a href="#posts_trending" data-toggle="tab"><span class="glyphicon glyphicon-fire visible-xs-inline-block"></span><span class="hidden-xs">Trending</span></a></li>
            <li><a href="#posts_quirks" data-toggle="tab"><span class="glyphicon glyphicon-apple visible-xs-inline-block"></span><span class="hidden-xs">Quirks</span></a></li>
            <li><a href="#posts_ask" data-toggle="tab"><span class="glyphicon glyphicon-question-sign visible-xs-inline-block"></span><span class="hidden-xs">Ask</span></a></li>
            <li><a href="#posts_search" data-toggle="tab"><span class="glyphicon glyphicon-search visible-xs-inline-block"></span><span class="hidden-xs">Search</span></a></li>
          </ul><!--/.nav-tabs-->
          <!--pills data-->
          <div class="tab-content xs-margin-top">
            <div class="tab-pane fade active in" id="posts_recent">
              <div class="list-group">
<?php
  $query= "SELECT post_id, title, is_solved, poster_id FROM post ORDER BY time DESC LIMIT 10";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
    $poster= $row["poster_id"];
    $query= "SELECT username FROM user WHERE id=$poster";
    $res= query($query);
    $out= mysqli_fetch_array($res);
?>
                <li href="#" class="list-group-item">


                  <a href="/post/?id=<?php echo $row["post_id"];?>">
                    <h4 class="list-group-item-heading xs-margin-bottom"><?php echo $row["title"]; ?></h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
<?php
    if($row["is_solved"]) {
?>
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> Solved</button>
<?php } ?>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> <?php echo $out[0]; ?></button>
                    </div>
<?php
    $post_id= $row["post_id"];
    $query= "SELECT tag_name FROM tag WHERE post_id=$post_id AND type='post'";
    $res= query($query);
    while($out= mysqli_fetch_array($res)) {
?>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> <?php echo $out["tag_name"]; ?></a>
<?php } ?>
                  </div>
                </li>
<?php } ?>
              </div>
            </div><!--#posts_recent-->
            <div class="tab-pane fade" id="posts_trending">
              <div class="list-group">
<?php //trending post
  $query= "SELECT post_id, title, is_solved, poster_id FROM post ORDER BY time DESC LIMIT 10";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
    $poster= $row["poster_id"];
    $query= "SELECT username FROM user WHERE id=$poster";
    $res= query($query);
    $out= mysqli_fetch_array($res);
?>
                <li href="#" class="list-group-item">


                  <a href="/post/?id=<?php echo $row["post_id"];?>">
                    <h4 class="list-group-item-heading xs-margin-bottom"><?php echo $row["title"]; ?></h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
<?php
    if($row["is_solved"]) {
?>
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> Solved</button>
<?php } ?>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> <?php echo $out[0]; ?></button>
                    </div>
<?php
    $post_id= $row["post_id"];
    $query= "SELECT tag_name FROM tag WHERE post_id=$post_id AND type='post'";
    $res= query($query);
    while($out= mysqli_fetch_array($res)) {
?>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> <?php echo $out["tag_name"]; ?></a>
<?php } ?>
                  </div>
                </li>
<?php } ?>
              </div>
            </div><!--#posts_trending-->
            <div class="tab-pane fade" id="posts_quirks">
              <div class="list-group">
<?php
  $query= "SELECT p.post_id, p.title, p.is_solved, p.poster_id FROM post p join comment c ON (p.POST_ID=c.POST_ID) ";
  $query.= "GROUP BY p.post_id ORDER BY COUNT(c.COMMENT_ID) DESC";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
    $poster= $row["poster_id"];
    $query= "SELECT username FROM user WHERE id=$poster";
    $res= query($query);
    $out= mysqli_fetch_array($res);
?>
                <li href="#" class="list-group-item">


                  <a href="#">
                    <h4 class="list-group-item-heading xs-margin-bottom"><?php echo $row["title"]; ?></h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
<?php
    if($row["is_solved"]) {
?>
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> Solved</button>
<?php } ?>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> <?php echo $out["username"]; ?></button>
                    </div>
<?php
    $post_id= $row["post_id"];
    $query= "SELECT tag_name FROM tag WHERE post_id=$post_id AND type='post'";
    $res= query($query);
    while($out= mysqli_fetch_array($res)) {
?>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> <?php echo $out["tag_name"]; ?></a>
<?php } ?>
                   </div>
                </li>
<?php } ?>
              </div>
            </div><!--#posts_quirks-->
            <div class="tab-pane fade" id="posts_ask">
              <form action="index.php" method="post">
                <div class="form-group">
                  <label for="post_title">Title</label>
                  <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="post_body">Body</label>
                  <textarea class="form-control" rows="6" name="post_body" id="post_body"></textarea>
                </div>
                <div class="form-group">
                  <label for="posts_tags">Tags</label>
                  <input type="text" class="form-control" name="post_tags" id="posts_tags" placeholder="php, js, html">
                  <p class="help-block">separate tags with a comma <kbd>,</kbd>.</p>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div><!--#posts_ask-->
            <div class="tab-pane fade" id="posts_search">
              <form>
                <div class="form-group">
                  <label for="posts_search_input">Search for posts</label>
                  <input type="text" class="form-control" id="posts_search_input" placeholder="Post title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--#posts_search-->
          </div><!--/.tab-content ends-->

          <!--#posts ends-->
          <!--#groups starts-->

          <h2 class="xs-margin-bottom"><span class="glyphicon glyphicon-folder-open glyphicon-pad"></span> Groups</h2>
          <!--post pills-->
          <ul class="nav nav-pills">
            <li class="active"><a href="#groups_trending" data-toggle="tab"><span class="glyphicon glyphicon-fire visible-xs-inline-block"></span><span class="hidden-xs">Trending</span></a></li>
            <li><a href="#groups_my" data-toggle="tab"><span class="glyphicon glyphicon-briefcase visible-xs-inline-block"></span><span class="hidden-xs">My</span></a></li>
            <li><a href="#groups_create" data-toggle="tab"><span class="glyphicon glyphicon-pencil visible-xs-inline-block"></span><span class="hidden-xs">Create</span></a></li>
            <li><a href="#groups_search" data-toggle="tab"><span class="glyphicon glyphicon-search visible-xs-inline-block"></span><span class="hidden-xs">Search</span></a></li>
          </ul><!--/.nav-tabs-->
          <!--pills data-->
          <div class="tab-content xs-margin-top">
            <div class="tab-pane fade active in" id="groups_trending">
              <div class="list-group">
<?php
  $query= "SELECT group_id, group_name, is_private, owner_id FROM groups ORDER BY TIME LIMIT 10";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
    $group_id= $row["group_id"];
?>
                <li href="#" class="list-group-item">
                  <a href="/groups/view/?id=<?php echo $group_id; ?>">
                    <h4 class="list-group-item-heading xs-margin-bottom"><?php echo $row["group_name"]; ?></h4>
                  </a>
                  <div class="list-group-item-text list-buttons">
<?php
  if($row["is_private"]) $private= "private";
  else $private= "public";
?>
        <a href="#" class="btn btn-warning btn-sm btn-xs-in xs-margin-bottom"><span class="glyphicon glyphicon-eye-open glyphicon-pad"></span> <?php echo $private; ?></a>
<?php
    $group_id= $row["group_id"];
    $query= "SELECT tag_name FROM tag WHERE post_id=$group_id AND type='group'";
    $res= query($query);
    while($out= mysqli_fetch_array($res)) {
?>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> <?php echo $out["tag_name"]; ?></a>
<?php } ?>
                  </div>
                </li>
<?php } ?>

              </div>
            </div><!--/#groups_trending-->
            <div class="tab-pane fade" id="groups_my">
              <div class="list-group">
<?php
  $query= "SELECT group_id, group_name, is_private FROM groups WHERE owner_id= $USERID ORDER BY TIME LIMIT 10";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
?>
                <li href="#" class="list-group-item">
                  <a href="#">
                    <h4 class="list-group-item-heading xs-margin-bottom"><?php echo $row["group_name"]; ?></h4>
                  </a>
                  <div class="list-group-item-text list-buttons">
<?php
  if($row["is_private"]) $private= "private";
  else $private= "public";
?>
        <a href="#" class="btn btn-warning btn-sm btn-xs-in xs-margin-bottom"><span class="glyphicon glyphicon-eye-open glyphicon-pad"></span> <?php echo $private; ?></a>
<?php
    $group_id= $row["group_id"];
    $query= "SELECT tag_name FROM tag WHERE post_id=$group_id AND type='group'";
    $res= query($query);
    while($out= mysqli_fetch_array($res)) {
?>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> <?php echo $out["tag_name"]; ?></a>
<?php } ?>
                  </div>
                </li>
<?php } ?>
              </div>
            </div><!--/#groups_my-->
            <div class="tab-pane fade" id="groups_create">
              <form action="index.php" method="post">
                <div class="form-group">
                  <label for="group_title">Title</label>
                  <input type="text" class="form-control" name="group_title" id="group_title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="group_intro">Description</label>
                  <textarea class="form-control" maxlength="140" name="group_body" id="group_intro"></textarea>
                  <p class="help-block">within 140 characters.</p>
                </div>
                <div class="form-group">
                  <label for="group_tags">Tags</label>
                  <input type="text" class="form-control" name="group_tags" id="group_tags" placeholder="php, js, html">
                  <p class="help-block">separate tags with a comma <kbd>,</kbd>.</p>
                </div>
                <div class="checkbox">
                  <label for="group_private">
                    <input type="checkbox" name="group_private" id="group_private"> private
                  </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div><!--#posts_ask-->
            <div class="tab-pane fade" id="groups_search">
              <form>
                <div class="form-group">
                  <label for="groups_search_input">Search for groups</label>
                  <input type="text" class="form-control" id="groups_search_input" placeholder="Group title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--/#groups_search-->
          </div><!--/.tab-content ends-->

          <!--#groups ends-->

          <!--#survey starts-->

          <h2 class="xs-margin-bottom"><span class="glyphicon glyphicon-sunglasses glyphicon-pad"></span> Surveys</h2>
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
<?php
  $query= "SELECT survey_id, survey_name, owner_id, count FROM survey ORDER BY TIME DESC LIMIT 10";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
    $sid= $row["survey_id"];
    $owner= $row["owner_id"];
    $query= "SELECT username FROM user WHERE id=$owner";
    $res= query($query);
    $out= mysqli_fetch_array($res);
?>
                <li href="#" class="list-group-item">
                  <a href="/survey/view/?id=">
                    <h4 class="list-group-item-heading xs-margin-bottom"><?php echo $row["survey_name"]; ?></h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> <?php echo $row["count"]; ?></button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> <?php echo $out[0]; ?></button>
                    </div>
<?php
      $survey_id= $row["survey_id"];
      $query= "SELECT tag_name FROM tag WHERE post_id=$survey_id AND type='survey'";
      $res= query($query);
      while($out= mysqli_fetch_array($res)) {
?>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> <?php echo $out["tag_name"]; ?></a>
<?php } ?>
                  </div>
                </li>
<?php } ?>

              </div>
            </div><!--/#surveys_recent-->
            <div class="tab-pane fade" id="surveys_trending">
              <div class="list-group">
<li href="#" class="list-group-item">
                  <a href="#">
                    <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account?</h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
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
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
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
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
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
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
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
            </div><!--/#surveys_trending-->
            <div class="tab-pane fade" id="surveys_my">
              <div class="list-group">
<?php
  $query= "SELECT survey_id, survey_name, owner_id FROM survey WHERE owner_id=$USERID ORDER BY TIME DESC LIMIT 10";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
    $sid= $row["survey_id"];
?>
                <li href="#" class="list-group-item">
                  <a href="/survey/view/?id=">
                    <h4 class="list-group-item-heading xs-margin-bottom"><?php echo $row["survey_name"]; ?></h4>
                  </a>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in">
                      <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star glyphicon-pad"></span> 48 stars</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
<?php
      $survey_id= $row["survey_id"];
      $query= "SELECT tag_name FROM tag WHERE post_id=$survey_id AND type='survey'";
      $res= query($query);
      while($out= mysqli_fetch_array($res)) {
?>
                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> <?php echo $out["tag_name"]; ?></a>
<?php } ?>
                  </div>
                </li>
<?php } ?>
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
  <!--page unspecific-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="/js/jquery-1.11.3.min.js"><\/script>')
  </script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
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
</body>

</html>
