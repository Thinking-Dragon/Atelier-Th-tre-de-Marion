<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('asset_url'))
{
	/**
	 * Site URL
	 *
	 * Create a local URL based on your basepath. Segments can be passed via the
	 * first parameter either as a string or an array.
	 *
	 * @param	string	$uri
	 * @return	string
	 */
	function asset_url($uri = '')
	{
		return base_url("assets/$uri");
	}
}
