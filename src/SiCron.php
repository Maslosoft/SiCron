<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\SiCron;

use Maslosoft\Ilmatar\Components\Application\ICommand;
use Maslosoft\Signals\Signal;

/**
 * SiCron
 * @SignalFor('Maslosoft\Ilmatar\Components\Application')
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class SiCron implements ICommand
{

	public function run($interval)
	{
		$signal = Factory::create($interval);
		(new Signal)->emit($signal);
	}

	// <editor-fold defaultstate="collapsed" desc="Command implementation">
	public function getCommandDescription()
	{
		return 'Run cron commands by signals. Use one of `interval` as parameter: `minute`, `hour`, `day`, `week`, `month`';
	}

	public function getCommandName()
	{
		return 'sicron';
	}

	public function runCommand($interval = 'minute')
	{
		$this->run($interval);
	}

	// </editor-fold>
}
