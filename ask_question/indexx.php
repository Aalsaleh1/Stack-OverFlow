<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../home_page/styles.css">
    <link rel="stylesheet" href="../ask_question/AQStyles.css">

    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['username'])){
if(isset($_POST['Question_title'])&&isset($_POST['Question_description']))
{
    if(isset($_POST['Question_submit'])){
    if($_POST['Question_title']!=null&&$_POST['Question_description']!=null){
    $des = $_POST['Question_description'];
    $title = $_POST['Question_title'];
    $host = "localhost"; // Hostname
$username = "root"; // Username
$password2 = ""; // Password (leave empty for root user)
$database = "stack"; // Database name
$port = 3390; // Port number
$user = $_SESSION['username'];
$connection = mysqli_connect($host, $username, $password2, $database, $port);
if (!$connection) 
    die("Connection failed: " . mysqli_connect_error());
$query = "INSERT INTO `question` (`title`, `description`, `username`) VALUES ('$title', '$des', '$user')";
$chk = mysqli_query($connection,$query);
if($chk)
{
    header("Location: ../questions_page/questions.php");
    mysqli_close($connection);
    exit();
}
}else{
    echo "<script> window.alert('fill information ');  </script>";

 }
}   
}

    }else{
        echo "<script> window.alert('You are not loged in ');  </script>";
        header("Location: ../logIn_signIn/log_in.php");
        exit();
    }
    include "../components/header.php";
    include "../components/menu.php";?>
    <h2 id="ask_qiestion" class="">Ask Question</h2>
    <form action="../ask_question/indexx.php" method="post">
    <div id="title" class="purple_card"> 
        <label id="titlee" class="leftM f-21">Title:</label> <br>
        <input type="text" name="Question_title" id="title_bar">
    </div>
    <div id="description_" class="purple_card">
        <label  class="leftM f-21">enter the description:</label><br>
        <div class="center"><textarea name="Question_description" id="quetion_description_ask" cols="30" rows="10"></textarea></div>
    </div>
    <input type="submit" value="submit" id="submotB" name="Question_submit">
    </form>
    <section></section>
    <script src="../home_page/index.js"></script>
</body>
</html>