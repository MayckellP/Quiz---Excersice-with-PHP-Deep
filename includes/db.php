<?php
    $dbName = getenv('DB_NAME');
    $dbHost = getenv('DB_HOST');
    $dbUser = getenv('DB_USER');
    $dbPassword = getenv('DB_PASSWORD');


    $dbConection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);
    $dbConection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //SHOW DATABANKEN 
    function showQuestion($id){
        $show = $GLOBALS['dbConection']->query("SELECT * FROM `questions` WHERE `id` = $id");
        $row = $show->fetch(PDO::FETCH_ASSOC);
        $GLOBALS['question'] = $row; 
    }
    //SHOW DATABANKEN 
    function showTopic($topic){
        $show = $GLOBALS['dbConection']->query("SELECT * FROM `questions` WHERE `topic` = '$topic'");
        $row = $show->fetch(PDO::FETCH_ASSOC);
        $GLOBALS['topicQuestion'] = $row; 
    }


?>