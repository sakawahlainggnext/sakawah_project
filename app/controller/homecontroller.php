<?php 
//Part2
function homecontroller()

{
	$data = array(
	'title'			=> 'Myanmar Links',
	'another_title'	=> 'Myanmar Tutorials',
	'class'	=> array(//inner array 
		'wpa1', 'wpa2', 'wpa3'
		)
	);
	echo load_view('home', $data);//$data for var
}

//echo "viewloader(home)";

 ?>