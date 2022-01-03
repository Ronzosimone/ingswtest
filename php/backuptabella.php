<?php
session_start();
$sql = '';
$Dati2 = '';
$conn = mysqli_connect('localhost','avoc','','my_avoc');
$stmt = $conn->prepare("select canoneMensile as Rata, o.durata as mesi, o.totDaFinanziare, o.tipo, o.km, v.prezzo, o.anticipo, o.interessi from Veicolo v inner join Operazione o on v.targaVeicolo = o.targaVeicolo inner join Utente on Utente.ID = o.IDutente where o.IDutente = ? and o.Codice=?");
$stmt->bind_param('ii', $_SESSION['UserId'],$_POST['Codice']);
$stmt->execute();
$result=$stmt->get_result();
while($row = $result->fetch_assoc())
{
  $Rata = $row['Rata'];
  $prezzo = $row['prezzo'];
  $anticipo = $row['anticipo'];
  $Mesi = $row['mesi'];
  $totdaFinanziare = $row['totDaFinanziare'];
  $Capitale = $totdaFinanziare - $row['anticipo'];

  for ($i = 1; $i <= $Mesi; $i++){
    $QuotaInteressi = $Capitale* 0.0511;
    $CapitaleRestituito = $Rata-$QuotaInteressi;
    $CapitaleResiduo = $Capitale-$CapitaleRestituito;

    $Dati2 = $Dati2.'<tr>';
    $Dati2 = $Dati2.'<td class="pt-3-half" >'.$i.'</td>';
    $Dati2 = $Dati2.'<td class="pt-3-half" >'.round($Capitale, 2).'</td>';
    $Dati2 = $Dati2.'<td class="pt-3-half" >'.round($Rata, 2).'</td>';
    $Dati2 = $Dati2.'<td class="pt-3-half" >'.round($QuotaInteressi, 2).'</td>';
    $Dati2 = $Dati2.'<td class="pt-3-half" >'.round($CapitaleRestituito, 2).'</td>';
    $Dati2 = $Dati2.'<td class="pt-3-half" >'.round($CapitaleResiduo, 2).'</td>';

    $Dati2 = $Dati2.'</tr>';

    $Capitale = $Capitale-$CapitaleRestituito;
  }
}
echo $Dati2;
?>
