<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1 class="row d-flex justify-content-center">Novo Usuário</h1>

            <!-- FORMULARIO QUE ENVIA UM METODO POST PARA O CADASTRO/SAVE INSERINDO OS DADOS NO BANCO DADOS -->
            <form action="/cadastro/save" method="POST">
                <input type="hidden" id="id" name="id" value="<?= $model->id ?>" class="form-control">
                <div class="mb-3">
                    <label>Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required="" oninvalid="setCustomValidity('Campo nome obrigatório')" oninput="setCustomValidity('')" value="<?= $model->nome ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required="" oninvalid="setCustomValidity('Digite um email válido!')" oninput="setCustomValidity('')" value="<?= $model->email ?>" class="form-control">
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-success">SALVAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>