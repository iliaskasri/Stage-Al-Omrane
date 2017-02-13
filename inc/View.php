<?php
include_once 'inc/ResultSet.php';
class View {
	private $rs;
	
	public function View($rs){
		$this->rs = $rs;
	}
	
	public function display(){
		echo '<table border="1" cellspacing="0" cellpadding="5" width = "100%">';
		echo	'<tr style="background: buttonface;text-align: center;">';
					for ($i = 0; $i < $this->rs->getColumnCount(); $i++) {
						echo '<td>' . $this->rs->getFieldName($i) . '</td>';
					}

			echo '</tr>';
				for ($i = 0; $i < $this->rs->getRowCount(); $i++){
				echo '<tr>';
						for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
							echo '<td>' . $this->rs->getField($i, $j) . '</td>';
						}
				echo '</tr>'; 
				}
		echo '</table>';
	}
	
	public function display1(){
					for ($i = 0; $i < $this->rs->getColumnCount(); $i++) {
						$this->rs->getFieldName($i);
					}

				for ($i = 0; $i < $this->rs->getRowCount(); $i++){
						for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
							$this->rs->getField($i, $j);
						}
				}
	}
	
	public function display2(){
		echo '<table border="1" cellspacing="0" cellpadding="5" width = "100%">';
		echo	'<tr style="background: buttonface;text-align: center;">';
					for ($i = 4; $i < $this->rs->getColumnCount(); $i++) {
						echo '<td>' . $this->rs->getFieldName($i) . '</td>';
					}

			echo '</tr>';
				for ($i = 4; $i < $this->rs->getRowCount(); $i++){
				echo '<tr>';
						for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
							echo '<td>' . $this->rs->getField($i, $j) . '</td>';
						}
				echo '</tr>'; 
				}
		echo '</table>';
	}
	
	public function displayJ(){
		echo '<table border="1" cellspacing="0" cellpadding="5" width = "100%">';
		echo	'<tr style="background: buttonface;text-align: center;">';
					for ($i = 1; $i < $this->rs->getColumnCount(); $i++) {
						echo '<td>' . $this->rs->getFieldName($i) . '</td>';
					}

			echo '</tr>';
				for ($i = 1; $i < $this->rs->getRowCount(); $i++){
				echo '<tr>';
						for ($j = 0; $j < $this->rs->getColumnCount(); $j++){
							echo '<td>' . $this->rs->getField($i, $j) . '</td>';
						}
				echo '</tr>'; 
				}
		echo '</table>';
	}
}