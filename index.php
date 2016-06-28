        <?php include "cabecalho.php"; ?>
        <?php include "logica-usuario.php";

                        if(usuarioEstaLogado()){
                          include "paginaPrincipal.html";
                            } 
                        else{  ?> 
        <h2>Login</h2>
        <form action="login.php" method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha">
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-primary">Login</button></td>
                    </tr>
                </table>
            </form>
           <?php } ?>                



<?php include "rodape.php"; ?>                    