<?php

include('./lib/functions.php');

if (!isset($argv[1])) {
	$action = "help";
} else {
	$action = $argv[1];
}

switch ($action) {
	case 'add':
		include('./lib/add.php');
	break;

	case 'list':
		include('./lib/list.php');
	break;

	case 'info':
		include('./lib/list.php');
		include('./lib/info.php');
	break;	

	case 'delete':
		include('./lib/list.php');
		include('./lib/delete.php');
	break;
	
	case 'edit':
		include('./lib/list.php');
		include('./lib/edit.php');
	break;

	case 'competition':
		include('./lib/competition.php');
	break;

	case 'results':
		include('./lib/results.php');
	break;

	case 'purge':
		include('./lib/purge.php');
	break;

	default:
		include('./lib/help.php');
	break;
}
