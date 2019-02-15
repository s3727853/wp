// Global Variables


var movieArrayStart = 0;
var daySelected;
var playTime;


// Called through onload event in <body>
// Populates the six <select> fields with for number of tickets per seat (0 through 10)

function countten() 
{    
    console.log("Count Ten seat select funct called from Body.");
    var boxes = document.getElementsByClassName("ten");
    for(var seatitems = 0; seatitems <=5; seatitems++)
        {
            var select = boxes[seatitems];
                for(var i = 0; i <= 10; i++) 
                {
                var opt = i;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select.appendChild(el);
                }
        } 
//Set the min value of card expiry box (can;t be current month)    
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+2; 
    var yyyy = today.getFullYear();
    if(dd<10) 
        {
            dd='0'+dd;
        } 

    if(mm<10) 
        {
            mm='0'+mm;
        } 
    today = yyyy+'-'+mm;
    let monthBox = document.getElementById("expiry");
    monthBox.setAttribute("min", today);
}

// Shows Current section active by highlighting appropriate navbar link    
function pageScroll()
{
            let navlinks = document.getElementsByTagName("nav")[0].children;
            let articles = document.getElementsByTagName("main")[0].children;
            last = articles[articles.length - 1].getBoundingClientRect().top;
            
            if (last <= 0) {
                navlinks[navlinks.length - 1].classList.add("active");
                for(j = 0; j < navlinks.length - 1; j++)
                    navlinks[j].classList.remove("active");
            }
            
            else {
                navlinks[articles.length - 1].classList.remove("active");
                for(i = 1; i < articles.length; i++) {
                    prev = articles[i - 1].getBoundingClientRect().top;
                    next = articles[i].getBoundingClientRect().top;
                    log = prev + ' ' + next;
                
                    if(prev <= 80 && next > 80) {
                        log += ' <------ ' + (i - 1);
                        navlinks[i - 1].classList.add("active");
                    }
                    
                    else {
                        log += ' xxx ';
                        navlinks[i - 1].classList.remove("active");
                    }
                }
            }
        }
// Movie Array for booking

var movieArray = [
    ['ACT', 'MA15+', 'NA', '21:00', '18:00'],
    ['RMC', 'MA15+', '18:00', 'NA', '15:00'],
    ['ANM', 'G', '12:00', '18:00', '12:00'],
    ['AHF', 'MA15+', 'NA', '12:00', '21:00'],
];

// Day Array

var slot1 = ['MON|Monday', 'TUE|Tuesday'];
var slot2 = ['WED|Wednesday', 'THU|Thursday', 'FRI|Friday'];
var slot3 = ['SAT|Saturday', 'SUN|Sunday'];


// This funntion is triggered from the modal box. It sends the selected movie ID into booking form
// As the rest of the form is generated from on change events we havto manualy dispatch an onchange event

function bookingForm(Movie){
    let element = document.getElementById('MovieBox');
    let event = new Event('change');
    element.value = movieArray[Movie][0];
    //On change is dispatched
    element.dispatchEvent(event);
}

// Populates Movie day field on an onchange event from Movie selection box
// The event passes in the movie Value and the ID of the days box
function populate(id1, id2){
    var id1 = document.getElementById(id1);
    var id2 = document.getElementById(id2);
    id2.innerHTML = "";
    let newOption = document.createElement("option");
    newOption.innerHTML = "Select Day";
    id2.options.add(newOption);
    let newOption1 = document.createElement("option");
    
    if(id1.value == "ACT"){
        movieArrayStart = 0;  
    }
    else if (id1.value == "RMC"){
        movieArrayStart = 1;
    }
    else if (id1.value == "ANM"){
        movieArrayStart = 2;  
    }
    else if (id1.value == "AHF"){
        movieArrayStart = 3;    
    }
        if(movieArray[movieArrayStart][2] != "NA"){
            
            for(let days in slot1){
                let pair = slot1[days].split("|");
                let newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                id2.options.add(newOption);
            }   
        }
    
            if(movieArray[movieArrayStart][3] != "NA"){ 
            for(let days in slot2){
                let pair = slot2[days].split("|");
                let newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                id2.options.add(newOption);
            }
            }

                if(movieArray[movieArrayStart][4] != "NA"){
            for(let days in slot3){
                let pair = slot3[days].split("|");
                let newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                id2.options.add(newOption);
            }
            }
        }
