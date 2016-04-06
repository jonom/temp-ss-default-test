<?php

class TableTestTask extends BuildTask {
 
	protected $title = 'Sub-class default value report';
 
	protected $description = 'Report on success of default value population on sub-class tables';
 
	protected $enabled = true;
		
	public static $types = array(
		'Boolean', 
		'Date', 
		'Decimal', 
		'Float', 
		'Int', 
		'Money', 
		'Time', 
		'Year', 
		'Currency', 
		'SS_Datetime', 
		'Text', 
		'Varchar', 
		'Double', 
		'Enum', 
		'HTMLText', 
		'HTMLVarchar', 
		'Percentage'
	);
 
	function run($request) {

		$this->testDefaultValues();
		
	}
 
	function testDefaultValues() {

		$images = Image::get();
		
		foreach ($images as $i) {
			echo "<br><br><b>$i->Title</b> :";
			foreach (TableTestTask::$types as $t) {
				$filePropertyName = 'TestFile' . $t . 'Property';
				$imagePropertyName = 'TestImage' . $t . 'Property';
				$colour = ($i->$filePropertyName === $i->$imagePropertyName) ? 'green' : 'red';
				echo "<br><i style=\"color:$colour\">$t values</i><br>File: ";
				if ($t == 'Money') {
					echo $i->$filePropertyName;
				} else {
					var_dump($i->$filePropertyName);
				}
				echo ", Image: ";
				if ($t == 'Money') {
					echo $i->$imagePropertyName;
				} else {
					var_dump($i->$imagePropertyName);
				}
			}
		}
		
	}
}