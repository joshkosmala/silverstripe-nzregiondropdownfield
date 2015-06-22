<?php

class NZRegionDropdownField extends DropdownField {

  private static $regions = Config::inst()->get('NZRegionDropdownField', 'Regions');


  public function __construct($name, $title=null, $source, $value='', $form=null, $emptyString=null) {
		// Get the regions from config.yml
    $this->setSource(self::$regions);

		parent::__construct($name, ($title===null) ? $name : $title, $value, $form);
	}

}
