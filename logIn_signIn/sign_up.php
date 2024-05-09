<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../home_page/styles.css">
    <link rel="stylesheet" href="../logIn_signIn/SLstyles.css">
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['errorAsk'])&&$_SESSION['errorAsk']="t")
    echo "<script> window.alert('You need to login before asking question') </script>";

    include "../components/logIn_signIn.php";
    include "../logIn_signIn/ii.php";
 
    ?>
   <?php 
   if(isset($_POST["Susername"])&&isset($_POST["Spassword"])){
$email = $_POST["Susername"];
$password = $_POST["Spassword"];}



if(isset($email)&&isset($password)){

$host = "localhost"; // Hostname
$username = "root"; // Username
$password2 = ""; // Password (leave empty for root user)
$database = "stack"; // Database name
$port = 3390; // Port number

//echo "INSERT INTO `user` (`username`, `password`) VALUES ("."'" . $email."'" .  ","."'" .$password."'". ");";



$connection = mysqli_connect($host, $username, $password2, $database, $port);


// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
try{
if($email !=null && $password!=null){
$chk = mysqli_query($connection,"INSERT INTO `user` (`username`, `password`) VALUES ("."'" . $email."'" .  ","."'" .$password."'". ");");
if($chk){
   $_SESSION['username'] = $email;
    header("Location: 	../questions_page/questions.php"); // Redirect to the welcome page
exit();
}}
else{
    echo "please fill information !!";
}

}catch(mysqli_sql_exception $e) {
   echo "User already exis !!";
   mysqli_close($connection);
}
}

?>

    <script src="../home_page/index.js"></script>
    <script src="../logIn_signIn/SL.js"></script>
</body>
</html>