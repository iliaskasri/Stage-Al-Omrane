<?php
class View{
	public function table($rs){
		echo "<table border='1' width='100%' cellspacing='0' cellpadding='10'>";
		$n=$rs->columnCount();
		echo "<tr>";
		for ($i=0;$i<$n;$i++){
			$m=$rs->getColumnMeta($i);
			echo "<td style='background-color:gray;font-weight:bold;'>" 
			. $m["name"] . "</td>";
		}
		echo "</tr>";
		foreach ($rs as $row){
			echo "<tr>"; 
				for($i=0;$i<$n;$i++){
					echo "<td>" . $row[$i] . "</td>";
				}
			echo "</tr>";
			}
		echo "</table>";
	}
	
	public static function printRow($titles, $row){
		echo "<table border='1'>";
		for($i=0;$i<count($titles);$i++){
			echo "<tr><td>" . $titles[$i] . 
				": </td><td>" . $row[$i] . "</td></tr>";
		}
		echo "</table>";
	}
}