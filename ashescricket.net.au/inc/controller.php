
<?php  

include('inc/data.php');


//Conditional to set display of 'results' fieldset area


if(isset($_POST['player']) && !isset($_POST['runs']) && !isset($_POST['wickets'])) {
echo "<h2>Ashes Performance</h2>
<fieldset>";   


//Conditional to display performance
  
if ($_POST['player'] == "David Warner"){
  

foreach($batting[0] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }
}   

if ($_POST['player'] == "Cameron Bancroft"){
foreach($batting[1] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
        }
}  

if ($_POST['player'] == "Usman Khawaja"){
foreach($batting[2] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
            }
} 

if ($_POST['player'] == "Steve Smith"){
    foreach($batting[3] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
                }
    } 

if ($_POST['player'] == "Shaun Marsh"){
    foreach($batting[4] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
                }
    }

if ($_POST['player'] == "Tim Paine"){
foreach($batting[5] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";                    
}
foreach($keeping[1] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";                
    }
}


if ($_POST['player'] == "Pat Cummins"){
          
foreach($bowling[3] as $key => $item) {    
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
}

foreach($batting[6] as $key => $item) {

echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }     
}

if ($_POST['player'] == "Peter Handscomb"){
    foreach($batting[7] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
        }
    }

if ($_POST['player'] == "Mitch Marsh"){
foreach($batting[8] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }
foreach($bowling[4] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }
}    

if ($_POST['player'] == "Mitch Starc"){
    foreach($bowling[1] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
                }
    }  

if ($_POST['player'] == "Nathan Lyon"){
foreach($bowling[2] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
                    }
}      

if ($_POST['player'] == "Josh Hazlewood"){
    foreach($bowling[0] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";                      }
    }     

if ($_POST['player'] == "Alistair Cook"){
foreach($batting[10] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
        }
} 

if ($_POST['player'] == "Mark Stoneman"){
    foreach($batting[11] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }
}

if ($_POST['player'] == "James Vince"){
foreach($batting[12] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }
}

if ($_POST['player'] == "Joe Root"){
foreach($batting[13] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
        }
}

if ($_POST['player'] == "Dawid Malan"){
foreach($batting[14] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
        }
}

if ($_POST['player'] == "Jonny Bairstow"){
foreach($batting[15] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }
foreach($keeping[0] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }
}

if ($_POST['player'] == "Chris Woakes"){
foreach($bowling[7] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
                            }
foreach($batting[16] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
                    }
            }

if ($_POST['player'] == "Moeen Ali"){
foreach($batting[17] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
            }
foreach($bowling[9] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
                            }
            
}

if ($_POST['player'] == "Craig Overton"){

foreach($bowling[8] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
        }
foreach($batting[18] as $key => $item) {
echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
            
    }
}

if ($_POST['player'] == "Stuart Broad"){
    foreach($bowling[6] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }
    foreach($batting[19] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
                    }
} 

if ($_POST['player'] == "James Anderson"){
    foreach($bowling[5] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }

}    

if ($_POST['player'] == "Tom Curran"){
    foreach($bowling[10] as $key => $item) {
    echo "<p>" ."<strong>" . $key  . "</strong>" . "</p>" . $item . "<hr>" . " ";
    }

} 

echo "</fieldset>";    
}






