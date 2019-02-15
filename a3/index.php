<!DOCTYPE html>
<?php
      require_once("tools.php");
      if(isset($_POST['submit'])){
          order();
          // Handle user data if POST fails so they don't have to retype everything
          // Values are printed back into appropriate fields
          $name = $_POST[cust][name];
          $email = $_POST[cust][email];
          $mobile = $_POST[cust][mobile];
          $card = $_POST[cust][card];
          $expiry = $_POST[cust][expiry];
         
      }

    
?>


<html lang='en'>
  <head>
    <script src='../wireframe.js'></script>
    <script src="sitetools.js"></script>
    <!-- Navbar scroll effects in javascript. Highlight active link/section -->
    <script>
        window.addEventListener('scroll', pageScroll);
    </script>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Cinema</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../../media/favicon.ico" type="image/x-icon"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'> 
    <script src='../wireframe.js'></script>
    <script src="sitetools.js"></script>
  </head>
<!-- This function auto fills the seat drop downs.-->    
  <body onload="countten()">
    <header>
      <div class="navbar">
        <nav>
        <a href="#Top">Now Showing</a>
        <a href="#Seats">Seats and Prices</a>
        <a href="#BookingSection">Booking</a>
        <a href="#About">About Us</a>
          </nav>
      </div>
        <li1><a1 href="#Top" class="logo">Lunardo<img src="../../media/Logo1.png" width="90" height="50" class="logo"/></a1></li1>        
    </header>
