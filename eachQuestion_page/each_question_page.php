<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../home_page/styles.css">
    <link rel="stylesheet" href="../eachQuestion_page/EQStyles.css">
    <link rel="stylesheet" href="../questions_page/Qstyles.css">
</head>
<body>
    <?php include '../components/header.php';
   include "../components/menu.php";
     ?>
   <div id="divxx">
   <h2 id="title_of_question">How do I undo the most recent local commits in Git?</h2>


<p id="Q_description" class="max">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempora maxime nam quibusdam aspernatur minima! Natus porro facilis voluptatum, quasi fugit, vero est maiores alias, non et animi expedita quas! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro quae qui voluptatibus mollitia obcaecati modi illum, veritatis quo tenetur cupiditate dolore aliquam praesentium quasi explicabo tempora dolorem, natus minus quisquam.</p>
   </div>
   <form action="../eachQuestion_page/each_question_page.php" method="post">
   <textarea name="comment_to_answer" id="comment_area" cols="30" rows="10"></textarea>
    <h2 id="your_answer">Your Answer</h2>
   <div id="answer_">
    <h2 id="comment_on_answer">add comment to the question</h2>
    
    <textarea name="user_answer" id="answer_area" cols="30" rows="10"></textarea>
    <?php include "../components/stars.html";?>
   </div>
   <!-- append append -->
   <?php include"../components/buttons.html";?>
   </form>
   
    <script src="../home_page/index.js"></script>
    <script src="../eachQuestion_page/EQ.js"></script>
</body>
</html>