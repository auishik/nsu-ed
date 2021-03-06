<?php
  require_once("../includes/head.php");
  if($USERNAME==NULL) jump("/index.php?id=1");

  $POSTID= $_GET["id"];
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
    <h1 class="page-header"><span class="glyphicon glyphicon-paperclip glyphicon-pad"></span> Post <a href="?id=<?php echo "$POSTID&f=rep_post"; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> report</a>
<?php
  $query= "SELECT poster_id FROM post WHERE post_id= $POSTID";
  $result= query($query);
  $row= mysqli_fetch_array($result);
  if($USERID==$row["poster_id"]) {
?>
      <a href="?id=<?php echo "$POSTID&f=del_post"; ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-remove"></span> delete</a></h1>
<?php } ?>

<?php require_once("../includes/breadcrumb.php"); ?>
<?php
  if(isset($_POST["body"])) {
    $body= escape($_POST["body"]);
    $query= "INSERT INTO comment (body,vote,is_best,post_id,commenter_id)";
    $query .= " VALUES ('$body',0,0,$POSTID,$USERID)";
    query($query);
?>
    <div class="alert alert-success alert-dismissible fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="glyphicon glyphicon-thumbs-up glyphicon-pad"></span> Comment successfully added!
    </div>
<?php
  }
  if(isset($_GET["f"])) {
    if($_GET["f"]=="rep_post") {
      //rep_post function response
      $query= "INSERT INTO report_post (post_id,reporter_id) VALUES ($POSTID,$USERID)";
      query($query);
?>
    <div class="alert alert-warning alert-dismissible fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="glyphicon glyphicon-info-sign glyphicon-pad"></span> Post successfully reported!
    </div>
<?php
    } elseif($_GET["f"]=="del_post") {
      //del_post function response
      $query= "DELETE FROM post WHERE post_id= $POSTID";
      query($query);

      $query= "DELETE FROM comment WHERE post_id= $POSTID";
      query($query);
?>
    <div class="alert alert-danger alert-dismissible fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="glyphicon glyphicon-exclamation-sign glyphicon-pad"></span> Post successfully deleted!
    </div>
<?php
    } elseif($_GET["f"]=="up_post") {
      $query= "UPDATE post SET vote= vote+1 WHERE post_id= $POSTID";
      query($query);
    } elseif($_GET["f"]=="down_post") {
      $query= "UPDATE post SET vote= vote-1 WHERE post_id= $POSTID";
      query($query);
    } elseif($_GET["f"]=="up_comment") {
      $cid= $_GET["cid"];
      $query= "UPDATE comment SET vote= vote+1 WHERE comment_id= $cid";
      query($query);
    } elseif($_GET["f"]=="down_comment") {
      $cid= $_GET["cid"];
      $query= "UPDATE comment SET vote= vote-1 WHERE comment_id= $cid";
      query($query);
    } elseif($_GET["f"]=="rep_comment") {
      $cid= $_GET["cid"];
      $query= "INSERT INTO report_comment (comment_id,reporter_id)";
      $query .= " VALUES ($cid,$USERID)";
      query($query);
?>
    <div class="alert alert-warning alert-dismissible fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="glyphicon glyphicon-info-sign glyphicon-pad"></span> Comment successfully reported!
    </div>
<?php
    } elseif($_GET["f"]=="best_comment") {
      //best comment function
      $cid= $_GET["cid"];
      $query= "UPDATE comment SET is_best=1 WHERE comment_id= $cid";
      query($query);
      $query= "UPDATE post SET is_solved=1 WHERE post_id= $POSTID";
      query($query);
    }
  }
?>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
        <div class="col-lg-12"><!--content-->
<?php
  $query= "SELECT vote, title, body, is_solved, time FROM post WHERE post_id = $POSTID";
  $result= query($query);
  $row= mysqli_fetch_array($result);
  $vote= $row["vote"];
  $title= $row["title"];
  $body= $row["body"];
  $is_solved= $row["is_solved"];
  $time= ToDate($row["time"]);

  $query= "SELECT u.username, u.id FROM user u JOIN post p ON (u.id=p.poster_id) WHERE p.post_id= $POSTID";
  $result= query($query);
  $row= mysqli_fetch_array($result);
  $poster= $row["username"];
?>
          <!--if solved-->
