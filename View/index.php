<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>crud</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col mt-5">

                <h1>Novo Usuário</h1>

                <form action="/pessoa/save" method="POST">

                <input type="hidden" id="id" name="id" value="<?= $model->id ?>" class="form-control">

                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" id="nome" name="nome" value="<?= $model->nome ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" id="email" name="email" value="<?= $model->email ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>