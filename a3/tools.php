<?php
session_start();



function printCode() {
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre class='mycode'><ol>";
    echo '<br><h1>-------- HTML Source Code --------</h1><br>';
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


// Array for checking movie Data





function order() {
    
// Assigning local variables to hold post data    
    
    $movie = $_POST[movie]; 
    $seats = $_POST[seats];
    $customer = $_POST[cust];    

$movieArray = array (
    array("ID"=>"ACT", "Rateing"=>"MA15+", "PlaySlot1"=>"NA", "PlaySlot2"=>"21:00", "PlaySlot3"=>"18:00", "NAME"=>"The Girl in the Spider's Web"),
    array("ID"=>"RMC", "Rateing"=>"MA15+", "PlaySlot1"=>"18:00", "PlaySlot2"=>"NA", "PlaySlot3"=>"15:00", "NAME"=>"A Star is Born"),
    array("ID"=>"ANM", "Rateing"=>"G", "PlaySlot1"=>"12:00", "PlaySlot2"=>"18:00", "PlaySlot3"=>"12:00", "NAME"=>"Ralph Breaks the Internet"),
    array("ID"=>"AHF", "Rateing"=>"MA15+", "PlaySlot1"=>"NA", "PlaySlot2"=>"12:00", "PlaySlot3"=>"21:00", "NAME"=>"Boy Erased"),
);
    
    
$fareArray = array (
        //Day |12|15|18|21
        array("DAY"=>"MON", "12Fare"=>"D", "15Fare"=>"D", "18Fare"=>"D", "21Fare"=>"D"),
        array("DAY"=>"TUE", "12Fare"=>"D", "15Fare"=>"F", "18Fare"=>"F", "21Fare"=>"F"),
        array("DAY"=>"WED", "12Fare"=>"D", "15Fare"=>"D", "18Fare"=>"D", "21Fare"=>"D"),
        array("DAY"=>"THU", "12Fare"=>"D", "15Fare"=>"F", "18Fare"=>"F", "21Fare"=>"F"),
        array("DAY"=>"FRI", "12Fare"=>"D", "15Fare"=>"F", "18Fare"=>"F", "21Fare"=>"F"),
        array("DAY"=>"SAT", "12Fare"=>"F", "15Fare"=>"F", "18Fare"=>"F", "21Fare"=>"F"),
        array("DAY"=>"SAT", "12Fare"=>"F", "15Fare"=>"F", "18Fare"=>"F", "21Fare"=>"F"),
    );


$priceArray = array (
    // Seat|Mon&Wed&12pmWeekday|All other times 
    array("Seat"=>"STA","Discount"=>"14.00","Full"=>"19.80","NAME"=>"Standard Adult"),
    array("Seat"=>"STP","Discount"=>"12.50","Full"=>"17.50","NAME"=>"Standard Concession"),
    array("Seat"=>"STC","Discount"=>"11.00","Full"=>"15.30","NAME"=>"Standard Child"),
    array("Seat"=>"FCA","Discount"=>"24.00","Full"=>"30.00","NAME"=>"First Class Adult"),
    array("Seat"=>"FCP","Discount"=>"22.50","Full"=>"27.00","NAME"=>"First Class Concession"),
    array("Seat"=>"FCC","Discount"=>"21.00","Full"=>"24.00","NAME"=>"First Class Child"),
    
);


// Begin logical statments to find if values passed in are legit

// Get Movie ID passed in and assign it to appropriate variable to be used as array index   
if($movie[id] == "ACT")
    {$movieIndex = 0;}
    else if($movie[id] == "RMC")
        {$movieIndex = 1;}
    else if($movie[id] == "ANM")
        {$movieIndex = 2;}
    else if($movie[id] == "AHF")
        {$movieIndex = 3;}
// If an non-existent value is found flag the error and display the message.    
else {
    $errorFLAG = 1;
    $errorMSG = "There was an issue with the movie ID submitted";
    }    
  
    
// Get the day passed in and assign it a value to be used in the day slot array index 
if($movie[day] == "MON" || $movie[day] == "TUE") 
    {
    $playSlot = PlaySlot1;
        if($movie[day] == "MON")
        {
            $day = 0;
        }
        if($movie[day] == "TUE")
        {
            $day = 1;
        }
    }
    else if ($movie[day] == "WED" || $movie[day] == "THU"  || $movie[day] == "FRI" )
        {
        $playSlot = PlaySlot2;
            if($movie[day] == "WED")
            {
            $day = 2;
            }
        if($movie[day] == "THU")
            {
            $day = 3;
            }
        if($movie[day] == "FRI")
            {
            $day = 4;
            }
    
        }
    
    else if ($movie[day] == "SAT" || $movie[day] == "SUN" )
        {
        $playSlot = PlaySlot3;
            if($movie[day] == "SAT")
            {
            $day = 5;
            }
            if($movie[day] == "SUN")
            {
            $day = 6;
            }
        
    }
    
// If an non-existent value is found flag the error and display the message.  
else {
    $errorFLAG = 1;
    $errorMSG = "There was an issue with the movie Day submitted"; 
}    

    

// Get the hour passed in and assign it a value to be used in the day slot array index 

//MAY NOT NEED TIMEINDEX--------------------++++++++++++++++++++++    
    
 if($movie[hour] == "12:00")
    {$timeIndex = '12Fare';}
    else if($movie[hour] == "15:00")
        {$timeIndex = '15Fare';}
    else if($movie[hour] == "18:00")
        {$timeIndex = '18Fare';}
    else if($movie[hour] == "21:00")
        {$timeIndex = '21Fare';}
// If an non-existent value is found flag the error and display the message.
else {
    $errorFLAG = 1;
    $errorMSG = "There was an issue with the movie Hour submitted";
}   
if ($movieArray[$movieIndex][$dayIndex] == "NA"){
    $errorFLAG = 1;
    $errorMSG = "Movie is not playing on the selected day.";}    
    
       
// The time that the movie is playing for user selection 
    
$playTime = $movieArray[$movieIndex][$playSlot];
// Checkk that it is valid
    if($playTime != "NA"){
        if($playTime == "12:00"){
            $fare = '12Fare';
        }
        if($playTime == "15:00"){
            $fare = '15Fare';
        }
        if($playTime == "18:00"){
            $fare = '18Fare';
        }
        if($playTime == "21:00"){
            $fare = '21Fare';
        }  
    }
    
// Set fare type
if($fareArray[$day][$fare] == "D"){
    $fareType = 'Discount';
}
else{
    $fareType = 'Full';
}
    

// Check to make sure user has selected at least one tickets
    
foreach($seats as $seat)
{
    $tickets += $seat;
}
    
if($tickets < "1")
{
    $errorFLAG = 1;
    $errorMSG = "Please select at least one ticket";
}
    

   

    
// Populate session ticket (seat) array for use on invoice page
    
$_SESSION[ticketNo]=array();
$_SESSION[ticketCost]=array();  
$_SESSION[ticketName]=array(); 
    
$i = 0;
foreach($seats as $userTicket){
    if($userTicket > 0){
        $seatCost = $priceArray[$i][$fareType];
        array_push($_SESSION[ticketNo],$userTicket);
        array_push($_SESSION[ticketCost],$seatCost);
        array_push($_SESSION[ticketName],$priceArray[$i]["NAME"]);
        $i++;           
    }
    

    $i ++;
}    
   
        

    
    
// Notify of SUBMIT-POST failure
if($errorFLAG == 1){    
    echo '<script language="javascript">';
    echo 'alert("ERROR ';
    echo $errorMSG;
    echo '")';
    echo '</script>';

}
else{
    

    // Add items to session cart array
    $_SESSION[cart]=array(
    "MOVIE"=> $movieArray[$movieIndex]["NAME"],
    "DAY"=> $fareArray[$day]["DAY"], 
    "TIME"=> $movieArray[$movieIndex][$playSlot],
    "CNAME"=> $customer[name],
    "CEMAIL"=> $customer[email],
    "CMOBILE"=> $customer[mobile],    
    "CCARD"=> $customer[card], 
    "CEXPIRY"=> $customer[expiry]    
    );
    
   
    // Redirect to invoice page
    header('location: order.php');
}

  

}

// Below functions deal with invoice/ticket display.

function processCart(){
    $SessionBookings = $_SESSION[cart];
    
    // Display debug info
    
    echo '<h1>-- Array Debug Area --</h1><br>';
    echo '<br>Session info<br>';
    print_r($SessionBookings);
    echo '<br><br>';
    print_r($_SESSION[ticketNo]);
    echo '<br><br>';
    print_r($_SESSION[ticketCost]);
    echo '<br><br>';
    print_r($_SESSION[ticketName]);   
        

}

function printPage(){
    $sessionBookings = $_SESSION[cart];
    $ticketNo = $_SESSION[ticketNo];
    $ticketCost = $_SESSION[ticketCost];
    $ticketName = $_SESSION[ticketName];
    
    //Calculate total before GST
    
   for($h = 0; $h < sizeof($ticketNo); $h++){
       $total += $ticketNo[$h] * $ticketCost[$h];
   }
    // Calculate GST
  $gst = $total * 0.1;
    //Grand Total
   $grandTotal = $total + $gst;
    
    //Populate tables
    
    echo '<tr class="information"><td colspan="3"><table><tr><td>';
    echo $sessionBookings[CNAME];
    echo '<br>';
    echo $sessionBookings[CEMAIL];
    echo '<br>';
    echo $sessionBookings[CMOBILE];
    echo '</td><td></td><td>';
    echo 'Lunardo Cinemas Pty Ltd';
    echo '<br>';
    echo 'sales@lunardo.com';
    echo '</td></tr></table></td></tr><tr class="heading"><td>Movie</td><td>Day</td><td>Time</td></tr>';
    echo '<tr class="details"><td>';
    echo $sessionBookings[MOVIE];
    echo '</td><td>';
    echo $sessionBookings[DAY];
    echo '</td><td>';
    echo $sessionBookings[TIME];
    echo '</td></tr>';
    echo '<tr class="heading" colspan="3"><td>Tickets</td><td>QTY</td><td>Price Each</td></tr>';
    
   // Loop through tickets and add a table entry for each one
   for($i = 0; $i < sizeof($_SESSION[ticketNo]); $i++){
       echo '<tr class="item"><td>';
       echo $ticketName[$i];
       echo '</td><td>';
       echo $ticketNo[$i];
       echo '</td><td>$';
       echo $ticketCost[$i];
       echo '</td><td></tr>';
   }
    echo '<tr class="item"><td></td><td></td><td>GST $';
    echo number_format((float)$gst, 2, '.', '');
    echo '</td><tr class="total"><td></td><td></td><td>Total: $';
    echo number_format((float)$grandTotal, 2, '.', '');
    echo '</td></tr>';
   
    
    }


?>

