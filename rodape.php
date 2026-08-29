</main>

<!-- ===== Rodapé ===== -->
<footer class="rodape">
    <div class="container rodape__topo">

        <div class="rodape__bloco rodape__bloco--marca">
            <p class="rodape__logo">
                <span class="logo-ifsp">
                    <img src="img/ifsp-logo.png" alt="Instituto Federal de São Paulo">
                </span>
            </p>

            <span class="marca marca--rodape">
                <span class="marca__texto">
                    <strong><?= htmlspecialchars($site_nome) ?></strong>
                    <small><?= htmlspecialchars($site_nome_2) ?></small>
                </span>
            </span>
            <p class="rodape__texto">
                Palestra, oficina e cartilha gratuitas sobre uso seguro do celular e prevenção
                de golpes virtuais, para pessoas idosas de <?= htmlspecialchars($site_cidade) ?> e suas famílias.
            </p>
            <p class="rodape__aviso">
                Nunca pedimos senhas, códigos de verificação, número de cartão ou dados bancários —
                nem nas atividades, nem por telefone, nem por mensagem.
            </p>
        </div>

        <div class="rodape__bloco">
            <h2 class="rodape__titulo">Navegue</h2>
            <ul class="rodape__lista">
                <?php foreach ($menu as $arquivo => $rotulo): ?>
                    <li><a href="<?= $arquivo ?>"><?= htmlspecialchars($rotulo) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="rodape__bloco">
            <h2 class="rodape__titulo">Participe</h2>
            <ul class="rodape__lista">
                <li><a href="mailto:<?= htmlspecialchars($site_email) ?>?subject=Inscrever%20meu%20grupo">Inscrever meu grupo</a></li>
                <li><a href="mailto:<?= htmlspecialchars($site_email) ?>?subject=Quero%20ser%20parceiro">Ser instituição parceira</a></li>
                <li><a href="sobrenos.php#equipe">Conhecer a equipe</a></li>
            </ul>
        </div>

        <div class="rodape__bloco">
            <h2 class="rodape__titulo">Onde encontrar</h2>
            <ul class="rodape__lista rodape__lista--simples">
                <li>Atividades em <?= htmlspecialchars($site_cidade) ?></li>
                <li><?= htmlspecialchars($site_campus) ?></li>
                <li><a href="mailto:<?= htmlspecialchars($site_email) ?>"><?= htmlspecialchars($site_email) ?></a></li>
            </ul>
        </div>

    </div>

    <div class="container rodape__base">
        <p>© <?= date("Y") ?> <?= htmlspecialchars($site_nome) ?>, <?= htmlspecialchars($site_nome_2) ?>. Projeto de extensão universitária, gratuito e sem fins lucrativos.</p>
        <p>Orientação: <?= htmlspecialchars($site_orientador) ?>.</p>
    </div>
</footer>

<script>
    /* ---------- Menu no celular ---------- */
    (function() {
        var botao = document.querySelector("[data-menu]");
        var menu = document.getElementById("menu-principal");
        if (!botao || !menu) return;

        botao.addEventListener("click", function() {
            var aberto = menu.classList.toggle("esta-aberto");
            botao.setAttribute("aria-expanded", aberto ? "true" : "false");
        });
    })();

    /* ---------- Tamanho do texto e alto contraste ---------- */
    (function() {
        var MIN = 100,
            MAX = 150,
            PASSO = 12.5;
        var raiz = document.documentElement;

        function fonteAtual() {
            return parseFloat(raiz.style.fontSize) || 100;
        }

        function aplicarFonte(valor) {
            raiz.style.fontSize = valor + "%";
            try {
                localStorage.setItem("ic_fonte", valor);
            } catch (e) {}
        }

        function aplicarContraste(ligado) {
            document.body.classList.toggle("alto-contraste", ligado);
            var btn = document.querySelector("[data-contraste]");
            if (btn) btn.setAttribute("aria-pressed", ligado ? "true" : "false");
            try {
                localStorage.setItem("ic_contraste", ligado ? "1" : "0");
            } catch (e) {}
        }

        document.querySelectorAll("[data-fonte]").forEach(function(btn) {
            btn.addEventListener("click", function() {
                var acao = btn.getAttribute("data-fonte");
                var atual = fonteAtual();
                if (acao === "aumentar") aplicarFonte(Math.min(MAX, atual + PASSO));
                if (acao === "diminuir") aplicarFonte(Math.max(MIN, atual - PASSO));
                if (acao === "normal") aplicarFonte(100);
            });
        });

        var btnContraste = document.querySelector("[data-contraste]");
        if (btnContraste) {
            btnContraste.addEventListener("click", function() {
                aplicarContraste(!document.body.classList.contains("alto-contraste"));
            });
        }

        /* Mantém a escolha da pessoa na próxima visita */
        try {
            var fonteSalva = localStorage.getItem("ic_fonte");
            if (fonteSalva) aplicarFonte(parseFloat(fonteSalva));
            if (localStorage.getItem("ic_contraste") === "1") aplicarContraste(true);
        } catch (e) {}
    })();
</script>

</body>

</html>