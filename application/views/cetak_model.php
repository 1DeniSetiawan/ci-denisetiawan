<?php

echo "<table border='1'>
<tr>
	<td>NIM</td>
	<td>NAMA LENGKAP</td>
	<td>JENIS KELAMIN</td>
	<td>ANGKATAN</td>
	<td>ALAMAT</td>
</tr>";
foreach ($konten as $rows => $row) {
	echo 
	"<tr>";
	foreach ($row as $col => $cell){
		echo "<td>" . $cell . "</td>";
	}
	echo "</tr>";
}
echo "</table>";