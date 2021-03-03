<?php
$bobotxz=array(-0.5,-0.4,-0.3,-0.2,-0.1, 0, 0.1, 0.2, 0.3, 0.4, 0.5);

$hidden=5;
$jumlah_x=5;
echo "<table border=1>";
for ($j=1; $j<=$jumlah_x; $j++) {
   echo "<tr>";
   for ($i=1; $i<=$hidden; $i++) {      
      echo "<td>";
      //echo "&nbsp".$bobotxz[array_rand($bobotxz)]."&nbsp";
      echo "baris dan kolom ke ($j,$i)";
      echo "</td>";      	
   }
   echo "</tr>";
}
echo "</table>";
?>