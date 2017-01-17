  <?php

   session_start();



?>
 <!DOCTYPE html>
<html>
<head>
<title> Page de conexion</title>
<meta charset="utf-8">
  
</meta>  



</head>  
         <body>



         

<h2 align="center" >
  Authentification membres   "Hitory ny anaranao amin' ny rahalahiko ao salamo 22.22a "
</h2>
           
      <table align="center">
          <form method="POST" action="index3.php" >
                    <tr>
                             <td> <label  > Anarana fiantsona   </label> 
                               
                             
                    <input type="text" name="pseudo" id="pseudo" >
                      
                    </input>   
                           </td>
                    </tr>    
                                
                        <tr>
                             <td> <label  > Votre email   </label> 
                               
                             
                    <input type="email" name="email" id="email" >
                      
                    </input>   
                          </td>
                    </tr>    
                    <tr>
                             <td> <label  > Votre mots de pass   </label> 
                               
                             
                    <input type="password" name="mdp" id="mdp" >
                              </td>
                    </input>   
                      
                    </tr>        
                                 <tr>
																	<td>
                                 <input type="submit" name="Miditra" value="miditra" id="miditra" >
                                   
                                 </input>
                                    
                                  </td>
                                 </tr>
<tr>
																	<td>
                                   <a href="vue/mpikambana/addlogin.php"> Hanokatra kaonty</a>
                                    
                                  </td>
                                 </tr>

          </form>



      </table>


<?php




           ?>
         </body>





</html>