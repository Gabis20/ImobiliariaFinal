<h1>Usuários</h1>
<hr />
<div>
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Login</th>
                <th>Permissão</th>
                <th><a href="index.php?page=usuario&action=cadastrar">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $usuarios = call_user_func(array('UsuarioController', 'listar'));
            if (isset($usuarios) && !empty($usuarios)) {
                foreach ($usuarios as $usuario) {
            ?>
                    <form method="get">
                        <tr>
                            <td><?php echo $usuario->getLogin(); ?></td>
                            <td><?php echo $usuario->getPermissao(); ?></td>
                            <td>
                                <button type="submit" name="action" value="editar" class="btn btn-primary btn-sm">Editar</button>
                                <input name="id" value="<?php echo $usuario->getId(); ?>" class="btn btn-primary btn-sm" hidden>
                                <input name="page" value="<?php echo "usuario" ?>" class="btn btn-primary btn-sm" hidden>
                                <button type="submit" name="action" value="excluir" class="btn btn-primary btn-sm">Excluir</button>

                            </td>
                        </tr>
                    </form>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="3">Nenhum registro cadastrado</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>