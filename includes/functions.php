<?php
  function CreatePost($group,$userid) {
    if(isset($_POST["post_title"])) {
      $title= $_POST["post_title"];
      $body= $_POST["post_body"];
      $tags= $_POST["post_tags"];
      $time= time();

      $query= "INSERT INTO post (title,body,vote,is_solved,group_id,poster_id,time)";
      $query .= " VALUES ('$title','$body',0,0,$group,$userid,$time)";
      query($query);
?>
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <p class="text-info bg-info errata">Post created!</p>
      </div><!--/.column-->
<?php
    }
  }

  function add_group_user($group) {
    if(isset($_POST["add_user"])) {
      $add_user= $_POST["add_user"];
      $query= "SELECT id FROM user WHERE username= '$add_user'";
      $result= query($query);
      $row= mysqli_fetch_array($result);
      $userid= $row["id"];
      $query= "INSERT INTO group_member VALUES ($userid,$group)";
      query($query);
?>
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <p class="text-info bg-info errata"><?php echo $add_user . " added to the group."; ?></p>
      </div><!--/.column-->
<?php
    }
  }

  function update_group($group) {
    if(isset($_POST["update_group_description"])) {
      $body= $_POST["update_group_description"];

      $query= "UPDATE groups SET description= $body WHERE group_id= $group";
      query($query);
    }
    if(isset($_POST["group_private"])) {
      $query= "UPDATE groups SET is_private= 1 WHERE group_id= $group";
      query($query);
    }
?>
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <p class="text-info bg-info errata"><?php echo "Group info updated!"; ?></p>
      </div><!--/.column-->
<?php
  }

  function CreateGroup($user) {
    if(isset($_POST["group_title"])) {
      $title= $_POST["group_title"];
      $body= $_POST["group_body"];
      $tags= $_POST["group_tags"];
      if(isset($_POST["group_private"])) $is_private= 1;
      else $is_private= 0;
      $time= time();

      $query= "INSERT INTO groups (group_name,description,owner_id,time,is_private)";
      $query .= " VALUES ('$title','$body',$user,$time,$is_private)";
      query($query);
?>
    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
      <p class="text-info bg-info errata">Group created!</p>
    </div><!--/.column-->
<?php
    }
  }
?>
