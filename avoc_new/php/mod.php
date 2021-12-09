<?php
session_start();
include_once("utils.php");
if(isset($_POST['Targa']))
{
  $conn = mysqli_connect('localhost','avoc','','my_avoc');
  echo '1';
  $stmt = $conn->prepare("UPDATE Veicolo SET marca=?,modello=?,versione=?,annoimmatricolazione=?,prezzo=?,peso=?,lunghezza=?,larghezza=?,numPosti=? where targaVeicolo=?");
  $stmt->bind_param('ssssssssss',$_POST['Marca'],$_POST['Modello'],$_POST['Versione'],$_POST['Annoimmatricolazione'],$_POST['Prezzo'],$_POST['Peso'],$_POST['Lunghezza'],$_POST['Larghezza'],$_POST['NumPosti'],$_POST['Targa']);
  $stmt->execute();
  $stmt->close();
    mysqli_close($conn);
}
 ?>
