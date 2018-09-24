<?php
$Hobi = $_POST['Hobi'];
	
	foreach ($Hobi as $key => $value) {
		
	}
	{
	print_r($_POST['Hobi']);
}
	$file = $_FILES['file'];
	$tmp_name = $_FILES['tmp_name'];
	$uplaod_dir ="uplaod/";
	move_uploaded_file($tmp_name,$uplaod_dir,.$namafile);
	echo "uploaded.<br>";
	?>
	
	<img src="uplaod/<?php echo $namafile; ?>">
