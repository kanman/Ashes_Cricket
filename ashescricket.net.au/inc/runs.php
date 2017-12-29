<?php include('inc/data.php');

$output = array_column($batting,'Runs:', 'Player:');
arsort($output);

if(isset($_POST['runs'])) {

echo "<div id='fieldset'>";    
foreach($output as $key => $value) { 
if($value > 150) {    
echo "<p>" . $key . " " . $value . "</p>"; 
        }       
    } 
}
echo "</div>";


