<!DOCTYPE html>
<html lang="en">

<head>
    <title>Àguia Turismo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/formcadlog.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            height: 83vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
            width: auto;
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

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="../home" class="nav-link">Inicio</a></li>
                    <li class="nav-item active"><a href="../destination" class="nav-link">Destinos</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container-fluid login-container">
        <div class="login-form">
            <h2 class="text-center">Cadastro de Viagem</h2>
            <form method="post" enctype="multipart/form-data" action="/produto/form/save">

                <div class="row mb-3">
                    <label for="cidade">Digite a Cidade</label>
                    <input type="text" name="cidade" id="nome" value="<?= $model->cidade ?>">
                </div>
                <div class="row mb-3 ">
                    <label for="estado">Digite o Estado</label>
                    <input type="text" name="estado" id="descricao" value="<?= $model->estado ?>">
                </div>
                <div class="row mb-3">
                    <label for="quantdias">Digite a quantidade de dias da viagem</label>
                    <input type="text" name="quantdias" id="descricao" value="<?= $model->quantdias ?>">
                </div>
                <div class="row mb-3">
                    <label for="quartos">Digite a quantidade de quartos</label>
                    <input type="text" name="quartos" id="descricao" value="<?= $model->quartos ?>">
                </div>
                <div class="row mb-3">
                    <label for="valor">Digite o valor da Viagem</label>
                    <input type="number" name="valor" id="preco" value="<?= $model->valor ?>">
                </div>
                <div class="row mb-3">
                    <input multiple type="file" name="images[]" id="files" placeholder="Adicionar imagem">
                </div>
                <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl" type="submit">Enviar dados</button>
                <a href="/produto">Lista de produtos</a>
            </form>
            
        </div>
    </div>

</body>

</html>