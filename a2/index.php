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
            <li><a href="#Home">Home</a></li>
            <li><a href="#Movies">Movies</a></li>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="#About">About</a></li>
        </ul>
     </nav>   
    </div>

    <main>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
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
