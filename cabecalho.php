<?php
/* =========================================================
   CABEÇALHO — incluído no topo de todas as páginas.

   Como usar dentro de index.php, projeto.php, etc.:
       <?php $titulo_pagina = "Sobre Nós"; include "cabecalho.php"; ?>
   ========================================================= */

/* ---- Dados gerais (mude aqui e vale para o site inteiro) ---- */
$site_nome      = "Idade Conectada";
$site_nome_2    = "Segurança Redobrada";
$site_lema      = "Inclusão digital e prevenção de golpes virtuais para pessoas idosas";
$site_email     = "idadeconectada@ifsp.edu.br";   // troque pelo e-mail oficial da equipe
$site_cidade    = "Monte Alto — SP";
$site_campus    = "IFSP Campus Catanduva — Curso de ADS";
$site_orientador = "Prof. Dr. Kleber Sartorio";

/* ---- Menu principal: arquivo => rótulo ---- */
$menu = [
    "index.php"    => "Início",
    "projeto.php"  => "O Projeto",
    "sobrenos.php" => "Sobre Nós",
];

/* Descobre a página aberta para marcar o item ativo no menu */
$pagina_atual = basename($_SERVER["PHP_SELF"]);

/* Título da aba do navegador */
$titulo_pagina = isset($titulo_pagina) ? $titulo_pagina : $site_lema;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Projeto de extensão do IFSP Catanduva que ensina pessoas idosas de Monte Alto-SP a usar o celular com autonomia e a reconhecer golpes virtuais.">
    <title><?= htmlspecialchars($titulo_pagina) ?> — <?= htmlspecialchars($site_nome) ?></title>

    <!-- Ícone da aba do navegador -->
    <link rel="icon" href="img/favicon.ico" sizes="any">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <meta name="theme-color" content="#0B3A18">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Atalho para quem navega pelo teclado -->
    <a class="pular-link" href="#conteudo">Pular para o conteúdo</a>

    <!-- ===== Barra de acessibilidade ===== -->
    <div class="barra-acesso">
        <div class="container barra-acesso__interna">
            <span class="barra-acesso__rotulo">Ajuste a leitura</span>

            <div class="controle-fonte" role="group" aria-label="Tamanho do texto">
                <button type="button" class="btn-acesso" data-fonte="diminuir" aria-label="Diminuir o tamanho do texto">A<span aria-hidden="true">−</span></button>
                <button type="button" class="btn-acesso" data-fonte="normal" aria-label="Voltar o texto ao tamanho normal">A</button>
                <button type="button" class="btn-acesso" data-fonte="aumentar" aria-label="Aumentar o tamanho do texto">A<span aria-hidden="true">+</span></button>
            </div>

            <button type="button" class="btn-acesso btn-acesso--contraste" data-contraste aria-pressed="false">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                    <path d="M12 3.4a8.6 8.6 0 010 17.2z" fill="currentColor" />
                </svg>
                Alto contraste
            </button>
        </div>
    </div>

    <!-- ===== Cabeçalho ===== -->
    <header class="cabecalho">
        <div class="container cabecalho__interno">

            <div class="identidade">
                <span class="logo-ifsp">
                    <img src="img/ifsp-logo.png" alt="Instituto Federal de São Paulo">
                </span>

                <span class="identidade__filete" aria-hidden="true"></span>

                <a class="marca" href="index.php">
                    <span class="marca__texto">
                        <strong><?= htmlspecialchars($site_nome) ?></strong>
                        <small><?= htmlspecialchars($site_nome_2) ?></small>
                    </span>
                </a>
            </div>

            <button type="button" class="botao-menu" data-menu aria-expanded="false" aria-controls="menu-principal">
                <span class="botao-menu__barras" aria-hidden="true"></span>
                Menu
            </button>

            <nav class="navegacao" id="menu-principal" aria-label="Navegação principal">
                <ul class="navegacao__lista">
                    <?php foreach ($menu as $arquivo => $rotulo): ?>
                        <li>
                            <a href="<?= $arquivo ?>"
                                class="navegacao__link<?= ($pagina_atual === $arquivo) ? " esta-ativo" : "" ?>"
                                <?= ($pagina_atual === $arquivo) ? 'aria-current="page"' : "" ?>>
                                <?= htmlspecialchars($rotulo) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <li>
                        <a href="mailto:<?= htmlspecialchars($site_email) ?>" class="botao botao--pequeno">Fale com a gente</a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>

    <main id="conteudo">