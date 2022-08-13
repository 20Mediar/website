@extends('layouts.nav')

@section('content')
<script language="javascript" type="text/javascript">
function dynamicConcelhodropdown(listindex) {
    let lisboa = ["-", "Amadora", "Cascais", "Lisboa", "Oeiras", "Odivelas", "Sintra"];
    let madeira = ["-", "Calheta", "Câmara de Lobos", "Funchal", "Machico", "Ponta do Sol", "Porto Moniz",
        "Porto Santo", "Santa Cruz", "Santana", "São Vicente", "Ribeira Brava"
    ];

    switch (listindex) {
        case "":
            document.getElementById("concelho").options.length = 0;
            document.getElementById("concelho").options[0] = new Option("Selecione concelho", "Selecione concelho");
            break;
        case "Lisboa":
            document.getElementById("concelho").options.length = 0;
            document.getElementById("freguesia").options.length = 1;

            for (let i = 0; i < lisboa.length; i++) {
                document.getElementById("concelho").options[i] = new Option(lisboa[i], lisboa[i]);
            }
            break;
        case "RA Madeira":
            document.getElementById("concelho").options.length = 0;
            document.getElementById("freguesia").options.length = 1;

            for (let i = 0; i < madeira.length; i++) {
                document.getElementById("concelho").options[i] = new Option(madeira[i], madeira[i]);
            }
            break;
    }
    return true;
}
</script>
<script language="javascript" type="text/javascript">
function dynamicFreguesiadropdown(listindex) {
    let amadora = ["-", "Mina de Água", "Encosta do Sol", "Falagueira-Venda Nova", "Venteira", "Águas Livres",
        "Alfragide"
    ];
    let cascais = ["-", "Alcabideche", "Carcavelos e Paredes", "Cascais e Estoril", "São Domingos de Rana"];
    let lisboa = ["-", "Ajuda", "Alcântara", "Alvalade", "Areeiro", "Arroios", "Avenidas Novas", "Beato", "Belém",
        "Benfica", "Campo de Ourique", "Campolide", "Carnide", "Estrela", "Lumiar", "Marvila", "Misericórdia",
        "Olivais", "Parque das Nações", "Penha de França", "Santa Clara", "Santa Maria Maior", "Santo António",
        "São Domingos de Benfica", "São Vicente"
    ]
    let oeiras = ["-", "Algés", "Barcarena", "Caxias", "Carnaxide", "Queijas", "Linda a Velha", "Porto Salvo",
        "Cruz Quebrada Dafundo", "Paço de Arcos", "Oeiras e São Julião da Barra"
    ]
    let odivelas = ["-", "Ramada e Caneças", "Pontinha e Famões", "Odivelas", "Póvoa de Santo Adrião e Olival Basto"]
    let sintra = ["-", "Agualva e Mira Sintra", "Algueirão-Mem Martins",
        "Almargem do Bispo, Pêro Pinheiro e Montelavar", "Cacém e São Marcos", "Casal de Cambra", "Colares",
        "Massamá e Monte Abraão", "Queluz e Belas", "Rio de Mouro", "São João das Lampas e Terrugem", "Sintra"
    ]

    let calheta = ["-", "Arco da Calheta", "Calheta", "Estreito da Calheta", "Jardim do Mar", "Prazeres",
        "Fajã da Ovelha", "Paúl do Mar"
    ]
    let camLobos = ["-", "Câmara de Lobos", "Curral das Freiras", "Estreito de Câmara de Lobos", "Jardim da Serra",
        "Quinta Grande"
    ]
    let funchal = ["-", "Imaculado Coração de Maria", "Monte", "Santo António", "São Gonçalo", "São Martinho",
        "São Pedro", "São Roque", "Santa Luzia", "Santa Maria Maior", "Sé"
    ]
    let machico = ["-", "Água de Pena", "Caniçal", "Machico", "Porto da Cruz", "Santo António da Serra"]
    let pontaSol = ["-", "Canhas", "Madalena do Mar", "Ponta do Sol"]
    let portMoniz = ["-", "Achadas da Cruz", "Porto Moniz", "Ribeira da Janela", "Seixal"]
    let portSanto = ["Vila Baleira"]
    let ribrava = ["-", "Campinário", "Ribeira Brava", "Serra d'Água", "Tabua"]
    let stacruz = ["-", "Camacha", "Caniço", "Gaula", "Santa Cruz", "Santo António da Serra"]
    let santana = ["-", "Arco de São Jorge", "Faial", "Ilha", "São Jorge", "São Roque do Faial", "Santana"]
    let saovicente = ["-", "Boaventura", "Ponta Delgada", "São Vicente"]

    switch (listindex) {
        case "Amadora":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < amadora.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(amadora[i], amadora[i]);
            }
            break;
        case "Cascais":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < cascais.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(cascais[i], cascais[i]);
            }
            break;
        case "Lisboa":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < lisboa.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(lisboa[i], lisboa[i]);
            }
            break;
        case "Oeiras":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < oeiras.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(oeiras[i], oeiras[i]);
            }
            break;
        case "Odivelas":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < odivelas.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(odivelas[i], odivelas[i]);
            }
            break;
        case "Sintra":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < sintra.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(sintra[i], sintra[i]);
            }
            break;
        case "Calheta":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < calheta.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(calheta[i], calheta[i]);
            }
            break;
        case "Câmara de Lobos":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < camLobos.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(camLobos[i], camLobos[i]);
            }
            break;
        case "Funchal":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < funchal.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(funchal[i], funchal[i]);
            }
            break;
        case "Machico":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < machico.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(machico[i], machico[i]);
            }
            break;
        case "Ponta do Sol":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < pontaSol.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(pontaSol[i], pontaSol[i]);
            }
            break;
        case "Porto Santo":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < portSanto.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(portSanto[i], portSanto[i]);
            }
            break;
        case "Ribeira Brava":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < ribrava.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(ribrava[i], ribrava[i]);
            }
            break;
        case "Santa Cruz":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < stacruz.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(stacruz[i], stacruz[i]);
            }
            break;
        case "Santana":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < santana.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(santana[i], santana[i]);
            }
            break;
        case "São Vicente":
            document.getElementById("freguesia").options.length = 0;
            for (let i = 0; i < saovicente.length; i++) {
                document.getElementById("freguesia").options[i] = new Option(saovicente[i], saovicente[i]);
            }
            break;

    }

    return true;
}
</script>
<style>
.login100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 70%;
    height: 35px;
    border: 1px solid #000;
    border-radius: 10px;
    background: #fff;
    font-size: 12px;
    color: #000;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: 1px;

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.login100-form-btn:hover {
    background: #000;
    color: #fff;
}

