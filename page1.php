<?php
session_start();

$color = $_POST["nom"];

echo '<body style="background-color: '.$color.'">';

$_SESSION["color"] = $color;