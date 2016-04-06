<?php

class File_TableTest extends DataExtension {

	private static $db = array(
			'TestFileBooleanProperty' => 'Boolean(true)', 
			'TestFileDateProperty' => 'Date', 
			'TestFileDecimalProperty' => 'Decimal($wholeSize = 5, $decimalSize = 4, $defaultValue = 5.2', 
			'TestFileFloatProperty' => 'Float(5)', 
			'TestFileIntProperty' => 'Int(-5)', 
			'TestFileMoneyProperty' => 'Money', 
			'TestFileTimeProperty' => 'Time', 
			'TestFileYearProperty' => 'Year', 
			'TestFileCurrencyProperty' => 'Currency(5, 4, -5.50', 
			'TestFileSS_DatetimeProperty' => 'SS_Datetime', 
			'TestFileTextProperty' => 'Text', 
			'TestFileVarcharProperty' => 'Varchar', 
			'TestFileDoubleProperty' => 'Double', 
			'TestFileEnumProperty' => "Enum(array('Option A', 'Option B', 'Option C'), 'Option B')", 
			'TestFileHTMLTextProperty' => 'HTMLText', 
			'TestFileHTMLVarcharProperty' => 'HTMLVarchar', 
			'TestFilePercentageProperty' => 'Percentage($precision = 3)'
	);
	
/*
	public function updateCMSFields(FieldList $fields) {
		$fields->push(CheckboxField::create('TestFileBoolProperty'));
		$fields->push(TextField::create('TestFileTextProperty'));
	}
*/
}

class Image_TableTest extends DataExtension {

	private static $db = array(
			'TestImageBooleanProperty' => 'Boolean(true)', 
			'TestImageDateProperty' => 'Date', 
			'TestImageDecimalProperty' => 'Decimal($wholeSize = 5, $decimalSize = 4, $defaultValue = 5.2', 
			'TestImageFloatProperty' => 'Float(5)', 
			'TestImageIntProperty' => 'Int(-5)', 
			'TestImageMoneyProperty' => 'Money', 
			'TestImageTimeProperty' => 'Time', 
			'TestImageYearProperty' => 'Year', 
			'TestImageCurrencyProperty' => 'Currency(5, 4, -5.50', 
			'TestImageSS_DatetimeProperty' => 'SS_Datetime', 
			'TestImageTextProperty' => 'Text', 
			'TestImageVarcharProperty' => 'Varchar', 
			'TestImageDoubleProperty' => 'Double', 
			'TestImageEnumProperty' => "Enum(array('Option A', 'Option B', 'Option C'), 'Option B')", 
			'TestImageHTMLTextProperty' => 'HTMLText', 
			'TestImageHTMLVarcharProperty' => 'HTMLVarchar', 
			'TestImagePercentageProperty' => 'Percentage($precision = 3)'
	);
	
/*
	public function updateCMSFields(FieldList $fields) {
		$fields->push(CheckboxField::create('TestImageBoolProperty'));
		$fields->push(TextField::create('TestImageTextProperty'));
	}
*/
}