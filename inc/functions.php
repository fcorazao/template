<?php

/**
 * -----------
 *   SEO URL
 * -----------
 * 
 * Make a string friendly for use in a
 * URL and also for SEO purposes.
 * 
 * It clears all the unfriendly characters 
 * from Spanish and tries to keep it as
 * readable as possible.
 * 
 */

function seoUrl($string){
	
	$search = array('á', 'é', 'í', 'ó', 'ú', 'ü', 'ñ', ' ', 'S/.', 's/.', '$');
	$replace = array('a', 'e', 'i', 'o', 'u', 'u', 'n', '_', '', '', '');
	$string = str_replace($search,$replace,$string);
	$string = strtolower($string);
	$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
	$string = preg_replace("/[\s-]+/", " ", $string);
	$string = preg_replace("/[\s_]/", "-", $string);
	if(strlen($string)>59){ $string = substr($string,0,strpos($string,"-",50)); }
	$string = trim(preg_replace('/-+/', '-', $string), '-');
	return $string;
	
}

/**
 * ----------------
 *   Build Chart
 * ----------------
 * 
 * 
 * 
 * 
 * Ratio options
 * .ct-square	1
 * .ct-minor-second	15:16
 * .ct-major-second	8:9
 * .ct-minor-third	5:6
 * .ct-major-third	4:5
 * .ct-perfect-fourth	3:4
 * .ct-perfect-fifth	2:3
 * .ct-minor-sixth	5:8
 * .ct-golden-section	1:1.618
 * .ct-major-sixth	3:5
 * .ct-minor-seventh	9:16
 * .ct-major-seventh	8:15
 * .ct-octave	1:2
 * .ct-major-tenth	2:5
 * .ct-major-eleventh	3:8
 * .ct-major-twelfth	1:3
 * .ct-double-octave	1:4
 * 
 */

function build_chart($id=NULL,$type,$labels,$series,$style,$ratio){ //,$data,$active='active',$view='',$icon='',$style='style-info',$show='20'){
	
	?>
	
	<div id="<?php echo $id; ?>" class="<?php echo $ratio.' '.$style; ?>"></div>
	
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/template/inc/chartist-scripts.php'); ?>
	
	<?php
	switch($type){
		case 'line':
		?>
		<script>
		new Chartist.Line('#<?php echo $id; ?>', {
			labels: [<?php echo $labels; ?>],
			series: [<?php echo $series; ?>]
		});
		</script>
		<?php
		break;
		case 'pie':
		?>
		<script>
		var data = {
			series: [<?php echo $series; ?>]
		};
		var sum = function(a, b) { return a + b };
		new Chartist.Pie('#<?php echo $id; ?>', data, {
			labelInterpolationFnc: function(value) {
				return Math.round(value / data.series.reduce(sum) * 100) + '%';
			}
		});
		</script>
		<?php
		break;
		case 'bar':
		?>
		<script>
		new Chartist.Bar('#<?php echo $id; ?>', {
			labels: [<?php echo $labels; ?>],
			series: [<?php echo $series; ?>]
		}, {
			seriesBarDistance: 10,
			axisX: {
				offset: 60
			},
			axisY: {
				offset: 80,
				labelInterpolationFnc: function(value) {
					return value + ' CHF'
				},
				scaleMinSpace: 15
			}
		});
		</script>
		<?php
		break;
		case 'bar-stacked':
		?>
		<script>
		chart_rezise.check();
		console.log('created chart');
		new Chartist.Bar('#<?php echo $id; ?>', {
			labels: [<?php echo $labels; ?>],
			series: [<?php echo $series; ?>]
		}, {
			stackBars: true,
			axisY: {
				labelInterpolationFnc: function(value) {
					return (value / 1000) + 'k';
				}
			}
		}).on('draw', function(data) {
			if(data.type === 'bar') {
				data.element.attr({
					style: 'stroke-width: 30px'
				});
			}
		});
		</script>
		<?php
		break;
		case 'donut':
		?>
		<script>
		new Chartist.Pie('#<?php echo $id; ?>', {
			series: [<?php echo $series; ?>]
		}, {
			donut: true,
			donutWidth: 60,
			donutSolid: true,
			startAngle: 270,
			showLabel: true
		});
		</script>
		<?php
		break;
	}
	
}

