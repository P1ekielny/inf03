<!DOCTYPE html>
<html>
<head>
	<title>Hurtopwnia szkolna</title>
	<link rel="stylesheet" href="styl.css">
</head>
<body>
	<section id="banner">
		<h1>Hurtownia z najlepszymi cenami</h1>
	</section>
	<section id="main-left">
		<h2>Nasze ceny</h2>
		<!-- skrypt 1 -->
	</section>
	<section id="main-middle">
		<h2>koszt zakupów</h2>
		<form action="index.php" method="post">
			Wybierz artykuł
			<select name="object">
				<option value="1">Zeszyt 60 kartek</option>
				<option value="2">Zeszyt 32 kartek</option>
				<option value="3">Cyrkiel</option>
				<option value="4">Linijka 30 cm</option>
			</select>
			<br>
			Liczba sztuk: <input type="number" name="number_of_items">
			<br>
			<input type="submit" value="OBLICZ">
		</form>
		<!-- wynik skryptu 2 -->
	</section>
	<section id="main-right">
		<h2>Kontakt</h2>
		<img src="zakupy.png" alt="hurtownia">
		<p>
			<a href="mailto:hurt@poczta2.pl">e-mail: hurt@poczta2.pl</a>
		</p>
	</section>
	<section id="footer">
		<h4>witrynę wykonał: 2137213769420</h4>
	</section>
</body>
</html>

