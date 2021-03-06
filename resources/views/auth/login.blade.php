<!DOCTYPE html>
<html lang="en">

<head>
    <title>20Mediar - A imobiliária que pensa em ti</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://20mediar.pt/img/20MediarPreto.jpeg" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form"
                    style="padding-top:30px;">
                    @csrf
                    <img src="img/20MediarPreto.png"
                        style="height:6rem;display: block;margin-left: auto;margin-right: 55%;" class="img_logo" alt="">
                    <p></p>
                    <span class="login100-form-title" style="font-weight:bold;font-size:1.2rem;padding-bottom:0.9rem">
                        Bem vindo!
                    </span>
                    <p class="textx" style="width:80%;text-align: justify;padding-bottom:0.9rem">
                        A <b>20Mediar</b> posiciona-se no mercado imobiliário com o objetivo de ser diferente! <br>
                        Cada imóvel colocado à venda transforma-se numa <b>oportunidade real</b> para todos. <br>
                        Ao <b>registar-se</b>, qualquer pessoa poderá <b>participar</b> e obter <b>benefícios</b> nesta
                        plataforma.<br>
                    </p>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="password">

                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div>
                            <p class="txt1">*Pelo menos 8 carateres
                                </p>
                            
                            <a href="/password/reset" class="txt1">
                                Recuperar password?
                            </a>
                        </div>
                    </div>


                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Entrar
                        </button>
                    </div>
                    <div class="flex-sb-m w-full p-t-3" style="margin-top:2rem;">
                        <div>
                            Ainda não tem conta?
                            <a href="/register" class="txt1antao">
                                <b>Registe-se aqui!</b>
                            </a>

                        </div>

                    </div>
                    <div class="flex-sb-m w-full">
                        <div>
                            <a data-toggle="modal" data-target="#modal" style="cursor: pointer;color:#6675DF">Conheça as
                                vantagens de estar
                                registado</a>
                        </div>

                    </div>

                    <div class="modal" id="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom: none !important;">
                                <img src="img/20MediarPreto.png"
                        style="height:6rem;display: block;margin-left: 20%;" class="img_logo" alt="">
                                    <button style="margin-left: -53%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p style="width:100%;text-align: justify;color:black;">
                                        Como cliente, ao vender o seu imóvel, será reembolsado de parte da
                                        <b>comissão
                                            imobiliária</b>.<br><br>
                                        Se for comprador, receberá igualmente parte da comissão
                                        <br><br>

                                        Ao enviar o <b>link de convite</b> ao seu <b>círculo de amigos</b> será
                                        recompensado(a) com uma
                                        <b>percentagem da comissão</b> originada por cada transação realizada por eles.
                                        <br><br>
                                        <b>Com a 20Mediar todos ganham!</b><br>
                                        <br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>


                <div class="login100-more"
                    style="background-image: url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>

</body>

</html>