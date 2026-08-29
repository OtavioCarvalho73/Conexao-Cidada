<?php
$titulo_pagina = "Início";
include "cabecalho.php";
?>

<!-- ===================== ABERTURA ===================== -->
<section class="secao secao--abertura">
    <div class="container">
        <div class="abertura">
            <div class="abertura__texto">
                <p class="rotulo">Projeto de extensão · IFSP Catanduva</p>
                <h1 class="titulo-grande">Nenhum banco vai pedir sua senha por mensagem.</h1>
                <p class="texto-guia">
                    O <strong>Idade Conectada, Segurança Redobrada</strong> leva a
                    <?= htmlspecialchars($site_cidade) ?> palestras, oficinas e cartilhas sobre o uso seguro do
                    celular. Ensinamos a reconhecer golpes virtuais em linguagem simples, com exemplos do dia a dia
                    e tempo para perguntar o quanto for preciso. Tudo gratuito.
                </p>
                <div class="acoes">
                    <a class="botao" href="projeto.php">Conhecer o projeto</a>
                    <a class="botao botao--vazado" href="mailto:<?= htmlspecialchars($site_email) ?>?subject=Inscrever%20meu%20grupo">Inscrever meu grupo</a>
                </div>
            </div>

            <!-- Exemplo comentado: é o que fazemos nas oficinas -->
            <div class="simulacao">
                <p class="simulacao__topo">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 4l8.5 15h-17L12 4z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        <path d="M12 10v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <circle cx="12" cy="16.8" r="1" fill="currentColor" />
                    </svg>
                    Exemplo simulado — esta mensagem é falsa
                </p>

                <div class="simulacao__corpo">
                    <p class="simulacao__balao">
                        <span class="simulacao__remetente">Mensagem recebida agora</span>
                        “BANCO: identificamos uma compra de R$ 1.847,90 no seu cartão. Se não reconhece,
                        ligue AGORA no 0800 000-0000 e informe o código que enviamos por SMS.”
                    </p>

                    <ul class="simulacao__sinais">
                        <li><strong>Pressa.</strong> O golpe precisa que você aja antes de pensar ou de perguntar a alguém.</li>
                        <li><strong>Um número para ligar.</strong> O telefone do banco é o que está atrás do seu cartão, não o da mensagem.</li>
                        <li><strong>Pede o código do SMS.</strong> Esse código é seu. Banco nenhum pede — quem pede é golpista.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== REGRA DE OURO ===================== -->
<section class="secao">
    <div class="container">
        <p class="rotulo">A regra que vale para tudo</p>
        <h2 class="titulo-secao">Desligue, respire e confira pelo canal oficial</h2>
        <p class="texto-guia">
            Não existe pedido legítimo que não possa esperar cinco minutos. Se a mensagem ou a ligação
            criar urgência, essa urgência é o próprio golpe. Encerre o contato e procure a empresa pelo
            número do cartão, do extrato ou do aplicativo — nunca pelo número que veio na mensagem.
        </p>

        <div class="aviso-ouro">
            <span class="aviso-ouro__icone" aria-hidden="true">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                    <path d="M12 3l7.5 3.4v5c0 4.4-3.1 8.2-7.5 9.3-4.4-1.1-7.5-4.9-7.5-9.3v-5L12 3z"
                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                    <path d="M12 8.5v4.2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    <circle cx="12" cy="15.8" r="1.05" fill="currentColor" />
                </svg>
            </span>
            <p>
                <strong>Senha, código de verificação e número de cartão não se dizem a ninguém.</strong>
                Nem por telefone, nem por mensagem, nem para funcionário de banco, nem para nós.
                Nas nossas atividades, jamais pedimos esses dados.
            </p>
        </div>
    </div>
</section>

