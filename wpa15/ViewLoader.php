<?php 
//Part3
function load_view($view, $data = null) {
	ob_start();
	if($data != null) {//for as $data(var)
		extract($data);//for array packet
	}
	require DD . 'app/views/' . $view . '.php';
	// ob_end_flush();
	$html = ob_get_clean(); // ob_end_flush()
	return $html;
}
//ob_start & ob_get_clean for output burferring

//$view for page
// ob_end_flush() for using not return
//important echo because using  ob_get_clean for see output

 ?>