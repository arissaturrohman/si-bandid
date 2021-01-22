<?php

$page = $_GET["page"];
$action = $_GET["action"];

if ($page == "rpjmdes") {
  if ($action == '') {
    include "page/rpjmdes/rpjmdes.php";
  } elseif ($action == "delete") {
    include "page/rpjmdes/delete.php";
  }
} elseif ($page == "rkpdes") {
  if ($action == '') {
    include "page/rkpdes/rkpdes.php";
  } elseif ($action == "delete") {
    include "page/rkpdes/delete.php";
  }
 } elseif ($page == "apbdes") {
  if ($action == '') {
    include "page/apbdes/apbdes.php";
  } elseif ($action == "delete") {
    include "page/apbdes/delete.php";
  }
 }  elseif ($page == "apbdes_perub") {
  if ($action == '') {
    include "page/apbdes_perub/apbdes_perub.php";
  } elseif ($action == "delete") {
    include "page/apbdes_perub/delete.php";
  }
 } elseif ($page == "") {
  include "dashboard.php";
}
