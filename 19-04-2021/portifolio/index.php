<!--O cadastro não é automatico-->
<!--Menuº1 FIXO: logar, cadastrar, contratar;-->
<!--Menuº2 Dinâmico: Pesquisas, projetos(imagens), atividades, indicações, leitura, video-aulas.-->

<!--se o usuario estiver logado, podera refazer ou fazer novas atividades. Criando assim um grafico para o analista de desempenho entro os logados.-->

<!--Na parte de indicações, sera mostrado os parceiros atuais.-->

<!--Pagina bem dinamica, sempre que o usuario acessa-la tera um conteudo diferente, slider, link.-->
<!--Adicionar opção de salvar conteudo para ler mais tarde para quem é cadastrado.-->
<!--Na pagina principal mostrar apenas alguns conteudos randomicamente como exemplares dos conteudos gerais presente no 2ºmenu.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"/>
    <title>Desire</title>
</head>
<body>
    <div id="topo">
        <div id="menu">
                <div class="formatacao">Login</div>
                <div class="formatacao">Cadastrar</div>
                <div class="formatacao">Contratar</div>
        </div>
        <!--<div id="conteudo1">-->
                    <div id="frases_de_impacto"><!--Slide-->
                        <div class="formatacao3">Seus atos valem mais que mil palavras.</div>
                    </div>
        <!--</div>-->
        <div id="logo_box">
            <div id="logo"><img src="imagens/logo_azix_tecnologia-removebg-preview.png"/></div>
        </div>
    </div>
    <div id="meio">
            <div id="menu2"><!--Menu Dinâmico, abre e fecha(usar animação de lentidao)-->
                <div class="formatacao2">Pesquisas</div>
                <div class="formatacao2">Projetos</div>
                <div class="formatacao2">Atividades</div>
                <div class="formatacao2">Indicações</div>
            </div>
        <div id="meio1">
            <div id="botao" onclick="mostrarMenu()"><img src="imagens/menu-removebg.png"/></div><!--Botao que abre o menu.-->
            <!--<div id="frases_de_efeito_mobile"><p>A vida é um jogo!</p></div>-->
            <div class="caixa_do_slideshow">

                <div class="meu_slide">
                    <q>A vida é um jogo!!!</q>
                    <p class="autor">Ollywer Dyego</p>
                </div>

                <div class="meu_slide">
                    <q>Seus atos valem mais que mil palavras.</q>
                    <p class="autor">Ollywer Dyego</p>
                </div>

                <!--Proximo/Anterior-->
                <div>
                    <div class="anterior" onclick="maisSlide(-1)">&#10094;</div>
                    <div class="proximo" onclick="maisSlide(1)">&#10095;</div>
                </div>

                <!--Indicadores-->
                <div class="caixa_dos_indicadores">
                    <div class="indicador" onclick="slideAtual(1)"></div>
                </div>
            </div>
        </div>

            <div id="caixa_de_textos"><!--Coloque informações relevantes, slide, link-->
                <div class="textos texto_um">
                        <div class="titulo titulo_um"></div>
                        <div class="Sub_titulo Sub_titulo_um"></div>
                        <div class="texto info_um"></div>
                        <div class="fonte fonte_um"></div>
                </div>
                <div class="textos texto_dois">
                        <div class="titulo titulo_dois"></div>
                        <div class="Sub_titulo Sub_titulo_dois"></div>
                        <div class="texto info_dois"></div>
                        <div class="fonte fonte_dois"></div>
                </div>
                <div class="textos texto_tres">
                        <div class="titulo titulo_tres"></div>
                        <div class="Sub_titulo Sub_titulo_tres"></div>
                        <div class="texto info_tres"></div>
                        <div class="fonte fonte_tres"></div>
                </div>
            </div>
            <!--Foto#1 - Desktop-->
            <!--Foto#2 - Smartphone-->
            <!--Celular mostrar apenas 1, random--><div id="projetos">
                <div class="projeto projeto_um"><!--Slide, link-->
                    <div class="imagem_um_um"></div>
                    <div class="imagem_um_dois"></div>
                    <div class="imagem_um_tres"></div>
                    <div class="imagem_um_quatro"></div>
                    <div class="imagem_um_cinco"></div>
                    <div class="imagem_um_seis"></div>
                </div>
                <div class="projeto projeto_dois"></div>
                    <div class="imagem_dois_um"></div>
                    <div class="imagem_dois_dois"></div>
                    <div class="imagem_dois_tres"></div>
                    <div class="imagem_dois_quatro"></div>
                    <div class="imagem_dois_cinco"></div>
                    <div class="imagem_dois_seis"></div>
                </div>
                <div class="projeto projeto_tres">
                    <div class="imagem_tres_um"></div>
                    <div class="imagem_tres_dois"></div>
                    <div class="imagem_tres_tres"></div>
                    <div class="imagem_tres_quatro"></div>
                    <div class="imagem_tres_cinco"></div>
                    <div class="imagem_tres_seis"></div>
                </div>
                <div class="projeto">
                    <div class="imagem_quatro_um"></div>
                    <div class="imagem_quatro_dois"></div>
                    <div class="imagem_quatro_tres"></div>
                    <div class="imagem_quatro_quatro"></div>
                    <div class="imagem_quatro_cinco"></div>
                    <div class="imagem_quatro_seis"></div>
                </div>
                <div class="projeto">
                    <div class="imagem_cinco_um"></div>
                    <div class="imagem_cinco_dois"></div>
                    <div class="imagem_cinco_tres"></div>
                    <div class="imagem_cinco_quatro"></div>
                    <div class="imagem_cinco_cinco"></div>
                    <div class="imagem_cinco_seis"></div>
                <div>
                <div class="projeto">
                    <div class="imagem_seis_um"></div>
                    <div class="imagem_seis_dois"></div>
                    <div class="imagem_seis_tres"></div>
                    <div class="imagem_seis_quatro"></div>
                    <div class="imagem_seis_cinco"></div>
                    <div class="imagem_seis_seis"></div>
                </div>
            </div>
    
        <div id="atividades">

            <!--Te envia para uma atividade aleatoria-->
            <div class="atividade"><button class="button button1">Atividade</button>
            </div>
            <!--Gera leituras e video aulas aleatorias.-->
            <!--<div class="atividade"><button class="button button1">Leitura</button>
            </div>
            <div class="atividade"><button class="button button1">Video-Aulas</button>
            </div>-->
        
        </div>

        <!--Te mostra botões/logos de outras empresas--><div id="indicados">

            <div class="indicado"><a href="#"><img src="imagens/logo_curso_em_video-removebg.png"/></a></div>
            <div class="indicado"><a href="#"><img src="imagens/logo_w3s-removebg.png"/></a></div>
            <div class="indicado"><a href="#"><img src="imagens/logo_stackoverflow-removebg.png"/></a></div> 

        </div>
        <!--So aparece na versão Desktop-->
        <!--<div id="chat"></div>-->

    </div>
    <div id="fim">
        <!--so aparece na versão desktop--><!--<div id="rodape1">
            <div id="conteudo2">
                <div id="links">
                    <div class="link"></div>
                    <div class="link"></div>
                    <div class="link"></div>
                    <div class="link"></div>
                    <div class="link"></div>
                </div>
            </div>
        </div>-->
        <div id="rodape2">
            <div id="conteudo3">
                <div class="contatos">
                    <div class="contato">Mensagem</div><!--Mensagem-->
                    <div class="contato">Github</div><!--Github-->
                    <div class="contato">Linkedin</div><!--Linkedin-->
                    <div class="contato">Email</div><!--Email-->
                </div>
            </div>
        </div>
        <div id="rodape3">
            <div id="conteudo4">
                <div id="caixa_da_qr_code">
                    <div class="qr_code">
                        QRcode
                    </div>
                </div>
            </div>
        </div>
        <!--Qr code do celular é para recomendar para um amigo podendo o compartilhar-->
        <!--Qr code aleatorio, estou com sorte, te envia para uma pagina de ensino aleatorio, a lista de redirecionamento sera selecionado pelo adm :v.-->
        <!--Caso o usuario esteja logado sera salvo o link e (data/hora) para onde o usuario foi redirecionado-->
        <!--Após isso o usuario sera deslogado.-->
        <!--Quando o usuario logar novamente, recebera um formulario para responder referente a pagina.-->
        <!--A primeira questão sera se o usuario leu ou não, caso não perguntar o pq.-->
        <div id="rodape_pc">
        ..
        </div>
    </div>
    <script src="javascript/esconde_ou_mostra_elementos.js"></script>
    <script src="javascript/menu.js"></script>
</body>
</html>
<!--Insignias para conclusão de tarefas dentro do site.-->
<!--Jogo de CleanCode para quem é cadastrado.(drag and drop)-->
<!--Na area de contratar, criador de layout, demonstrações de tecnologias com exemplo. -->