<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Formulario</title>
 </head>
 <body>
  <table width="50%" align="center" border="0" cellspacing="0" cellpadding="0">
	<tr>
        <td>
        <fieldset>
	<legend><h1>INGRESA C&Oacute;DIGO Y CONTRASE�A</h1></legend>
 
   <form action="datos.php" method="post">
    C&oacute;digo<br/> 
    <input type="text" name="codigo"><p/>
    Contrase�a <br/>
    <input type="password" name="contrase�a"><p/>
    <input type="submit" value="Enviar"/><br/>
   </form>
 </body>
</html>