/**
 * -----------------
 *    Build Table
 * -----------------
 * 
 * Builds a basic table with classes and an ID
 * 
 * The content of the table is provided as arrays
 *  
 * There are 2 aditional variables that can be set to 
 * attach an icon to the table and to hide if necessary
 * 
 * $id = unique identifier of the table (optional)
 * $area = area name (for styling defaults)
 * $columns = multilevel array with 3 keys: content = content of the column
 																						class = class of the column
																						data = special data field: should be an array with 2 keys: content = content of the data attribute
 																																																			 	data = name of the data attribute
 * $data = multilevel array with 2 keys: content = content of the field
 *																			 class = class of the column
 * $active = boolean: show or hide this table (optional)
 * $view = view for the table (optional)
 * $icon = icon for the table (optional)
 * 
 */

function build_table($id='dt',$area=NULL,$columns,$data,$active='active',$view='',$icon='',$style='info',$show='20'){
	
	?>

	<form class="table">
				
		<div class="row table-filters-row">
			<div class="col-8">
				
				<div class="dropdown active <?php echo $style; ?> no-shadow">
					<a class="btn btn-back btn-md btn-text-icon"><span class="text">Show</span> <span class="amount"><?php echo $show; ?></span><i class="fas fa-chevron-down fa-fw"></i></a>
					<ul class="with-icons">
						<li class="filter_count text-only <?php if($show=='5'){ echo 'active'; } ?>" data-val="5">5</li>
						<li class="filter_count text-only <?php if($show=='10'){ echo 'active'; } ?>" data-val="10">10</li>
						<li class="filter_count text-only <?php if($show=='20'){ echo 'active'; } ?>" data-val="20">20</li>
						<li class="filter_count text-only <?php if($show=='50'){ echo 'active'; } ?>" data-val="50">50</li>
						<li class="filter_count text-only <?php if($show=='All'){ echo 'active'; } ?>" data-val="-1">All</li>
					</ul>
				</div>
				
				<?php foreach($columns as $key => $value){ if($value['add_filter']){ ?>
				
				<div class="dropdown active <?php echo $style; ?> no-shadow">
					<a class="btn btn-back btn-md btn-text-icon"><span class="text">Filter</span> <?php echo $value['content']; ?>: <span class="filter-col-<?php echo $key; ?>">All</span><i class="fas fa-chevron-down fa-fw"></i></a>
					<ul class="with-icons">
						<li class="filter_column" data-col="3" data-val="allergies"><span><i class="fas fa-check fa-fw"></i></span>Allergies</li>
						<li class="filter_column" data-col="3" data-val="ambulance"><span><i class="fas fa-times fa-fw"></i></span>Ambulance</li>
						<li class="filter_column" data-col="3" data-val="anchor"><span><i class="fas fa-anchor fa-fw"></i></span>Anchor</li>
						<li class="filter_column" data-col="3" data-val="ban"><span><i class="fas fa-ban fa-fw"></i></span>Ban</li>
						<li class="filter_column" data-col="3" data-val="band aid"><span><i class="fal fa-band-aid"></i></span>Band aid</li>
						<li class="filter_column text-only" data-col="3" data-val="">All</li>
					</ul>
				</div>
				
				<?php } } ?>
				
			</div>
			<div class="col-4 text-right">
				<div class="button-dropdown <?php echo $style; ?> no-shadow custom_buttons align-right">
					<a class="btn btn-back btn-md btn-text-icon no-shadow">Export <i class="fas fa-chevron-down fa-fw"></i></a>

				</div>
				<label class="text with-icon-left no-margin table-search">
					<span class="border"></span>
					<input type="text" id="s">
					<span class="label">Search</span>
					<span class="icon left"><i class="fas fa-search fa-fw"></i></span>
				</label>
			</div>
		</div>

		<div class="row no-margin-top">
			<div class="col-12">
				<table <?php echo 'id="'.$id.'"'; ?> class="dt <?php echo $area; ?> <?php echo $active; ?>" data-view="<?php echo $view; ?>" data-icon="<?php echo $icon; ?>">
					<thead>
						<tr>
							<?php foreach($columns as $key => $value){ ?>
							<th class="<?php echo $value['class']; ?>" <?php if($value['data']['data']!=''){ echo 'data-'.$value['data']['data'].'="'.$value['data']['content'].'"'; } ?>><?php echo $value['content']; ?></th>
							<?php } ?>
						</tr>
					</thead>
					<tbody class="printArea">
						<?php foreach($data as $key => $array){ ?>
						<tr>
							<?php foreach($array as $key => $value){ ?>
							<td class="<?php echo $value['class']; ?>"><?php echo $value['content']; ?></td>
							<?php } ?>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
	</form>
	
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/template/inc/datatables-scripts.php'); ?>
	
	<script>
	
	// Datatables

	$(document).ready(function(){
		"use strict";
		var amount = <?php echo $show; ?>;
		var table = $('<?php echo '#'.$id; ?>').DataTable({
			"order": [[ 1, "asc" ]],
			"lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
			"pagingType": "simple_numbers",
			"info": false,
			columnDefs: [{ orderable: false, targets: -1 }],
			"iDisplayLength": amount,
			"drawCallback": function () {
				$('.dataTables_paginate').addClass('<?php echo $style; ?>');
			}
		});
		
		// Export buttons

		var buttons = new $.fn.dataTable.Buttons(table, {
			buttons: [{
				extend: 'print',
				className: 'btn-list',
				text: '<svg class="svg-inline--fa fa-print fa-w-10 fa-fw" aria-hidden="true" data-prefix="far" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M416 192V81.9c0-6.4-2.5-12.5-7-17L351 7c-4.5-4.5-10.6-7-17-7H120c-13.3 0-24 10.7-24 24v168c-53 0-96 43-96 96v136c0 13.3 10.7 24 24 24h72v40c0 13.3 10.7 24 24 24h272c13.3 0 24-10.7 24-24v-40h72c13.3 0 24-10.7 24-24V288c0-53-43-96-96-96zM144 48h180.1L368 91.9V240H144V48zm224 416H144v-80h224v80zm96-64h-48v-40c0-13.2-10.8-24-24-24H120c-13.2 0-24 10.8-24 24v40H48V288c0-26.5 21.5-48 48-48v24c0 13.2 10.8 24 24 24h272c13.2 0 24-10.8 24-24v-24c26.5 0 48 21.5 48 48v112zm-8-96c0 13.3-10.7 24-24 24s-24-10.7-24-24 10.7-24 24-24 24 10.7 24 24z"></path></svg> Print'
			},{
				extend: 'csv',
				className: 'btn-list',
				text: '<svg class="svg-inline--fa fa-table fa-w-16 fa-fw" aria-hidden="true" data-prefix="fal" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM160 448H48c-8.837 0-16-7.163-16-16v-80h128v96zm0-128H32v-96h128v96zm0-128H32V96h128v96zm160 256H192v-96h128v96zm0-128H192v-96h128v96zm0-128H192V96h128v96zm160 160v80c0 8.837-7.163 16-16 16H352v-96h128zm0-32H352v-96h128v96zm0-128H352V96h128v96z"></path></svg> CSV'
			},{
				extend: 'excel',
				className: 'btn-list',
				text: '<svg class="svg-inline--fa fa-file-excel fa-w-12 fa-fw" aria-hidden="true" data-prefix="fal" data-icon="file-excel" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zm-22.6 22.7c2.1 2.1 3.5 4.6 4.2 7.4H256V32.5c2.8.7 5.3 2.1 7.4 4.2l83.9 83.9zM336 480H48c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h176v104c0 13.3 10.7 24 24 24h104v304c0 8.8-7.2 16-16 16zM211.7 308l50.5-81.8c4.8-8-.9-18.2-10.3-18.2h-4.1c-4.1 0-7.9 2.1-10.1 5.5-31 48.5-36.4 53.5-45.7 74.5-17.2-32.2-8.4-16-45.8-74.5-2.2-3.4-6-5.5-10.1-5.5H132c-9.4 0-15.1 10.3-10.2 18.2L173 308l-59.1 89.5c-5.1 8 .6 18.5 10.1 18.5h3.5c4.1 0 7.9-2.1 10.1-5.5 37.2-58 45.3-62.5 54.4-82.5 31.5 56.7 44.3 67.2 54.4 82.6 2.2 3.4 6 5.4 10 5.4h3.6c9.5 0 15.2-10.4 10.1-18.4L211.7 308z"></path></svg> Excel'
			},{
				extend: 'pdf',
				className: 'btn-list',
				text: '<svg class="svg-inline--fa fa-file-pdf fa-w-12 fa-fw" aria-hidden="true" data-prefix="fal" data-icon="file-pdf" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zm-22.6 22.7c2.1 2.1 3.5 4.6 4.2 7.4H256V32.5c2.8.7 5.3 2.1 7.4 4.2l83.9 83.9zM336 480H48c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h176v104c0 13.3 10.7 24 24 24h104v304c0 8.8-7.2 16-16 16zm-22-171.2c-13.5-13.3-55-9.2-73.7-6.7-21.2-12.8-35.2-30.4-45.1-56.6 4.3-18 12-47.2 6.4-64.9-4.4-28.1-39.7-24.7-44.6-6.8-5 18.3-.3 44.4 8.4 77.8-11.9 28.4-29.7 66.9-42.1 88.6-20.8 10.7-54.1 29.3-58.8 52.4-3.5 16.8 22.9 39.4 53.1 6.4 9.1-9.9 19.3-24.8 31.3-45.5 26.7-8.8 56.1-19.8 82-24 21.9 12 47.6 19.9 64.6 19.9 27.7.1 28.9-30.2 18.5-40.6zm-229.2 89c5.9-15.9 28.6-34.4 35.5-40.8-22.1 35.3-35.5 41.5-35.5 40.8zM180 175.5c8.7 0 7.8 37.5 2.1 47.6-5.2-16.3-5-47.6-2.1-47.6zm-28.4 159.3c11.3-19.8 21-43.2 28.8-63.7 9.7 17.7 22.1 31.7 35.1 41.5-24.3 4.7-45.4 15.1-63.9 22.2zm153.4-5.9s-5.8 7-43.5-9.1c41-3 47.7 6.4 43.5 9.1z"></path></svg> PDF'
			}]
		}).container().appendTo($('.custom_buttons'));

		// Custom Search

		$('#s').keyup(function(){
			table.search($(this).val()).draw();
		});

		// Page Count

		$('.filter_count').on( 'click', function () {
			amount = $(this).data('val');
			console.log('amount: '+amount);
			$('.amount').text(amount);
			table.page.len(amount).draw();
			$('.filter_count').removeClass('active');
			$(this).addClass('active');
		});

		// Custom filters

		$('.filter_column').click(function(){
			var col = $(this).data('col');
			var val = $(this).data('val');
			var text = $(this).text();
			var this_data = $(this).attr('data-col');
			$('li[data-col = '+this_data+']').removeClass('active');
			$('.filter_col_'+col).removeClass('active');
			$(this).addClass('active');
			$('.filter-col-'+col).text(text);
			table.columns(col).search($(this).data('val')).draw();

		});

	});
	
	</script>
	
	<?php
	
}

