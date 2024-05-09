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

    include "../components/logIn_signIn.php";
    ?>
<?php 
 if(isset($_POST["Lusername"])&&isset($_POST["Lpassword"])){
$email = $_POST["Lusername"];
$password = $_POST["Lpassword"];

  if($email!=null && $password!=null){
$host = "localhost"; // Hostname
$username = "root"; // Username
$password2 = ""; // Password (leave empty for root user)
$database = "stack"; // Database name
$port = 3390; // Port number
$connection = mysqli_connect($host, $username, $password2, $database, $port);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT password FROM user WHERE username = '".$email."'";
$getPass = mysqli_query($connection, $query);

// Check if the query was successful
if ($getPass) {
    // Fetch the result as an associative array
    $result = mysqli_fetch_assoc($getPass);

    // Check if the result is not empty
    if ($result) { 
        // Access the password value from the result array
        $passwords = $result['password'];
        if($passwords == $password){
          $_SESSION['username'] = $email;
          header("Location: 	../questions_page/questions.php"); // Redirect to the welcome page
exit();
        }
        else{
          echo "Password is Wrong !!";
        }
        // Now $password contains the value of the password from the database
    } else {
echo "No user Exist ";
    }
} else {
    // Query failed, handle this case accordingly
    echo "Error: " . mysqli_error($connection);
}

// Don't forget to free the result set when you're done with it
mysqli_free_result($getPass);
mysqli_close($connection);

  } 
  else{
    echo "Please fill information !!";
  }
 }

?>


     <script src="../home_page/index.js"></script>
     <script src="../logIn_signIn/SL.js"></script>
</body>
</html>