.card-header {
    border-bottom: none;
    padding-bottom: 0;
}

.card-body {
    padding-top: 0;
}

@media only screen and (max-width: 600px) {
    .des {
        display: none;
    }
}
</style>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0">Dashboard</h2>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-sm-12 col-md-12 col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h4 style="font-weight:bold">
                                Recomende amigos e ganhe!
                            </h4>
                            <p>Será recompensado por cada transação realizada por eles!</p>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-6" style="margin-top:3rem;">

                                    <div class="tab-content p-0">
                                        <!--  Sales -->

                                        <div class="modal-content cpydiv shadow"
                                            style="border-color:0.1px solid black;border-radius:10px;color:grey;width:auto;">
                                            <p class="container copy mx-auto"
                                                style="font-family:'Myriad Pro 1';font-size:auto;text-align:center;color:grey;margin-top:1%;margin-bottom:2%;">
                                                https://20mediar.pt/register?invite={{Auth::user()->uuid}}
                                            </p>
                                        </div>
                                        <div class="container ml-10 mr-10">
                                            <div class="row ">
                                                <a class="share mx-auto" style="color: #0077b5 !important;"
                                                    href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <span class="mdi mdi-linkedin" style="font-size:400%;"> </span>
                                                </a>
                                                <a class="share mx-auto" style="color:#3a5897 !important;"
                                                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <span class="mdi mdi-facebook " style="font-size:400%;"></span>
                                                </a>
                                                <a class="share mx-auto" style="color:#3a5897 !important;"
                                                    href="mailto:geral@20mediar.pt?body=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <span class="mdi mdi-email" style="font-size:400%;"></span>
                                                </a>
                                                <a class="share mx-auto"
                                                    style="color: #27ab00 !important;margin-top:11px;"
                                                    href="https://wa.me/?text=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <img class=" m-1 social-icon hvr-grow"
                                                        style=" width:80px;height:80px"
                                                        src="{{ asset('img/whatsapp.svg') }}">
                                                </a>
                                                <a class="share mx-auto" style="color:#1da1f2 !important;"
                                                    href="https://twitter.com/intent/tweet?text=<?php echo url('/register?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                                                    <span class="mdi mdi-twitter " style="font-size:400%;"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="des" src="img/invites.png" style="width:25rem;" alt="">
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <button type="button" class="close" data-dismiss="alert">+</button>
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">+</button>
                <strong>{{Session::get('success')}}</strong>
            </div>
            @endif
            <div class="row">

                <!-- Left col -->
                <div class="col-lg-6 col-md-6 col-sm-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h4 style="font-weight:bold">
                                Pretende vender um imóvel?
                            </h4>
                            <p>Connosco irá recuperar parte da comissão imobiliária</p>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">

                                <form class="form-card" method="post" action="{{ url('sendemail/send') }}">
                                    {{ csrf_field() }}
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group category_div" id="category_div">Distrito:
                                            <select id="source" name="source"
                                                onchange="javascript: dynamicConcelhodropdown(this.options[this.selectedIndex].value);">
                                                <option value="">Selecione distrito</option>
                                                <option value="Lisboa">Lisboa</option>
                                                <option value="RA Madeira">RA Madeira</option>
                                            </select>
                                        </div>
                                        <div class=" form-group sub_category_div" id="sub_category_div">Concelho:
                                            <script type="text/javascript" language="JavaScript">
                                            document.write(
                                                '<select name="concelho" id="concelho" onchange="javascript: dynamicFreguesiadropdown(this.options[this.selectedIndex].value);"><option value="">Selecione concelho</option></select>'
                                            )
                                            </script>
                                            <noscript>
                                                <select id="concelho" name="concelho"
                                                    onchange="javascript: dynamicFreguesiadropdown(this.options[this.selectedIndex].value);">
                                                </select>
                                            </noscript>
                                        </div>
                                        <div class="form-group sub_category_div" id="sub_category_div">Freguesia:
                                            <script type="text/javascript" language="JavaScript">
                                            document.write(
                                                '<select name="freguesia" id="freguesia"><option value="">Selecione freguesia</option></select>'
                                            )
                                            </script>
                                            <noscript>
                                                <select id="freguesia" name="freguesia"></select>
                                            </noscript>
                                        </div>
                                    </div>

                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Natureza<span class="text-danger">
                                                    *</span></label>
                                            <select name="natureza">
                                                <option value="" data-default-option="true"></option>
                                                <option value="Apartamentos">Apartamentos</option>
                                                <option value="Armazéns">Armazéns</option>
                                                <option value="Escritórios">Escritórios</option>
                                                <option value="Garagens">Garagens</option>
                                                <option value="Imóveis c/ negócio">Imóveis c/ negócio</option>
                                                <option value="Lojas">Lojas</option>
                                                <option value="Moradias">Moradias</option>
                                                <option value="Prédios">Prédios</option>
                                                <option value="Quintas e Herdades">Quintas e Herdades</option>
                                                <option value="Terrenos">Terrenos</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Tipologia<span class="text-danger">
                                                    *</span></label> <input type="text" id="lname" name="tipologia">
                                        </div>
                                        <div class="form-group col-sm-4 flex-column d-flex"> <label
                                                class="form-control-label px-3">Valor<span class="text-danger">
                                                    *</span></label> <input type="text" id="lname" name="valor"> </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-12 flex-column d-flex"> <label
                                                class="form-control-label px-3">Descrição</label><textarea id="txtArea"
                                                rows="6" name="descricao" value="Descrição"></textarea> </div>
                                    </div>
                                    <div style="display:none;"><input type="text" id="lname" name="nome"
                                            value="{{Auth::user()->name}}"> </div>

                                    <div style="display:none;"><input type="text" id="lname" name="email"
                                            value="{{Auth::user()->email}}"> </div>


                                    <div class="row justify-content-end">
                                        <div class="form-group col-sm-6"> <button type="submit"
                                                class="login100-form-btn">
                                                Submeter
                                            </button> </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- Left col -->
                <div class="col-lg-6 col-md-6 col-sm-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h4 style="font-weight:bold">
                                Pretende comprar um imóvel?
                            </h4>
                            <p>Terá direito a parte da comissão imobiliária</p>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <form class="form-card" method="post" action="{{ url('sendemail/sendCompra') }}">
                                    {{ csrf_field() }}
                                    <div class="row justify-content-between text-left">
                                    <div class="form-group category_div" id="category_div">Distrito:
                                            <select id="source" name="source"
                                                onchange="javascript: dynamicConcelhodropdown(this.options[this.selectedIndex].value);">
                                                <option value="">Selecione distrito</option>
                                                <option value="Lisboa">Lisboa</option>
                                                <option value="RA Madeira">RA Madeira</option>
                                            </select>
                                        </div>
                                        <div class=" form-group sub_category_div" id="sub_category_div">Concelho:
                                            <script type="text/javascript" language="JavaScript">
                                            document.write(
                                                '<select name="concelho" id="concelho" onchange="javascript: dynamicFreguesiadropdown(this.options[this.selectedIndex].value);"><option value="">Selecione concelho</option></select>'
                                            )
                                            </script>
                                            <noscript>
                                                <select id="concelho" name="concelho"
                                                    onchange="javascript: dynamicFreguesiadropdown(this.options[this.selectedIndex].value);">
                                                </select>
                                            </noscript>
                                        </div>
                                        <div class="form-group sub_category_div" id="sub_category_div">Freguesia:
                                            <script type="text/javascript" language="JavaScript">
                                            document.write(
                                                '<select name="freguesia" id="freguesia"><option value="">Selecione freguesia</option></select>'
                                            )
                                            </script>
                                            <noscript>
                                                <select id="freguesia" name="freguesia"></select>
                                            </noscript>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                                class="form-control-label px-3">Orçamento<span class="text-danger">
                                                    *</span></label> <input type="text" name="orcamento">
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                                class="form-control-label px-3">Tipologia<span class="text-danger">
                                                    *</span></label> <input type="text" name="tipologia">
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-12 flex-column d-flex"> <label
                                                class="form-control-label px-3">Descreva-nos o que
                                                procura</label><textarea id="txtArea" name="descricao" value="Descrição"
                                                rows="6"></textarea> </div>
                                    </div>
                                    <div style="display:none;"><input type="text" id="lname" name="nome"
                                            value="{{Auth::user()->name}}"> </div>

                                    <div style="display:none;"><input type="text" id="lname" name="email"
                                            value="{{Auth::user()->email}}"> </div>

                                    <div class="row justify-content-end">
                                        <div class="form-group col-sm-6"> <button type="submit"
                                                class="login100-form-btn">
                                                Submeter
                                            </button> </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.Left col -->
            </div><!-- /.container-fluid -->
    </section>


</div>




@endsection