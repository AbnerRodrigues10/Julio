<?php require_once 'header.php'; ?>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"><h1 class="mt-2">Cadastro de Produto</h1>
                    <form action="http://localhost/CRUD-Produto/salvarProduto.php" method="post" id="formCadastro">
                        <div class="form-group"><label for="nome">Nome do Produto</label> <input type="text"
                                                                                                 class="form-control"
                                                                                                 name="nome" required>
                        </div>
                        <div class="form-group"><label for="descricao">Descrição</label> <textarea class="form-control"
                                                                                                   name="descricao"></textarea>
                        </div>
                        <div class="form-group"><label for="preco">Preço</label> R$ <input type="text"
                                                                                           class="form-control"
                                                                                           name="preco"></div>
                        <div class="form-group"><label for="quantidade">Quantidade</label> <input type="number"
                                                                                                  class="form-control"
                                                                                                  name="quantidade"
                                                                                                  value="0" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    </form>
                </div>
                <div class=" col-md-3"></div>
            </div>
        </div>
    </main>

<?php require_once 'footer.php';