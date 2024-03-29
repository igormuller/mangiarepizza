<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Adicionar Pessoa
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                    <li>
                        <i class="fa fa-users"></i>  <a href="<?php echo BASE_URL; ?>/pessoa">Pessoas</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-user"></i>  Adicionar
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Adicionar Pessoa</strong></div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Nome:</label>
                                <input type="text" class="form-control" name="nome" required="" />
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>CEP:</label>
                                        <input type="text" class="form-control cep" name="cep" id="cep" />
                                    </div>
                                    <div class="col-md-6">
                                        <label>Endereco:</label>
                                        <input type="text" class="form-control" name="endereco" id="endereco" required="" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Número:</label>
                                        <input type="text" class="form-control" name="numero" required="" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Complemento:</label>
                                        <input type="text" class="form-control" name="complemento" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Bairro:</label>
                                        <input type="text" class="form-control" name="bairro" id="bairro" required="" />
                                    </div>
                                    <div class="col-md-5">
                                        <label>Cidade:</label>
                                        <input type="text" class="form-control" name="cidade" id="cidade" required="" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Estado:</label>
                                        <input type="text" class="form-control" name="estado" id="uf" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Telefone:</label>
                                        <input type="text" class="form-control telefone" name="telefone" required="" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>E-mail:</label>
                                        <input type="email" class="form-control" name="email" required="" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Senha:</label>
                                        <input type="password" class="form-control" name="senha" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Salvar" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>