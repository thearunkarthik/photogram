<?php

// function moss_template($name)
// {
//   include __DIR__."/../__template/$name.php";
// }

function moss_template($name){
  include $_SERVER['DOCUMENT_ROOT']."/site/app/__template/$name.php";
}
?>