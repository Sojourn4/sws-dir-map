<?php

session_start();

include "assets/Db.php";
include "assets/functions_sws.php";
include "assets/dir_functions.php";


//$_SESSION['sew']['which']="fam";

if (isset($_GET['vars'])) { // process url vars
	$tmp=json_decode(base64_decode(urldecode($_GET['vars'])),true);
	foreach ($tmp as $key=>$value) {
		$_SESSION['sws'][$key]=$value;
		${$key}=$value;
		error_log($key."|".$value,0);
	}
} else {
	foreach ($_SESSION['sws'] as $key=>$value) {
		${$key}=$value;
		error_log($key."|".$value,0);
	}
}

sws_iframe_head($themedir,$themedir2);

?>
<div style='width:100%'>
<?php

 sew_list_unions($list_shortname);

?></div>
</body></html>