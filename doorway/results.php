<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Entry Way</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <header>
      <a href="index.html">Find Jobs</a>
      <a href="post.html">Post Jobs</a>
      <h1><a href="index.html">Doorway</a></h1>
    </header>
<section>
    <div id="resultsDiv">
   <?php
   $title = $_GET['jobTitle'];
   $location = $_GET['location'];

   $sql = "select * from Listings";
   $db = new mysqli('localhost', 'root', '','Doorway') or die("Connect failed: %s\n". $db -> error);



   if($title == "" && $location == "" ){
    echo "no results";
    } else if($title == ""){

   $sql = "select * from Listings where city like '%$location%' or state like '%$location%' or zip like '%$location%' ";
   }else if($location == ""){
    $sql = "select * from Listings where company like '%$title%' or description like '%$title%' or title like '%$title%' ";
   }else{
    echo "if number 4";
    $sql = "select * from Listings where (company like '%$title%' or description like '%$title%' or title like '%$title%') and (city like '%$location%' or state like '%$location%' or zip like '%$location%' )";
   }

   $results = $db->query($sql);

   while($result = $results->fetch_assoc()) {  

    $company = $result['company'];
    $title = $result['title'];
    $description = $result['description'];
    $city = $result['city'];
    $state = $result['state'];
    $zip = $result['zip'];
    $area = "$city , $state"
    ?>

     <div class="result">
      <h1><?= $title; ?></h1>
       <h4><?= $company; ?></h4>
        <h5><?= $area ?></h5>
        <p><?= $description; ?></p>
     </div>

<?php
   }


    ?>
    </div>
</section>
  </body>
</html>
