<?php
include "./bdd.php";

$sql = "INSERT INTO `comment`(`NickName`, `Contents`, `CreationTimestamp`) VALUES (?,?,Now())";
$resultSet = $bdd->prepare($query);
$list=$resultSet->execute(array(
    $_POST['pseudo'],
    $_POST['comment']
));
return $list;
var_dump($list);
include "Detail_article.phtml";
