<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect()) {
    include_file('desktop', '404', 'php');
    die();
}
?>

    <form class="form-horizontal">
		<fieldset>
			<div class="form-group">
				<label class="col-lg-4 control-label">Theme</label>
					<div class="col-lg-2">
						<select class="configKey form-control" data-l1key="theme">
						<option value="">Normal</option>
						<option value="Material">Sombre</option>
						</select>
					</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-4 control-label">Taille Police Editeur de texte</label>
					<div class="col-lg-2">
						<select class="configKey form-control" data-l1key="fontsize_editor">
						<option value="12">12</option>
						<option value="14">14</option>
						<option value="16">16</option>
						<option value="18">18</option>
						<option value="20">20</option>
						<option value="22">22</option>
						<option value="24">24</option>
						<option value="26">26</option>
						<option value="28">28</option>
						</select>
					</div>
			</div>
			
		</fieldset>
    </form>

    

