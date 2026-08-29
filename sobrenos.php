<?php
$titulo_pagina = "Sobre Nós";
include "cabecalho.php";

/* -----------------------------------------------------------
   Equipe. Para editar, mexa só neste array — o HTML se monta
   sozinho lá embaixo. "foto" é o arquivo dentro de img/; se ele
   faltar, aparece a letra de "inicial" no lugar.
   ----------------------------------------------------------- */
$equipe = [
    [
        "nome"    => "Kaique Fernando",
        "foto"    => "kaique-fernando.jpg",
        "inicial" => "K",
        "funcao"  => "Líder",
        "bio"     => "Atuo no ramo de análise de dados voltados à manutenção industrial. Construí minha base
                      analítica e técnica em uma formação em Administração de Empresas e três anos no sistema
                      SENAI, com gestão de estoque, usinagem de peças e eletricidade industrial. Pensando nas
                      exigências do mercado e na inovação, hoje curso ADS no IFSP, onde vejo o caminho para
                      resolver os desafios contemporâneos. Assumo a liderança deste projeto movido pelo desafio
                      de democratizar o acesso à tecnologia.",
    ],
    [
        "nome"    => "Rhayssa Ramos",
        "foto"    => "rhayssa-ramos.jpg",
        "inicial" => "R",
        "funcao"  => "Sub-líder",
        "bio"     => "Sou formada em Desenvolvimento de Sistemas pela ETEC Elias Nechar. Atualmente atuo como
                      auxiliar administrativa na Secretaria de Assistência Social de Tabapuã, usando organização
                      e conhecimento técnico para otimizar rotinas administrativas e apoiar o atendimento à
                      comunidade.",
    ],
    [
        "nome"    => "Miguel Arcanjo Montagner",
        "foto"    => "miguel-arcanjo.jpg",
        "inicial" => "M",
        "funcao"  => "Coordenador geral",
        "bio"     => "Desde criança eu gostava de entender como os jogos e os sites funcionavam, e quis aprender
                      a fazer esses sistemas. Também sou fascinado por design gráfico e trabalho com edição de
                      vídeo e social media. Neste projeto cuido de cada detalhe e da ordem para cumprirmos as
                      metas, e toco a área criativa, desenvolvendo o site e os panfletos de divulgação junto com
                      o Otávio. Tenho altas expectativas e espero que possamos ajudar nosso público a entender e
                      se proteger na internet.",
    ],
    [
        "nome"    => "Miguel Ramalho",
        "foto"    => "miguel-ramalho.jpg",
        "inicial" => "M",
        "funcao"  => "Documentarista",
        "bio"     => "Meu nome é Miguel Mapelli Ramalho. Nasci em Novo Horizonte, São Paulo, e tenho 21 anos.
                      Em 2023 concluí o ensino técnico em Análise e Desenvolvimento de Sistemas na ETEC de
                      Novo Horizonte, e hoje continuo a formação no IFSP Campus Catanduva, no ensino superior
                      do mesmo curso. No projeto atuo como documentarista, responsável por organizar listas de
                      presença, questionários, atas, materiais produzidos, registros fotográficos autorizados
                      e as demais evidências das atividades realizadas.",
    ],
    [
        "nome"    => "Pedro Mendes",
        "foto"    => "pedro-mendes.jpg",
        "inicial" => "P",
        "funcao"  => "Parcerias e divulgação",
        "bio"     => "Sou estudante do 4º semestre de ADS no IFSP Campus Catanduva. Escolhi a área pelo interesse
                      em tecnologia e em como ela pode facilitar a vida das pessoas. O tema dos golpes digitais
                      contra idosos me chamou atenção por ser um problema cada vez mais comum, e eu já tinha
                      experiência ajudando uma pessoa com mais de 60 anos com conteúdos digitais. Sou
                      comunicativo, proativo, paciente e analítico, e espero aprimorar minha comunicação com
                      diferentes públicos.",
    ],
    [
        "nome"    => "Otávio Carvalho",
        "foto"    => "otavio-carvalho.jpg",
        "inicial" => "O",
        "funcao"  => "Pesquisador",
        "bio"     => "Meu nome é Otávio dos Santos Carvalho, tenho 20 anos e sou da turma de 2025 do curso de
                      ADS no IFSP Campus Catanduva, no quarto período. Escolhi o curso porque tenho afinidade
                      com tecnologia desde pequeno. O que mais me interessou no tema é o quanto ele impacta a
                      vida dos idosos e de seus parentes: nenhuma educação é desnecessária, e este projeto é uma
                      ótima oportunidade de aprender também.",
    ],
    [
        "nome"    => "Kauan Lourenço",
        "foto"    => "kauan-lourenco.jpg",
        "inicial" => "K",
        "funcao"  => "Soluções digitais",
        "bio"     => "Sou estudante do 4º semestre de ADS no IFSP Catanduva. Escolhi a área pelo desejo de criar
                      ferramentas tecnológicas que resolvam problemas do dia a dia. No projeto sou responsável
                      por apresentações, recursos interativos, QR Codes e materiais com linguagem simples e
                      acessível. Acredito que a tecnologia deve incluir e proteger todas as gerações, servindo
                      como uma ponte e não como um obstáculo.",
    ],
];
?>

