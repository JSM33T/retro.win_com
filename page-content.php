<?php

if(!empty($_GET['page'])){
$page= trim($_GET['page'].".php");
  if(file_exists($page)){
    include($page);
  }else{
   include('404.php');
  }
}
else{
  echo "This anchor tage has no url";
}
?>