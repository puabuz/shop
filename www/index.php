<?php

include_once '../config/config.php'; //Подключаем константы
include_once '../library/mainFunctions.php';//Подключаем функции

// Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';

//Определяем с какой ф-ей будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';



loadPage($controllerName, $actionName);