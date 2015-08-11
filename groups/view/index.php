<?php
  require_once("../../includes/head.php");
  require_once("../../includes/functions.php");
  if($USERNAME==NULL) jump("/index.php?id=1");

  $GID= $_GET["id"];

  $query= "SELECT owner_id FROM groups WHERE group_id= $GID";
  $result= query($query);
  $row= mysqli_fetch_array($result);
  //checking whether current user is owner
  if($row["owner_id"]==$USERID) $is_owner= true;
  else $is_owner= false;
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
<?php
  $query= "SELECT group_name FROM groups WHERE group_id= $GID";
  $result= query($query);
  $row= mysqli_fetch_array($result);


?>
    <h1 class="page-header"><span class="glyphicon glyphicon-folder-open glyphicon-pad"></span> <?php echo $row["group_name"]; ?> <a href="/groups/view?id=<?php echo "$GID&f=rep_group"; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> report</a></h1>
<?php require_once("../../includes/breadcrumb.php"); ?>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
<?php
  create_post($GID,$USERID);
  add_group_user($GID);

  if(isset($_GET["f"]) && $_GET["f"]=="rep_group") {
    $query= "INSERT INTO report_group VALUES (NULL,$GID,$USERID)";
    query($query);
?>
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <p class="text-info bg-info errata"><?php echo "Group reported."; ?></p>
      </div><!--/.column-->
<?php } ?>
        <div class="col-lg-12"><!--content-->
          <!--group pills-->
          <ul class="nav nav-pills">
            <li class="active"><a href="#group_posts" data-toggle="tab"><span class="glyphicon glyphicon-question-sign visible-xs-inline-block"></span><span class="hidden-xs">Posts</span></a></li>
            <li><a href="#group_create_post" data-toggle="tab"><span class="glyphicon glyphicon-pencil visible-xs-inline-block"></span><span class="hidden-xs">Create</span></a></li>
            <li><a href="#group_search" data-toggle="tab"><span class="glyphicon glyphicon-search visible-xs-inline-block"></span><span class="hidden-xs">Search</span></a></li>
<?php
  if($is_owner) {
?>
            <li><a href="#group_add_member" data-toggle="tab"><span class="glyphicon glyphicon-plus-sign visible-xs-inline-block"></span><span class="hidden-xs">Add</span></a></li>
            <li><a href="#group_mission" data-toggle="tab"><span class="glyphicon glyphicon-wrench visible-xs-inline-block"></span><span class="hidden-xs">Mission</span></a></li>
<?php } ?>
          </ul><!--/.nav-tabs-->
          <!--pills data-->
          <div class="tab-content xs-margin-top">
            <div class="tab-pane fade active in" id="group_posts">
              <div class="list-group">
<?php
  $query= "SELECT post_id, title, is_solved, poster_id FROM post WHERE group_id = $GID";
  $result= query($query);
  while($row= mysqli_fetch_array($result)) {
?>
                <li href="#" class="list-group-item notify">
                  <a href="/post/?id=<?php echo $row["post_id"]; ?>">
                    <h4 class="list-group-item-heading xs-margin-bottom"><?php echo $row["title"]; ?></h4>
                  </a>
                  <div class="list-group-item-text">
<?php
    $post_id= $row["post_id"];
    $query= "SELECT u.username FROM post p JOIN user u ON (p.poster_id=u.id) WHERE p.post_id= $post_id";
    $res= query($query);
    $name= mysqli_fetch_array($res);
?>
                    <div class="btn-group btn-group-sm btn-group-xs-in">
<?php
    if($row["is_solved"]) {
?>
                      <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span><?php echo "solved"; ?></a>
<?php } else { ?>
                      <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open glyphicon-pad"></span><?php echo "unsolved"; ?></a>
<?php } ?>
                      <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span><?php echo $name["username"];  ?></a>
                    </div>
<?php
    $query= "SELECT tag_name FROM tag WHERE post_id= '$post_id' AND type= 'post'";
    $res= query($query);
    while($tags= mysqli_fetch_array($res)) {
?>

                    <a href="#" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> <?php echo $tags["tag_name"]; ?></a>
<?php   } ?>
                  </div>
                </li>
<?php
      }
?>
              </div>
            </div><!--/#group_posts-->
            <div class="tab-pane fade" id="group_create_post">
              <form action="index.php?id=<?php echo $GID; ?>" method="post">
                <div class="form-group">
                  <label for="group_title">Title</label>
                  <input type="text" class="form-control" name="post_title" id="group_title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="group_intro">Body</label>
                  <textarea class="form-control" rows="6" name="post_body" id="group_intro"></textarea>
                </div>
                <div class="form-group">
                  <label for="group_tags">Tags</label>
                  <input type="text" class="form-control" name="post_tags" id="group_tags" placeholder="php, js, html">
                  <p class="help-block">separate tags only with a comma <kbd>,</kbd>.</p>
                </div>
                <button type="submit" class="btn btn-default">Post</button>
              </form>
            </div><!--/#group_create_post-->
            <div class="tab-pane fade" id="group_add_member">
              <form action="index.php?id=<?php echo $GID; ?>" method="post">
                <div class="form-group">
                  <label for="group_search_member">Search for users</label>
                  <input type="text" class="form-control" name="add_user" id="group_search_member" placeholder="Username">
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
<?php
  $query= "SELECT description FROM groups WHERE group_id= $GID";
  $result= query($query);
  $row= mysqli_fetch_array($result);
?>
              <form action="index.php?id=<?php echo $GID; ?>" method="post">
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="update_group_description" rows="4" maxlength="140"><?php echo $row["description"]; ?></textarea>
                </div>
                <span id="helpBlock" class="help-block">within 140 characters</span>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="group_private" value="set_private" checked> Set group as private
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