<!-- ===================== ABERTURA ===================== -->
<section class="secao secao--abertura">
    <div class="container">
        <div class="abertura">
            <div class="abertura__texto">
                <p class="rotulo">Sobre nós</p>
                <h1 class="titulo-grande">Quem somos nós</h1>
                <p class="texto-guia">
                    Somos um grupo de estudantes do curso superior de Análise e Desenvolvimento de Sistemas do
                    Instituto Federal de Educação, Ciência e Tecnologia de São Paulo — Campus Catanduva.
                    Atuamos sob a orientação do <strong><?= htmlspecialchars($site_orientador) ?></strong>,
                    na disciplina de Introdução à Extensão, unindo nossa formação tecnológica ao compromisso
                    com a responsabilidade social e o fortalecimento da cidadania.
                </p>
                <div class="acoes">
                    <a class="botao" href="projeto.php">Ver o que fazemos</a>
                    <a class="botao botao--vazado" href="#equipe">Conhecer a equipe</a>
                </div>
            </div>

            <figure class="abertura__figura">
                <img src="img/imagem-grupo.jpeg"
                     alt="Os sete integrantes do projeto reunidos com o professor orientador"
                     onerror="this.style.display='none'">
                <figcaption class="abertura__legenda">IFSP Catanduva · Extensão · 2026</figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- ===================== ONDE O PROJETO NASCE ===================== -->
<section class="secao">
    <div class="container">
        <div class="duas-colunas">
            <div class="duas-colunas__lado">
                <p class="rotulo">De onde vem</p>
                <h2 class="titulo-secao">Uma necessidade concreta em Monte Alto</h2>
            </div>
            <div class="duas-colunas__lado">
                <p>
                    O <strong>Idade Conectada, Segurança Redobrada</strong> nasce da observação de uma
                    necessidade concreta no município de Monte Alto (SP): a rápida expansão do uso de
                    smartphones, aplicativos de mensagens e serviços bancários digitais pela população idosa
                    — expansão que muitas vezes acontece sem o acompanhamento necessário sobre segurança
                    da informação.
                </p>
                <p>
                    Diante do aumento de golpes virtuais e abordagens fraudulentas, identificamos a urgência
                    de criar ações práticas que ofereçam proteção, orientação e autonomia a esse público.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== COMO ENFRENTAMOS ===================== -->
<section class="secao secao--clara">
    <div class="container">
        <div class="duas-colunas">
            <div class="duas-colunas__lado">
                <p class="rotulo">Como enfrentamos</p>
                <h2 class="titulo-secao">Conhecimento de ADS aplicado a um problema social</h2>
                <p>
                    Aplicamos o que aprendemos no curso — cibersegurança, experiência do usuário,
                    gestão de dados e recursos digitais — na criação de iniciativas pedagógicas e acessíveis.
                </p>
            </div>
            <div class="duas-colunas__lado">
                <ul class="lista-marcada">
                    <li>Palestras educativas sobre os golpes mais comuns e como reconhecê-los.</li>
                    <li>Oficinas interativas com simulações de situações de risco.</li>
                    <li>Cartilhas informativas em linguagem acessível, impressas e digitais.</li>
                    <li>Materiais digitais com QR Code para consulta a qualquer momento.</li>
                    <li>Orientação sobre proteção de dados pessoais e identificação de fraudes.</li>
                    <li>Integração de filhos, familiares e cuidadores em uma rede comunitária de apoio.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== NO QUE ACREDITAMOS ===================== -->