<!-- ===================== O QUE OFERECEMOS ===================== -->
<section class="secao secao--clara">
    <div class="container">
        <p class="rotulo">O que oferecemos</p>
        <h2 class="titulo-secao">Um encontro pensado para aprender sem pressa</h2>

        <div class="grade grade--3">

            <article class="cartao">
                <span class="cartao__icone" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <path d="M4 5h16v11H13l-3 3v-3H4V5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                    </svg>
                </span>
                <h3 class="cartao__titulo">Palestra educativa</h3>
                <p>
                    Os golpes mais comuns hoje — central falsa, link de phishing, conta clonada, pedido
                    urgente de dinheiro em nome de um parente — e o sinal que denuncia cada um deles.
                </p>
            </article>

            <article class="cartao">
                <span class="cartao__icone" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <rect x="7" y="3" width="10" height="18" rx="2.2" stroke="currentColor" stroke-width="1.8" />
                        <path d="M11 18h2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <h3 class="cartao__titulo">Oficina com simulações</h3>
                <p>
                    Mensagens, links e pedidos suspeitos de mentirinha, para treinar a decisão com o celular
                    na mão. Todos os exemplos são fictícios e nenhum dado real é usado.
                </p>
            </article>

            <article class="cartao">
                <span class="cartao__icone" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <path d="M5 4h9l5 5v11H5V4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                        <path d="M14 4v5h5M8.5 13h7M8.5 16.5h4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <h3 class="cartao__titulo">Cartilha para levar para casa</h3>
                <p>
                    Material impresso e digital com as orientações principais, além de panfleto com QR Code
                    para consultar depois e mostrar para a família.
                </p>
            </article>

        </div>
    </div>
</section>

<!-- ===================== PARA QUEM É ===================== -->
<section class="secao">
    <div class="container">
        <div class="duas-colunas">
            <div class="duas-colunas__lado">
                <p class="rotulo">Para quem é</p>
                <h2 class="titulo-secao">Para quem usa o celular todo dia e nunca teve a quem perguntar</h2>
            </div>
            <div class="duas-colunas__lado">
                <p>
                    O público principal são pessoas com 60 anos ou mais de Monte Alto e região que usam
                    mensagens, redes sociais ou aplicativos de banco. Não é preciso saber nada de antemão:
                    trabalhamos com diferentes níveis de escolaridade e de familiaridade com a tecnologia.
                </p>
                <p>
                    Filhos, familiares e cuidadores são bem-vindos junto. Quando a família combina como
                    conferir uma mensagem suspeita, o golpe perde a força.
                </p>
            </div>
        </div>

        <div class="numeros">
            <div class="numero">
                <span class="numero__valor">100</span>
                <p class="numero__rotulo">Pessoas que queremos alcançar com as ações do projeto.</p>
            </div>
            <div class="numero">
                <span class="numero__valor">60+</span>
                <p class="numero__rotulo">A idade do público principal, com familiares e cuidadores junto.</p>
            </div>
            <div class="numero">
                <span class="numero__valor">Grátis</span>
                <p class="numero__rotulo">Todas as atividades e materiais, sem custo para os participantes.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUEM REALIZA ===================== -->
<section class="secao secao--clara">
    <div class="container">
        <div class="duas-colunas">
            <div class="duas-colunas__lado">
                <p class="rotulo">Quem realiza</p>
                <h2 class="titulo-secao">Sete estudantes de ADS e um professor orientador</h2>
                <p>
                    Somos alunos do curso de Análise e Desenvolvimento de Sistemas do IFSP Campus Catanduva,
                    sob orientação do <?= htmlspecialchars($site_orientador) ?>. Este é o nosso projeto de
                    extensão: usar o que aprendemos em cibersegurança, experiência do usuário e recursos
                    digitais em benefício da comunidade.
                </p>
                <p>
                    <a class="botao botao--vazado" href="sobrenos.php">Conhecer a equipe</a>
                </p>
            </div>
            <div class="duas-colunas__lado">
                <ul class="lista-marcada">
                    <li>Ações em Monte Alto (SP) e região, entre setembro e novembro de 2026.</li>
                    <li>Conteúdo pesquisado pela equipe e revisado pelo professor orientador.</li>
                    <li>Realização em parceria com instituições públicas de assistência social do município.</li>
                    <li>Nenhum dado pessoal sensível é solicitado ou registrado em qualquer etapa.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CHAMADA FINAL ===================== -->
<section class="secao secao--chamada">
    <div class="container chamada">
        <h2 class="chamada__titulo">Tem um grupo que gostaria de participar?</h2>
        <p class="chamada__texto">
            Atendemos centros de convivência, igrejas, associações e grupos de bairro em
            <?= htmlspecialchars($site_cidade) ?>. Levamos o material impresso e adaptamos a conversa ao
            tamanho do grupo.
        </p>
        <a class="botao botao--claro" href="mailto:<?= htmlspecialchars($site_email) ?>?subject=Inscrever%20meu%20grupo">Falar com a equipe</a>
    </div>
</section>

<?php include "rodape.php"; ?>