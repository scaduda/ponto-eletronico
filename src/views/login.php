<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/assets/css/comum.css">
    <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/assets/css/icofont.min.css">
    <link rel="stylesheet" href="../../public/assets/css/login.css">
    <title>Ponto Eletrônico</title>
</head>
<body>
<?php
$errors = [];
$email = '';
?>
<form class="form-login" action="#" method="post">
    <div class="login-card card">
        <div class="card-header">
            <i class="icofont-finger-print mr-1"></i>
            <span class="font-weight-bold">Ponto Web</span>
        </div>
        <div class="card-body">
            <?php include(TEMPLATE_PATH . '/messages.php') ?>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email"
                       class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                       value="<?= $email ?>"
                       placeholder="Informe o e-mail" autofocus>
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password"
                       class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>"
                       placeholder="Informe a senha">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-lg btn-primary">Entrar</button>
        </div>
    </div>
</form>
</body>
</html>