<HTML>
<HEAD>
 <TITLE>2exa</TITLE>
</HEAD>
<BODY>
<?php
  if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])){
       if($_POST['operacion']=="suma")
            echo "El resultado de realizar la suma de los n�meros " .
                  $_POST['numero1'] . " y " . $_POST['numero2'] . " es " .
                  ($_POST['numero1']+$_POST['numero2']);
       else
       if($_POST['operacion']=="resta")
            echo "El resultado de realizar la resta de los n�meros " .
                  $_POST['numero1'] . " y " . $_POST['numero2'] . " es " .
                  ($_POST['numero1']-$_POST['numero2']);
       else
       if($_POST['operacion']=="producto")
            echo "El resultado de realizar el producto de los n�meros " .
                  $_POST['numero1'] . " y " . $_POST['numero2'] . " es " .
                  ($_POST['numero1']*$_POST['numero2']);
       else
       if($_POST['operacion']=="cociente")
           if($_POST['numero2']==0)
                echo "Imposible realizar una divisi�n por CERO.";
       else
                echo "El resultado de realizar el cociente de los n�meros " .
           $_POST['numero1'] . " y " . $_POST['numero2'] . " es " .
           ($_POST['numero1']/$_POST['numero2']);
       else
                echo "ERROR: Operaci�n incorrecta " . $_POST['operacion'];
}
?>
<A HREF=2exa.html> Volver </A>
</BODY>
</HTML>
