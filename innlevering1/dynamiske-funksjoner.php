<?php
function listeboksKlasse()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM klasse ORDER BY klassekode;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $klassekode=$rad["klassekode"]; 

      print("<option value='$klassekode' > $klassekode </option>");  /* ny verdi i listeboksen laget */
    }
}



function listeboksBildenr()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM bilde ORDER BY bildeNr;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $bildenr=$rad["bildeNr"]; 

      print("<option value='$bildenr'>$bildenr </option>");  /* ny verdi i listeboksen laget */
    }
}

function listeboksStudent()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM student ORDER BY brukernavn;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $brukernavn=$rad["brukernavn"]; 

      print("<option value='$brukernavn' > $brukernavn </option>");  /* ny verdi i listeboksen laget */
    }
}

?>