<?php
/**
 *  This file part is part of amfPHP
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file license.txt.
 */

/**
 * Amf Undefined will be converted to and from this class
 *
 * @author Ariel Sommeria-klein
 */
class Undefined
{
	var $data;

	function ByteArray($data)
	{
		$this->data = $data;
	}
}
?>