<?php

$page = $_GET["page"];
$action = $_GET["action"];

if ($page == "rpjmdes") {
  if ($action == '') {
    include "page/rpjmdes/rpjmdes.php";
  } elseif ($action == "add") {
    include "page/rpjmdes/add.php";
  } elseif ($action == "edit") {
    include "page/rpjmdes/edit.php";
  } elseif ($action == "delete") {
    include "page/rpjmdes/delete.php";
  }
} elseif ($page == "") {
  include "dashboard.php";
}
