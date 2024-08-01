<?php

function loadPage($controllerName, $actionName)
{
  include_once PathPrefix . $controllerName . PathPostfix;
  $function = $actionName . 'Action';
  $function();
}