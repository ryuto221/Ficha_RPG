<?php
    require("../template/header.php");
?>
<body>
    <div class="corpo">
        <form>
            <fieldset>
                <h1>Cadastro</h1>
                <p>Se já é cadastrado faça <a href="login.php">login</a></p>
                <br>
                <label>Nome</label><br>
                <input type="text" name="nome">
                <span class="erro"><?php echo $nomeErro; ?></span>
                <br>
                <label>E-mail</label><br>
                <input type="email" name="email">
                <span class="erro"><?php echo $emailErro; ?></span>
                <br>
                <label>Confirme o e-mail</label><br>
                <input type="email" name="email">
                <span class="erro"><?php echo $confEmailErro; ?></span>
                <br>
                <label>Senha</label><br>
                <input type="password" name="senha">
                <span class="erro"><?php echo $senhaErro; ?></span>
                <br>
                <label>Confirmar senha</label><br>
                <input type="password" name="confSenha">
                <span class="erro"><?php echo $confSenhaErro; ?></span>
                <br>
                <label>Sou mestre de um rpg <input type="checkbox" name="mestre"></label>
                <br>
                <br>
                <input type="submit" class="btn" name="cadastrar" value="Cadastrar">
                <br>
                <br>
                <a href="login.php" class="voltar"><< <b>Voltar</b></a>
            </fieldset>
        </form>
    </div>
</body>
