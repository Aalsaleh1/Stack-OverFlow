// Declare a variable outside the event listener to track the current margin-top
let currentMarginTop = 0;

document.getElementById("submitB").addEventListener("click", (e) => {
  e.preventDefault();
  const answerValue = document.getElementById("answer_area").value;
  if (answerValue === "") {
    window.alert("Don't write an empty answer");
    return;
  }

  const answerCard = document.createElement("div");
  answerCard.id = "answer_card";
  answerCard.style.marginTop = "10px";
  document.body.appendChild(answerCard);

  const answerHeading = document.createElement("h2");
  answerHeading.style.marginLeft = "24px";
  answerHeading.style.marginTop = "15px";
  answerHeading.textContent = "Answer";
  answerCard.appendChild(answerHeading);

  const userDescription = document.createElement("p");
  userDescription.id = "user_description";
  userDescription.textContent = answerValue;
  answerCard.appendChild(userDescription);

  if (document.getElementById("comment_area").value !== "") {
    const comment = document.createElement("h2");
    comment.style.marginLeft = "24px";
    comment.style.marginTop = "-7px";
    comment.textContent = "Comment on answer";
    answerCard.appendChild(comment);

    const commentOnAnswer = document.createElement("p");
    commentOnAnswer.id = "user_comment_on_answer";
    commentOnAnswer.textContent = document.getElementById("comment_area").value;
    answerCard.appendChild(commentOnAnswer);
  }

  const rateDiv = document.createElement("div");
  rateDiv.id = "Rate";
  answerCard.appendChild(rateDiv);
  const rateText = document.createTextNode("4.6");
  rateDiv.appendChild(rateText);
  const starIcon = document.createElement("img");
  starIcon.id = "star_icon";
  starIcon.src =
    "data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cpath d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/%3E%3C/svg%3E";
  starIcon.alt = "Star rating";
  rateDiv.appendChild(starIcon);

  // Select the buttons container
  const buttons = document.getElementById("buttons");

  // Increment the current margin-top by 240px each time the function is called
  currentMarginTop += 240;
  buttons.style.marginTop = `${currentMarginTop}px`;

  // Toggle selection on card click
  answerCard.addEventListener("click", function () {
    this.classList.toggle("selected");
  });
});
