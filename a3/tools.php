<?php
  session_start();

 
function printCode() {
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre class='mycode'><ol>";
    echo '<br><h1>--------HTML Source Code--------</h1><br>';
    foreach ($lines as $line)
        echo '<li>'.rtrim(htmlentities($line)).'</li>';
    echo '</ol></pre>';
   
}

function preShow( $arr, $returnAsString=false ) {
    $ret = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
        return $ret;
    else
        echo $ret;
}

?>

