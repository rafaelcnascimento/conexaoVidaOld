<?php
session_start();

if ($_SESSION['logado'] != 1) {

    header('Location: loginadm.php?erropagina');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Conexão Vida</title>

        <link href="css/bootstrap.css" rel="stylesheet">
       

        <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        
    <!-- ESTILOS PARA ESTA PÁGINA -->
    <!-- Nesse caso, este estilo é apenas para inserir imagens -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!-- JAVASCRIPT E JQUERY -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


        <!-- Piwik -->
        <script type="text/javascript">
            var _paq = _paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function () {
                var u = "//kraft.ads.cnecsan.edu.br/piwik/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', '6']);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <!-- End Piwik Code -->

        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>



        <style>
            label.error {float: none; color: red; padding-left: .5em; vertical-align: top;}
            input.error { border-color: #F00; padding: 2px;}
            textarea.error { border-color: #F00; padding: 2px; }
            select.error {border-color: #F00; padding: 2px;}
        </style>

        <script type="text/javascript">

            $(document).ready(function () {
                $('#form').validate(
                        {

                            rules: {

                                gruposanguineo: {

                                    required: true

                                },

                                assunto: {

                                    required: true

                                },

                                mensagem: {

                                    required: true
                                }

                            },

                            messages: {

                                gruposanguineo: {

                                    required: "Este campo é obrigatório"
                                },

                                assunto: {

                                    required: "Este campo é obrigatório"
                                },

                                mensagem: {

                                    required: "Este campo é obrigatório"
                                }
                            }
                        }
                );
            });
        </script>

    </head>
    <body>

        <div class="container">
            <div class="row">

        <!-- INÍCIO DO MENU SUPERIOR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu" style="background-color: black;">
                    <i class="material-icons">menu</i>
                </button>
            </div>
            
            <nav id="links-menu" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""><img src="imagens/conexãovidamenu.png"></a></li>
                    <li><a href="index.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;" class="img-responsive">HOME</a></li>
                    <li><a href="sobre.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;" class="img-responsive">SOBRE</a></li>
                    <li><a href="cadastro.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;" class="img-responsive">CADASTRO</a></li>
                    <?php

                   
if (@@$_SESSION['logado'] == 1) {

?>

                    <li><a href="doadores.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;">DOADORES</a></li>
                    <li><a href="email.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;">E-MAIL</a></li>

<?php 
}
?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php

if (@@$_SESSION['logado'] == 1) {
    ?>
<li><a href="sair.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;"><span class="glyphicon glyphicon-log-in"></span> SAIR</a></li>
<?php

}

                    if (@@$_SESSION['logado'] != 1) {

                        ?>
                    <li><a href="loginadm.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;"><span class="glyphicon glyphicon-log-in"></span> ÁREA RESTRITA</a></li>
                    <?php
                }
                ?>
                </ul>
            </nav>
        </div>
    </nav>
<!-- FIM DO MENU SUPERIOR -->
</div>
</div>

<div style="padding-top: 108px;"></div>

<?php if (isset($_GET['sanguineo1'])) { ?>                    
            <div class="panel-body" id="sanguineo1" name="sanguineo1">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span> Selecione um tipo sanguÃ­neo!                          
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['assunto1'])) { ?>                    
            <div class="panel-body" id="assunto1" name="assunto1">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span>  Digite um assunto para o e-mail!                         
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['mensagem1'])) { ?>                    
            <div class="panel-body" id="mensagem1" name="mensagem1">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span>  Digite uma mensagem para o e-mail!                         
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['certo'])) { ?>                    
            <div class="panel-body" id="certo" name="certo">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span>  E-mail enviado com sucesso!                         
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['errado'])) { ?>                    
            <div class="panel-body" id="errado" name="errado">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span> Falha ao enviar o e-mail                         
                </div>
            </div>
        <?php } ?>


<div class="container">
    <div class="row">

<div style="text-align:center; margin: 0">
            <h1 style="color: #333333; text-align: center; font-family: 'Candal',sans-serif; font-size: 40px;font-weight: bold; font: 40px/18px 'Candal',sans-serif; padding-bottom: 10px;">Envio de E-mails</h1>
             <b style="color: black; font-size: 20px; font-family: Gafata, Arial, Helvetica, 'Liberation Sans', FreeSans, sans-serif;"><b style="color: red;">*</b> Campos Obrigatórios</b>
        </div>

<form class="form-horizontal" method="post" id="form" action="email_enviar.php">
                <fieldset>

        <div class="page-header"></div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Grupo Sanguíneo<b style="color: red; font-size: 20px;">*</b></label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                                    <select class="form-control" name="gruposanguineo" id="gruposanguineo">
                                        <option value="">Grupo Sanguíneo</option>
                                        <option value="O-">O-</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="A+">A+</option>
                                        <option value="B-">B-</option>
                                        <option value="B+">B+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="AB+">AB+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Assunto:<b style="color: red; font-size: 20px;">*</b></label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                                    <input onkeypress="valida_nome();" class="form-control" type="text" name="assunto" id="assunto" autofocus="" placeholder="Assunto E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Mensagem:<b style="color: red; font-size: 20px;">*</b></label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <textarea class="form-control" name="mensagem" id="mensagem" rows="7" cols="100"></textarea>
                                </div>
                            </div>
                        </div>             
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4" style="text-align: center;">
                                <button name="submit" type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>

</div>
</div>

<div style="position: relative; left: 0; bottom: 0; width: 100%; text-align: center; background-color: #282a2b; color: white; padding-top: 10px;">
            <p>Idealizado e alimentado pelo Programa de Extensão em Saúde Integrada</p>
            <div style="padding-top: 10px;"></div>
            <p>Desenvolvido pelos acadêmicos do curso de Análise e Desenvolvimento de Sistemas</p>
            <div style="padding-top: 10px;"></div>
            <p>Mantido pela Faculdade CNEC Santo Ângelo</p>
            <div style="padding-top: 10px;"></div>
            <p>Todos os direitos reservados ©</p>
        </div>

    </body>
</html>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $("#sanguineo1").hide();
        }, 5000);

        setTimeout(function () {
            $("#assunto1").hide();
        }, 5000);

        setTimeout(function () {
            $("#mensagem1").hide();
        }, 5000);

        setTimeout(function () {
            $("#certo").hide();
        }, 5000);

        setTimeout(function () {
            $("#errado").hide();
        }, 5000);
    });

</script>
