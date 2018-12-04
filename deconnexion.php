<?php 
setcookie("sid", $sid, time()-1);
header("Location:index.php");
