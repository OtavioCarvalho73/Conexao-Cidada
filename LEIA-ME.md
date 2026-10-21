# Conexão Cidadã — Segurança e Inclusão Digital

Site estático. Não precisa de PHP nem de banco de dados: basta abrir o
`index.html` no navegador ou subir os arquivos em qualquer hospedagem.

## Arquivos

    index.html        A cartilha — página à parte, fora do site principal
    projeto.html      Primeira página do site: o projeto, cronograma, ODS
    informacoes.html  Dicas, quiz "É golpe?" e perguntas frequentes
    senha.html        Teste de senha forte, ao vivo
    midias.html       Fotos e números da palestra — em apuração
    sobrenos.html     A equipe e a história do projeto
    style.css       Toda a aparência
    script.js       Menu, acessibilidade, animações e quiz
    img/            Logo, favicons e fotos

## Publicar no GitHub Pages

Suba **o conteúdo desta pasta na raiz** do repositório. Em Settings →
Pages, mantenha "Deploy from a branch" com a branch `main` e a pasta
`/ (root)`. Em um ou dois minutos o site sobe.

O servidor do GitHub roda Linux e diferencia maiúsculas de minúsculas.
Se uma foto não aparecer, confira o nome do arquivo. Esperados em `img/`:

    ifsp-logo.png        favicon.ico          favicon.png
    apple-touch-icon.png imagem-grupo.jpeg
    kaique-fernando.jpg  rhayssa-ramos.jpg    miguel-arcanjo.jpg
    miguel-ramalho.jpg   pedro-mendes.jpg     otavio-carvalho.jpg
    kauan-lourenco.jpg

## Onde mexer

- **Texto e seções**: direto no HTML da página correspondente.
- **Cores**: seções 01 e 02 do `style.css`. A seção 02 define "papéis"
  (fundo, texto, destaque). Mude ali e o site inteiro acompanha,
  inclusive o modo de alto contraste.
- **Perguntas do quiz**: array `CASOS`, no início do `script.js`.
  Cada item tem canal, texto, `golpe: true/false` e explicação.
  Mantenha a mistura entre golpes e situações seguras — se tudo for
  golpe, a pessoa aprende a responder no automático, não a observar.

## A cartilha é uma página à parte

`index.html` não faz parte do site principal: não tem o menu, só mostra a
cartilha e leva a `projeto.html` por dois caminhos — o botão do topo e a
chamada do fim. O site principal começa em `projeto.html`, e o acesso de
volta à cartilha fica na lista "Navegue" do rodapé.

Quem abrir o endereço raiz do site cai na cartilha. Se um dia quiserem que
a entrada seja o projeto, basta trocar os dois arquivos de nome.

## Como as 20 partes foram geradas

O PDF da cartilha é um trifold: duas páginas de três colunas. Primeiro cada
página foi cortada nas três colunas (seis painéis, na ordem de leitura);
depois cada painel foi cortado na horizontal, resultando em 20 partes em
formato paisagem, que é o que cabe bem numa tela.

Os cortes horizontais caem sempre entre seções — nunca entre um golpe e o
seu "Como se proteger". Eles não são automáticos: estão escritos um a um,
em pixels, e precisam ser refeitos à mão se a arte da cartilha mudar.

Os arquivos são `img/cartilha/cartilha-01.jpg` a `cartilha-20.jpg`, e o PDF
completo fica em `cartilha/Cartilha-Conexao-Cidada.pdf`.

Só a primeira imagem carrega de imediato; as outras 19 carregam conforme a
pessoa avança (`loading="lazy"`). É o que mantém a página leve para quem
abre com dados móveis, apesar de o conjunto somar 1,8 MB.

## Como se navega no carrossel

Setas "Anterior"/"Próxima", os seis atalhos de seção, as setas ← → do
teclado e **arrastar com o dedo ou com o mouse**. O arraste usa Pointer
Events, então dedo e mouse passam pelo mesmo código.

Dois detalhes que parecem bobos mas quebram se forem mexidos: a classe
`esta-arrastando` só entra depois que o gesto se confirma horizontal (se
entrar antes, ela desliga os eventos da lâmina e o clique na imagem para
de abrir o tamanho real), e um arraste que passou de 4px bloqueia o clique
seguinte, para o gesto não abrir a imagem sem querer.

Não há passagem automática. Conteúdo de leitura que anda sozinho atrapalha
justamente quem lê devagar, que é o público do projeto.

## A palestra de 21/10/2026

A atividade foi realizada em **21 de outubro de 2026** e reuniu **97 pessoas**,
contra uma meta de 60. Esse número já está no site em quatro lugares:
`projeto.html` (abertura e indicadores), `informacoes.html` (duas frentes e
números) e `midias.html` (abertura e etapas).

Os outros dois indicadores — evolução entre os questionários e avaliação
positiva, ambos com meta de 80% — aparecem como **"em apuração"**. Quando a
equipe terminar a conferência, troque esse texto pelo número real em
`projeto.html`. Não publique estimativa: o site inteiro ensina a desconfiar
de número sem origem.

As fotos e os cortes da apresentação entram em `midias.html`, no lugar dos
três cartões de contorno tracejado.

## Ao atualizar o site

`style.css` e `script.js` são compartilhados por todas as páginas. Uma página
nova quase sempre vem acompanhada de uma versão nova desses dois — se subir só
o HTML, a página aparece sem estilo e sem funcionar.

Os links trazem `?v=3` no fim (`style.css?v=3`). Isso existe porque o navegador
guarda o CSS e o JS em cache e continua servindo a cópia velha depois de uma
atualização. **Sempre que mudar esses dois arquivos, suba o número em todas as
páginas** — de `?v=3` para `?v=4` — e todo mundo recebe a versão nova na hora.

## O teste de senha

`senha.html` tem a ferramenta que foi usada na oficina: a pessoa digita e vê
na hora quais requisitos a senha atende e quanto tempo levaria para um
computador adivinhar.

A nota de força vem do **tempo para adivinhar**, não da contagem de
requisitos. Se fosse pela contagem, `S3nh@123` empataria com três palavras
longas — o contrário do que a cartilha ensina. Os requisitos, a lista de
senhas conhecidas e os exemplos ficam no início do bloco 7 do `script.js`.

Existe também uma cópia independente em `dinamica-senha/index.html`: é a
versão de telão, um arquivo só, que abre sem internet e cabe em 720p sem
rolagem. Ela é uma cópia congelada — se mudar os requisitos, mude nos dois
lugares, ou descarte a versão de telão se não for mais usar.

## O texto da cartilha

Abaixo do carrossel existe a seção "A cartilha em texto", com todo o
conteúdo escrito em HTML. Ela não é enfeite: leitor de tela não lê texto
dentro de imagem, e é ela que permite aumentar a letra pelos botões do
topo. Se a cartilha mudar, atualize as imagens **e** esse texto — eles são
independentes.

## A página de mídias

`midias.html` está marcada como "em desenvolvimento" porque a palestra só
acontece em 24/10/2026. Ela já existe para que o endereço impresso no
panfleto continue válido depois do evento. Quando houver material, troque
os três cartões tracejados pela galeria e pelos números reais.

## Acessibilidade

Texto base de 18px, botões de 48px ou mais, foco visível no teclado,
atalho "pular para o conteúdo", controle de tamanho da letra em três
níveis, modo de alto contraste (preto e amarelo) e respeito à
preferência do sistema por menos animação. As escolhas de leitura ficam
salvas no navegador da pessoa.
