<DOCTYPE php>
<php>
<head>
<title>form lena istiani r</title>
</head>
<body>
	<h1> FORM  PESANAN NASI KOTAK</h1>
	<img src="image.jpg"
	style="width: 150px;height;150px;">
<form action=""method="POST">
	<tr><td>Cabang :</td></tr>
	<td><select name="Cabang">
		<option value="-pilih cabang-">-pilih cabang-</option>
		<option value="bandung">bandung</option>
		<option value="majalengka">majalengka</option>
		<option value="cirebon">cirebon</option>
		<option value="indramayu">indramayu</option>
	</select></td></tr><br>

	<tr><td> nama pelanggan  :</td></tr><input type="text"name="nama pelanggan"id="nama pelanggan"></td></tr><br>
	<tr><td> nomor tlp       :</td></tr><input type="text"name="nomor tlp"id="nomor tpl"></td></tr><br>
    <tr><td> jumlah kotak    :</td></tr><input type="text"name="jumlah kotak "id="jumlah kotak"></td></tr><br>
    <tr><td> tgl lahir      :</td></tr><input type="text"name="tgl lahir"id="tgl lahir"></td></tr><br>

    <tr><td><input type="submit"name="pesan"value="pesan"></td></tr></br>
</form>
 
 <?php
 	if (isset($_POST['submit'])){
 		$_branch = $_POST['branch'];
 		$name = $_POST['name'];
 		$phonenumber = $_POST['phonenumber'];
 		$quantity = $_POST['quantity'];

 		echo "pesanan anda telah di terima :<br>";
 		echo "cabang :" . $_branch . "<br>";
 		echo "nama pelangan :" .$name . "<br>";
 		echo "nomor tlp :" . $phonenumber . "<br>";
 		echo "jumlah kotak :" . $quantity;



 	}

 ?>
</body>
</php>
