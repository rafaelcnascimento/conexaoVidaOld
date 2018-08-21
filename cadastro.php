<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Conexão Vida</title>

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

         <script src="js/jquery.js"></script>

        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>



        <style>
            label.error {float: none; color: red; padding-left: .5em; vertical-align: top;}
            input.error { border-color: #F00; padding: 2px;}
            select.error {border-color: #F00; padding: 2px;}
        </style>



   <script src="js/validacoescadastro.js"></script> 




    </head>
    <body>

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
                    <li><a href="#"><img src="imagens/conexãovidamenu.png"></a></li>
                    <li><a href="index.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;">HOME</a></li>
                    <li><a href="sobre.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;">SOBRE</a></li>
                    <li><a href="cadastro.php" style="color: #777; font-weight: bold; font-size: 13px; padding-top: 30px;">CADASTRO</a></li>

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

<div style="padding-top: 108px;"></div>

<div class="container">
            <div class="row">
 <div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="bs-example">
                <h1>Cadastro de Doadores</h1>
            </div>

            <div class="well">
                <form method="post" id="form" name="form" action="cadastro_incluir.php" class="bs-example form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-lg-9">
                                <span>Não se preocupe! Seus dados não serão exibidos e/ou divulgados.</span><br/>
                                <span class="colorRed" style="color: red">* Preenchimento Obrigat&oacute;rio</span>
                            </div>
                        </div>

                        <?php if (isset($_GET['sucesso'])) { ?>
                            <div class="panel-body" id="sucesso" name="sucesso">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Cadastro realizado com Sucesso!
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($_GET['erro'])) { ?>
                            <div class="panel-body" id="erro" name="erro">
                                <div class="alert alert-danger alert-dismissable" align="center">
                                    <!--  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Ocorreu um erro ao cadastrar, Verifique!
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (isset($_GET['nome1'])) { ?>
                            <div class="panel-body" id="nome1" name="nome1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Proibido números no nome!
                                </div>
                            </div>
                        <?php }
                        ?>


                        <?php if (isset($_GET['nome2'])) { ?>
                            <div class="panel-body" id="nome2" name="nome2">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Campo nome é obrigatório!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['nome3'])) { ?>
                            <div class="panel-body" id="nome2" name="nome2">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Campo nome deve conter no mínimo 3 letras!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['cpf1'])) { ?>
                            <div class="panel-body" id="cpf1" name="cpf1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> CPF inválido!
                                </div>
                            </div>
                        <?php }
                        ?>


                        <?php if (isset($_GET['data1'])) { ?>
                            <div class="panel-body" id="data1" name="data1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Data inválida!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['data2'])) { ?>
                            <div class="panel-body" id="data2" name="data2">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Proibido cadastro de menores de idade!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['data3'])) { ?>
                            <div class="panel-body" id="data3" name="data3">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Proibido cadastro de pessoas com mais de 65 anos!
                                </div>
                            </div>
                        <?php }
                        ?>
                        
                        <?php if (isset($_GET['estado1'])) { ?>
                            <div class="panel-body" id="estado1" name="estado1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Selecione um estado!
                                </div>
                            </div>
                        <?php }
                        ?>
                        
                        <?php if (isset($_GET['cidade1'])) { ?>
                            <div class="panel-body" id="cidade1" name="cidade1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Selecione uma cidade!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['gruposanguineo1'])) { ?>
                            <div class="panel-body" id="gruposanguineo1" name="gruposanguineo1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Selecione seu tipo sanguíneo!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['endereco1'])) { ?>
                            <div class="panel-body" id="endereco1" name="endereco1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Campo endereço é obrigatório!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['genero1'])) { ?>
                            <div class="panel-body" id="genero1" name="genero1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Selecione um gênero!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['telefone11'])) { ?>
                            <div class="panel-body" id="telefone11" name="telefone11">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> não é permitido letras no telefone!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['telefone12'])) { ?>
                            <div class="panel-body" id="telefone12" name="telefone12">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Telefone inválido!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['telefone13'])) { ?>
                            <div class="panel-body" id="telefone13" name="telefone13">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Campo telefone é obrigatório!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['email1'])) { ?>
                            <div class="panel-body" id="email1" name="email1">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> E-mail inválido!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['email2'])) { ?>
                            <div class="panel-body" id="email2" name="email2">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> Campo e-mail é obrigatório!
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php if (isset($_GET['cadastro'])) { ?>
                            <div class="panel-body" id="cadastro" name="cadastro">
                                <div class="alert alert-success alert-dismissable" align="center">
                                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                    <span class="fa fa-check"></span> está pessoa já possui cadastro
                                </div>
                            </div>
                        <?php }
                        ?>


                        <input type="hidden" id="action" name="action" value="salvar" />
                        <div class="form-group">
                            <label for="nome" class="col-lg-2 control-label">Nome<span style="color: red;">*</span></label>
                            <div class="col-lg-8">
                                <input onkeypress="valida_nome();" class="form-control" id="nome" name="nome" placeholder="Nome" type="text" maxlength="250" autofocus="" />
                            </div>
                        </div>
                        
                        <input type="hidden" id="action" name="action" value="salvar" />
                        <div class="form-group">
                            <label for="cpf" class="col-lg-2 control-label">CPF<span style="color: red;">*</span></label>
                            <div class="col-lg-8">
                                <input onkeypress="valida_cpf();" class="form-control" id="cpf" name="cpf" placeholder="12345678910" type="text"  value="" maxlength="11" autofocus="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dia" class="col-lg-2 control-label">Nascimento<span style="color: red;">*</span></label>
                            <div class="col-lg-2">
                                <select id="dia" name="dia" class="form-control">
                                    <option value="">00</option>
                                    <option value="01"  >01</option>
                                    <option value="02"  >02</option>
                                    <option value="03"  >03</option>
                                    <option value="04"  >04</option>
                                    <option value="05"  >05</option>
                                    <option value="06"  >06</option>
                                    <option value="07"  >07</option>
                                    <option value="08"  >08</option>
                                    <option value="09"  >09</option>
                                    <option value="10"  >10</option>
                                    <option value="11"  >11</option>
                                    <option value="12"  >12</option>
                                    <option value="13"  >13</option>
                                    <option value="14"  >14</option>
                                    <option value="15"  >15</option>
                                    <option value="16"  >16</option>
                                    <option value="17"  >17</option>
                                    <option value="18"  >18</option>
                                    <option value="19"  >19</option>
                                    <option value="20"  >20</option>
                                    <option value="21"  >21</option>
                                    <option value="22"  >22</option>
                                    <option value="23"  >23</option>
                                    <option value="24"  >24</option>
                                    <option value="25"  >25</option>
                                    <option value="26"  >26</option>
                                    <option value="27"  >27</option>
                                    <option value="28"  >28</option>
                                    <option value="29"  >29</option>
                                    <option value="30"  >30</option>
                                    <option value="31"  >31</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <select  id="mes" name="mes" class="form-control">
                                    <option value="">00</option>
                                    <option value="01"  >01</option>
                                    <option value="02"  >02</option>
                                    <option value="03"  >03</option>
                                    <option value="04"  >04</option>
                                    <option value="05"  >05</option>
                                    <option value="06"  >06</option>
                                    <option value="07"  >07</option>
                                    <option value="08"  >08</option>
                                    <option value="09"  >09</option>
                                    <option value="10"  >10</option>
                                    <option value="11"  >11</option>
                                    <option value="12"  >12</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <select  id="ano" name="ano" class="form-control">
                                    <option value="">0000</option>
                                    <option value="2000"  >2000</option>
                                    <option value="1999"  >1999</option>
                                    <option value="1998"  >1998</option>
                                    <option value="1997"  >1997</option>
                                    <option value="1996"  >1996</option>
                                    <option value="1995"  >1995</option>
                                    <option value="1994"  >1994</option>
                                    <option value="1993"  >1993</option>
                                    <option value="1992"  >1992</option>
                                    <option value="1991"  >1991</option>
                                    <option value="1990"  >1990</option>
                                    <option value="1989"  >1989</option>
                                    <option value="1988"  >1988</option>
                                    <option value="1987"  >1987</option>
                                    <option value="1986"  >1986</option>
                                    <option value="1985"  >1985</option>
                                    <option value="1984"  >1984</option>
                                    <option value="1983"  >1983</option>
                                    <option value="1982"  >1982</option>
                                    <option value="1981"  >1981</option>
                                    <option value="1980"  >1980</option>
                                    <option value="1979"  >1979</option>
                                    <option value="1978"  >1978</option>
                                    <option value="1977"  >1977</option>
                                    <option value="1976"  >1976</option>
                                    <option value="1975"  >1975</option>
                                    <option value="1974"  >1974</option>
                                    <option value="1973"  >1973</option>
                                    <option value="1972"  >1972</option>
                                    <option value="1971"  >1971</option>
                                    <option value="1970"  >1970</option>
                                    <option value="1969"  >1969</option>
                                    <option value="1968"  >1968</option>
                                    <option value="1967"  >1967</option>
                                    <option value="1966"  >1966</option>
                                    <option value="1965"  >1965</option>
                                    <option value="1964"  >1964</option>
                                    <option value="1963"  >1963</option>
                                    <option value="1962"  >1962</option>
                                    <option value="1961"  >1961</option>
                                    <option value="1960"  >1960</option>
                                    <option value="1959"  >1959</option>
                                    <option value="1958"  >1958</option>
                                    <option value="1957"  >1957</option>
                                    <option value="1956"  >1956</option>
                                    <option value="1955"  >1955</option>
                                    <option value="1954"  >1954</option>
                                    <option value="1953"  >1953</option>
                                    <option value="1952"  >1952</option>
                                    <option value="1951"  >1951</option>
                                </select>
                            </div>
                        </div>


                        <?php

                        require_once './banco.php';

                        ?>


                        <div class="form-group">
                            <label for="estado" class="col-lg-2 control-label">
                                Estado<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-3">
                                <select id="estado" name="estado" class="form-control">
                                    <option value=""><span>-- Selecione --</span></option>


<?php 

require_once './banco.php';

$resultado = $pdo->query("SELECT * FROM estados ORDER BY nome ASC")->fetchAll();

foreach ($resultado as $estado) {
    
echo '<option value="'.$estado['id'].'">'.$estado['nome'].'</option>';

}

?>



                                </select>                           
                            </div>

                            <label for="cidade" class="col-lg-2 control-label">
                                Cidade<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-3">
                        
                            <select id="cidade" name="cidade" class="form-control">
                                
<option value=""><span>-- Selecione --</span></option>

                            </select>
                                     
                            </div>
                        </div>



<script type="text/javascript">
    $("#estado").on("change", function() {
        var idestado = $("#estado").val();
        
        $.ajax({
            url: 'pega_cidades.php',
            type: 'POST',
            data:{id:idestado},
            beforeSend: function() {
                $("#cidade").css({'display':'block'});
                $("#cidade").html("Carregando...");
            },
            success: function(data) {
                $("#cidade").css({'display':'block'});
                $("#cidade").html(data);
            },
            error: function(data) {
                $("#cidade").css({'display':'block'});
                $("#cidade").html("Ocorreu um erro!");
            }
        });
    });
</script>










                        <div class="form-group">
                            <label for="endereco" class="col-lg-2 control-label">Endereço<span style="color: red;">*</span></label>
                            <div class="col-lg-8">
                                <input class="form-control" id="endereco" name="endereco" placeholder="Endereço" type="text"  value="" maxlength="100" autofocus="" />
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-lg-2 control-label">
                                Gênero<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-4">
                                <select class="form-control" id="genero" name="genero">
                                <option value="">-- Selecione --</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tiposanguineo" class="col-lg-2 control-label">
                                Tipo Sangu&iacute;neo<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-8">
                                <select class="form-control" id="tiposanguineo" name="tiposanguineo">
                                    <option value="">-- Selecione --</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="emailprincipal" class="col-lg-2 control-label">
                                E-mail Principal<span style="color: red;">*</span>
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="emailprincipal" id="emailprincipal" name="emailprincipal" size="50" value="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="emailalternativo" class="col-lg-2 control-label">
                                E-mail Alternativo
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="emailalternativo" id="emailAlternativo" name="emailalternativo" size="50" value="" />
                            </div>
                        </div>
                        
                        <input type="hidden" id="action" name="action" value="salvar" />
                        <div class="form-group">
                            <label for="numerowhatsapp" class="col-lg-2 control-label">Número de WhatsApp<span style="color: red;">*</span></label>
                            <div class="col-lg-8">
                                <input onkeypress="valida_telefone();" class="form-control" id="numerowhatsapp" name="numerowhatsapp" placeholder="55999999999" type="text"  value="" maxlength="15" autofocus="" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="outrocontato" class="col-lg-2 control-label">Outro contato</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="outrocontato" name="outrocontato" placeholder="55999999999" type="text"  value="" maxlength="15" autofocus="" />
                            </div>
                        </div>
                    <br/>
                    <fieldset>
                        <legend>Última Doação</legend>
                        <div class="form-group">
                            <label for="texto" class="col-lg-10 control-label">
                                <span class="colorRed">A data e o local da última doação são opicionais. Podem ser informados depois.</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="doacao" class="col-lg-2 control-label">
                                Data da última doação
                            </label>
                            <div class="col-lg-8">
                                <input type="date" class="form-control" placeholder="Data da última doação" id="datadoacao" name="datadoacao" size="12" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="localDoacao" class="col-lg-2 control-label">
                                Local da última doação
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Local da última doação" id="localdoacao" name="localdoacao" size="40" value="" />
                            </div>
                        </div>
                    </fieldset>
                    <br/><br/>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <button type="submit" name="submit" id="submit" class="btn btn-danger">Cadastrar</button> 
                        </div>
                    </div>
                </form>
            </div>
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

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $("#sucesso").hide();
        }, 5000);

        setTimeout(function () {
            $("#erro").hide();
        }, 5000);

        setTimeout(function () {
            $("#nome1").hide();
        }, 5000);

        setTimeout(function () {
            $("#nome2").hide();
        }, 5000);

        setTimeout(function () {
            $("#nome3").hide();
        }, 5000);

        setTimeout(function () {
            $("#cpf1").hide();
        }, 5000);

        setTimeout(function () {
            $("#data1").hide();
        }, 5000);

        setTimeout(function () {
            $("#data2").hide();
        }, 5000);

        setTimeout(function () {
            $("#data3").hide();
        }, 5000);

        setTimeout(function () {
            $("#estado1").hide();
        }, 5000);

        setTimeout(function () {
            $("#gruposanguineo1").hide();
        }, 5000);

        setTimeout(function () {
            $("#endereco1").hide();
        }, 5000);

        setTimeout(function () {
            $("#genero1").hide();
        }, 5000);

        setTimeout(function () {
            $("#telefone11").hide();
        }, 5000);

        setTimeout(function () {
            $("#telefone12").hide();
        }, 5000);

        setTimeout(function () {
            $("#telefone13").hide();
        }, 5000);

        setTimeout(function () {
            $("#email1").hide();
        }, 5000);

        setTimeout(function () {
            $("#email2").hide();
        }, 5000);

        setTimeout(function () {
            $("#cadastro").hide();
        }, 5000);
    });

</script>
