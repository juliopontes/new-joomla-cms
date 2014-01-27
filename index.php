<?php
if (!is_dir(__DIR__.'/vendor')) {
	throw new Exception('Run Composer Install',1);
}

if (is_dir(__DIR__.'/installer')) {
	header('location: installer/');
}

echo 'This is the entry point';