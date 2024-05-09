document.addEventListener("DOMContentLoaded", () => {
  //if(userSignedIn()
  if (false) {
    document.getElementById("Login").style.display = "none";
    document.getElementById("Signin").style.display = "none";
  }
});
function add_card() {
  const card = document.createElement("div");
  const first_Section = document.createElement("div");
  const answers = document.createElement("div");
  const Question_title = document.createElement("div");
  const Question_Discription = document.createElement("div");
  // setticardng class instead of id
  card.id = "QCard";
  first_Section.id = "first_Section";
  answers.id = "answers";
  Question_title.id = "Question_title";
  Question_Discription.id = "Question_Discription";

  // setting content

  answers.textContent = "20 answers";
  Question_title.textContent =
    "How do I undo the most recent local commits in Git?";
  Question_Discription.textContent =
    "I accidentally committed the wrong files to Git, but didn't push the commit to the server yet. How do I undo those commits from the local repository?";

  // appending elements
  document.body.appendChild(card);
  card.appendChild(first_Section);

  first_Section.appendChild(answers);
  card.appendChild(Question_title);
  card.appendChild(Question_Discription);

  Question_Discription.style.marginLeft = "10px";

  card.addEventListener("click", () => {
    window.location.href = "../eachQuestion_page/each_question_page.php";
  });
  card.style.cursor = "pointer";
}
/*
document.getElementById("askButton").addEventListener("click", () => {
  window.location.href = "../ask_question/indexx.php";
});*/
