<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 26.05.2016
 * Time: 23:19
 */
require_once('connectDBase.php');
require_once('CommentClass.php');

if (isset($_REQUEST['comments'])){
    $answerTable = $pdo->query('SELECT * FROM answers');

    $commentsArr = array();

    foreach($answerTable as $answerRow){
        $comment = new Comment('Test',$answerRow['text'],5);
        array_push($commentsArr,$comment);
    };

    echo json_encode($commentsArr);
}
