<?php

include("start.php");

?>

  <h3>Vis alle klasser</h3> 

  <form method="post" action="" id="innlevering1" name="innlev1">
        </form>

<?php  

  include("db-tilkobling.php");  

  $sqlSetning="SELECT * FROM klasse;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
	
  $antallRader=mysqli_num_rows($sqlResultat);  

  print ("<h3>Registrerte klassekode</h3>");
  print ("<table border=1>");  
  print ("<tr><th align=left>Klassekode</th> <th align=left>Klassenavn</th> <th align=left>Studiumkode</th></tr>"); 

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  
      $klassekode=$rad[0];   
      $klassenavn=$rad[1];   
      $studiumkode=$rad[2];   

      print ("<tr> <td> $klassekode </td> <td> $klassenavn </td> <td> $studiumkode </td> </tr>");
    }
  print ("</table>"); 
?>

