<!DOCTYPE html>
<?php
    
    require_once("tools.php");
?>

<!-- 
**** The html for the table elements is generated in PHP printPage() 
* There is a PHP script inline for a random invoice number for asthetics and current day for invoice date *
-->

<html lang='en'>
    <head>
    <link rel="shortcut icon" href="../../media/favicon.ico" type="image/x-icon"/>
    </head>
    <body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../../media/Logo.png" style="width:50%; max-width:150px;"><br>Lunardo
                            </td>
                            <td></td>
                            
                            <td>
                                Invoice #:
                                <?PHP
                                echo (rand(50,200))
                                ?>
                                <br>
                                Created:
                                
                                <?PHP
                                $today = date("d/m/Y"); 
                                echo $today; 
                                ?>
                                <br>
                                Lunardo Cinemas<br>
                                ABN: 00 123 456 789
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <!-- Populates tables -->
            <?PHP
                printPage();
            ?>
            
        </table>
    </div>
        
          

        
<!-- Inline script to remove debug area -->
        
<button onclick="hideDebug()">Hide Debug</button>
<script>
    function hideDebug() {
  var x = document.getElementById("debug");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}         
</script>        
        
<div class="debug" id="debug">
   <?PHP
        processCart();
        printCode($_GET);
    ?>

</div>  
<!-- CSS link is provided down here so that it as applied after the PHP has generated the table elements -->
        
<link id='stylecss' type="text/css" rel="stylesheet" href="css/invoicestyle.css">             
        
</body>
</html>