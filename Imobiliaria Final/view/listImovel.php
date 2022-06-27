<?php
require_once 'controller/ImovelController.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliaria Viver Bem</title>
    <link rel="stylesheet" href="css/stilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h1>Imóveis</h1>
    <hr />
    <div>
        <table class="table table-bordered table-striped" style="top:40px;">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th><a href="index.php?page=imovel&action=cadastrar">Novo</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $imoveis = call_user_func(array('ImovelController', 'listar'));
                if (isset($imoveis)) {
                    foreach ($imoveis as $imovel) {
                ?>
                        <form method="get">
                            <tr>
                                <td><?php echo $imovel->getDescricao(); ?></td>
                                <td><?php echo $imovel->getTipo(); ?></td>
                                <td>
                                    <button type="submit" name="action" value="editar" class="btn btn-primary btn-sm">Editar</button>
                                    <input name="id" value="<?php echo $imovel->getId(); ?>" class="btn btn-primary btn-sm" hidden>
                                    <input name="page" value="<?php echo "imovel" ?>" class="btn btn-primary btn-sm" hidden>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>