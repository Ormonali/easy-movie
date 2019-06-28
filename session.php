<?php
session_start();
echo $_SESSION['name'];
$back = $_SERVER['HTTP_REFERER'];
echo "<a href='$back'>Back</a>";