<!-- Navbar -->
    <main>   
        <!--Main Page -->
        <article id="MainPage">    
        <div class="parrallax1">
        <section class="NowShowing">
            <div class="grid-nowshowing" id="NowShowing">
            <div class="grid-item1" onclick="location.href='#openModal'">
                <!--Movie Field 1 -->
                <h3>Boy Erased</h3>
                <br>
                <img src="../../media/boyb.png" class="MoviePoster">
            <!-- START OF MODAL BOX -->
                <a href="#openModal"><button class="Button1">More Info</button></a>
                <div id="openModal" class="modalDialog">
	               <div>
		              <a href="#close" title="Close" class="close">X</a>
		              <h3>Boy Erased - MA15+</h3>
		              <p>The son of a Baptist preacher is forced to participate in a church-supported gay conversion program after being forcibly outed to his parents.</p>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/-B71eyB_Onw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <p>Play Times</p>
                        <table>
                            <tr>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            <tr>
                                <td>12:00PM</td>
                                <td>12:00PM</td>
                                <td>12:00PM</td>
                                <td>9:00PM</td>
                                <td>9:00PM</td>
                            </tr>
                       </table>
                       <a href="#BookingSection" class="button" onclick= "bookingForm('3')"><p>Book Tickets</p></a>
	               </div>
                </div>
                <!-- END OF MODAL BOX -->
                </div>
            <div class="grid-item1" onclick="location.href='#openModal1'">
                <!--Movie Field 2 -->
                <h3>The Girl in the Spiders Web</h3>
                <img src="../../media/thegirlb.png" class="MoviePoster">
                <!-- START OF MODAL BOX -->
                <a href="#openModal1"><button class="Button1">More Info</button></a>
                <div id="openModal1" class="modalDialog">
	               <div>
		              <a href="#close" title="Close" class="close">X</a>
		              <h3>The Girl in the Spiders Web - MA15+</h3>
		              <p>Young computer hacker Lisbeth Salander and journalist Mikael Blomkvist find themselves caught in a web of spies, cybercriminals and corrupt government officials.</p>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/XKMSP9OKspQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <p>Play Times</p>
                       <table>
                            <tr>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            <tr>
                                <td>9:00PM</td>
                                <td>9:00PM</td>
                                <td>9:00PM</td>
                                <td>6:00PM</td>
                                <td>6:00PM</td>
                            </tr>
                       </table>
                       <a href="#BookingSection" class="button" onclick="bookingForm('0')"><p>Book Tickets</p></a> 
	               </div>
                </div>
                <!-- END OF MODAL BOX -->
                </div>
            <div class="grid-item1" onclick="location.href='#openModal2'">
                <!--Movie Field 1 -->
                <h3>A Star is Born</h3>
                <br>
                <img src="../../media/startb.png" class="MoviePoster">
                 <!-- START OF MODAL BOX -->
                <a href="#openModal2"><button class="Button1">More Info</button></a>
                <div id="openModal2" class="modalDialog">
	               <div>
		              <a href="#close" title="Close" class="close">X</a>
		              <h3>A Star is Born - MA15+</h3>
		              <p>A musician helps a young singer find fame, even as age and alcoholism send his own career into a downward spiral. </p>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/nSbzyEJ8X9E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <p>Play Times</p>
                       <table>
                            <tr>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            <tr>
                                <td>6:00PM</td>
                                <td>6:00PM</td>
                                <td>3:00PM</td>
                                <td>3:00PM</td>
                            </tr>
                       </table>
                       <a href="#BookingSection" class="button" onclick="bookingForm('1')"><p>Book Tickets</p></a>
	               </div>
                </div>
                <!-- END OF MODAL BOX -->
                </div>
            <div class="grid-item1" onclick="location.href='#openModal3'">
                <!--Movie Field 1 -->
                <h3>Ralph Breaks the Internet</h3>
                <img src="../../media/ralphb.jpg" class="MoviePoster">
                 <!-- START OF MODAL BOX -->
                <a href="#openModal3"><button class="Button1">More Info</button></a>
                <div id="openModal3" class="modalDialog">
	               <div>
		              <a href="#close" title="Close" class="close">X</a>
		              <h3>Ralph Breaks the Internet - PG</h3>
		              <p>Six years after the events of "Wreck-It Ralph," Ralph and Vanellope, now friends, discover a wi-fi router in their arcade, leading them into a new adventure.</p>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/T73h5bmD8Dc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       <p>Play Times</p>
                       <table>
                            <tr>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            <tr>
                                <td>12:00PM</td>
                                <td>12:00PM</td>
                                <td>6:00PM</td>
                                <td>6:00PM</td>
                                <td>6:00PM</td>
                                <td>12:00PM</td>
                                <td>12:00PM</td>
                            </tr>
                       </table>
                       <a href="#BookingSection" class="button" onclick="bookingForm('2')"><p>Book Tickets</p></a>
	               </div>
                </div>
                 <!-- END OF MODAL BOX -->
                </div>
            </div>
        </section>
        </div>
            </article>
        <!-- Seating Section -->
        <article id="Seating">
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
                    <img src="../../media/firstseat.png" class="Seat">
                </div>
            </div>
        </section>
        </div>
        </article>
        <!-- Booking Section -->
        <article id="BookingSection">
        <div class="parrallax3">  
        <section class="Booking">
            <h2>Bookings</h2>
                        <div class="Dropdowns" >
                            <form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" value='submit'>
                            <fieldset><legend>Booking Details</legend>
                            <label>Movie</label> 
                            <select name="movie[id]" id="MovieBox" required onchange="populate(this.id, 'mvDay')">
                            <option value="">Select Movie</option>
                            <option value="ACT">Girl in the Spiders Web</option>
                            <option value="RMC">A Star is Born</option>
                            <option value="ANM">Ralph Breaks the Internet</option>
                            <option value="AHF">A Boy Erased</option>
                            </select><span id="errorID" class="errorSpan" style="visibility: hidden;"></span>
                            <label>Day</label>
                            <select name="movie[day]"  id="mvDay" required onchange="pickTime(this.value)">
                            </select><span id="errorDAY" class="errorSpan" style="visibility: hidden;"></span>
                            <label>Time</label>
                            <select name="movie[hour]" id="mvHour" required>
                            </select><span id="errorTIME" class="errorSpan" style="visibility: hidden;"></span>
                                <label>Tickets</label>
                            <select name="seats[STA]" class="ten" id="STA" onchange="seatSelected()">
                                <option value="0">Standard Adult</option>
                            </select><span id="errorTICKET" class="errorSpan" style="visibility: hidden;"></span>
                            <select name="seats[STP]" class="ten" id="STP" onchange="seatSelected()">
                                <option value="0">Standard Concession</option>
                            </select>    

                            <select name="seats[STC]" class="ten" id="STC" onchange="seatSelected()">
                                <option value="0">Standard Child</option>
                            </select> 
                           
                            <select name="seats[FCA]" class="ten" id="FCA" onchange="seatSelected()">
                                <option value="0">First Class Adult</option>
                            </select>    

                            <select name="seats[FCP]" class="ten" id="FCP" onchange="seatSelected()">
                                <option value="0">First Class Concession</option>
                            </select>    

                            <select name="seats[FCC]" class="ten" id="FCC" onchange="seatSelected()">
                                <option value="0">First Class Child</option>
                            </select> 
                    </fieldset>            
                    <div class="custDetails">            
                    <fieldset><legend>Payment Details</legend>            
                    <label>Name:</label><input type="text" name="cust[name]" required pattern="^[A-Za-z \-.']{1,110}$" title="Enter a valid name" value="<?PHP print $name; ?>">
                    <span id="errorNAME" class="errorSpan" style="visibility: hidden;"></span>
                        
                    <label>Email:</label><input type="email" name="cust[email]" required value="<?PHP print $email; ?>">
                    <span id="errorEMAIL" class="errorSpan" style="visibility: hidden;"></span>
                        
                    <label>Mobile:</label><input type="text" pattern="^(\(04\)|04|\+614)( ?\d){8}$" maxlength="10" minlenght="10" name="cust[mobile]" required value="<?PHP print $mobile; ?>" title="Should be a valid Australian mobile number">
                    <span id="errorMOBILE" class="errorSpan" style="visibility: hidden;"></span>    
                        
                    <label>Credit Card:</label><input type="text" name="cust[card]" required pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14})$" value="<?PHP print $card; ?>" title="Card must have a total of 16 numbers and NO spaces. Visa starts with a 4. Master card starts 55" >
                    <span id="errorCARD" class="errorSpan" style="visibility: hidden;"></span>
                        
                    <label>Expiry:</label><input type="month" name="cust[expiry]" required id="expiry" value="<?PHP print $expiry; ?>">
                    <span id="errorEXPIRY" class="errorSpan" style="visibility: hidden;"></span>
                        
                    <label>Total</label><input type="text" readonly id="priceBox">
                    </fieldset>
                    <input type="submit" class="submit" name="submit" value="Confirm Booking">
                        
                        <!-- will throw an internal javascript error as function won't exist if there was no errors -->
                        <script>
                            error();
                        </script>
                </div>            
                </form>           
                </div>
            </section>
            </div>
            </article>
      <!-- About section -->
        <article id="About">
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
        </article>
    </main> 
    <footer>
        <br>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script>Jack Edwards - S3727853. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>  
    </div>
    </footer>
    <div class="DebugArea">
    
   <?php 
         var_dump($_POST['movie']);    
        //var_dump($_SESSION[cart]);
          echo "<h1>-------- Post Data --------</h1>";
          preShow($_POST);
          printCode($_GET);
        ?>
        </div>
  </body>
</html>
