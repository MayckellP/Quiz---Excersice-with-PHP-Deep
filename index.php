<?php
include "includes/db.php";
session_start();
$_SESSION = array('score' => 0, 'indexPage' => 0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.cdnfonts.com/css/swanky-and-moo-moo" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/syne" rel="stylesheet">
    <link rel="shortcut icon" href="media/images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="style/index.css">
    <link rel="shortcut icon" href="media/images/newLogo.svg" type="image/x-icon">
    <title>ZH | Home</title>
  </head>
  <body>
  <header>
    <!-- -------------------------------------------------------------------------------START NAVBAR --> 
    <div class="cont-nav">
    <?php include "includes/navbar.php";?>
    </div>
  </header>
  <!-- -------------------------------------------------------------------------------BACKGROUND VECTOR --> 
    <div class="trasfondo">
      <!-- --------------------------------------------------------------CONTAINER BODY --> 
      <div class="fondo">
        <img src="media/images/fondo_Home.svg" alt="fondo_1" class="fondo1">
        <h1>ZH - QUIZZ</h1>
      </div>
      <div class="startForm">
          <form action="questionsPage.php" method="POST">
              <label>Choose your Theme:</label>
                <select class="dropdown" id="topic" name="topic">
                    <option value="music" >Music</option>
                    <option value="ch-norris">Chuck Norris</option>
                    <option value="animals">Animals</option>
                    <option value="movies">Movies</option>
                    <option value="d-n-d">Dungeons-n-Dragons</option>
                    <option value="astronautics">Astronautics</option>
                    <!-- <option value="technology">Technology</option> -->
                    <!-- <option value="ai">Artificial Intelligence</option> -->
                    <option value="geography">Geography</option>
                    <!-- <option value="sports">Sports</option> -->
                    <option value="science">Science</option>
                    <option value="informatics">Informatics</option>
                    <option value="gen-knowledge">General Knowledge</option>
                </select>
                <label>Number of Questions:</label><br>
                <input type="number" name="limit" id="number" class="number" min="1" max="10" required>
                <!-- <input type="hidden" name="indexPage" value= "1001"> -->
                <input type="hidden" name="answer" value= "0">
                <!-- -------------------------------------------------------------------------------START BUTTON (FOOTER) --> 
                <?php include "includes/footer.php"; ?>
          </form>
          <img src="media/images/question_Home.svg" alt="question_Home" class="img-question">
      </div>
    </div>
    
    <!-- BOOTSTRAP SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/validation.js"></script>
  </body>
</html>