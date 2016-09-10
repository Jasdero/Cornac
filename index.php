<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Le cornac</title>
  <link rel="stylesheet" href="Style.css">
  <script src="script.js"></script>
</head>
<body>
    <?php
   
    include('header.php');
    
?>
<table>
<tbody>
<?php         
    
    include('table.php');
   
  
    foreach ($spectacle as $clef)
    {
?>
    <tr>
<?php
        foreach ($clef as $valeur =>$element)
        {
?>        <td>
<?php           echo $element." ";
?>        </td>       
<?php     }   
        
?>           </tr> 
<?php 
    }
?>
</tbody>
</table>
    
    
<?php
    include ('footer.php')
?>
    
   
    
</body>
</html>