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

        <style>

            body{
                background: url("imagens/bg-banner.jpg") no-repeat center center fixed;
                background-size: cover;
                -webkit-background-size: cover; /* SAFARI / CHROME */
                -moz-background-size: cover; /* FIREFOX */
                -ms-background-size: cover; /* IE */
                -o-background-size: cover; /* OPERA */
            }

        </style>

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
session_start();

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

<?php if (isset($_GET['sair'])) { ?>                    
            <div class="panel-body" id="sair" name="sair">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span> Logout efetuado com sucesso!                           
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['login'])) { ?>                    
            <div class="panel-body" id="login" name="login">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span> Login efetuado com sucesso!                           
                </div>
            </div>
        <?php } ?>

<!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="imagens/Cnec.png" alt="Faculdade CNEC Santo Ângelo" width="1000px;" style="display: block; margin-left: auto; margin-right: auto;">
                </div>
                <div class="item">
                    <img class="second-slide" src="imagens/conexãovida.png" alt="Logo Conexão Vida" width="338px;" style="display: block; margin-left: auto; margin-right: auto;">
                </div>
                <div class="item">
                     <img class="third-slide" src="imagens/ADS.png" alt="Logo ADS" width="385px;" style="display: block; margin-left: auto; margin-right: auto;">
                </div>
                <div class="item">
                     <img class="third-slide" src="imagens/Biomedicina.png" alt="Logo biomedicina" width="278px;" style="display: block; margin-left: auto; margin-right: auto;">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <script src="js/jquery.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">

<div>
    <h1 style="padding-top: 30px; color: #333333; text-align: center; font: 600 40px/18px 'Candal',sans-serif;padding-bottom: 10px;">Doação a um Clique!</h1>
    <p style="    padding-top: 30px; color: #333333;text-align: center;  font: 600 40px/18px 'Candal',sans-serif;padding-bottom: 10px;">"Esta conexão precisa de você. Doe sangue!"</p>
</div>  
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
            $("#sair").hide();
        }, 5000);

        setTimeout(function () {
            $("#login").hide();
        }, 5000);
    });

</script>
