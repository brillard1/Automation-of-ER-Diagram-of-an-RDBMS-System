<?php
	ini_set('display_errors', 1);
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	# in shell: composer require iamcal/sql-parser
        # see "Installation" section of https://github.com/iamcal/SQLParser
	require_once 'vendor/autoload.php';
	use iamcal\SQLParser;

	$N = $argc - 1;
	if ($N != 1) {
	    error_log("need exactly one argument (a .sql mysql ddl file) but $N was found");
	    exit(1);
	}

	$sql = file_get_contents($argv[1]);

	$obj = new SQLParser();

	#$tokens = $obj->lex($sql);
	#print_r($tokens);
	#exit;

	$obj->parse($sql);
	#echo json_encode($obj->tables['bounces']['fields'], JSON_PRETTY_PRINT)."\n";
	echo json_encode($obj->tables, JSON_PRETTY_PRINT)."\n";

