<?php
require_once 'Controller/UsuarioController.php';
require_once 'Controller/ImovelController.php';
require_once 'header.php';


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'usuario':
            switch ($_GET['action']) {
                case 'listar':
                    $usuario = call_user_func(array('UsuarioController', 'listar'));
                    require_once 'view/listUsuario.php';
                    break;
                case 'excluir':
                    $usuario = call_user_func(array('UsuarioController', 'excluir'), $_GET['id']);
                    require_once 'view/listUsuario.php';
                    break;
                case 'cadastrar':
                    require_once 'view/cadUsuario.php';
                    break;
                case 'salvar':
                    $usuario = call_user_func(array('UsuarioController', 'salvar'));
                    require_once 'view/listUsuario.php';
                    break;
                case 'editar':
                    $usuario = call_user_func(array('UsuarioController', 'editar'), $_GET['id']);
                    require_once 'view/cadUsuario.php';
                    break;
            }
            break;
        case 'imovel':
            switch ($_GET['action']) {
                case 'listar':
                    $imovel = call_user_func(array('ImovelController', 'listar'));
                    require_once 'view/listImovel.php';
                    break;
                case 'excluir':
                    $imovel = call_user_func(array('ImovelController', 'excluir'), $_GET['id']);
                    require_once 'view/listImovel.php';
                    break;
                case 'cadastrar':
                    require_once 'view/cadImovel.php';
                    break;
                case 'salvar':
                    $imovel = call_user_func(array('ImovelController', 'salvar'));
                    require_once 'view/listImovel.php';
                    break;
                case 'editar':
                    $imovel = call_user_func(array('ImovelController', 'editar'), $_GET['id']);
                    require_once 'view/cadImovel.php';
                    break;
            }
    }
}

require_once 'footer.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/stilo.css">
</head>

<body>
    <div class="index">

        <h1>Menu de Escolha para ações de Usuario </h1>
        <div>
            <ul class="grade">

                <li> <a href="index.php?page=usuario&action=cadastrar" title="Usuario">Usuario</a> </li>
                <li> <a href="index.php?page=imovel&action=cadastrar" title="Imovel">Imovel</a> </li>
                <li> <a href="index.php?page=usuario&action=listar" title="Listar Usuario">
                        Lista Usuario</a> </li>
                <li> <a href="index.php?page=imovel&action=listar" title="Listar Imovel">
                        Lista Imovel</a> </li>

            </ul>
        </div>
    </div>
</body>

</html>