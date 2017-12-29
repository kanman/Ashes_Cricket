<?php include('inc/data.php');
$output = array_column($bowling, 'Wickets:', 'Player:');
arsort($output);

if(isset($_POST['wickets'])) {
echo "<div id='fieldset'>";
foreach($output as $key => $value) { 
if($value > 1) {       
echo "<p>" . $key . " " . $value . "</p>";  
        }
    }
}

echo "</div>";
