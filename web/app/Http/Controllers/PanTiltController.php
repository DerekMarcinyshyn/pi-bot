<?php

namespace App\Http\Controllers;

/**
 * Pan Tilt Controller
 *
 * @author Derek Marcinyshyn <derek@marcinyshyn.com>
 * @date   September 7, 2015
 */

use App\Http\Controllers\Controller;

class PanTiltController extends Controller 
{
	/**
	 * Tilt the camera
	 *
	 * @param $direction
	 */
	public function tilt($value)
	{
		$command = escapeshellcmd('sudo python /home/pi/app/scripts/python/tilt.py '.$value);
		$output = shell_exec($command);

		return $value;
	}

	/**
	 * Pan the camera
	 *
	 * @param $direction
	 */
	public function pan($value)
	{
		$command = escapeshellcmd('sudo python /home/pi/app/scripts/python/pan.py '.$value);
		$output = shell_exec($command);

		return $value;
	}

	/**
	 * Center the camera
	 *
	 * @param $direction
	 */
	public function center()
	{		
		$command = escapeshellcmd('sudo /usr/bin/python /home/pi/app/scripts/python/center.py');
		$output = shell_exec($command);
		
		return 'center';
	}
}