<?php 

include("start.php");

include("db-tilkobling.php");

include("dynamiske-funksjoner.php")

?>

<script src="funksjon.js"> </script>

<h3>Slett bilde</h3>

<form method="post" action="" id="slettBildeSkjema" name="slettBildeSkjema" onSubmit="return bekreft()">
    Bildenummer
        <select name="bildeNr" id="bildeNr">
            <? listeboksBildenr(); ?>
        </select> <br/>
    <input type="submit" value="Slett bilde" name="slettBildeKnapp" id="slettBildeKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettBildeKnapp"]))
    {
      $bildeNr=$_POST ["bildeNr"];	  
	  
      if (!$bildeNr)
        {
          print ("Det er ikke valgt noe bildeNr"); 

        }
      else
        {	  		
      
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
	
          $sqlSetning="DELETE FROM bilde WHERE bildeNr='$bildeNr';";
          mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            /* SQL-setning sendt til database-serveren */
		
          print ("F&oslash;lgende bilde er n&aring; slettet: $bildeNr  <br />");
        }	
    } 
?>
