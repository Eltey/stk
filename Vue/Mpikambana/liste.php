<!DOCTYPE html>
<html>
<head>
<title> Listes des membres  </title>    
    <meta charset="utf-8"/>
    
    
    
</head>
<body>
    
    <fieldset>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>INTEGRATION</th>
            </tr>
        </thead>
        
        <?php 
        foreach($listem as $listem)
        {
        ?>
        
        <tbody>
        <tr>
            <td><?php echo$listem['ID'];?></td>
            <td><?php echo$listem['NOM'];?></td>
            <td><?php echo$listem['PRENOM'];?></td>
            <td><?php echo$listem['INTEGRATION'];?></td>
            
            </tr>
        
        </tbody>
        <?php
        
        }
        
        ?>
        
        </table>
    
    
    
    
    </fieldset>
    
                   <a href="index.php"> Hiverina any amin' ny pejy Safidy</a>
    
    
    
    </body>



</html>




<?php ?>