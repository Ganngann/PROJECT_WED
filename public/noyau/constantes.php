<?php
/*
  ./noyau/constantes.php
  Constantes personnalisées
*/

define('ROOT', 'http://'
          . $_SERVER['HTTP_HOST']
          . str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']));

define('ROOT_ADMIN', 'http://'
          . $_SERVER['HTTP_HOST']
          . str_replace('public','admin',str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME'])));

 $url = explode('index.php', $_SERVER['SCRIPT_NAME']);
 define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $url['0']);