<section class="secao">
    <div class="container">
        <p class="rotulo">No que acreditamos</p>
        <h2 class="titulo-secao">Tecnologia como inclusão, não como receio</h2>

        <div class="grade grade--3">

            <article class="cartao">
                <span class="cartao__icone" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <circle cx="9" cy="9" r="3.2" stroke="currentColor" stroke-width="1.8"/>
                        <circle cx="17" cy="10.5" r="2.4" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M3.5 19c0-2.7 2.5-4.5 5.5-4.5s5.5 1.8 5.5 4.5M16 14.8c2.6 0 4.5 1.5 4.5 3.7"
                              stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </span>
                <h3 class="cartao__titulo">Colaboração e empatia</h3>
                <p>
                    Ninguém aprende sob constrangimento. Respeitamos os diferentes níveis de escolaridade e
                    de familiaridade com a tecnologia, no ritmo de quem está aprendendo agora.
                </p>
            </article>

            <article class="cartao">
                <span class="cartao__icone" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <path d="M9 4H5.5A1.5 1.5 0 004 5.5v13A1.5 1.5 0 005.5 20h13a1.5 1.5 0 001.5-1.5V15"
                              stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="M20 4l-9 9M20 4v5M20 4h-5" stroke="currentColor" stroke-width="1.8"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <h3 class="cartao__titulo">Rigor técnico</h3>
                <p>
                    O conteúdo é pesquisado, revisado pela equipe e pelo professor orientador antes de ir a
                    público. Explicação simples não significa explicação frouxa.
                </p>
            </article>

            <article class="cartao cartao--atencao">
                <span class="cartao__icone" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <path d="M12 3l7.5 3.4v5c0 4.4-3.1 8.2-7.5 9.3-4.4-1.1-7.5-4.9-7.5-9.3v-5L12 3z"
                              stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="M9.5 12.2l1.9 1.9 3.4-3.9" stroke="currentColor" stroke-width="1.8"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <h3 class="cartao__titulo">Nunca pedimos seus dados</h3>
                <p>
                    Todos os exemplos são simulados. Em nenhuma atividade pedimos senha, código de verificação,
                    número de cartão, dado bancário ou documento. Se alguém pedir isso em nosso nome, é golpe.
                </p>
            </article>

        </div>
    </div>
</section>

<!-- ===================== EQUIPE ===================== -->
<section class="secao secao--clara" id="equipe">
    <div class="container">
        <p class="rotulo">A equipe</p>
        <h2 class="titulo-secao">Sete estudantes e um orientador</h2>
        <p class="texto-guia texto-guia--curto">
            Cada integrante assumiu uma frente do projeto, da pesquisa dos golpes à conversa com as
            instituições da cidade.
        </p>

        <ul class="grade grade--2 lista-limpa">
            <?php foreach ($equipe as $pessoa): ?>
                <li class="pessoa">
                    <div class="pessoa__topo">
                        <span class="pessoa__foto" aria-hidden="true"><?= htmlspecialchars($pessoa["inicial"]) ?><?php if (!empty($pessoa["foto"])): ?><img src="img/<?= htmlspecialchars($pessoa["foto"]) ?>" alt="" onerror="this.remove()"><?php endif; ?></span>
                        <div>
                            <h3 class="pessoa__nome"><?= htmlspecialchars($pessoa["nome"]) ?></h3>
                            <p class="pessoa__funcao"><?= htmlspecialchars($pessoa["funcao"]) ?></p>
                        </div>
                    </div>
                    <p class="pessoa__bio"><?= htmlspecialchars($pessoa["bio"]) ?></p>
                </li>
            <?php endforeach; ?>

            <li class="pessoa pessoa--orientador">
                <div class="pessoa__topo">
                    <span class="pessoa__foto" aria-hidden="true">K</span>
                    <div>
                        <h3 class="pessoa__nome"><?= htmlspecialchars($site_orientador) ?></h3>
                        <p class="pessoa__funcao">Professor orientador</p>
                    </div>
                </div>
                <p class="pessoa__bio">
                    Orienta o projeto na disciplina de Introdução à Extensão, acompanha a metodologia e revisa
                    todos os conteúdos antes das atividades com a comunidade.
                </p>
            </li>
        </ul>
    </div>
</section>

<!-- ===================== CHAMADA FINAL ===================== -->
<section class="secao secao--chamada">
    <div class="container chamada">
        <h2 class="chamada__titulo">Transformar aprendizado acadêmico em benefício social real</h2>
        <p class="chamada__texto">
            É isso que buscamos: que a comunidade idosa de Monte Alto navegue pelo ambiente digital com
            segurança, autonomia e tranquilidade. Se você quer levar as atividades ao seu grupo, fale com a gente.
        </p>
        <a class="botao botao--claro" href="mailto:<?= htmlspecialchars($site_email) ?>?subject=Inscrever%20meu%20grupo">Falar com a equipe</a>
    </div>
</section>

<?php include "rodape.php"; ?>