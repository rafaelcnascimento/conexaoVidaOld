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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <script src="js/jquery.min.js"></script>

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

      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('#listar-usuario').DataTable({            
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "proc_pesq_user.php",
                    "type": "POST"
                }
            });
        } );
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



<div class="container">
    <div class="row">

        <div>
            <h1 style="color: #333333; text-align: center; font-family: 'Candal',sans-serif; font-size: 40px;font-weight: bold; font: 40px/18px 'Candal',sans-serif; padding-bottom: 30px;">Doadores de Sangue</h1>
        </div>

<table id="listar-usuario" class="display" style="width: 100%">

    <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Nascimento</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Endereço</th>
                <th>Gênero</th>
                <th>Tipo Sanguíneo</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
    </thead>
    
</table>














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
