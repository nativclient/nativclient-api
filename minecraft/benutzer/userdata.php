<?php
include BASE_PATH.'app/controller/PageController.php';

$id = $helper->protect($_GET['id']);

$SQL = $db->prepare("SELECT * FROM `player` WHERE `id` = :id");
$SQL->execute(array(":id" => $id));
$userInfos = $SQL -> fetch(PDO::FETCH_ASSOC);

?>
