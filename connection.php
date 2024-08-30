<?php

$conn = new mysqli('localhost', 'root', '', 'akkalpa');

if (!$conn) {
  die(mysqli_error($conn));
}