// Populates the availabe times the movie is playing. Calculated from previously selected fields
// and use of the various arrays
function pickTime(day) {
    let mvID = document.getElementById("MovieBox").value;
    let time = document.getElementById("mvHour");
    time.innerHTML = "";
    let newOption = document.createElement("option");

    if((day == 'MON') || (day == 'TUE'))
       {
       var dayIndex = 2;
           if(day == 'MON')
               daySelected = 0;
           if(day == 'TUE')
               daySelected = 1;
       }
    
    if((day == 'WED') || (day == 'THU') || (day == 'FRI'))
       {
       var dayIndex = 3;
           if(day == 'WED')
               daySelected = 2;
           if(day == 'THU')
               daySelected = 3;
           if(day == 'FRI')
               daySelected = 4;
       }
    
    if((day == 'SAT') || (day == 'SUN'))
       {
       var dayIndex = 4;
           if(day == 'SAT')
               daySelected = 5;
           if(day == 'SUN')
               daySelected = 6;
       }
    
    newOption.value = movieArray[movieArrayStart][dayIndex];
    newOption.innerHTML = movieArray[movieArrayStart][dayIndex];
    time.options.add(newOption);
    playTime = newOption.value;
}
// Calculates the pricebased on time, day,fare type and seat type
function seatSelected(){
    var timeSelected;
    let timeslot = playTime;
    if(timeslot == '12:00')
        timeSelected = 1;
    if(timeslot == '15:00')
        timeSelected = 2;
    if(timeslot == '18:00')
        timeSelected = 3;
    if(timeslot == '21:00')
        timeSelected = 4;

    let STA = parseInt(document.getElementById("STA").value);
    let STP = parseInt(document.getElementById("STP").value);
    let STC = parseInt(document.getElementById("STC").value);
    let FCA = parseInt(document.getElementById("FCA").value);
    let FCP = parseInt(document.getElementById("FCP").value);
    let FCC = parseInt(document.getElementById("FCC").value);
// Set fare array index(discount or full)    
   if(fareArray[daySelected][timeSelected] == 'D')
       var priceIndex = 1;
    else
        priceIndex = 2;
// Calculate total - work through entire array
    var totalFare = (STA * priceArray[0][priceIndex]) + (STP * priceArray[1][priceIndex]) + (STC * priceArray[2][priceIndex]) + (FCA * priceArray[3][priceIndex]) + (FCP * priceArray[4][priceIndex]) + (FCC * priceArray[5][priceIndex]);
// Output to booking form to 2 decimal places
    let outputBox = document.getElementById("priceBox");
    outputBox.value = "$" + totalFare.toFixed(2);   
}


var fareArray = [
        //Day |12:00|15:00|18:00|21:00
        ['MON', 'D', 'D', 'D', 'D'],
        ['TUE', 'D', 'F', 'F', 'F'],
        ['WED', 'D', 'D', 'D', 'D'],
        ['THU', 'D', 'F', 'F', 'F'],
        ['FRI', 'D', 'F', 'F', 'F'],
        ['SAT', 'F', 'F', 'F', 'F'],
        ['SAT', 'F', 'F', 'F', 'F'],
    ];

// Seat|Mon&Wed&12pmWeekday|All other times 
var priceArray = [
    ['STA','14.00', '19.80'],
    ['STP','12.50','17.50'],
    ['STC','11.00','15.30'],
    ['FCA','24.00','30.00'],
    ['FCP','22.50','27.00'],
    ['FCC','21.00','24.00'],
    
];
