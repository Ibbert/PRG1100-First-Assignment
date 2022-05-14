<?php 

include("start.php");

include("db-tilkobling.php");

include("dynamiske-funksjoner.php")

?>

<script src="funksjon.js"> </script>

<h3>Slett klasse</h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
    Klassekode
        <select name="klassekode" id="klassekode">
            <? listeboksKlasse(); ?>
        </select> <br/>
    <input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettKlasseKnapp"]))
    {
      $klassekode=$_POST ["klassekode"];	  
	  
      if (!$klassekode)
        {
          print ("Det er ikke valgt noe klasse"); 

        }
      else
        {	  		
      
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
	
          $sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode';";
          mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            /* SQL-setning sendt til database-serveren */
		
          print ("F&oslash;lgende klasse er n&aring; slettet: $klassekode  <br />");
        }	
    } 
?>
