<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>

</head>
<body>
     <div>
         <div>
             <form id="frmlogin" name="frmlogin" method="post" action="op_post.php">
                 <fieldset>
                     <label>
                     <legend>Faça seu login</legend>
                     <span>Login</span>
                     <input type="text" name="txt_login" id="txtlogin">

                 </label>
                 <label>
                     <span>senha</span>
                     <input type="password" name="txt_senha" id="txt_senha">
                 </label>
               <input type="submit" name="logar" id="logar" value="Logar">
                 </fieldset>
             </form>
         </div>
     </div>
</body>
</html>




<?php
/**
 * Created by PhpStorm.
 * User: viniciusbastos
 * Date: 15/04/15
 * Time: 21:11
 */ 