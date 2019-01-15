<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css 
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    -->  
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    
      
      
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'> 
    <style> 
        
        html {
            scroll-behavior: smooth;
            }
        
        #NowShowing {
            padding-top: 95px;
        }
        #Seats {
            padding-top: 140px;
        }
       
        li1 {font-family: 'Nunito Sans';font-size: 50px; font-style: normal; font-weight: 700; }
        li {font-family: 'Staatliches';font-size: 30px; font-style: oblique; font-weight: 900;}
    </style>
      
    <script src='../wireframe.js'></script>
  </head>

  <body>
      
    
    <header>
       <!--
            <h1>Lunardo</h1>
            <img src="../../media/Logo1.png"
            class="logo" width="100" height="70"/>
      -->
                
    </header>

      <div class="navbar">
        <nav>
           
        <ul>
            <li1><a1 href="#" class="logo">Lunardo<img src="../../media/Logo1.png" width="90" height="50" class="logo"/></a1></li1>
            <li><a href="#NowShowing">Now Showing</a></li>
            <li><a href="#Seats">Seats and Prices</a></li>
            <li><a href="#Booking">Booking</a></li>
            <li><a href="#About">About Us</a></li>
        </ul>
     </nav>   
    </div>

    <main>
        
        <div class="parrallax1">
        <section class="NowShowing">
            
            <div class="grid-nowshowing" id="NowShowing">
                
            <div class="grid-item1">
                <h1>Boy Erased</h1>
                <img src="../../media/boyb.png" class="MoviePoster">
                <h2>MA15+</h2>
                </div>
     
            <div class="grid-item1">
                <h1>The Girl in the Spiders Web</h1>
                <img src="../../media/thegirlb.png" class="MoviePoster">
                <h2>MA15+</h2>
                </div>
                
            <div class="grid-item1">
                <h1>A Star is Born</h1>
                <img src="../../media/startb.png" class="MoviePoster">
                <h2>MA15+</h2>
                </div>
            <div class="grid-item1">
                <h1>Ralph Breaks the Internet</h1>
                <img src="../../media//ralphb.jpg" class="MoviePoster">
                <h2>PG</h2>
                </div>
            
            </div>
            
        </section>
        </div>
        
        <div class="parrallax2">
        <section class="Seats">
            
            
            <div>At Lunardo we know that to be fully immeresed in a cinema experience comfort is key. 
                <br><br>
                Therfore we have invested in the best high quality seating. </div>
            
             <div class="grid-seats" id="Seats">
                
            <div class="grid-item">
                <h1>Standard Seating</h1>
                <h3>Simplistic comfort with enough room for snacks.</h3>
                <img src="../../media/stdseat.png" class="Seat">
                </div>
                
            <div class="grid-item">
                <h1>First Class Seating</h1>
                <h3>The ultimate in comfort.</h3>
                <img src="../../media/firstseat.png" class="MoviePoster">
                </div>
                
           
            
            </div>
            </section>
        </div>
    </main>
      
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
