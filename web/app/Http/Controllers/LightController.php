<?php

namespace App\Http\Controllers;

/**
 * Pan Tilt Controller
 *
 * @author Derek Marcinyshyn <derek@marcinyshyn.com>
 * @date   September 7, 2015
 */

use App\Http\Controllers\Controller;

class LightController extends Controller 
{

	/**
	 * Turn LED lights on and off
	 *
	 * @param $lights string
	 */
	public function led($lights)
	{
		if ($lights == 'on') {
			$command = escapeshellcmd('/home/pi/app/scripts/lights/led-lights-on.sh');
			$output = shell_exec($command);

			return 'LED lights on';
		} else {
			$command = escapeshellcmd('/home/pi/app/scripts/lights/led-lights-off.sh');
			$output = shell_exec($command);		

			return 'LED lights '.$lights;			
		}	
	}

	/**
	 * Turn IR lights on and off
	 *
	 * @param $lights string
	 */
	public function ir($lights)
	{
		if ($lights == 'on') {
			$command = escapeshellcmd('/home/pi/app/scripts/lights/ir-lights-on.sh');
			$output = shell_exec($command);

			return 'IR lights on';
		} else {
			$command = escapeshellcmd('/home/pi/app/scripts/lights/ir-lights-off.sh');
			$output = shell_exec($command);		

			return 'IR lights '.$lights;			
		}	
	}
}