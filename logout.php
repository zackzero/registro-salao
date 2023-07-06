<?php
session_start();

unset($_SESSION['nome']);
unset($_SESSION['login']);
unset($_SESSION['senha']);

session_destroy();

echo "<script>alert('Saiu com sucesso!'); window.location = '../view/login.php';</script>";