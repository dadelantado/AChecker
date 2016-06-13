<?php

$urls = $_REQUEST['urls'];

$urls = preg_replace('/\s+/msi', ' ', $urls);
$urls = explode(' ', $urls);


$item = 1;
#echo '<hr>';
echo '<h1>URLs checked:</h1>
<div class="panel-group" id="accordion">';

foreach($urls as $url) {

	$results = 'http://achecker.ca/checkacc.php?uri='.$url.'&id=64cbde062a758bcb60efb0b6a1a3158e6f47ac37&output=html&guide=WCAG2-AA';

	echo '
  	<div class="panel panel-default">
  		<div class="panel-heading">
  			<h4 class="panel-title">
  				<a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$item.'">'.$url.'</a>
  			</h4>
  		</div>
  		<div id="collapse'.$item.'" class="panel-collapse collapse">
  			<div class="panel-body">';
	echo file_get_contents($results);
	echo '</div>
  		</div>
			</div>';



	#echo '<a id="'.$item.'"></a>';
	#echo '<br><br><h4>'.$url.'</h4>';
	#echo file_get_contents($results);
	#echo '<hr>';
	$item++;
}
echo '</div>';

?>
