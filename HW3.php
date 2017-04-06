<?php

$u_name=$_POST["u_name"];
$u_no=$_POST["u_no"];
$u_dep=$_POST["u_dep"];
$u_email=$_POST["u_email"];
$gender=$_POST["gender"];


echo "Your Name is:".$_POST['u_name']."<br/>";
echo "Your Student No is:".$_POST['u_no']."<br/>";
echo "Your Department is:".$_POST['u_dep']."<br/>";
echo "Your Email is:".$_POST['u_email']."<br/>";

if ($gender=="男") {
	echo "Your gender is 男<br/>";
	echo "<body bgcolor='yellow'>";
}else{
	echo "Your gender is 女<br/>";
	echo "<body bgcolor ='pink'>";
	
}
$date=$_POST["date"];
	echo "你選擇的門票日期是：";
foreach($date as $value){
	switch (trim($value)){
		case "w1" ;
		print "3/2<br/>"; break;
		case "w2" ; 
		print "3/3<br/>"; break;
		case "w3" ;	
		print "3/4<br/>"; break;
		case "w4" ;	
		print "3/5<br/>"; break;
	}
}

echo "<br/>";

?>
