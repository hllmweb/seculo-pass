<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
        <title>Seculo Pass - <?= $titulo_header; ?></title>
    </head>
    <body>
        <div class="app-main">
            <div class="app-header"><div class="app-header-title"><?= $titulo_header; ?></div></div>
            <div class="app-content">
                <!--search-->
                <div class="app-search">
                    <input type="text" placeholder="Pesquisar..." class="input-search">
                    <button class="btn-search"><i class="fas fa-search"></i></button>
                </div>


                <!--menu list-->
                <div class="app-menu" id="app-menu-page-1">
                    <?= $info_mensagem; ?>
                    <?php foreach($listar_componente as $row): ?>
                    <a href="javascript:void(0);" id="<?= $row['IDITEMCOMPONENTE']; ?>" onclick="abrirToggle(this);" class="app-menu-link">
                        <?= $row['DESCRICAO']; ?>
                        <div class="app-toggle" id="<?= $row['IDITEMCOMPONENTE']; ?>">
                            <div class="app-toggle-describer">
                                <p>Acesso: <?= $row['ID1']; ?> - Senha: <?= $row['CH1']; ?></p>
                                <p>Acesso: <?= $row['ID2']; ?> - Senha: <?= $row['CH2']; ?></p>
                                <p><?= $row['OBSERVACAO']; ?></p>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="button-float-right"><a href="javascript:void(0);" onclick="abrirModal('modal-corpo-pequeno', '<?= base_url() ?>componente/formulario/index');" class="btn btn-success"><i class="fas fa-plus"></i></a></div>
        </div>


        <!--modal ou popup-->
        <div id="modal" class="modal-geral">
            <div id="modal-tamanho">
                <div id="modal-conteudo"></div>
            </div>
        </div>

        <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/main.js') ?>"></script>
    </body>
</html>