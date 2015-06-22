<?php

class NZRegionDropdownField extends DropdownField
{
    private static $regions = array('Northland' => 'Northland',
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
    'International' => 'International', ); // = Config::inst()->get('NZRegionDropdownField', 'Regions');


  public function __construct($name, $title = null, $source = null, $value = '', $form = null, $emptyString = null)
  {
      // Get the regions from config.yml
   parent::__construct($name, ($title === null) ? $name : $title, $value, $form);
      if (!$source) {
          $this->setSource(self::$regions);
      }
  }
}
