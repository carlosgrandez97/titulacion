<?php
echo __DIR__;

echo '<br>';

echo dirname(__FILE__,2);

echo '<br>';

echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo '---------------------';
echo '<br>';

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
define('CONTROLLER_PATH', ROOT_PATH.'controller/');
define('MODEL_PATH', ROOT_PATH.'model/');
define('DAO_PATH', ROOT_PATH.'dao/');
define('IMP_PATH', DAO_PATH.'imp/');

echo ROOT_PATH; echo '<br>';
echo CONTROLLER_PATH; echo '<br>';
echo MODEL_PATH;echo '<br>';
echo DAO_PATH; echo '<br>';
echo IMP_PATH




?>