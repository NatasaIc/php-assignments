<?php
require 'classes/db.php';
require 'classes/monster-view.php';
require 'classes/monster-model.php';


$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$monsterModel = new MonsterModel($pdo);
$monsterView = new MonsterView();

$monsterView->renderAllMonstersAsJson($monsterModel->getAllMonsters());