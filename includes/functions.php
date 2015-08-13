<?php
  function CreatePost($group,$userid) {
    if(isset($_POST["post_title"])) {
      $title= escape($_POST["post_title"]);
      $body= escape($_POST["post_body"]);
      $time= time();

      $query= "INSERT INTO post (title,body,vote,is_solved,group_id,poster_id,time)";
      $query .= " VALUES ('$title','$body',0,0,$group,$userid,$time)";
      query($query);

      //tag processor
      $tags= $_POST["post_tags"];
      if(!empty($tags)) {
        $query= "SELECT post_id FROM post WHERE time= $time"; //getting id of last added post
        $result= query($query);
        $row= mysqli_fetch_array($result);
        AddTag($tags,$row["post_id"],"post");
      }
?>
    <div class="alert alert-success alert-dismissible fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="glyphicon glyphicon-ok glyphicon-pad"></span> Post successfully created!
    </div>
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
    <div class="alert alert-success alert-dismissible fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="glyphicon glyphicon-ok glyphicon-pad"></span> Group user successfully created!
    </div>
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
    <div class="alert alert-success alert-dismissible fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="glyphicon glyphicon-ok glyphicon-pad"></span> Group successfully updated!
    </div>
<?php
  }

  function CreateGroup($user) {
    if(isset($_POST["group_title"])) {
      $title= $_POST["group_title"];
      $body= $_POST["group_body"];
      if(isset($_POST["group_private"])) $is_private= 1;
      else $is_private= 0;
      $time= time();

      $query= "INSERT INTO groups (group_name,description,owner_id,time,is_private)";
      $query .= " VALUES ('$title','$body',$user,$time,$is_private)";
      query($query);

      //tag processor
      $tags= $_POST["group_tags"];
      if(!empty($tags)) {
        $query= "SELECT group_id FROM groups WHERE time= $time"; //getting id of last added post
        $result= query($query);
        $row= mysqli_fetch_array($result);
        AddTag($tags,$row["group_id"],"group");
      }

?>
    <div class="alert alert-success alert-dismissible fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="glyphicon glyphicon-ok glyphicon-pad"></span> Group successfully created!
    </div>
<?php
    }
  }

  function AddTag($str,$id,$type) {
    $str=preg_replace('/\s+/', '', $str);
    $tags= explode(",",$str);

    foreach ($tags as $value) {
      $value= strtolower($value);
      $query= "INSERT INTO tag VALUES ('$value',$id,'$type')";
      query($query);
    }
  }
?>
