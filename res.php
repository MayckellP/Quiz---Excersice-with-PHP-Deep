<!-- WENN SIE DIE LOGISCHER TEIL WERSTEHEN WOLLEN, WECHSELN BITTE DIE "ACTION: (URL IN INDEX.PHP)" -->
<?php
session_start();
include "includes/db.php";
include "includes/tools.php";
include "includes/data-collector.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        
        $_SESSION += $_POST;
        $indexPage = $_POST['indexPage'];

        showQuestion($indexPage);
        echo "<h3>QUESTION FROM DATABASE:</h3>";
        prettyPrint($question);

        echo "<br><h3>NAVIGATION FROM POST:</h3>";
        prettyPrint($_POST);  
        $correctAnswer = $question['correct'];  

        echo "<br><h3>SCORE FOR EVERY QUESTIONS</h3>";
        $score = $_POST['answer'];
        echo $score;
        $_SESSION['score'] += $score;

        echo "<br><h3>SCORE FROM SESSION:</h3>";
        prettyPrint($_SESSION);
        ?>
    </p>
    <?php 
    echo "<br><h2 class='question'>-".$question['question_text']."</h2>";
    $page = "";
    if($_POST['indexPage'] < $_SESSION['limit']){
        $page = "res.php";
    } else{
        $page = "resultPage.php";
    }
    echo 
    "<form action=".$page." method='POST' onsubmit='return choosed();'>";
            $option = 0;
            for($i=1; $i <= 5; $i++){
                $answer = "answer-".$i;
                if(isset($question[$answer])){
                    if($correctAnswer === $answer){ 
                        $value = 1;
                        $option = $i;
                    }else{
                        $value = 0;
                    }
                    echo "<div class='option'>
                    <input type='radio' id=".$answer." class='check-input' name='answer' value=".$value.">
                        <label class='check-answer' for=".$answer.">".$question[$answer]."</label>
                    <input type='checkbox' id=".$answer." class='check-input' name='answer'hidden>    
                    </div>";
                }
            }
            $questionAnswer = "chossed-".$indexPage;
            echo "<input type='hidden' id='collector-questions' name=".$questionAnswer.">";
            $indexPage++;
            echo "<input type='hidden' id='indexPage' value=".$indexPage." name='indexPage'>";
    ?>

        
        <button type="submit">Next</button>
    </form> 
    <script src="js/validation.js"></script>
</body>
</html>