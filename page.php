<?php
session_start();
$bg_color = $_SESSION['color'];
echo "<body style='background-color: $bg_color;'>";