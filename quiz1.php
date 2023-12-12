<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/header1.php';
?>

<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/nav.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Quiz 1</title>
        <link rel="stylesheet" href="assets/css/quiz.css">
  </head>


  <script>

    //2D array  - holds all questions for quiz 1
    var currentQuestionNum = 1;
    const mainQuestionsArr = [
      //Question   Answer Choice   Answer Choice   Answer Choice   Correct answer Number (matches the position in array )  Explanation
      ["Question 1", "Wrong Answer", "Wrong Answer", "Correct Answer", 3, "explanation description 1"],
      ["Question 2", "Correct Answer", "Wrong Answer", "Wrong Answer", 1, "explanation description 2"],
      ["Question 3", "Wrong Answer", "Correct Answer", "Wrong Answer", 2, "explanation description 3"],
      ["Question 4", "Wrong Answer", "Correct Answer", "Wrong Answer", 2, "explanation description 4"],
    ];//end array



    //disply question by number
    //adds the correct text to the page
    function dispQuestion() {
      var choices = document.getElementsByClassName('choice');
      var question = document.getElementById('question');


      //event listener
      //looks if correct answer is pressed
      const answerPressed = e => {
        //if not answer pressed matches index of correct answer defined by array
        if (!(mainQuestionsArr[currentQuestionNum - 1].indexOf(e.target.innerHTML) == mainQuestionsArr[currentQuestionNum - 1][4])) {
          e.target.style.backgroundColor = "red";
          e.target.style.color = "white";
          document.getElementById('secondaryquizinfo').style.display = "block";
          document.getElementById('explantiondesc').innerHTML = mainQuestionsArr[currentQuestionNum - 1][5];
        }

        else {
          document.getElementById('explantiondesc').innerHTML = mainQuestionsArr[currentQuestionNum - 1][5];
          document.getElementById('secondaryquizinfo').style.display = "block";
          e.target.style.backgroundColor = "green";
          e.target.style.color = "white";
        }
      }//end e.listener

      for (let choice of choices) {//adds event listener
        choice.addEventListener("click", answerPressed);
      }

      //set fields from array
      question.innerHTML = mainQuestionsArr[currentQuestionNum - 1][0];
      for (var i = 0; i < 3; i++) {
        choices[i].innerHTML = mainQuestionsArr[currentQuestionNum - 1][i + 1]
        choices[i].style.color = 'black';
        choices[i].style.backgroundColor = 'white';
      }
    }//end dispQuestion


    //onNextQuestion
    //set back to white
    function onNextQuestion() {

      if (currentQuestionNum >=4) {
        document.getElementById('secondaryquizinfo').style.display = "none";
        currentQuestionNum = 1;
        dispQuestion();
      }
      else {
        currentQuestionNum = currentQuestionNum + 1;
        document.getElementById('secondaryquizinfo').style.display = "none";
        dispQuestion();
      }
    }//end onNextQuestion



  </script>



  <body>

    <div id="fullquizholder">

      <div class="mainquizholder">
        <div class="quizcontent">
          <h1>Introduction</h1>
          <h2 id="question">Question</h2>
          <div class="choice">
            <p>Answer 1</p>
          </div>
          <div class="choice">
            <p>Answer 2</p>
          </div>
          <div class="choice">
            <p>Answer 3</p>
          </div>
            <p id="nextquestion" onclick="onNextQuestion()">Next Question</p>
        </div>

        </div>
        <div id="secondaryquizinfo">
          <h1>Explanation:</h1>
          <p id="explantiondesc"></p>
        </div>
    </div>
  </body>
</html>


<script>
    dispQuestion();
</script>


<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
?>
