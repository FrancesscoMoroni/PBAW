<?php
//inicjacja mechanizmu sesji
session_start();
//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
