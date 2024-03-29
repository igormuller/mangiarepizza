<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Usuário
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-user"></i>  Usuário
                    </li>
                </ol>
            </div>
        </div>
        <?php if (!empty($info)): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Atenção!</strong> <?php echo $info; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Dados do Usuário</div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $usuario['nome']; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Login:</label>
                                <input type="text" class="form-control" value="<?php echo $usuario['login']; ?>" disabled />
                            </div>
                            <div class="form-group">
                                <label>Senha:</label>
                                <input type="password" class="form-control" name="senha" />
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