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

        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>



        <style>
            label.error {float: none; color: red; padding-left: .5em; vertical-align: top;}
            input.error { border-color: #F00; padding: 2px;}
            select.error {border-color: #F00; padding: 2px;}
        </style>

        <script type="text/javascript">

            $(document).ready(function () {
                $('#form').validate(
                        {

                            rules: {

                                usuario: {

                                    required: true

                                },

                                senha: {

                                    required: true

                                }

                            },

                            messages: {

                                usuario: {

                                    required: "Este campo é obrigatório"
                                },

                                senha: {

                                    required: "Este campo é obrigatório"
                                }
                            }
                        }
                );
            });
        </script>


    </head>
    <body style="width:100%">

        <?php if (isset($_GET['erropagina'])) { ?>                    
            <div class="panel-body" id="erropagina" name="erropagina">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span> Efetue login para poder acessar esta página!                           
                </div>
            </div>
        <?php } ?>  

        <?php if (isset($_GET['errologin'])) { ?>                    
            <div class="panel-body" id="errologin" name="errologin">
                <div class="alert alert-success alert-dismissable" align="center">
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <span class="fa fa-check"></span> Dados Incorretos!                           
                </div>
            </div>
        <?php } ?>
           

 <div class="container">
            <div class="row">
                <div style="padding-top: 100px;"></div>
                <div class="col-md-4 col-md-offset-4">
                                     <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <img src="imagens/conexãovida.png" width="50%" style="display: block; margin-left: auto; margin-right: auto;">
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="login_enviar.php" name="form" id="form">
                                <fieldset>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input class="form-control" type="text" placeholder="Usuário" name="usuario" type="usuario" autocomplete="off" autofocus>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input class="form-control" type="password" placeholder="Senha" id="senha" name="senha" autocomplete="off" value="">
                                    </div>
                                    <br>
                                    <div style="text-align:center; margin: 0">
                                        <div class="form-group">
                                            <button name="submit" type="submit" class="btn btn-primary btn-lg">Login</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 



    </body>
</html>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $("#erropagina").hide();
        }, 5000);

        setTimeout(function () {
            $("#errologin").hide();
        }, 5000);
    });

</script>
