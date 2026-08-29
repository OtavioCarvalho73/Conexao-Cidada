<?php
$titulo_pagina = "O Projeto";
include "cabecalho.php";

/* -----------------------------------------------------------
   Conteúdo da proposta aprovada. Edite pelos arrays abaixo.
   ----------------------------------------------------------- */

$objetivos_especificos = [
    "Pesquisar os principais golpes e crimes virtuais que atingem pessoas idosas, com atenção a aplicativos bancários, cartões, redes sociais e aplicativos de mensagens.",
    "Apresentar, em linguagem simples, exemplos de fraudes e os sinais que podem indicar uma tentativa de golpe.",
    "Orientar os participantes sobre a proteção de senhas, códigos de verificação, dados pessoais e informações financeiras.",
    "Realizar palestra, oficina e orientações práticas, com exemplos simulados, materiais impressos e recursos digitais acessíveis.",
    "Avaliar a compreensão e a percepção de segurança antes e depois das atividades, registrando os resultados para o relatório final.",
    "Incentivar a participação de filhos, familiares e cuidadores, para que apoiem a adoção de práticas seguras e a identificação de situações suspeitas.",
];

$entregas = [
    ["titulo" => "Palestra educativa",
     "texto"  => "Sobre os principais tipos de golpes virtuais e as formas de prevenção."],
    ["titulo" => "Cartilha educativa",
     "texto"  => "Impressa e digital, com orientações objetivas para identificar e evitar fraudes."],
    ["titulo" => "Oficina de segurança digital",
     "texto"  => "Com exemplos simulados de mensagens, links e solicitações suspeitas."],
    ["titulo" => "Orientação individual",
     "texto"  => "Para tirar dúvidas sobre celular, aplicativos e serviços bancários, sem registrar dados sensíveis."],
    ["titulo" => "Formulário eletrônico",
     "texto"  => "Para avaliar a participação e a compreensão dos conteúdos, sem pedir dados sensíveis."],
    ["titulo" => "Panfleto com QR Code",
     "texto"  => "Impresso e digital, levando à cartilha e aos demais recursos do projeto."],
];

$fases = [
    ["periodo" => "Agosto a setembro de 2026", "titulo" => "Planejamento",
     "texto" => "Pesquisa, definição dos conteúdos, elaboração dos materiais, contato com parceiros e preparação dos instrumentos de avaliação."],
    ["periodo" => "Setembro a novembro de 2026", "titulo" => "Execução",
     "texto" => "Divulgação, realização do grande encontro, palestra, oficina, orientações práticas, entrega dos materiais e aplicação das avaliações."],
    ["periodo" => "Novembro a dezembro de 2026", "titulo" => "Encerramento",
     "texto" => "Organização dos registros, análise dos resultados, avaliação da equipe e entrega do relatório final até 11 de dezembro de 2026."],
];

$indicadores = [
    ["valor" => "100", "texto" => "Participantes presentes nas ações, priorizando o público idoso."],
    ["valor" => "80%", "texto" => "De evolução entre o questionário inicial e o final, em respostas pareadas válidas."],
    ["valor" => "80%", "texto" => "De avaliação positiva, com participantes se sentindo mais preparados."],
];

$ods = [
    ["numero" => "3",  "nome" => "Saúde e bem-estar",
     "texto" => "Prevenir o prejuízo financeiro e o abalo emocional que um golpe deixa, promovendo mais segurança e tranquilidade."],
    ["numero" => "4",  "nome" => "Educação de qualidade",
     "texto" => "Oferecer conhecimento acessível sobre segurança digital, favorecendo a autonomia no uso da tecnologia."],
    ["numero" => "10", "nome" => "Redução das desigualdades",
     "texto" => "Enfrentar uma vulnerabilidade específica da população idosa e ampliar sua participação segura na sociedade."],
];

$parceiros = [
    ["nome" => "Prefeitura Municipal de Monte Alto",
     "papel" => "Apoio na divulgação, na mobilização da comunidade e, conforme disponibilidade, na cessão de espaço público."],
    ["nome" => "Secretaria Municipal de Assistência Social",
     "papel" => "Identificação e encaminhamento do público-alvo, além da articulação da rede de atendimento."],
    ["nome" => "Centro de Convivência da Pessoa Idosa",
     "papel" => "Divulgação, organização dos encontros e aproximação com os grupos de convivência."],
    ["nome" => "CRAS — Centro de Referência de Assistência Social",
     "papel" => "Contato com pessoas idosas em situação de vulnerabilidade social e avaliação de espaço."],
];
?>

