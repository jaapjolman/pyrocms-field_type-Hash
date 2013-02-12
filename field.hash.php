<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 */
class Field_hash
{
	public $field_type_slug			= 'hash';
	public $db_col_type				= 'varchar';
	public $version					= '1.0';
	public $author					= array('name'=>'Antoine Benevaut', 'url'=>'http://cavaencoreparlerdebits.fr');
	
	// --------------------------------------------------------------------------

	/**
	 */
	public function form_output($data)
	{
		return form_hidden($data['form_slug'], $this->_hash());
	}
	
	private function _hash()
	{
		return md5(microtime() + mt_rand(0, 1000));
	}
}