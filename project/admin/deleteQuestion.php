<?php
$qsno = htmlspecialchars($_GET['qsn']);
 
$myfile = fopen("/var/www/html/project/assets/sqlUNP.txt","r") or die("Unable to open file!");
$number = 1;

$sqlUN = "";
$sqlP = "";

// Output one line until end-of-file
$line = fgets($myfile);
$pieces = explode(",",$line);
echo "$sqlUN $sqlP";
$sqlUN = $pieces[0];
$sqlP = $pieces[1];
fclose($myfile);

mysql_connect("localhost",$sqlUN,$sqlP);

@mysql_select_db("CourseFeedback") or die("Unable to select database");

$query = "delete from questions where sno = $qsno";
$result = mysql_query($query);
//$row = mysql_fetch_array($result);
//echo $row['name'];
$num=0;
$query = "select * from questions where sno > $qsno";
$result = mysql_query($query);
$num = mysql_num_rows($result);

$index=1;
while($index<=$num){
$index++;
$qsno++;
$query = "update questions set sno = sno-1 where sno=$qsno";
$result = mysql_query($query);
}

?>