<!-- ===================== ABERTURA ===================== -->
<section class="secao secao--abertura">
    <div class="container">
        <p class="rotulo">O projeto</p>
        <h1 class="titulo-grande">Idade Conectada,<br>Segurança Redobrada</h1>
        <p class="texto-guia">
            Conscientização e capacitação básica de pessoas idosas de <?= htmlspecialchars($site_cidade) ?>
            para reconhecer, prevenir e responder com segurança a golpes virtuais — envolvendo também filhos,
            familiares e cuidadores na construção de uma rede de proteção e apoio.
        </p>

        <!-- Cartão-resumo do projeto -->
        <article class="projeto-cartao">
            <figure class="projeto-cartao__figura">
                <!-- Coloque uma foto da oficina em img/oficina.jpg -->
                <img src="img/oficina.jpg" alt="Estudante orientando uma pessoa idosa no uso do celular"
                     onerror="this.style.display='none'">
                <figcaption class="projeto-cartao__legenda">
                    <span class="etiquetas-foto">
                        <span class="etiqueta-foto">Inclusão digital</span>
                        <span class="etiqueta-foto">Segurança</span>
                        <span class="etiqueta-foto">Terceira idade</span>
                    </span>
                    <span class="projeto-cartao__titulo">Prevenção de golpes virtuais</span>
                </figcaption>
            </figure>

            <div class="projeto-cartao__conteudo">
                <p class="projeto-cartao__resumo">
                    Palestra, oficina e orientações práticas sobre mensagens fraudulentas, links suspeitos,
                    proteção de senhas e uso seguro de aplicativos de banco, com cartilha em linguagem acessível.
                </p>

                <div class="info">
                    <span class="info__icone" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="8.5" stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="12" cy="12" r="3.4" stroke="currentColor" stroke-width="1.8"/>
                        </svg>
                    </span>
                    <div>
                        <p class="rotulo rotulo--limpo">Objetivos</p>
                        <ul>
                            <li>Reconhecer sinais de fraude antes de agir</li>
                            <li>Proteger senhas, códigos e dados pessoais</li>
                            <li>Formar uma rede de apoio com a família</li>
                        </ul>
                    </div>
                </div>

                <hr class="divisor">

                <div class="info">
                    <span class="info__icone" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <circle cx="9" cy="9" r="3.2" stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="17" cy="10.5" r="2.4" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M3.5 19c0-2.7 2.5-4.5 5.5-4.5s5.5 1.8 5.5 4.5M16 14.8c2.6 0 4.5 1.5 4.5 3.7"
                                  stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <div>
                        <p class="rotulo rotulo--limpo">Público</p>
                        <p>Pessoas com 60 anos ou mais de <?= htmlspecialchars($site_cidade) ?> e entorno, além de filhos, familiares e cuidadores</p>
                    </div>
                </div>

                <div class="info">
                    <span class="info__icone" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <rect x="3.5" y="5" width="17" height="15" rx="2.2" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M3.5 9.5h17M8 3.5v3M16 3.5v3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <div>
                        <p class="rotulo rotulo--limpo">Atividades</p>
                        <p>Um grande encontro com palestra, oficina e orientação individual, entre setembro e novembro de 2026</p>
                    </div>
                </div>

                <div class="info">
                    <span class="info__icone" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M4 10.5l8-5.5 8 5.5V20H4v-9.5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                            <path d="M9.5 20v-5h5v5" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <div>
                        <p class="rotulo rotulo--limpo">Parceiros potenciais</p>
                        <p>Prefeitura de Monte Alto, Secretaria Municipal de Assistência Social, Centro de Convivência da Pessoa Idosa e CRAS</p>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

<!-- ===================== O PROBLEMA ===================== -->
<section class="secao">
    <div class="container">
        <div class="duas-colunas">
            <div class="duas-colunas__lado">
                <p class="rotulo">O problema</p>
                <h2 class="titulo-secao">O uso cresceu mais rápido que a orientação</h2>
            </div>
            <div class="duas-colunas__lado">
                <p>
                    Em Monte Alto e no entorno, pessoas idosas utilizam cada vez mais celulares, aplicativos de
                    mensagens, redes sociais e serviços bancários digitais. Essa ampliação, porém, pode acontecer
                    sem orientação suficiente sobre proteção de dados e reconhecimento de abordagens fraudulentas.
                </p>
                <p>
                    Golpes como falsas centrais de atendimento, links de phishing, clonagem de contas, pedidos
                    urgentes de dinheiro e ofertas enganosas exploram a confiança e a pouca familiaridade com
                    práticas de segurança. A demanda é oferecer informação acessível, demonstrações práticas e
                    espaço para dúvidas, para que a comunidade consiga identificar sinais de risco e agir com
                    mais segurança, autonomia e tranquilidade.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== OBJETIVOS ===================== -->
<section class="secao secao--clara">
    <div class="container">
        <p class="rotulo">Objetivos específicos</p>
        <h2 class="titulo-secao">O que pretendemos fazer</h2>

        <ol class="objetivos">
            <?php foreach ($objetivos_especificos as $objetivo): ?>
                <li><?= htmlspecialchars($objetivo) ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<!-- ===================== ENTREGAS ===================== -->