<?php
  if($is_solved) {
?>
          <h2 class="errata sm-margin-bottom alert-success text-center"><span class="glyphicon glyphicon-ok"></span> Solved</h2>
<?php } ?>
          <!--post starts-->
          <div class="post errata bg-info">
            <div class="post-votes">
              <span class="badge"><?php echo $vote; ?></span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <a href="?id=<?php echo "$POSTID&f=up_post"; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-thumbs-up"></span> vote up</a></h1>
                <a href="?id=<?php echo "$POSTID&f=down_post"; ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> vote down</a></h1>
              </span>
            </div>
            <h4 class="post-heading"><?php echo $title; ?></h4>
            <p class="post-body"><?php echo $body; ?></p>
            <div class="post-owner text-right">
              asked by <a href="/profile/view?id=<?php echo $row["id"]; ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> <?php echo $poster; ?></a>
<?php echo "on $time"; ?>
            </div>

            <div class="post-tags text-left xs-margin-top">
            <!--/.post-->
<?php
  $query= "SELECT tag_name FROM tag WHERE type= 'post' AND post_id=$POSTID";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
?>
              <a class="btn btn-xs btn-primary" href="#"><span class="glyphicon glyphicon-tag glyphicon-pad"></span> <?php echo $row[0]; ?></a>
<?php } ?>
            </div>
          </div>
<?php
  $query= "SELECT c.comment_id cid, c.vote, c.body, u.username, u.id FROM comment c JOIN user u ON (c.commenter_id=u.id)";
  $query .= " WHERE c.post_id= $POSTID AND c.is_best= 1";
  $result= query($query);
  $row= mysqli_fetch_array($result);
  if(!empty($row["body"])) {
    $cid= $row["cid"];
?>
          <div class="comment errata m-margin-top bg-success">
            <div class="comment-best text-success text-center">
              <span class="glyphicon glyphicon-ok glyphicon-pad"></span> Best Answer
            </div>
            <div class="comment-votes">
              <span class="badge"><?php echo $row["vote"]; ?></span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <a href="?id=<?php echo "$POSTID&f=up_comment&cid=$cid"; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok"></span> mark best</a>
                <a href="?id=<?php echo "$POSTID&f=up_comment&cid=$cid"; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-thumbs-up"></span> vote up</a>
                <a href="?id=<?php echo "$POSTID&f=down_comment&cid=$cid"; ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> vote down</a>
                <a href="?id=<?php echo "$POSTID&f=rep_comment&cid=$cid"; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> report</a>
              </span>
            </div>
            <p class="comment-body sm-margin-top"><?php echo $row["body"]; ?></p>
            <div class="comment-owner text-right">
              comment by <a href="/profile/view?id=<?php echo $row["id"]; ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> <?php echo $row["username"]; ?></a>
            </div>
          </div>
<?php
  }
  $query= "SELECT c.comment_id cid, c.vote, c.body, u.username, u.id FROM comment c JOIN user u ON (c.commenter_id=u.id)";
  $query .= " WHERE c.post_id= $POSTID AND c.is_best= 0";
  $result= query($query);

  while($row= mysqli_fetch_array($result)) {
    $cid= $row["cid"];
?>
          <div class="comment errata m-margin-top bg-warning">
            <div class="comment-votes">
              <span class="badge"> <?php echo $row["vote"]; ?></span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <a href="?id=<?php echo "$POSTID&f=best_comment&cid=$cid"; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok"></span> mark best</a>
                <a href="?id=<?php echo "$POSTID&f=up_comment&cid=$cid"; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-thumbs-up"></span> vote up</a>
                <a href="?id=<?php echo "$POSTID&f=down_comment&cid=$cid"; ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> vote down</a>
                <a href="?id=<?php echo "$POSTID&f=rep_comment&cid=$cid"; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> report</a>
              </span>
            </div>
            <p class="comment-body sm-margin-top"><?php echo $row["body"]; ?></p>
            <div class="comment-owner text-right">
              comment by <a href="/profile/view?id=<?php echo $row["id"]; ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> <?php echo $row["username"]; ?></a>
            </div>
          </div>
<?php } ?>
          <div class="m-margin-top comment-input errata">
            <h3>Comment on the post</h3>
            <form action="index.php?id=<?php echo $POSTID; ?>" method="post">
              <div class="form-group">
                <label for="comment_body">Body</label>
                <textarea class="form-control" name="body" rows="5" placeholder="Your comment"></textarea>
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
