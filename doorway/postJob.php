<?php
$company = $_POST['company'];
$title = $_POST['title'];
$description = $_POST['description'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$date = date('Y-m-d H:i:s');


$sql = "insert into Listings (company, title, description,city,state,zip) values ('$company','$title','$description','$city','$state',$zip)";
$db = new mysqli('localhost', 'root', '','Doorway') or die("Connect failed: %s\n". $db -> error);
  $products = $db->query($sql);

 ?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Door Way</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <header>
      <a href="index.html">Find Jobs</a>
      <a href="post.html">Post Jobs</a>
      <h1><a href="index.html">Doorway</a></h1>
    </header>

    <section>
        <h1>Job Submitted!</h1>
    </section>
    
  </body>
</html>

