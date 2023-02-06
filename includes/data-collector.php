<?php
    $_SESSION += $_POST;
    $topic = $_SESSION['topic'];
    showTopic($topic);
    if($_SESSION['indexPage'] === 0){
        $indexPage = $topicQuestion['id'];
        showQuestion($indexPage);
        $correctAnswer = $question['correct']; 
        $score = $_POST['answer'];
        $_SESSION['score'] += $score;
        $_SESSION['indexPage'] = $indexPage;
    }else{
        $indexPage = $_POST['indexPage'];
        showQuestion($indexPage);
        $correctAnswer = $question['correct']; 
        $score = $_POST['answer'];
        $_SESSION['score'] += $score;
    }
    $newLimit = $_SESSION['indexPage'] + $_SESSION['limit'] - 1;
?>