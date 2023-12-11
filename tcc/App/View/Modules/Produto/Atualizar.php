<!DOCTYPE html>
<html lang="en">

<head>
    <title>Àguia Turismo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../styles/lista.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            margin-top: 125px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
            width: 650px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" style="width: 120px;" href="/home"><img src="../../../images/Logo.png" style="width: 120px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
        </div>
        </div>
    </nav>

    <div class="container-fluid login-container">
        <div class="login-form">
            <h2 class="text-center">Atualizar Viagens</h2>
            <div>
                <div class="addfoto">
                    <div class="teste">
                    <?php foreach ($arrayimg[$model->produto_id]['imagens'] as $img) : ?>
                        <img id="imgdel" name="<?= $img->id ?>" class="imgatualizar" src="../../../Viagensimg/<?= $model->produto_id ?>/<?= $img->nome_image ?>">
                    <?php endforeach ?>
                    </div>
                    <form method="post" action="/produto/atualizar/save" enctype="multipart/form-data">
                        <label class="labelfiles" for="files"><img for="files" id="imgfile" src="../../../images/Add.png"></label>
                        <input multiple type="file" name="images[]" id="files" placeholder="Adicionar imagem">
                </div>
                <div class="row mb-3">
                    <input type="hidden" name="id" id="id" value="<?= $model->id_produto ?>">
                </div>
                <div class="row mb-3">
                    <label for="cidade">Digite a Cidade</label>
                    <input type="text" name="cidade" id="cidade" value="<?= $model->cidade ?>">
                </div>
                <div class="row mb-3 ">
                    <label for="estado">Digite o Estado</label>
                    <input type="text" name="estado" id="estado" value="<?= $model->estado ?>">
                </div>
                <div class="row mb-3">
                    <label for="quantdias">Digite a quantidade de dias da viagem</label>
                    <input type="text" name="quantdias" id="quantdias" value="<?= $model->quantdias ?>">
                </div>
                <div class="row mb-3">
                    <label for="quartos">Digite a quantidade de quartos</label>
                    <input type="text" name="quartos" id="quartos" value="<?= $model->quartos ?>">
                </div>
                <div class="row mb-3">
                    <label for="valor">Digite o valor da Viagem</label>
                    <input type="number" name="valor" id="valor" value="<?= $model->valor ?>">
                </div>
                <div class="row mb-3">
                </div>
                <button class="btn btn-primary" data-toggle="modal" type="submit" id="btnatt">Enviar dados</button>
                </form>
            </div>
        </div>

        <script src="../../../js/imagedel.js"></script>
        <script src="../../../js/reloadpage.js"></script>
</body>

</html>