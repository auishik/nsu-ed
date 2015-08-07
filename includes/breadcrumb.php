<div class="content-block">
  <ol class="breadcrumb">
    <!--<li><a href="#">Home</a></li>
    <li><a href="#">Library</a></li>
    <li class="active">Data</li> -->
<?php
  $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
  $numItems = count($crumbs);
  $i=0;

  foreach($crumbs as $crumb) {
      $temp= ucfirst(str_replace(array(".php","_"),array(""," "),$crumb));
      if(++$i=== $numItems-1) {
        echo "<li class=\"active\">$temp</li>";
        $current= $temp; //for right panel's info
      } else echo "<li><a href=\"#\">$temp</a></li>";
  }
?>
  </ol>
</div>
