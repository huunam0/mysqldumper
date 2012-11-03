<?php
if (!defined('MSD_VERSION')) die('No direct access.');
//Tabellen http://localhost/msd1244/sql.php?db=footygoat&tablename=f_leagues&dbid=3
if (isset($db)) {
	echo 'tables of `'.$db.'`: ';

	mysql_select_db($db);
	$sqlt="SHOW TABLE STATUS FROM `".$db."` ;";
	$res=MSD_query($sqlt);
	$anz_tabellen=mysql_numrows($res);
	if ($anz_tabellen==0)
	{
		echo "None";
	}
	else
	{
		for ($i=0; $i<$anz_tabellen; $i++)
		{
			$row=mysql_fetch_array($res);
			echo '<a href="sql.php?db='.$db.'&tablename='.$row['Name'].'&dbid='.$dbid.'">'.$row['Name'].'</a>; ';
		}
	}
} else {
	echo "Not set";
}
?>