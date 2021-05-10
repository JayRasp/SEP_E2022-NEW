<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Quiz 2</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="./combined.css" rel="stylesheet">
  </head>

  <body>
  <?php include "./header.php" ?>
<div class="content">
  <div class="container">
    <div id="quiz">
      <h1><span>Q</span>uiz <i class="far fa-question-circle"></i></h1>

      <h2 id="question" class="question"></h2>

      <h3 id="score"></h3>

      <div class="choices">
        <button id="guess0" class="btn answer1Div">
          <p id="choice0"></p>
        </button>

        <button id="guess1" class="btn answer2Div">
          <p id="choice1"></p>
        </button>

        <button id="guess2" class="btn answer3Div">
          <p id="choice2"></p>
        </button>

        <button id="guess3" class="btn answer4Div">
          <p id="choice3"></p>
        </button>
      </div>

      <p id="progress"></p>

    </div>
  </div>
</div>

  <script src="./js/Quiz2-Culture.js" type="text/javascript" ></script>
</body>



</html>