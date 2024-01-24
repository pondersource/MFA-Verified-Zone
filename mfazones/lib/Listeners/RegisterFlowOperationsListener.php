<?php

declare(strict_types=1);

/**
 * @copyright 2024 Michiel de Jong <michiel@pondersource.com>
 * 
 * @author Michiel de Jong <michiel@pondersource.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\mfazones\Listeners;

use OCA\mfazones\AppInfo\Application;
use OCP\EventDispatcher\Event;
use OCP\EventDispatcher\IEventListener;
use OCP\Util;
use OCP\WorkflowEngine\Events\RegisterOperationsEvent;
use OCA\Files\Event\LoadAdditionalScriptsEvent;

class RegisterFlowOperationsListener implements IEventListener {

	public function __construct() {
	}

	public function handle(Event $event): void {
		if ($event instanceof RegisterOperationsEvent) {
      Util::addScript(Application::APP_ID, 'mfazones-main');
		}
    if ($event instanceof LoadAdditionalScriptsEvent) {
      Util::addScript(Application::APP_ID, 'mfazones-main');
      Util::addStyle(Application::APP_ID, 'tabview');
    }
	}
}
