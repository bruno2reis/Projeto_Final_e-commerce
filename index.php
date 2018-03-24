<!doctype html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style_drogaria.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <scripct language="JavaScript" src="js/total.js"></scripct>
    <!-- Carregamento de arquivos JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <title>Farmárcia sem nome</title>
</head>
<body>
<div class="container">
    <div class="form-row">
        <div class="col-7">
            <label><h4>Olá Visitante</h4></label>
            <a href="#" id="url_tamanho">Crie Sua Conta aqui</a>
        </div>
        <div class="url">
            <a href="" class="url">Atendimento</a> |
            <a href="" class="url">Meus pedido</a> |
            <a href="" class="url">Meu perfil</a>
        </div>
    </div>
    <?php require_once "nav.php"; ?>
</div>

    <div class="container-fluid">
            <div class="container">
                <div class="row" id="back-group">
                    <div class="col-sm-2"><a style="color: #dddddd;" href="#">Medicamento</a></div>
                    <div class="col-sm-2"><a  style="color: #dddddd;" href="#">|Beleza </a></div>
                    <div class="col-sm-2"><a  style="color: #dddddd;" href="#">| Infantil</a></div>
                    <div class="col-sm-2"><a  style="color: #dddddd;" href="#">| Promoções</a></div>
                    <div class="col-sm-2"><a  style="color: #dddddd;" href="#">| Cuidados diarios</a></div>
                    <div class="col-sm-2"><a  style="color: #dddddd;" href="#">| Genericos</a></div>
                </div>
            </div>
    <br/>
            <?php require_once "corpo_total.php"; ?>

            <div class="modal-footer">
                <?php require_once ""; ?>
            </div>
        </div>

<<<<<<< HEAD
=======
    </div>
    <div class="modal-footer">
        <?php require_once "footer.php"; ?>
>>>>>>> 97f393068aa34b9f9b265c83ed0a6fc0f0d83519

</body>
</html>
