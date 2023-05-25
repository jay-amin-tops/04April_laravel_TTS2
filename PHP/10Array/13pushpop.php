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
		) 
);
echo "<pre>";
// print_r ( $array );

// $shifted = array_shift ( $array );

// array_push ( $array, $shifted );

$shifted = array_pop ( $array ); //POP!

print_r ( $shifted );
// print_r ( $array );
?>