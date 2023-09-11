<html> 
<head>
	<title>Formulir</title>
</head> 
<body>
<form method="post" action="prosesuas.php">
	<table>
		<tr>
			<td>Nama</td> 
			<td>:</td> 
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td> 
			<td><input type="text" name="nim"></td> 
		</tr> 
		<tr>
			<td>Alamat</td>
			<td>:</td> 
			<td><input type="text" name="alamat"></td> 
		</tr> 
		<tr>
			<td>Jurusan</td> 
			<td>:</td> 
			<td>
				<select name="jurusan"> 
					<option value="TIF">TIF</option> 
					<option value="TI">TI</option> 
					<option value="TE">TE</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='3' align='right'>
				<input type='submit' value='Submit'>
			</td>
		</tr>
	</table>
</form>
</body>
</html>