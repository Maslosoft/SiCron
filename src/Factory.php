<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\SiCron;

/**
 * Factory
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Factory
{

	public static function create($interval)
	{
		$className = sprintf('%s\\%s', __NAMESPACE__, ucfirst($interval));
		return new $className;
	}

}
