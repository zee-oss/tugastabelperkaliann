<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";

echo "<tr>";
echo "<th style='background-color:lightgray'>bilangan</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th style='background-color:lightgreen'>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
  
    echo "<th style='background-color:lightgreen'>$i</th>";

    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;

        $warna = ($hasil % 2 != 0) ? 'yellow' : 'cyan';

        echo "<td style='background-color:$warna'>$hasil</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