/**
 * --------------
 *    Time Ago
 * --------------
 *
 *
 *
 */

function time_elapsed_string($datetime, $full = false) {
	
	$now = new DateTime;
	$ago = new DateTime($datetime);
	$diff = $now->diff($ago);
	
	$diff->w = floor($diff->d / 7);
	$diff->d -= $diff->w * 7;
	
	$string = array(
		'y' => 'año',
		'm' => 'mes',
		'w' => 'semana',
		'd' => 'día',
		'h' => 'hora',
		'i' => 'minuto',
		's' => 'segundo',
    );
	
	foreach ($string as $k => &$v) {
		if ($diff->$k) {
			if($v == 'mes'){
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 'es' : '');
			}else{
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			}
		}else{
			unset($string[$k]);
		}
	}
	
	if (!$full) $string = array_slice($string, 0, 1);
	
	return $string ? implode(', ', $string) . ' atrás' : 'ahora mismo';

}

/**
 * -----------------
 *    Get Cookies
 * -----------------
 *
 *
 *
 */

function get_cookies($area){
	global $system_session_name;
	if (isset($_COOKIE[$system_session_name.'_'.$area.'_name'])) {
		$cookie['view_name'] = $_COOKIE[$system_session_name.'_'.$area.'_name'];
		$cookie['view_icon'] = $_COOKIE[$system_session_name.'_'.$area.'_icon'];
		$cookie['filter_status'] = $_COOKIE[$system_session_name.'_'.$area.'_status'];
	}else{
		$cookie['view_name'] = '';
		$cookie['view_icon'] = '';
		$cookie['filter_status'] = '';
	}
	return $cookie;
}

