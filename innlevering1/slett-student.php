<?php 

include("start.php");

include("db-tilkobling.php");

include("dynamiske-funksjoner.php")

?>

<script src="funksjon.js"> </script>

<h3>Slett student</h3>

<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()">
    Brukernavn
        <select name="brukernavn" id="brukernavn">
            <? listeboksStudent(); ?>
        </select> <br/>
    <input type="submit" value="Slett student" name="slettStudentKnapp" id="slettStudentKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettStudentKnapp"]))
    {
      $brukernavn=$_POST ["brukernavn"];	  
	  
      if (!$brukernavn)
        {
          print ("Det er ikke valgt noe brukernavn"); 

        }
      else
        {	  		
      
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
	
          $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn';";
          mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            /* SQL-setning sendt til database-serveren */
		
          print ("F&oslash;lgende student er n&aring; slettet: $brukernavn  <br />");
        }	
    } 
?>
