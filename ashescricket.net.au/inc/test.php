<?php  

//Batting Array

$batting = array();

$batting[] = array(
'Player:' => "David Warner",
'Innings:' => 6,
'Runs:' => 299,
'Batting Average:' => 59.80, 
'Strike Rate:' => 58.51,
'Highest Score:' => 103,
);

$batting[] = array(
'Player:' => "Cameron Bancroft",
'Innings:' => 6,
'Runs:' => 152,
'Batting Average:' => 30.40, 
'Strike Rate:' => 38.00,
'Strike Rate:' => 58.51,
'Highest Score:' => 82,
);

$batting[] = array(
    'Player:' =>"Usman Khawaja",
    'Innings:' => 5,
    'Runs:' => 151,
    'Batting Average:' => 30.20, 
    'Strike Rate:' => 40.48,
    'Strike Rate:' => 58.51,
    'Highest Score:' => 53,
);


$batting[] = array(
    'Player:' =>"Steve Smith",
    'Innings:' => 5,
    'Runs:' => 502,
    'Batting Average:' => 125.5, 
    'Strike Rate:' => 51.07,
    'Strike Rate:' => 58.51,
    'Highest Score:' => 239,
);

$batting[] = array(
    'Player:' =>"Shaun Marsh",
    'Innings:' => 5,
    'Runs:' => 285,
    'Batting Average:' => 71.25, 
    'Strike Rate:' => 43.51,
    'Strike Rate:' => 58.51,
    'Highest Score:' => 126,
);

$batting[] = array(
    'Player:' =>"Tim Paine",
    'Innings:' => 5,
    'Runs:' => 154,
    'Batting Average:' => 38.50, 
    'Strike Rate:' => 52.74,
    'Strike Rate:' => 58.51,
    'Highest Score:' => 57,
);

//Pat Cummins
$batting[] = array(
    'Innings:' => 5,
    'Runs:' => 142,
    'Batting Average:' => 35.5, 
    'Strike Rate:' => 44.51,
);

$batting[] = array(
    'Player:' =>"Peter Handscomb",
    'Innings:' => 3,
    'Runs:' => 62,
    'Batting Average:' => 20.67, 
    'Strike Rate:' => 42.76,
);


$batting[] = array(
    'Player:' =>"Mitchell Marsh",
    'Innings:' => 2,
    'Runs:' => 190,
    'Batting Average:' => 95.00, 
    'Strike Rate:' => 74.80,
    'Highest Score:' => 181,
);

$batting[] = array(
    'Mitch Starc' =>"",
    'Innings:' => 4,
    'Runs:' => 33,
    'Batting Average:' => 8.25, 
);

$batting[] = array(
    'Player:' =>"Alistair Cook",
    'Innings:' => 7,
    'Runs:' => 187,
    'Batting Average:' => 31.17, 
    'Strike Rate:' => 49.08,
    'Highest Score' => 104,
);

$batting[] = array(
    'Player:' =>"Mark Stoneman",
    'Innings:' => 7,
    'Runs:' => 208,
    'Batting Average:' => 29.71, 
    'Strike Rate:' => 43.24,
    'Highest Score' => 56,
);

$batting[] = array(
    'Player:' =>"James Vince",
    'Innings:' => 7,
    'Runs:' => 199,
    'Batting Average:' => 28.43, 
    'Strike Rate:' => 47.38,
    'Highest Score' => 83,
);

$batting[] = array(
    'Player:' =>"Joe Root",
    'Innings:' => 7,
    'Runs:' => 225,
    'Batting Average:' => 37.5, 
    'Strike Rate:' => 51.72,
    'Highest Score' => 67,
);

$batting[] = array(
    'Player:' =>"Dawid Malan",
    'Innings:' => 6,
    'Runs:' => 302,
    'Batting Average:' => 50.33, 
    'Strike Rate:' => 46.68,
    'Highest Score' => 140,
);

$batting[] = array(
    'Player:' =>"Jonny Bairstow",
    'Innings:' => 6,
    'Runs:' => 241,
    'Batting Average:' => 40.17, 
    'Strike Rate:' => 53.91,
    'Highest Score' => 119,
);

//Chris Woakes
$batting[] = array(
    'Innings:' => 6,
    'Runs:' => 88,
    'Batting Average:' => 14.67, 
    'Strike Rate:' => 45.60,
);

$batting[] = array(
    'Moeen Ali' =>"",
    'Innings:' => 6,
    'Runs:' => 116,
    'Batting Average:' => 19.33, 
    'Strike Rate:' => 38.54,
);

//Craig Overton
$batting[] = array(
    'Innings:' => 4,
    'Runs:' => 62,
    'Batting Average:' => 20.67, 
    'Strike Rate:' => 43.97,
);

//Stuart Broad
$batting[] = array(
    'Innings:' => 6,
    'Runs:' => 45,
    'Batting Average:' => 7.5, 
    'Strike Rate:' => 54.88,
);

$output = array_column($batting, 'Runs:', 'Player:');
arsort($output);

foreach($output as $key => $value){
echo $key . " " . $value . "\n";    
}



