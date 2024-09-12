<?php
defined('CONTROL') or die('Acesso Negado');

session_destroy();

header('location: index.php?rota=login');
