<?php
session_start();
include_once("utils.php");
if(isset($_POST['Targa']))
{
  $conn = mysqli_connect('localhost','avoc','','my_avoc');
  $stmt = $conn->prepare("delete from Veicolo where TargaVeicolo = ?");
  $stmt->bind_param('s',$_POST['Targa']);
  $stmt->execute();
  $stmt->close();
    mysqli_close($conn);
}
echo "Auto eliminata correttamente!";
 ?>
