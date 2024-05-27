<?php
  include_once("connect.php");
  $id = $_GET["id"];

  $query_get_data = mysqli_query($db, "DELETE FROM apotek WHERE id=$id");

  header("Location: apotek.php");