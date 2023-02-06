<?php
session_start();
unset($_SESSION['usuario']);
//session_destroy(); destre todas as sessoes
header('Location: index.php');
exit();

