
<h1>Mr.Rose</h1> AGE = <?php echo $age."<br>"; ?>
<h3>รายชื่อ</h3>
<?php
	$i=1;
	if ($person) {
		echo "อันดับ&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspชื่อ-นามสกุล <br>";
		foreach ($person as $value) {
			echo "&nbsp&nbsp&nbsp&nbsp".$i++."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo $value->title_nameth."&nbsp&nbsp";
			echo $value->personel_fname_th."&nbsp&nbsp";
			echo $value->personel_lname_th."<br>";
		}
	}
?>