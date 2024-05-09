<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../home_page/styles.css">
    <link rel="stylesheet" href="Qstyles.css">
 
</head>
<body>
    <!-- here is the header -->
<?php 
/*
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../logIn_signIn/sign_up.php"); // Redirect to the welcome page
    
    exit();
}
*/
include "../components/header.php";
include "../components/static_menu.html";
?>

<h1 id="allQ">All Questions</h1>
    <p id="numberOfQ">24,129,421 questions</p>
    <form action="questions.php" method="post">
        <!-- add_click function for testing purposes  -->
      <input type="submit" value="Ask Question" id="askButton" name="askQ"/>
      </form>
     
      <?php
      if (session_status() == PHP_SESSION_NONE)
              session_start(); // Start the session if it's not already started
if(isset($_POST['askQ'])){
if(!isset($_SESSION['username'])){
    $_SESSION['errorAsk'] = "t";
header("Location:../logIn_signIn/sign_up.php");
exit();
}    
else{
    header("Location:../ask_question/indexx.php");
    exit();

}
}
     include "../components/programmingtips.html";
     ?>
<script src='../home_page/index.js'></script>
      <script src='jj.js'></script>
</body>
</html>