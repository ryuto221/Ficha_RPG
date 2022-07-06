<?php
    session_start();
    require("../template/header.php");
    $nomeEr = "";
    $emailEr = "";
    $confEmailEr = "";
    $senhaEr = "";
    $confSenhaEr = "";
?>
<body>
    <div class="corpo">
        <div class="caContainer">
            <form action="" method="POST">
                <h1>Cadastro</h1>
                <p>Se já é cadastrado faça <a href="login.php">Login</a></p>
                <br>
                <label class="sobTxt">Nome</label><br>
                <input type="text" name="nome" class="txt"><br>
                <span class="spanErro"><?php echo $nomeEr; ?></span><br>
                <label class="sobTxt">E-mail</label><br>
                <input type="email" name="email" class="txt"><br>
                <span class="spanErro"><?php echo $emailEr; ?></span><br>
                <label class="sobTxt">Confirmar o e-mail</label><br>
                <input type="email" name="conFemail" class="txt"><br>
                <span class="spanErro"><?php echo $confEmailEr; ?></span><br>
                <label class="sobTxt">Senha</label><br>
                <input type="password" name="senha" class="txt"><br>
                <span class="spanErro"><?php echo $senhaEr; ?></span><br>
                <label class="sobTxt">Confirmar senha</label><br>
                <input type="password" name="confSenha" class="txt"><br>
                <span class="spanErro"><?php echo $confSenhaEr; ?></span><br>
                <div class="btnDiv">
                    <input type="submit" name="enviar" value="Enviar" class="btn">
                    |||
                    <input type="reset" value="Limpar" class="btn">
                </div>
            </form>
        </div>
    </div>
</body>
