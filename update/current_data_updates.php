<?php
// -----------------------------------------------------------
// Version XXXXX
// Data Updates
// -----------------------------------------------------------

/*
// Example:

// -----------------------------------------------------------
// Data Update: XXX
// XXX
// -----------------------------------------------------------

$updateSQL = sprintf("UPDATE %s SET sponsorEnable = '1';",$sponsors_db_table);
mysqli_select_db($connection,$database);
mysqli_real_escape_string($connection,$updateSQL);
$result = mysqli_query($connection,$updateSQL) or die (mysqli_error($connection));	

$output .= "<li>XXX.</li>";
*/

// -----------------------------------------------------------
// Data Update: Update Version in System Table
// -----------------------------------------------------------

$updateSQL = sprintf("UPDATE %s SET version='%s', version_date='%s' WHERE id='1'",$prefix."system",$current_version,"2016-03-01");
mysqli_select_db($connection,$database);
mysqli_real_escape_string($connection,$updateSQL);
$result = mysqli_query($connection,$updateSQL) or die (mysqli_error($connection));

$output .= "<li>Version updated in system table.</li>";

?>