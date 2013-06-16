<?php
session_start();
require_once 'include/config.php';
load_controller($_GET['url']);
?>