<?php
/*-------------------------------------------------------------------------------START INCLUDES -- */ 
session_start();
include "includes/db.php";
include "includes/tools.php";
include "includes/data-collector.php";
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
    <link rel="stylesheet" href="style/questionsPage.css">
    <link rel="shortcut icon" href="media/images/newLogo.svg" type="image/x-icon">
    <title>ZH | Question <?php echo $indexPage;?></title>
</head>
<body>
    <header>
        <!-- -------------------------------------------------------------------------------START NAVBAR --> 
        <?php
        /* echo "SESSION: ";
        prettyPrint($_SESSION);

        echo "<br>POST: ";
        prettyPrint($_POST); */
        include "includes/navbar.php";?>
    </header>
    <main class="cont-general">
        <!-- -------------------------------------------------------------------------------START SLIDER REGISTER --> 
        <div class="register-slider">
            <?php
                if($topic == "music"){
                    echo "<img src='media/images/music.svg' alt='music' class='register-img'>";
                } else if($topic == "ch-norris"){
                    echo "<img src='media/images/question_Home.svg' alt='music' class='register-img'>";
                } else if($topic == "animals"){
                    echo "<img src='media/images/animals.svg' alt='music' class='register-img'>";
                } else if($topic == "movies"){
                    echo "<img src='media/images/movie.svg' alt='music' class='register-img'>";
                } else if($topic == "d-n-d"){
                    echo "<img src='media/images/question_Home.svg' alt='music' class='register-img'>";
                } else if($topic == "astronautics"){
                    echo "<img src='media/images/astro.svg' alt='music' class='register-img'>";
                } else if($topic == "geography"){
                    echo "<img src='media/images/music.svg' alt='music' class='register-img'>";
                } else if($topic == "science"){
                    echo "<img src='media/images/science.svg' alt='music' class='register-img'>";
                } else if($topic == "informatics"){
                    echo "<img src='media/images/informatic.svg' alt='music' class='register-img'>";
                } else if($topic == "gen-knowledge"){
                    echo "<img src='media/images/knowledge.svg' alt='music' class='register-img'>";
                }
                echo "<div class='cont-tl'>
                 <h2 class='title'>";
                 if($topic == "astronautics"){
                    $newTopic = "astro"; 
                 }
                 else $newTopic = $topic;
                 echo $newTopic;
                 echo "</h2><br>
                <h3 class='count'>Question:</h3>";
                echo 
                "<h3 class='count'>"
                .$indexPage." / ".$newLimit. 
                "</h3>";
                ?>
            </div>
        </div>
        <div class="form-main"> 
            <!-- -------------------------------------------------------------------------------START QUESTIONS -->   
                <?php 
                    echo "<h2 class='question'>-".$question['question_text']."</h2>";
                    $page = "";
                    if($indexPage < $newLimit){
                        $page = "questionsPage.php";
                    } else{
                        $page = "resultPage.php";
                    }
                    echo 
                    "<form action=".$page." method='POST' onsubmit='return choosed();' style='margin-top: 5%;'>";
                            $option = 0;
                            for($i=1; $i <= 5; $i++){
                                $answer = "answer-".$i;
                                if($question[$answer] !== ''){
                                    if($correctAnswer === $answer){ 
                                        $value = 1;
                                        $option = $i;
                                    }else{
                                        $value = 0;
                                    }
                                    echo "<div class='option'>
                                            <input type='radio' id=".$answer." class='check-input' name='answer' value=".$value.">
                                            <label class='check-answer' for=".$answer.">
                                                ".$question[$answer]."
                                            </label>
                                        </div>";
                                }
                            }
                            $questionAnswer = "chossed-".$indexPage;
                            $_POST['indexPage'] = $indexPage++;
                            echo "<input type='hidden' id='collector-questions' name=".$questionAnswer.">";
                            echo "<input type='hidden' id='indexPage' value=".$indexPage." name='indexPage'>
                            ";
                    ?>
                    <p id="camp-validate"><p>
                        <!-- -------------------------------------------------------------------------------START BUTTON (FOOTER) --> 
                <?php include "includes/footer.php"; ?>
            </form>
        </div>
    </main>
     <!-- BOOTSTRAP SCRIPT -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="js/validation.js"></script>
</body>
</html>