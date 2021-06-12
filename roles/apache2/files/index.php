<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>###   ANSIBLE LAMP INSTALLATION LAB ###</title>
  </head>
  
  <style>
  body {
    height: 100vh;
    display: flex;
    align-items: center;
    background: linear-gradient(to top left, #28b487, #7dd56f);
  }
  h1 {
    font-family: sans-serif;
    font-size: 50px;
    line-height: 1.3;
    width: 100%;
    padding: 30px;
    text-align: center;
    color: black;
  }
</style>
<body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>