<section class="secao">
    <div class="container">
        <p class="rotulo">O que será entregue</p>
        <h2 class="titulo-secao">Produtos e serviços do projeto</h2>

        <ul class="grade grade--3 lista-limpa">
            <?php foreach ($entregas as $item): ?>
                <li class="cartao">
                    <h3 class="cartao__titulo"><?= htmlspecialchars($item["titulo"]) ?></h3>
                    <p><?= htmlspecialchars($item["texto"]) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="aviso-ouro">
            <span class="aviso-ouro__icone" aria-hidden="true">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                    <path d="M12 3l7.5 3.4v5c0 4.4-3.1 8.2-7.5 9.3-4.4-1.1-7.5-4.9-7.5-9.3v-5L12 3z"
                          stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                    <path d="M9.4 12.2l1.9 1.9 3.4-3.9" stroke="currentColor" stroke-width="1.8"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <p>
                <strong>Todos os exemplos usados são fictícios.</strong>
                Em nenhuma etapa solicitamos ou registramos senhas, códigos de verificação, números de cartão,
                dados bancários ou documentos pessoais — inclusive nos formulários de avaliação.
            </p>
        </div>
    </div>
</section>

<!-- ===================== CRONOGRAMA ===================== -->
<section class="secao">
    <div class="container">
        <div class="duas-colunas">
            <div class="duas-colunas__lado">
                <p class="rotulo">Cronograma</p>
                <h2 class="titulo-secao">Três fases até o relatório final</h2>
                <p>
                    O projeto se desenvolve ao longo do segundo semestre letivo de 2026, da pesquisa inicial
                    à entrega dos resultados.
                </p>
            </div>
            <div class="duas-colunas__lado">
                <ol class="fases lista-limpa">
                    <?php foreach ($fases as $fase): ?>
                        <li class="fase">
                            <span class="fase__periodo"><?= htmlspecialchars($fase["periodo"]) ?></span>
                            <h3 class="fase__titulo"><?= htmlspecialchars($fase["titulo"]) ?></h3>
                            <p><?= htmlspecialchars($fase["texto"]) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- ===================== INDICADORES ===================== -->
<section class="secao secao--clara">
    <div class="container">
        <p class="rotulo">Indicadores de impacto</p>
        <h2 class="titulo-secao">Como vamos medir o resultado</h2>

        <div class="numeros">
            <?php foreach ($indicadores as $ind): ?>
                <div class="numero">
                    <span class="numero__valor"><?= htmlspecialchars($ind["valor"]) ?></span>
                    <p class="numero__rotulo"><?= htmlspecialchars($ind["texto"]) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===================== PARCEIROS ===================== -->
<section class="secao" id="parceiros">
    <div class="container">
        <div class="duas-colunas">
            <div class="duas-colunas__lado">
                <p class="rotulo">Parcerias</p>
                <h2 class="titulo-secao">Sozinhos não chegamos a quem precisa</h2>
                <p>
                    As instituições ao lado são parceiras potenciais, ainda em fase de confirmação. São elas
                    que abrem a porta dos grupos de convivência e ajudam a mobilizar a comunidade.
                </p>
                <p>
                    <a class="botao botao--vazado" href="mailto:<?= htmlspecialchars($site_email) ?>?subject=Quero%20ser%20parceiro">Quero ser parceiro</a>
                </p>
            </div>
            <div class="duas-colunas__lado">
                <ul class="lista-parceiros lista-limpa">
                    <?php foreach ($parceiros as $p): ?>
                        <li class="parceiro">
                            <h3 class="parceiro__nome"><?= htmlspecialchars($p["nome"]) ?></h3>
                            <p class="parceiro__papel"><?= htmlspecialchars($p["papel"]) ?></p>
                            <span class="etiqueta etiqueta--pendente">A confirmar</span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== ODS ===================== -->
<section class="secao secao--clara">
    <div class="container">
        <p class="rotulo">Agenda 2030</p>
        <h2 class="titulo-secao">Onde o projeto se encaixa</h2>

        <ul class="grade grade--3 lista-limpa">
            <?php foreach ($ods as $o): ?>
                <li class="ods">
                    <span class="ods__numero" aria-hidden="true">ODS <?= htmlspecialchars($o["numero"]) ?></span>
                    <h3 class="ods__nome"><?= htmlspecialchars($o["nome"]) ?></h3>
                    <p><?= htmlspecialchars($o["texto"]) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- ===================== CHAMADA FINAL ===================== -->
<section class="secao secao--chamada">
    <div class="container chamada">
        <h2 class="chamada__titulo">Quer trazer o projeto para o seu grupo?</h2>
        <p class="chamada__texto">
            Fale com a equipe para combinar data, local e tamanho da turma. As atividades e os materiais
            são gratuitos.
        </p>
        <a class="botao botao--claro" href="mailto:<?= htmlspecialchars($site_email) ?>?subject=Inscrever%20meu%20grupo">Falar com a equipe</a>
    </div>
</section>

<?php include "rodape.php"; ?>