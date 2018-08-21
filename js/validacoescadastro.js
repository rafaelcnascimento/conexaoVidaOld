            $(document).ready(function () {
                $('#form').validate(
                        {

                            rules: {

                                nome: {

                                    required: true,
                                    minlength: 3
                                },

                                cpf: {

                                    required: true
                                },

                                dia: {

                                    required: true
                                },

                                mes: {

                                    required: true
                                },

                                ano: {

                                    required: true
                                },

                                estado: {

                                    required: true
                                },

                                cidade: {

                                    required: true
                                },

                                endereco: {

                                    required: true
                                },

                                genero: {

                                    required: true
                                },

                                tiposanguineo: {

                                    required: true
                                },

                                emailprincipal: {

                                    required: true
                                },

                                numerowhatsapp: {

                                    required: true
                                }

                            },

                            messages: {

                                nome: {

                                    required: "Este campo é obrigatório",
                                    minlength: "Mínimo de três letras"
                                },

                                cpf: {
                                    required: "Este campo é obrigatório"
                                },

                                dia: {
                                    required: "Este campo é obrigatório"
                                },

                                mes: {
                                    required: "Este campo é obrigatório"
                                },

                                ano: {
                                    required: "Este campo é obrigatório"
                                },

                                estado: {

                                    required: "Este campo é obrigatório"
                                },

                                cidade: {

                                    required: "Este campo é obrigatório"
                                },

                                endereco: {

                                    required: "Este campo é obrigatório"
                                },

                                genero: {

                                    required: "Este campo é obrigatório"
                                },

                                tiposanguineo: {

                                    required: "Este campo é obrigatório"
                                },

                                emailprincipal: {

                                    required: "Este campo é obrigatório"
                                },

                                numerowhatsapp: {

                                    required: "Este campo é obrigatório"
                                }
                            }

                        }
                );
            });

function valida_nome() {
        var filter_nome = /[^0-9]/;
        if (filter_nome.test(document.getElementById("nome").value)) {
          //  document.getElementById("cpf").value = '';
          //  document.getElementById("cpf").placeholder = "Nome inválido";
          //  document.getElementById("cpf").style.borderColor = "#ff0000";
            document.getElementById("nome").style.outline = "#ff0000";
         //   document.getElementById("cpf").focus();
            document.getElementById("nome").onkeydown = function keydown_nome() {
                document.getElementById("nome").placeholder = "";
                document.getElementById("nome").style.borderColor = "#999999";
                document.getElementById("nome").style.outline = null;
            };
            return false;
        } else {
            document.getElementById("nome").value = '';
            document.getElementById("nome").placeholder = "Nome Válido";
        }
        return true;
    }


    function valida_cpf() {
        var filter_nome = /[^0-9]/;
        if (!filter_nome.test(document.getElementById("cpf").value)) {
          //  document.getElementById("cpf").value = '';
          //  document.getElementById("cpf").placeholder = "Nome inválido";
          //  document.getElementById("cpf").style.borderColor = "#ff0000";
            document.getElementById("cpf").style.outline = "#ff0000";
         //   document.getElementById("cpf").focus();
            document.getElementById("cpf").onkeydown = function keydown_nome() {
                document.getElementById("cpf").placeholder = "";
                document.getElementById("cpf").style.borderColor = "#999999";
                document.getElementById("cpf").style.outline = null;
            };
            return false;
        } else {
            document.getElementById("cpf").value = '';
            document.getElementById("cpf").placeholder = "Nome Válido";
        }
        return true;
    }

/*    function valida_email() {
        var filter_nome = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        if (!filter_nome.test(document.getElementById("emailprincipal").value)) {
          //  document.getElementById("cpf").value = '';
          //  document.getElementById("cpf").placeholder = "Nome inválido";
          //  document.getElementById("cpf").style.borderColor = "#ff0000";
            document.getElementById("emailprincipal").style.outline = "#ff0000";
         //   document.getElementById("cpf").focus();
            document.getElementById("emailprincipal").onkeydown = function keydown_nome() {
                document.getElementById("emailprincipal").placeholder = "";
                document.getElementById("emailprincipal").style.borderColor = "#999999";
                document.getElementById("emailprincipal").style.outline = null;
            };
            return false;
        } else {
            document.getElementById("emailprincipal").value = '';
            document.getElementById("emailprincipal").placeholder = "Nome Válido";
        }
        return true;
    }*/

    function valida_telefone() {
        var filter_nome = /[^0-9]/;
        if (!filter_nome.test(document.getElementById("numerowhatsapp").value)) {
          //  document.getElementById("cpf").value = '';
          //  document.getElementById("cpf").placeholder = "Nome inválido";
          //  document.getElementById("cpf").style.borderColor = "#ff0000";
            document.getElementById("numerowhatsapp").style.outline = "#ff0000";
         //   document.getElementById("cpf").focus();
            document.getElementById("numerowhatsapp").onkeydown = function keydown_nome() {
                document.getElementById("numerowhatsapp").placeholder = "";
                document.getElementById("numerowhatsapp").style.borderColor = "#999999";
                document.getElementById("numerowhatsapp").style.outline = null;
            };
            return false;
        } else {
            document.getElementById("numerowhatsapp").value = '';
            document.getElementById("numerowhatsapp").placeholder = "Nome Válido";
        }
        return true;
    }
