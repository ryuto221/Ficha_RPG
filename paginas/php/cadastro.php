<?php
    require("../template/header.php");
    $nomeEr = "";
    $emailEr = "";
    $confEmailEr = "";
    $senhaEr = "";
    $confSenhaEr = "";
    $nome = "";
    $email = "";
    $confEmail = "";
    $senha = "";
    $confSenha = "";
    $mestre = "";
?>
<body>
    <div class="corpo">
        <div class="caContainer">
            <form action="" method="POST">
                <h1>Registration</h1>
                <p>Has an acount make it <a href="login.php">Login</a></p>
                <br>
                <label class="sobTxt">Name</label><br>
                <input type="text" name="nome" class="txt"><br>
                <span class="spanErro"><?php echo $nomeEr; ?></span><br>
                <label class="sobTxt">E-mail</label><br>
                <input type="email" name="email" class="txt"><br>
                <span class="spanErro"><?php echo $emailEr; ?></span><br>
                <label class="sobTxt">Confirm o e-mail</label><br>
                <input type="email" name="conFemail" class="txt"><br>
                <span class="spanErro"><?php echo $confEmailEr; ?></span><br>
                <label class="sobTxt">Password</label><br>
                <input type="password" name="senha" class="txt"><br>
                <span class="spanErro"><?php echo $senhaEr; ?></span><br>
                <label class="sobTxt">Confirm password</label><br>
                <input type="password" name="confSenha" class="txt"><br>
                <span class="spanErro"><?php echo $confSenhaEr; ?></span><br>
                <label>I'm a mester of a rpg <input type="checkbox" name="mestre"></label>
                <br>
                <br>
                <div class="btnDiv">
                    <input type="submit" name="enviar" value="Confirm" class="btn">
                    |||
                    <input type="reset" value="Clear" class="btn">
                </div>
            </form>
        </div>
    </div>
</body>
