<?php
/*
Description: 	Simple Language Changer Class 
				you can use it for change language to another one 
				it is simple to use 
Auther:			Payam khaninajad 
Contact Email:	progvig@yahoo.com
Site:			http://progvig.ir
Year:			2010/11/13
*/
class mylanguage
{
	
	function get_language() 
	{
		return $this->language;
	}
	// load language setting 
	function load_language($lang) 
	{
		$default_language="es";
		$this->language=$lang;
		switch ($this->get_language())
		 {
		 case "es":
			 require_once 'lang-'.$this->get_language().'.inc.php';
			 break;
		 case "en":
			 require_once 'lang-'.$this->get_language().'.inc.php';
			 break;
		 default:
		 // default language is 
			 require_once 'lang-'.$default_language.'.inc.php';
			 break;
		}

	}
	// end language function loading
	
}
?>
