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

<div class="container">
    <div class="row">

 <div class="col-sm-6 col-sm-offset-3">
        <h2 style="padding-bottom: 30px; font-weight: bold; text-align: center; font-size: 40px;">Conexão Vida</h2>
        <p style="font-size: 21px; text-align: justify; line-height: 26px; font-weight: 400;">
            O Conexão Vida foi idealizado pelo curso de Biomedicina e desenvolvido pelo curso de Análise de Desenvolvimento de Sistemas da Faculdade CNEC Santo Ângelo, com objetivo de facilitar o processo de cadastramento e controle de doadores. A equipe de trabalho foi constituída de alunos e professores da instituição, sendo estes:
          </p>
 </div>

 <div style="padding-top: 70px;"></div>

 <div class="col-sm-6 col-sm-offset-3">                
    <img src="imagens/bruna.jpg" style="width: 100px; float: left; border-radius: 50px;">
        <div class="col-sm-0 col-sm-offset-1">
            <h1 class="col-sm-0 col-sm-offset-2" style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Bruna Comparsi</h1>
                <p class="col-sm-0 col-sm-offset-2">Professor(a) nos cursos de: Biomedicina, Fisioterapia e Odontologia</p>
                <p class="col-sm-0 col-sm-offset-2">Contato: brunacomparsi@gmail.com</p>
        </div>
 </div>

 <div class="col-sm-6 col-sm-offset-3">                
    <img src="imagens/felipe.jpg" style="width: 100px; float: left; border-radius: 50px;">
        <div class="col-sm-0 col-sm-offset-1">
            <h1 class="col-sm-0 col-sm-offset-2" style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Felipe Ghisleni Freitas</h1>
                <p style="text-align: justify;" class="col-sm-0 col-sm-offset-2">Coordenador e Professor dos Cursos de: Administração de Empresas, Ciências Contábeis e Superior de Tecnologia em Análise e Desenvolvimento de Sistemas</p>     
                <p style="text-align: justify;" class="col-sm-0 col-sm-offset-2">Contato: felipeghisleni@gmail.com</p>
        </div>
 </div>

 <div class="col-sm-6 col-sm-offset-3">                
    <img src="imagens/carolina.jpg" style="width: 100px; float: left; border-radius: 50px;">
        <div class="col-sm-0 col-sm-offset-1">
            <h1 class="col-sm-0 col-sm-offset-2" style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Caroline Dornelles</h1>
                <p style="text-align: justify;" class="col-sm-0 col-sm-offset-2">Acadêmica do curso de Biomedicina</p>
                <p style="text-align: justify;" class="col-sm-0 col-sm-offset-2">Contato: carolinedornelles5@gmail.com</p>        
        </div>
 </div>

 <div class="col-sm-6 col-sm-offset-3">                
    <img src="imagens/marcelo.jpg" style="width: 100px; float: left; border-radius: 50px;">
        <div class="col-sm-0 col-sm-offset-1">
            <h1 class="col-sm-0 col-sm-offset-2" style="color: #333333; font: 600 20px/35px 'Candal',sans-serif;">Marcelo Abreu da Silva</h1>
                <p style="text-align: justify;" class="col-sm-0 col-sm-offset-2">Acadêmico do curso de Análise e Desenvolvimento de Sistemas</p>
                <p style="text-align: justify;" class="col-sm-0 col-sm-offset-2">Contato: marceloabreu09@hotmail.com.br</p>        
        </div>
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
