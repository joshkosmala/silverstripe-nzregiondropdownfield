<?php

class NZRegionDropdownField extends DropdownField {

  protected $source = array(
    'Northland' => 'Northland',
    'Auckland' => 'Auckland',
    'Waikato' => 'Waikato',
    'Bay of Plenty' => 'Bay of Plenty',
    'Gisborne' => 'Gisborne',
    'Hawke’s Bay' => 'Hawke’s Bay',
    'Taranaki' => 'Taranaki',
    'Manawatu-Wanganui' => 'Manawatu-Wanganui',
    'Wellington' => 'Wellington',
    'Nelson' => 'Nelson',
    'Marlborough' => 'Marlborough',
    'West Coast' => 'West Coast',
    'Canterbury' => 'Canterbury',
    'Otago' => 'Otago',
    'Southland' => 'Southland',
    'Chatham Islands' => 'Chatham Islands',
    'International' => 'International'
  );

  public function __construct($name, $title=null, $source, $value='', $form=null, $emptyString=null) {
		$this->setSource($source);

		if($emptyString === true) {
			Deprecation::notice('3.1',
				'Please use setHasEmptyDefault(true) instead of passing a boolean true $emptyString argument',
				Deprecation::SCOPE_GLOBAL);
		}
		if(is_string($emptyString)) {
			Deprecation::notice('3.1', 'Please use setEmptyString() instead of passing a string emptyString argument.',
				Deprecation::SCOPE_GLOBAL);
		}

		if($emptyString) $this->setHasEmptyDefault(true);
		if(is_string($emptyString)) $this->setEmptyString($emptyString);

		parent::__construct($name, ($title===null) ? $name : $title, $value, $form);
	}

}
