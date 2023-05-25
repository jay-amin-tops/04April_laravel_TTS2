<?php
$array = array (
		'websites' => array (
				'Search' => 'Google',
				'Social' => 'Facebook',
				'News' => 'NY Times' 
		),
		'friends' => array (
				'Chris',
				'Jim',
				'Lynn',
				'Jeff',
				'Joanna' 
		),
		16,
		99,
		13,
		'newfriend' => 'Ken' 
);
echo "<pre>";
print_r ( $array );

$array = array_reverse ( $array );

print_r ( $array );
?> 