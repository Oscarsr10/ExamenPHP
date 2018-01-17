<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
  $n=$_POST['numero'];
     echo "<h4>Tabla del $n:</h4>";
     $i=1;
     while ($i<=10) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
           }



?>
<A HREF=1exa.html> Volver </A>
</BODY>
</HTML>
