
// Called through onload event in <body>
// Populates the six <select> fields with a class="ten" with select options

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
    }

// Shows Current section active by highlighting appropriate navbar link    
function pageScroll()
{
            console.clear();
            let navlinks = document.getElementsByTagName("nav")[0].children;
            let articles = document.getElementsByTagName("main")[0].children;
            last = articles[articles.length - 1].getBoundingClientRect().top;
            
            if (last <= 0) {
                console.log('last');
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
                    console.log(log);
                }
            }
        }