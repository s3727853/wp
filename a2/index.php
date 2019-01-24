<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    Keep wireframe.css for debugging, add your css to style.css 
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
     
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    
    <!-- Google Fonts -->
      
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'> 
    
      <!-- For some reason I could not get these style components to work inside the stylesheet, so for the meantime I have left them here -->
      
      <style> 
          html {
            scroll-behavior: smooth;
            }
        
        #Top{
            padding-top: 0px;
        }
        #Seats {
            padding-top: 140px;
        }
        #Booking {
            padding-top: 140px;
            
        }
        #About {
            padding-top: 60px;
        }
    </style>
      
    <script src='../wireframe.js'></script>
  </head>

  <body>
      
    
    <header>
        
       <div href="#Top" class="logo">Lunardo<img src="../../media/Logo1.png"/>
       </div>
       
    </header>
      
<!-- Navbar -->
      <div class="navbar">
        <nav>
           
        <ul>
            <li><a href="#Top">Now Showing</a></li>
            <li><a href="#Seats">Seats and Prices</a></li>
            <li><a href="#Booking">Booking</a></li>
            <li><a href="#About">About Us</a></li>
        </ul>
     </nav>   
    </div>

    <main>
        <!--Main Page -->
        <div class="parrallax1">
        <section class="NowShowing">
            <div class="grid-nowshowing" id="NowShowing">
            <div class="grid-item1">
                <br>
                <!--Movie Field 1 -->
                <h3>Boy Erased</h3>
                <img src="../../media/boyb.png" class="MoviePoster">
            <!-- START OF MODAL BOX -->
                <a href="#openModal"><h2>More Info</h2></a>
                <div id="openModal" class="modalDialog">
	               <div>
		              <a href="#close" title="Close" class="close">X</a>
		              <h3>Boy Erased - MA15+</h3>
		              <p>The son of a Baptist preacher is forced to participate in a church-supported gay conversion program after being forcibly outed to his parents.</p>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/-B71eyB_Onw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <br>
                       <p>Play Times</p>
                       <p>Wed-Fri 12pm<br>Sat-Sun 9pm</p><br>
                       <a href="#Booking" class="button"><p>Book Tickets</p></a>
	               </div>
                </div>
                <!-- END OF MODAL BOX -->
                </div>
            <div class="grid-item1">
                <!--Movie Field 2 -->
                <h3>The Girl in the Spiders Web</h3>
                <img src="../../media/thegirlb.png" class="MoviePoster">
                <!-- START OF MODAL BOX -->
                <a href="#openModal1"><h2>More Info</h2></a>
                <div id="openModal1" class="modalDialog">
	               <div>
		              <a href="#close" title="Close" class="close">X</a>
		              <h3>The Girl in the Spiders Web - MA15+</h3>
		              <p>Young computer hacker Lisbeth Salander and journalist Mikael Blomkvist find themselves caught in a web of spies, cybercriminals and corrupt government officials.</p>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/XKMSP9OKspQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <br>
                       <p>Play Times</p>
                       <p>Wed-Fri 9pm<br>Sat-Sun 6pm</p><br>
                       <a href="#Booking" class="button"><p>Book Tickets</p></a>
                       
	               </div>
                </div>
                <!-- END OF MODAL BOX -->
                </div>
                
            <div class="grid-item1">
                <br>
                <!--Movie Field 1 -->
                <h3>A Star is Born</h3>
                <img src="../../media/startb.png" class="MoviePoster">
                 <!-- START OF MODAL BOX -->
                <a href="#openModal2"><h2>More Info</h2></a>
                <div id="openModal2" class="modalDialog">
	               <div>
		              <a href="#close" title="Close" class="close">X</a>
		              <h3>A Star is Born - MA15+</h3>
		              <p>A musician helps a young singer find fame, even as age and alcoholism send his own career into a downward spiral. </p>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/nSbzyEJ8X9E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <br>
                       <p>Play Times</p>
                       <p>Mon-Tue 6pm<br>Sat-Sun 3pm</p><br>
                       <a href="#Booking" class="button"><p>Book Tickets</p></a>
	               </div>
                </div>
                <!-- END OF MODAL BOX -->
                </div>
            <div class="grid-item1">
                <!--Movie Field 1 -->
                <h3>Ralph Breaks the Internet</h3>
                <img src="../../media//ralphb.jpg" class="MoviePoster">
                
                 <!-- START OF MODAL BOX -->
                
                <a href="#openModal3"><h2>More Info</h2></a>

                <div id="openModal3" class="modalDialog">
	               <div>
		              <a href="#close" title="Close" class="close">X</a>
		              <h3>Ralph Breaks the Internet - PG</h3>
		              <p>Six years after the events of "Wreck-It Ralph," Ralph and Vanellope, now friends, discover a wi-fi router in their arcade, leading them into a new adventure.</p>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/T73h5bmD8Dc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <br>
                       <p>Play Times</p>
                       <p>Mon-Tue 12pm<br>Sat-Sun12pm</p><br>
                       <a href="#Booking" class="button"><p>Book Tickets</p></a>
	               </div>
                </div>
                 <!-- END OF MODAL BOX -->
                </div>
            </div>
        </section>
        </div>
        
        <!-- Seating Section -->
        <div class="parrallax2">
        <section class="Seats">
            
            
            
            
            <div class="grid-seats" id="Seats">
                <div class="grid-item">
                
                    <h3>At Lunardo we know that to be fully immeresed in a cinema experience comfort is key. 
                    <br><br>
                    Therefore, we have invested in the best high quality seating. 
                    </h3>
                </div>
                <div class="grid-item">
                    <h3>Standard Seating</h3>
                    <h4>Simplistic comfort with enough room for snacks.</h4>
                    <img src="../../media/stdseat.png" class="Seat">
                </div>
                
                <div class="grid-item">
                    <h3>First Class Seating</h3>
                    <h4>Luxurios seating for the ultimate cinema experience</h4>
                    <img src="../../media/firstseat.png" class="MoviePoster">
                </div>
            </div>
        </section>
        </div>
        
        <!-- Booking Section -->
        <div class="parrallax3">
        <section class="Booking">
            <!-- Hard coded padding will nneed to be removed and done in CSS -->
            <br><br><br><br><br><br><br><br><br>
            <div class="Booking" id="Booking">
                <h2>Bookings</h2>
                    <div class="grid-booking">
                        <div class="Dropdowns">
                            
                <!-- Booking Selection Section. I imagine this will need to be redone when we cover Javascript component in assignment 3.
                I have left this as is with some hardcoded breaks for time being -->
                            <form method='post' action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" >
                    
                            <select name="movie[id]" type="hidden">
                            <option value="">Select Movie</option>
                            <option value="ACT">Girl in the Spiders Web</option>
                            <option value="RMC">A Star is Born</option>
                            <option value="ANH ">Ralph Breaks the Internet</option>
                            <option value="AHF">A Boy Erased</option>
                            </select>
                    
                            <select name="movie[day]" type="hidden">
                                <option value="">Select Day</option>
                                <option value="MON">Monday</option>
                                <option value="TUE">Tuesday</option>
                                <option value="WED ">Wednesday</option>
                                <option value="THU">Thursday</option>
                                <option value="FRI">Friday</option>
                                <option value="SAT">Saturday</option>
                                <option value="SUN">Sunday</option>
                            </select>

                            <select name="movie[hour]" type="hidden">
                                <option value="">Select Time</option>
                                <option value="12">12:00pm</option>
                                <option value="3">3:00pm</option>
                                <option value="6">6:00pm</option>
                                <option value="9">9:00pm</option>
                            </select>
                            <br><br>
                            <select name="seats[STA]">
                                <option value="">Standard Adult</option>
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                            <select name="seats[STP]">
                                <option value="">Standard Concession</option>
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>    

                            <select name="seats[STC]">
                                <option value="">Standard Child</option>
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select> 
                            <br><br>
                            <select name="seats[FCA]">
                                <option value="">First Class Adult</option>
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>    

                            <select name="seats[FCP]">
                                <option value="">First Class Concession</option>
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>    

                            <select name="seats[FCC]">
                                <option value="">First Class Child</option>
                                <option value="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select> 
                    <br><br>
                    <label>Name:</label><input type="text" name="cust[name]">
                    <label>Email:</label><input type="email" name="cust[email]">
                    <br>
                    <label>Mobile:</label><input type="number" maxlength="10" minlenght="10" name="cust[mobile]">
                
                    <label>Credit Card:</label><input type="text" name="cust[card]">
                    <label>Expiry:</label><input type="month" name="cust[expiry]">
                    <br>
                    <input type="submit">
                </form>    
                </div>
                </div>
            </div>
            </section>
            </div>
        
      <!-- About section -->
        <div class="parrallax4">
            <section class="About" id="About"> 
                <div class="grid-About" id="About">
                    <h2>About Lunardo</h2>
                    <h2>Lunardo has recently reopened from extensive renovations.<br>Our goal is to provide a personalised and qaulity experience to our cinema goers.<br><br>
                    We have invested in new high qaulity seating and state of the art Dolby cinema technology.<br>This includes Dolby 3D projection and Dolby Atmos soround sound.<br><br> To learn more please see the video below.
                    </h2>
                        <div class="video">   
                            <video controls>
                                <source src="http://download.dolby.com/us/en/technology/dolby-atmos-overview.mp4" type="video/mp4">
                            </video>
                        </div> 
                </div>
            </section>
        </div>
    </main>
      
    <footer>
        <br>
        
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script>Jack Edwards - S3727853. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
