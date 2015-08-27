<?php
/*
 *  BanManagement © 2015, a web interface for the Bukkit plugin BanManager
 *  by James Mortemore of http://www.frostcast.net
 *  is licenced under a Creative Commons
 *  Attribution-NonCommercial-ShareAlike 2.0 UK: England & Wales.
 *  Permissions beyond the scope of this licence
 *  may be available at http://creativecommons.org/licenses/by-nc-sa/2.0/uk/.
 *  Additional licence terms at https://raw.githubusercontent.com/BanManagement/BanManager-WebUI/master/LICENSE
 */

			if(!empty($errors)){
				foreach ($errors as $error) {
					echo $error;
				}
			}
		?>on class="btn btn-info" type="submit">Sign In</button>
					</span>
				</div>
			</div>
		</div>e to wait after 5 wrong attempts
		$time = 1800; //make them wait 30 mins
		if(isset($_SESSION['failed_attempts']))
			++$_SESSION['failed_attempts'];
		else
			$_SESSION['failed_attempts'] = 1;
		$_SESSION['failed_attempt'] = time() + $time;
		errors('Wrong password. Please <a href="index.php?action=admin">try again</a>.');
	} else {
		$_SESSION['admin'] = true;
		redirect('index.php?action=admin');
	}
} else if(isset($_SESSION['admin']) && $_SESSION['admin']) {
	?>
	<div class="alert alert-info updatecheck" role="alert"><strong>Update available!</strong> You are currently using version <code>{{your.version}}</code>. Click here to download the latest version <code>{{new.version}}</code>: <a href="https://github.com/BanManagement/BanManager-WebUI/releases">https://github.com/BanManagement/BanManager-WebUI/releases</a></div>

	<table class="table table-striped table-bordered" id="servers">
		<thead>
			<tr>
				<th>Server Name</th>
				<th>Options</th>
			</tr>
		$id = array_keys($settings['servers']);
		$i = 0;
		$count = count($settings['servers']) - 1;

		foreach($settings['servers'] as $server) {
			echo '
				<tr>
					<td>'.$server['name'].'</td>
					<td>
						<a href="#" class="btn btn-danger deleteServer" data-serverid="'.$id[$i].'"><span class="glyphicon glyphicon-trash"></span></a>';
			if($count > 0) {
				if($i == 0)
					echo '
					<a href="#" class="btn reorderServer" data-order="down" data-serverid="'.$id[$i].'"><span class="glyphicon glyphicon-arrow-down"></span></a>';
				else if($i == $count)
					echo '
				href="#" class="btn reorderServer" data-order="up" data-serverid="'.$id[$i].'"><span class="glyphicon glyphicon-arrow-up"></span></a>
					<a href="#" class="btn reorderServer" data-order="down" data-serverid="'.$id[$i].'"><span class="glyphicon glyphicon-arrow-down"></span></a>';
				}
			}
			echo '
					</td>
				</tr>';
			++$i;
		}
	}
		?>

		</tbody>
		<tfoot>
			<tr>
				<td colspan="2">
		<?php(lol) btn-primary btn-large" href="#addserver" data-toggle="modal">Add Server</a>';
	?>

				</td>
			</tr>
		</tfoot>
	</table>
	<div class="modal fade" id="addrizontal" action="" method="post">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3>Add Server</h3>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="form-group">
								<label class="control-label" for="servername">Server Name:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="servername" id="servername">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="host">MySQL Host:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="host" id="host">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="database">MySQL Database:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="database" id="database">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="username">MySQL Username:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="username" id="usernme">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="password">MySQL Password:</label>
								<div class="controls">
									<input type="password" class="form-control fixedWidth" name="password" id="password">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="playerstable">Players Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="playerstable" id="playerstable" value="bm_players">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="playerbanstable">Player Bans Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="playerbanstable" id="playerbanstable" value="bm_player_bans">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="playerbanrecordstable">Player Ban Records Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="playerbanrecordstable" id="playerbanrecordstable" value="bm_player_ban_records">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="playermutestable">Player Mutes Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="playermutestable" id="playermutestable" value="bm_player_mutes">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="playermuterecordstable">Player Mute Records Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="playermuterecordstable" id="playermuterecordstable" value="bm_player_mute_records">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="playerkickstable">Player Kicks Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="playerkickstable" id="playerkickstable" value="bm_player_kicks">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="playerwarningstable">Player Warnings Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="playerwarningstable" id="playerwarningstable" value="bm_player_warnings">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="ipbanstable">IP Bans Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="ipbanstable" id="ipbanstable" value="bm_ip_bans">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="ipbanrecordstable">IP Ban Records Table:</label>
								<div class="controls">
									<input type="text" class="form-control required fixedWidth" name="ipbanrecordstable" id="ipbanrecordstable" value="bm_ip_ban_records">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal">Close</a>
						<input type="submit" class="btn btn-primary" value="Save" />
					</div>
				</form>
			</div>
		</div>
	</div>
	<br />
	<br />
	<h3>Homepage Settings <small>You may find more settings in settings.php</small></h3>
	<form class="form-horizontal settings" action="" method="post">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Option</th>
					<th>Value</th>
				</tr>
			</thead>
			<tbody>
	<?php
	if(!is_writable('settings.php')) {
		echo '
				<tr>
					<td colspan="2">settings.php can not be written to</td>
				</tr>';
	} else {
		echo '
				<tr>
					<td>iFrame Protection (Recommended)</td>
					<td><input type="hidden" name="type" value="mainsettings" /><input type="checkbox" name="iframe"'.((isset($settings['iframe_protection']) && $settings['iframe_protection']) || !isset($settings['iframe_protection']) ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>UTF8</td>
					<td><input type="checkbox" name="utf8"'.(isset($settings['utf8']) && $settings['utf8'] ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>Footer</td>
					<td><input type="text" class="form-control" name="footer" value="'.$settings['footer'].'" /></td>
				</tr>
				<tr>
					<td>Latest Bans</td>
					<td><input type="checkbox" name="latestbans"'.((isset($settings['latest_bans']) && $settings['latest_bans']) || !isset($settings['latest_bans']) ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>Latest Mutes</td>
					<td><input type="checkbox" name="latestmutes"'.(isset($settings['latest_mutes']) && $settings['latest_mutes'] ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>Latest Warnings</td>
					<td><input type="checkbox" name="latestwarnings"'.(isset($settings['latest_warnings']) && $settings['latest_warnings'] ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>HTML Before Buttons</td>
					<td><input type="text" class="form-control" name="buttons_before" value="'.(isset($settings['submit_buttons_before_html']) ? $settings['submit_buttons_before_html'] : '').'" /></td>
				</tr>
				<tr>
					<td>HTML After Buttons</td>
					<td><input type="text" class="form-control" name="buttons_after" value="'.(isset($settings['submit_buttons_after_html']) ? $settings['submit_buttons_after_html'] : '').'" /></td>
				</tr>';
	} ?>

			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">
	<?php
	if(!is_writable('settings.php')) {
		echo '<input type="submit" class="btn btn-primary btn-large disabled" disabled="disabled" value="Save" />';
	} else {
		echo '<input type="submit" class="btn btn-primary btn-large" value="Save" />';
	} ?>

					</td>
				</tr>
			</tfoot>
		</table>
	</form>
	<br />
	<br />
	<h3>View Player Settings</h3>
	<form class="form-horizontal settings" action="" method="post">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Visible</th>
					<th>Value</th>
				</tr>
			</thead>
			<tbody>
	<?php
	if(!is_writable('settings.php')) {
		echo '
				<tr>
					<td colspan="2">settings.php can not be written to</td>
				</tr>';
	} else {
		echo '
				<tr>
					<td>Current Ban</td>
					<td><input type="hidden" name="type" value="viewplayer" /><input type="checkbox" name="ban"'.((isset($settings['player_current_ban']) && $settings['player_current_ban']) || !isset($settings['player_current_ban']) ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>Current Ban HTML Extra</td>
					<td><input type="input" class="form-control" name="banextra"'.(isset($settings['player_current_ban_extra_html']) ? ' value="'.$settings['player_current_ban_extra_html'].'"' : '').' /></td>
				</tr>
				<tr>
					<td>Current Mute</td>
					<td><input type="checkbox" name="mute"'.((isset($settings['player_current_mute']) && $settings['player_current_mute']) || !isset($settings['player_current_mute']) ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>Current Mute HTML Extra</td>
					<td><input type="input" class="form-control" name="muteextra"'.(isset($settings['player_current_mute_extra_html']) ? ' value="'.$settings['player_current_mute_extra_html'].'"' : '').' /></td>
				</tr>
				<tr>
					<td>Previous Bans</td>
					<td><input type="checkbox" name="prevbans"'.((isset($settings['player_previous_bans']) && $settings['player_previous_bans']) || !isset($settings['player_previous_bans']) ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>Previous Mutes</td>
					<td><input type="checkbox" name="prevmutes"'.((isset($settings['player_previous_mutes']) && $settings['player_previous_mutes']) || !isset($settings['player_previous_mutes']) ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>Warnings</td>
					<td><input type="checkbox" name="warnings"'.((isset($settings['player_warnings']) && $settings['player_warnings']) || !isset($settings['player_warnings']) ? ' checked="checked"' : '').' /></td>
				</tr>
				<tr>
					<td>Kicks</td>
					<td><input type="checkbox" name="kicks"'.((isset($settings['player_kicks']) && $settings['player_kicks']) || !isset($settings['player_kicks']) ? ' checked="checked"' : '').' /></td>
				</tr>';
	} ?>

			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">
	<?php
	if(!is_writable('settings.php')) {
		echo '<input type="submit" class="btn btn-primary btn-large disabled" disabled="disabled" value="Save" />';
	} else {
		echo '<input type="submit" class="btn btn-primary btn-large" value="Save" />';
	} ?>

					</td>
				</tr>
			</tfoot>
		</table>
	</form>
	<br />
	<br />
	<h3>Miscellaneous</h3>
	<a href="index.php?action=deletecache&authid=<?php echo sha1($settings['password']); ?>" class="btn btn-primary">Clear Cache</a>
	<?php
}
?>
