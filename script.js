/* =========================================================
   CONEXÃO CIDADÃ — comportamentos do site
   1. Menu no celular      4. Revelar ao rolar
   2. Tamanho do texto     5. Quiz "É golpe?"
   3. Alto contraste
   ========================================================= */
(function () {
    "use strict";

    var semAnimacao = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* ---------- 1. Menu no celular ---------- */
    var botaoMenu = document.querySelector("[data-menu]");
    var menu = document.getElementById("menu-principal");
    if (botaoMenu && menu) {
        botaoMenu.addEventListener("click", function () {
            var aberto = menu.classList.toggle("esta-aberto");
            botaoMenu.setAttribute("aria-expanded", aberto ? "true" : "false");
        });
        menu.addEventListener("click", function (e) {
            if (e.target.tagName === "A" && menu.classList.contains("esta-aberto")) {
                menu.classList.remove("esta-aberto");
                botaoMenu.setAttribute("aria-expanded", "false");
            }
        });
    }

    /* ---------- 2 e 3. Acessibilidade ---------- */
    var MIN = 100, MAX = 150, PASSO = 12.5;
    var raiz = document.documentElement;

    function tamanhoAtual() { return parseFloat(raiz.style.fontSize) || 100; }

    function aplicarFonte(valor) {
        raiz.style.fontSize = valor + "%";
        try { localStorage.setItem("cc_fonte", valor); } catch (e) {}
    }

    function aplicarContraste(ligado) {
        document.body.classList.toggle("alto-contraste", ligado);
        var b = document.querySelector("[data-contraste]");
        if (b) b.setAttribute("aria-pressed", ligado ? "true" : "false");
        try { localStorage.setItem("cc_contraste", ligado ? "1" : "0"); } catch (e) {}
    }

    Array.prototype.forEach.call(document.querySelectorAll("[data-fonte]"), function (b) {
        b.addEventListener("click", function () {
            var acao = b.getAttribute("data-fonte"), atual = tamanhoAtual();
            if (acao === "aumentar") aplicarFonte(Math.min(MAX, atual + PASSO));
            if (acao === "diminuir") aplicarFonte(Math.max(MIN, atual - PASSO));
            if (acao === "normal")   aplicarFonte(100);
            anunciar("Texto em " + Math.round(tamanhoAtual()) + " por cento.");
        });
    });

    var botaoContraste = document.querySelector("[data-contraste]");
    if (botaoContraste) {
        botaoContraste.addEventListener("click", function () {
            var ligar = !document.body.classList.contains("alto-contraste");
            aplicarContraste(ligar);
            anunciar(ligar ? "Alto contraste ativado." : "Alto contraste desativado.");
        });
    }

    try {
        var f = localStorage.getItem("cc_fonte");
        if (f) aplicarFonte(parseFloat(f));
        if (localStorage.getItem("cc_contraste") === "1") aplicarContraste(true);
    } catch (e) {}

    /* Avisos para leitores de tela */
    var aviso = document.getElementById("aviso-acessibilidade");
    function anunciar(texto) { if (aviso) aviso.textContent = texto; }

    /* ---------- 4. Revelar ao rolar ---------- */
    var reveláveis = document.querySelectorAll(".revelar");
    if (semAnimacao || !("IntersectionObserver" in window)) {
        Array.prototype.forEach.call(reveláveis, function (el) { el.classList.add("esta-visivel"); });
    } else {
        var observador = new IntersectionObserver(function (entradas) {
            entradas.forEach(function (entrada) {
                if (entrada.isIntersecting) {
                    entrada.target.classList.add("esta-visivel");
                    observador.unobserve(entrada.target);
                }
            });
        }, { threshold: 0.12, rootMargin: "0px 0px -60px 0px" });
        Array.prototype.forEach.call(reveláveis, function (el) { observador.observe(el); });
    }


    /* ---------- 6. Carrossel da cartilha ---------- */
    var carrossel = document.querySelector("[data-carrossel]");
    if (carrossel) {
        var laminas   = carrossel.querySelectorAll("[data-lamina]");
        var atalhos   = carrossel.querySelectorAll("[data-atalho]");
        var btnAnt    = carrossel.querySelector("[data-anterior]");
        var btnProx   = carrossel.querySelector("[data-proximo]");
        var contador  = carrossel.querySelector("[data-contador]");
        var progresso = carrossel.querySelector("[data-progresso]");
        var anuncio   = carrossel.querySelector("[data-anuncio]");
        var palco     = carrossel.querySelector("[data-palco]");
        var atual     = 0;
        var total     = laminas.length;

        function mostrar(indice, avisar) {
            atual = Math.max(0, Math.min(total - 1, indice));
            var secao = laminas[atual].getAttribute("data-secao");

            for (var i = 0; i < total; i++) laminas[i].hidden = (i !== atual);

            Array.prototype.forEach.call(atalhos, function (a) {
                a.setAttribute("aria-current",
                    a.getAttribute("data-secao-btn") === secao ? "true" : "false");
            });

            contador.textContent = (atual + 1) + " de " + total;
            progresso.style.width = ((atual + 1) / total * 100) + "%";

            /* Um botão que desabilita com o foco dentro perde o foco e deixa
               quem navega por teclado sem posição. Passa o foco ao vizinho. */
            var focado = document.activeElement;
            btnAnt.disabled  = (atual === 0);
            btnProx.disabled = (atual === total - 1);
            if (focado === btnAnt && btnAnt.disabled)  btnProx.focus();
            if (focado === btnProx && btnProx.disabled) btnAnt.focus();

            if (avisar && anuncio) {
                var leg = laminas[atual].querySelector(".lamina__legenda");
                anuncio.textContent = "Parte " + (atual + 1) + " de " + total +
                    (leg ? ": " + leg.textContent : "") + ".";
            }
        }

        function irPara(indice) {
            mostrar(indice, true);
            /* Mantém o topo do carrossel à vista ao trocar de parte, sem
               arrastar a página quando o carrossel já está todo visível. */
            if (carrossel.getBoundingClientRect().top < 0) {
                carrossel.scrollIntoView({ behavior: semAnimacao ? "auto" : "smooth", block: "start" });
            }
        }

        btnAnt.addEventListener("click", function () { irPara(atual - 1); });
        btnProx.addEventListener("click", function () { irPara(atual + 1); });

        Array.prototype.forEach.call(atalhos, function (a) {
            a.addEventListener("click", function () {
                irPara(parseInt(a.getAttribute("data-atalho"), 10));
            });
        });

        carrossel.addEventListener("keydown", function (e) {
            if (e.target.closest("a")) return;          /* não atrapalha links */
            if (e.key === "ArrowLeft")  { e.preventDefault(); irPara(atual - 1); }
            if (e.key === "ArrowRight") { e.preventDefault(); irPara(atual + 1); }
        });

        /* ---------- Arrastar com o dedo ou com o mouse ----------
           Pointer Events atendem os dois com o mesmo código. A imagem
           acompanha o movimento para o gesto ter resposta visível. */
        var LIMIAR = 55;   /* o quanto arrastar para trocar de parte */
        var FOLGA  = 10;   /* antes disso não decidimos se o gesto é horizontal */
        var ar = { ativo: false, x0: 0, y0: 0, dx: 0, horizontal: null, moveu: false };

        function deslocar(px) {
            var l = laminas[atual];
            l.style.transition = "none";
            l.style.transform = px ? "translateX(" + px + "px)" : "";
        }

        function soltarVisual() {
            var l = laminas[atual];
            l.style.transition = semAnimacao ? "none" : "transform .25s ease";
            l.style.transform = "";
        }

        function comecar(x, y) {
            ar.ativo = true; ar.x0 = x; ar.y0 = y;
            ar.dx = 0; ar.horizontal = null; ar.moveu = false;
            /* A classe de arraste só entra quando o gesto se confirma
               horizontal. Entrando aqui, ela desligaria os eventos da
               lâmina já no clique simples, e o link da imagem pararia
               de abrir. */
        }

        function mover(x, y) {
            if (!ar.ativo) return false;
            var dx = x - ar.x0, dy = y - ar.y0;

            if (ar.horizontal === null) {
                if (Math.abs(dx) < FOLGA && Math.abs(dy) < FOLGA) return false;
                ar.horizontal = Math.abs(dx) > Math.abs(dy);
                if (!ar.horizontal) { ar.ativo = false; return false; }
                palco.classList.add("esta-arrastando");
            }

            ar.dx = dx;
            if (Math.abs(dx) > 4) ar.moveu = true;
            /* resistência nas pontas: não há para onde ir */
            var fim = (dx > 0 && atual === 0) || (dx < 0 && atual === total - 1);
            deslocar(fim ? dx / 4 : dx);
            return true;
        }

        function terminar() {
            if (!ar.ativo) return;
            ar.ativo = false;
            palco.classList.remove("esta-arrastando");
            var dx = ar.dx;
            soltarVisual();
            if (ar.horizontal && Math.abs(dx) >= LIMIAR) {
                irPara(dx < 0 ? atual + 1 : atual - 1);
            }
        }

        if (window.PointerEvent) {
            palco.addEventListener("pointerdown", function (e) {
                if (e.pointerType === "mouse" && e.button !== 0) return;
                comecar(e.clientX, e.clientY);
            });
            palco.addEventListener("pointermove", function (e) {
                if (mover(e.clientX, e.clientY) && e.cancelable) e.preventDefault();
            });
            ["pointerup", "pointercancel", "pointerleave"].forEach(function (ev) {
                palco.addEventListener(ev, terminar);
            });
        } else {
            /* navegadores antigos: só o dedo */
            palco.addEventListener("touchstart", function (e) {
                comecar(e.changedTouches[0].clientX, e.changedTouches[0].clientY);
            }, { passive: true });
            palco.addEventListener("touchmove", function (e) {
                mover(e.changedTouches[0].clientX, e.changedTouches[0].clientY);
            }, { passive: true });
            palco.addEventListener("touchend", terminar);
        }

        /* Arrastar sobre a imagem não pode abrir o link nem iniciar o
           arrasto nativo de imagem do navegador. */
        palco.addEventListener("dragstart", function (e) { e.preventDefault(); });
        palco.addEventListener("click", function (e) {
            if (ar.moveu) { e.preventDefault(); e.stopPropagation(); ar.moveu = false; }
        }, true);

        mostrar(0, false);
    }

    /* ---------- 5. Quiz "É golpe?" ---------- */
    var quiz = document.getElementById("quiz");
    if (!quiz) return;

    var CASOS = [
        {
            canal: "WhatsApp, número desconhecido",
            texto: "“Mãe, troquei de número. Preciso que você faça um Pix urgente pra mim, depois te explico.”",
            golpe: true,
            explicacao: "Golpe do parente falso. Antes de qualquer coisa, ligue para o número antigo da pessoa. Pressa somada a um número novo é o padrão dessa fraude."
        },
        {
            canal: "Notificação do próprio celular",
            texto: "“Atualização do sistema disponível. Correções de segurança e melhorias de desempenho.”",
            golpe: false,
            explicacao: "Isso é legítimo e importante. As atualizações corrigem falhas já conhecidas — adiar deixa a porta aberta. Instale pelas notificações do aparelho, nunca por link de mensagem."
        },
        {
            canal: "Ligação, diz ser do seu banco",
            texto: "“Identificamos uma compra suspeita. Para cancelar, me informe o código de seis dígitos que acabamos de enviar por SMS.”",
            golpe: true,
            explicacao: "Golpe. Esse código serve justamente para provar que é você. Banco nenhum pede — quem pede é golpista. Desligue e ligue para o número que está atrás do seu cartão."
        },
        {
            canal: "SMS com link encurtado",
            texto: "“Seu benefício está BLOQUEADO por falta de recadastramento. Regularize hoje pelo link para não perder o pagamento.”",
            golpe: true,
            explicacao: "Golpe. Recadastro de benefício não se faz por link de mensagem. Procure o CRAS ou o aplicativo oficial. A ameaça de perder o dinheiro existe para você agir com medo, sem conferir."
        },
        {
            canal: "Aplicativo do banco",
            texto: "“Para entrar, use sua senha e confirme com a biometria do aparelho.”",
            golpe: false,
            explicacao: "Isso é seguro e desejável. São duas formas de verificação: mesmo que alguém descubra sua senha, não entra sem a biometria. Ative essa proteção onde for possível."
        }
    ];

    var indice = 0, acertos = 0;
    var elCanal      = quiz.querySelector("[data-canal]");
    var elTexto      = quiz.querySelector("[data-texto]");
    var elContador   = quiz.querySelector("[data-contador]");
    var elProgresso  = quiz.querySelector("[data-progresso]");
    var elOpcoes     = quiz.querySelector("[data-opcoes]");
    var elResposta   = quiz.querySelector("[data-resposta]");
    var elVeredito   = quiz.querySelector("[data-veredito]");
    var elExplicacao = quiz.querySelector("[data-explicacao]");
    var elAcoes      = quiz.querySelector("[data-acoes]");
    var elSeguinte   = quiz.querySelector("[data-seguinte]");
    var elPlacar     = quiz.querySelector("[data-placar]");
    var terminou     = false;

    function mostrarCaso() {
        terminou = false;
        var caso = CASOS[indice];
        elCanal.textContent = caso.canal;
        elTexto.textContent = caso.texto;
        elContador.textContent = "Situação " + (indice + 1) + " de " + CASOS.length;
        elProgresso.style.width = ((indice) / CASOS.length * 100) + "%";
        elResposta.hidden = true;
        elResposta.classList.remove("quiz__resposta--certo", "quiz__resposta--errado");
        elAcoes.hidden = true;
        elOpcoes.hidden = false;
        Array.prototype.forEach.call(elOpcoes.querySelectorAll("button"), function (b) { b.disabled = false; });
    }

    function responder(disseGolpe) {
        var caso = CASOS[indice];
        var acertou = (disseGolpe === caso.golpe);
        if (acertou) acertos++;

        elResposta.classList.add(acertou ? "quiz__resposta--certo" : "quiz__resposta--errado");
        elVeredito.textContent = acertou ? "Isso mesmo." : "Quase.";
        elExplicacao.textContent = caso.explicacao;
        elPlacar.textContent = "Você acertou " + acertos + " de " + (indice + 1) + " até aqui.";
        elResposta.hidden = false;
        elOpcoes.hidden = true;
        elAcoes.hidden = false;
        elProgresso.style.width = ((indice + 1) / CASOS.length * 100) + "%";

        elSeguinte.textContent = (indice + 1 < CASOS.length) ? "Próxima situação" : "Ver resultado";
        elSeguinte.focus();
    }

    Array.prototype.forEach.call(elOpcoes.querySelectorAll("button"), function (b) {
        b.addEventListener("click", function () { responder(b.getAttribute("data-valor") === "golpe"); });
    });

    function encerrar() {
        terminou = true;
        elCanal.textContent = "Resultado";
        elTexto.textContent = "Você reconheceu " + acertos + " das " + CASOS.length +
            " situações. Nas oficinas presenciais a gente treina isso com calma, com o celular na mão.";
        elContador.textContent = "Concluído";
        elProgresso.style.width = "100%";
        elOpcoes.hidden = true;
        elResposta.hidden = true;
        elPlacar.textContent = "";
        elAcoes.hidden = false;
        elSeguinte.textContent = "Fazer o teste de novo";
        elSeguinte.focus();
    }

    elSeguinte.addEventListener("click", function () {
        if (terminou) {                 // recomeçar
            indice = 0;
            acertos = 0;
            mostrarCaso();
            elTexto.focus();
            return;
        }
        indice++;
        if (indice < CASOS.length) {
            mostrarCaso();
            elTexto.focus();
        } else {
            encerrar();
        }
    });

    mostrarCaso();
})();
