<?php

$mysqli = new mysqli("localhost","root","","webgiay");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối mysqli lỗi " . $mysqli -> connect_error;
  exit();
}

?>