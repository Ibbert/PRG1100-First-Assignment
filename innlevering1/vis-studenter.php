<?php

include("start.php");

include("db-tilkobling.php"); 

  $sqlSetning="SELECT * FROM student;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
	
  $antallRader=mysqli_num_rows($sqlResultat);  

  print ("<h3>Registrerte studenter</h3>");
  print ("<table border=1>");  
  print ("<tr><th align=left>Brukernavn</th> <th align=left>Fornavn</th> <th align=left>Etternavn</th><th align=left>Klassekode</th><th align=left>BildeNr</th></tr>"); 

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  
      $brukernavn=$rad[0];   
      $fornavn=$rad[1];   
      $etternavn=$rad[2];   
      $klassekode=$rad[3];   
      $bildeNr=$rad[4];   

      print ("<tr> <td> $brukernavn </td> <td> $fornavn </td> <td> $etternavn </td>  <td> $klassekode </td>  <td> $bildeNr </td> </tr>");
    }
  print ("</table>"); 
?>