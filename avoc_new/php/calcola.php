<?php
	$prezzo = '0.00';
	if(isset($_POST['brand']) && isset($_POST['modello']) && isset($_POST['versione'])) {
		$brand = $_POST['brand'];
		$modello = $_POST['modello'];
		$versione = $_POST['versione'];
		$mysqli = new mysqli('localhost','avoc','','my_avoc');
		if (mysqli_connect_errno()) {
			exit();
		}
		if ($stmt = $mysqli->prepare("SELECT prezzo FROM Veicolo WHERE marca = ? AND modello = ? AND versione = ?")) {
			$stmt->bind_param("sss", $brand, $modello, $versione);
			$stmt->execute();
			$stmt->bind_result($prezzo);
			$stmt->fetch();
			$stmt->close();
		}
		$mysqli->close();
	} 
	echo $prezzo;
?>