/**
 * --------------------
 *   Client Logged In
 * --------------------
 * 
 * Checks if there's a user logged in now and
 * if the user has an ID and a Name, as an 
 * extra security meassure.
 * 
 */

function client_logged_in(){
	global $user_session_name;
	if(isset($_SESSION)){
		if(isset($_SESSION[$user_session_name])&&$_SESSION[$user_session_name]['ID']!=''&&$_SESSION[$user_session_name]['Name']!=''){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

/**
 * -------------------
 *	 Crypt & Decrypt
 * -------------------
 * 
 * Functions to encrypt and decrypt content
 * using the encryption_key constant defined in
 * setup.php
 * 
 * $url_encode and $url_decode can be set to true
 * to encode the string to a URL friendly format. This
 * must be set to true in both cases for the strings
 * to decode properly. It defaults to false.
 * 
 */

function encrypt($pure_string,$url_encode=false) {
	$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
	$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
	if($url_encode){ $encrypted_string = urlencode($encrypted_string); }
	return $encrypted_string;
}

function decrypt($encrypted_string,$url_decode=false) {
	$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
	$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	if($url_decode){ $encrypted_string = urldecode($encrypted_string); }
	$decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
	return $decrypted_string;
}

/**
 * ---------------------
 *	 Update Last Login
 * ---------------------
 * 
 * This option updates the Last_login column
 * with the current datetime in the $table
 * specified, where $id matches the ID of the user.
 * 
 */

function update_last_login($id,$table){
	
	global $link;
	
	// Look for the row
	
	$query = "UPDATE $table SET Last_login = NOW() WHERE ID = ?";
	
	try {
		$stmt = $link->prepare($query);
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows === 0){
			return array('warning','No se encontró el usuario en la base de datos.');
		}else{
			return array('success','Se actualizó el valor en la base de datos.');
		}
	} catch(Exception $e) {
		return array('system','Ocurrió un error de sistema: '.$mysqli->errno);
	}
	
}

/**
 * ----------------
 *	  Delete Row
 * ----------------
 * 
 * Deletes the row where $id matches the ID
 * in the $table provided.
 * 
 * Returns an array with 2 keys and values:
 * 0 : succcess/error/warning/system - depending of the result of the operation
 * 1 : string - a message explaining the result
 * 
 */

function delete_row($id,$table){
	
	global $link;
	
	// Look for the row
	
	$query = "SELECT * FROM $table WHERE ID = ?";
	
	try {
		$stmt = $link->prepare($query);
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows === 0){
			return array('warning','No se encontró el valor en la base de datos.');
		}
	} catch(Exception $e) {
		return array('system','Ocurrió un error de sistema: '.$mysqli->errno);
	}
	
	// Delete the entry
	
	$query = "DELETE FROM $table WHERE id = ?";
	
	try {
		$stmt = $link->prepare($query);
		$stmt->bind_param("i", $id);
		$stmt->execute();
		if($stmt->affected_rows === 0){
			return array('error','No se eliminó el valor en la base de datos.');
		}else{
			return array('success','Se eliminó el valor en la base de datos.');
		}
		$stmt->close();
	} catch(Exception $e) {
		return array('system','Ocurrió un error de sistema: '.$mysqli->errno);
	}
	
}

/**
 * ----------------------
 *		Build navigation
 * ----------------------
 * 
 * This function builds the navigation menus for the site.
 * It takes 4 obligatory inputs and 2 optional.
 * The inputs are:
 * - $style = STRING - "error" red color
 *										 "info" aqua color
 *										 "success" mint color
 *										 "warning" yellow color
 *										 "comment" purple color
 * - $type = STRING - "text" for text menus (the items will be aligned to the left and it will have no title)
 *									- "icon" for icon menus (the items will be aligned to the right and there will be an option title on the left)
 * - $size = STRING - "short" for a 95% menu with a maximum width of 1000px and 50px tall
 *									- "large" for a 100% wide menu and 60px tall
 * - $items = ARRAY - array of elements to build the menu:
 *										aaaaaaa
 * - $print (optional) = BOOLEAN - True for printing the menu and false to return it (defaults to true)
 * - $title (optional) = STRING - The title for the menu when it's an icon menu
 * 
 * CSS
 * There are 2 css files that control the styling of the navs
 * _navigation controls the basic structure, styling and design of the navs
 * _variables contains the variables for the colors ($syle)
 * 
 */

function build_navigation($style,$type,$size,$items,$print=true,$title='',$simple=false){
	
	if($simple){
		$simple = 'simple';
	}
	
	// Open the nav
	$nav = '<nav class="hor-nav '.$style.' '.$type.' '.' '.$size.' '.$simple.'">';
	
	// Check if it's icon and print the title
	if($type==='icon'){ $nav .= '<span class="nav-title">'.$title.'</span>'; }
	
	// Open the list
	$nav .= '<ul>';
	
	// Start running through the items
	// If it finds a Dropdown key with a value of 1 it will start building a dropdown menu
	foreach($items as $key => $value){
		
		// Reset the target just in case
		$where = '_self';
		
		// Check for Dropdown
		if($value['Dropdown']===0){
			
			// Check for Target
			$value['Blank'] ? $where = '_blank' : $where = '_self';
			
			// Build the menu item
			$nav .= '<li><a href="'.$value['Link'].'" target="'.$where.'" class="outer">'.$value['Name'].'</a></li>';
			
		}elseif($value['Dropdown']===1){
			
			// Check if it's an icon menu
			if($type==='icon'){
				// If it's an icon menu print the icon inside the layered fontawesome span
				$nav .= '<li><a class="outer open-dropdown"><span class="fa-layers fa-fw fa-lg" style="position: inherit;"><i class="fas fa-'.$value['Name'].'" data-fa-transform="left-7"></i><i class="fas fa-caret-down" data-fa-transform="shrink-4 right-7"></i></span></a>';
			}else{
				// If it's a text menu print the word next to the icon
				$nav .= '<li><a class="outer open-dropdown">'.$value['Name'].' <i class="fas fa-caret-down fa-sm"></i></a>';
			}
			
			// Open the dropdown menu
			$nav .= '<div class="menu-dropdown right">';
			
			// Build the title of the dropdown
			$nav .= '<h6>'.$value['Header'].'</h6>';
			
			// Open the list
			$nav .= '<ul>';
			
			// Start running through the items of the sub menu
			// If it finds a Separator key with a value of 1 it will add a separator
			foreach($value['Items'] as $k => $v){
				
				// Reset the target just in case
				$where = '_self';
				
				// Check for Separator
				if($v['Separator']===1){
					
					// Apply separator
					$nav .= '<hr>';
					
				}else{
					
					// Check for Target
					$v['Blank'] ? $where = '_blank' : $where = '_self';
					
					// Build the menu item
					$nav .= '<li><a href="'.$v['Link'].'" target="'.$where.'" class="inner">'.$v['Name'].'</a></li>';
					
				}
				
			}
			
			// Close the list
			$nav .= '</ul>';
			
			// Close the dropdown menu
			$nav .= '</div>';
			
			// Close the item
			$nav .= '</li>';
			
		}
		
	}
	
	// Close the list
	$nav .= '</ul>';
	
	// Close the nav
	$nav .= '</nav>';
	
	// Print the nav if it's set to true
	if($print){ echo $nav; }else{ return $nav; }
	
}

/**
 * -------------------------------
 *		Build vertical navigation
 * -------------------------------
 * 
 * This function builds a vertical navigation menus for the site.
 * It takes 4 obligatory inputs and 2 optional.
 * The inputs are:
 * - $style = STRING - "error" red color
 *										 "info" aqua color
 *										 "success" mint color
 *										 "warning" yellow color
 *										 "comment" purple color
 * - $type = STRING - "text" for text menus (the items will be aligned to the left and it will have no title)
 *									- "icon" for icon menus (the items will be aligned to the right and there will be an option title on the left)
 * - $size = STRING - "short" for a 95% menu with a maximum width of 1000px and 50px tall
 *									- "large" for a 100% wide menu and 60px tall
 * - $items = ARRAY - array of elements to build the menu:
 *										aaaaaaa
 * - $print (optional) = BOOLEAN - True for printing the menu and false to return it (defaults to true)
 * - $title (optional) = STRING - The title for the menu when it's an icon menu
 * 
 * CSS
 * There are 2 css files that control the styling of the navs
 * _navigation controls the basic structure, styling and design of the navs
 * _variables contains the variables for the colors ($syle)
 * 
 */

function build_vertical_navigation($style='info',$open='open',$collapsible=true,$items,$print=true,$current='home',$id,$classes=NULL){
	
	global $TheSiteURL;
	
	// Start the navigation
	$nav = '<nav id="'.$id.'" class="ver-nav '.$open.' '.$style.' '.$classes.'">';

		// Start the list
		$nav .= '<ul';
		
		if($collapsible){
			$nav .= ' class="is-collapsible"';
		}
		
		$nav .= '>';
		
		// Build list of icons
		foreach($items as $key => $value){

			// Check for type of link and if it's internal add forward slash
			if($value['Link']!=''){ $link_slash = '/'; }else{ $link_slash = ''; }

			// Check for current link or home link to add the active class to the item and start the item
			if($current==$value['Link']){
				$nav .= '<li class="active">';
			}else{
				$nav .= '<li>';
			}

			// Check for Target
			$value['Blank'] ? $where = '_blank' : $where = '_self';

			// Build the button
			if($value['Link']=='home'){
				$nav .= '<a href="'.$TheSiteURL.$link_slash.'" target="'.$where.'">';
			}elseif($value['Dropdown']!==0){
				$nav .= '<a>';
			}else{
				$nav .= '<a href="'.$TheSiteURL.$value['Link'].$link_slash.'" target="'.$where.'">';
			}

			$nav .= '<span class="icon"><i class="far fa-'.$value['Icon'].' fa-fw"></i></span>';
			$nav .= $value['Name'];
			$nav .= '</a>';

			// Check for Dropdown
			if($value['Dropdown']!==0){

				// Start the list
				$nav .= '<ul>';

				$first = true;

				// Build dropdown menu
				foreach($value['Items'] as $k => $v){

					// Check for type of link and if it's internal add forward slash
					if($v['Link']!=''){ $link_slash = '/'; }else{ $link_slash = ''; }

					// Check for current link or home link to add the active class to the item and start the item
					if($current==$v['Link']){
						$nav .= '<li class="active">';
					}else{
						$nav .= '<li>';
					}

					if($first){
						$nav .= '<span class="arrow"></span>';
						$first = false;
					}

					// Check for Target
					$v['Blank'] ? $where = '_blank' : $where = '_self';

					// Build the button
					$nav .= '<a href="'.$TheSiteURL.$v['Link'].$link_slash.'" target="'.$where.'">';
					$nav .= $v['Name'];
					$nav .= '</a>';

					// Close the list
					$nav .= '</li>';

				}

				// Close the list
				$nav .= '</ul>';

			}

			// Close the item
			$nav .= '</li>';

		}

		// Close the list
		$nav .= '</ul>';

		// Add collapsible button if it's set to true
		if($collapsible){
			$nav .= '<a class="collapse-btn" data-id="'.$id.'"><span class="icon"><i class="far fa-caret-right fa-fw"></i></span></a>';
		}

	// Close the navigation
	$nav .= '</nav>';
	
	// Print the menu if it's set to true
	if($print){ echo $nav; }else{ return $nav; }
	
}

/**
 * ------------------------
 *		Print Notification
 * ------------------------
 * 
 * This function prints a notification on the screen.
 * It takes 4 obligatory inputs and 2 optional.
 * The inputs are:
 * - $type = STRING - "error" red notification to report an error
 *									- "warning" yellow notification to warn the user of potential problems
 *									- "success" mint notification for success report
 *									- "comment" purple notification for random messages
 * - $size = STRING - "short" for a 95% menu with a maximum width of 1000px and 32px tall
 *									- "large" for a 100% wide menu and 42px tall
 * - $title = STRING - Title of the notification
 * - $text = STRING - Message of the notification
 * - $print (optional) = BOOLEAN - True for printing the menu and false to return it (defaults to true)
 * - $icon (optional) = STRING - Gives the option to show a custom icon (defaults to icons based on $type)
 * 
 * CSS
 * There are 2 css files that control the styling of the navs
 * _notifications controls the basic structure, styling and design of the navs
 * _variables contains the variables for the colors ($syle)
 * 
 */

function print_notification($type,$size,$title,$text,$print=true,$icon=''){
	
	// Open the notification
	$notification = '<div class="notification '.$size.' '.$type.'">';
	
	// Check for a custom icon
	if($icon===''){
		switch($type){
			case 'error': $icon = 'exclamation-triangle'; break;
			case 'warning': $icon = 'exclamation-circle'; break;
			case 'success': $icon = 'check'; break;
			case 'comment': $icon = 'info-circle'; break;
		}
	}
	
	// Build initial icon
	$notification .= '<span class="icon"><i class="far fa-'.$icon.' fa-fw"></i></span>';
	
	// Build title
	$notification .= '<span class="title">'.$title.':</span> ';
	
	// Build text
	$notification .= '<span class="text">'.$text.':</span> ';
	
	// Add closing button
	$notification .= '<a class="close close-notification"><i class="far fa-times fa-fw"></i></a>';
	
	// Close notification
	$notification .= '</div>';
	
	// Print the nav if it's set to true
	if($print){ echo $notification; }else{ return $notification; }
	
}

?>