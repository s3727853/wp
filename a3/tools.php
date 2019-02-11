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
    

   

    
// Populate session ticket (seat) array for use on invoice
    
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
    
    
  // $totalPrice += $userTicket * $priceArray[$i][$fareType];
    $i ++;
}    
   
        

    
    
// Notify of SUBMIT-POST success or failure
if($errorFLAG == 1){    
    echo '<script language="javascript">';
    echo 'alert("ERROR ';
    echo $errorMSG;
    echo '")';
    echo '</script>';

}
else{
    
    
    $_SESSION[cart]=array();
 
    array_push($_SESSION[cart], $movieArray[$movieIndex]["NAME"], $fareArray[$day]["DAY"], $movieArray[$movieIndex][$playSlot], $fareType, $customer[name], $customer[email], $customer[mobile], $customer[card], $customer[expiry], $seats[STA], $seats[STP], $seats[STC], $seats[FCA], $seats[FCP], $seats[FCC]);

    $_SESSION[cart]=array(
    "MOVIE"=> $movieArray[$movieIndex]["NAME"],
    "DAY"=> $fareArray[$day]["DAY"], 
    "TIME"=> $movieArray[$movieIndex][$playSlot],   
    );
    
    echo '<script language="javascript">';
    echo 'alert("Movie Selected\n';
    echo 'Movie Code = ';
    echo $movieArray[$movieIndex]["ID"];
    echo '\nDay Selected = ';
    echo $fareArray[$day]["DAY"];
    echo '\nTime Selected = ';
    echo $movieArray[$movieIndex][$playSlot];
    echo '\nDiscount or Full\n';
    echo $fareType; 
    echo '\nNumber of tickets selected\n';
    echo $tickets;
    echo '\nTotal Cost\n';
    echo $totalPrice; 
    echo '")';
    echo '</script>';
    
    header('location: order.php');
}

  

}

// Below functions deal with invoice/ticket display.

function processCart(){
    $SessionBookings = $_SESSION[cart];
    
// SESSION CART INDEX
// 0=movieID 1=Day 2=Time 3=Fare Type 4=CustName 5=CustEmail 6=CustMobile 7=CustCard 8=CustExpiry
// 9=STA 10=STP 11=STC 12=FCA 13=FCP 14=FCC
    
    echo '<h1>-------- processCart() TEST ---------</h1><br>';
    echo '<br>Session info<br>';
    print_r($SessionBookings);
    echo '<br>';
    print_r($_SESSION[ticketNo]);
    echo '<br>';
    print_r($_SESSION[ticketCost]);
    echo '<br>';
    print_r($_SESSION[ticketName]);   
        

}

function printPage(){
    $sessionBookings = $_SESSION[cart];
    $ticketNo = $_SESSION[ticketNo];
    $ticketCost = $_SESSION[ticketCost];
    $ticketName = $_SESSION[ticketName];
    
    echo '<tr class="details"><td>';
    echo $sessionBookings[MOVIE];
    echo '</td><td>';
    echo $sessionBookings[DAY];
    echo '</td><td>';
    echo $sessionBookings[TIME];
    echo '</td></tr>';
    
   // for($i = 0 ; i < sizeof($ticketNo); $i++){
   // }
    
   
    
    }


?>

