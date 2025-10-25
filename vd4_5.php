<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab 2_5</title>
</head>

<body>
<?php
	include("lab2_5a.php");
	include("lab2_5b.php");
	

	if(isset($x))
		echo "Giá trị của x là: $x";
	else
		echo "Biến x không tồn tại";
	echo "<br/>Comment dòng 10 và chạy lab2_5.php =>gia tri x k ton tai vi k goi dc bien x o lab2.5a ";
	echo"<br/>Neu them include lab2_5b o dong 11 thi ket qua x+=10 nua la x luc nay se bang 20";
?>
</body>
</html>