<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <title>Estudo de Caso: Como a Nike e a Adidas usaram o poder dos aplicativos para se aproximar de seus clientes</title>
<!--
    <link rel="icon" type="image/png" href="img/favicon_16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/favicon_32x32.png" sizes="32x32" />


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="Leia o estudo de caso que a Mobile Growth preparou sobre como a Nike e a Adidas vêm encantando e se relacionando com seus cliente através de aplicativos" />

    <meta property="og:url" content="http://mobilegrowth.com.br{% url 'lp_caseadidasnike" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Estudo de Caso: Como a Nike e a Adidas usaram o poder dos aplicativos para se aproximar de seus clientes" />
    <meta property="og:description" content="Leia o estudo de caso que a Mobile Growth preparou sobre como a Nike e a Adidas vêm encantando e se relacionando com seus cliente através de aplicativos" />
    <meta property="og:image" content="http://mobilegrowth.com.brimg/p05-nike-snkrs01.jpg" />
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="http://mobilegrowth.com.br{% url 'lp_caseadidasnike">
    <meta name="twitter:title" content="Estudo de Caso: Como a Nike e a Adidas usaram o poder dos aplicativos para se aproximar de seus clientes">
    <meta name="twitter:description" content="Leia o estudo de caso que a Mobile Growth preparou sobre como a Nike e a Adidas vêm encantando e se relacionando com seus cliente através de aplicativos">
    <meta name="twitter:image" content="http://mobilegrowth.com.brimg/p05-nike-snkrs01.jpg">
-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">

    <script src="{{ asset('assets/js/main.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">

</head>

<body class="landing-page">
    <header class="cover">
        <div class="row">
            
                <img class="brand img-responsive" src="{{ asset('assets/img/logo-blog.png')}}" />

                <h1>Go Good | Pessoas e Resultados</h1>
            
        </div>
    </header>
    <main>
        <div class="container section01">   
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <h2 class="asset-title">GO GOOD: uma experiência estimulante para sua empresa e colaboradores</h2>

                    <p>A prática de hábitos saudáveis e de atividades físicas não gera apenas vantagens para o funcionário, sua empresa também pode ganhar com o bem- estar físico, mental e espiritual do seu colaborador.</p>

                    <p>Revolucione os hábitos dos seus colaboradores.</p>

                    <p>Conheça nossa espetacular ferramenta que é capaz de:</p>

                    <ul>
                        <li>Impulsionar a performance dos seus colaboradores;</li>
                        <li>Reduzir a ausência dos seus colaboradores por motivos de saúde;</li>
                        <li>Ampliar a visibilidade das ações sociais de sua empresa.</li>
                    </ul>

                    <p><b>Me pergunte como!</b> Basta preencher o formulário <span class="hidden-xs">ao lado</span><span class="hidden-sm hidden-md hidden-lg">abaixo</span>.</p>
                </div>
                <div class="col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4 form-newsletter">
                    <form method="post" action="{{ route('')}}">
          
                        <div>
                            <p class="title">Vamos engajar seus funcionários?</p>

                            <div>
                                <label for="id_first_name">Nome</label>
                                <input class="form-control" type="text" name="first_name" required id="id_first_name" maxlength="100" />
                            </div>
                            <div >
                                <label for="id_last_name">Sobrenome</label>
                                <input class="form-control" type="text" name="last_name" required id="id_last_name" maxlength="100" />
                            </div>
                            <div >
                                <label for="id_email">E-mail Corporativo</label>
                                <input class="form-control" type="email" name="email" required id="id_email" maxlength="254" />
                            </div>
                            <div>
                                <label for="id_company">Empresa</label>
                                <input class="form-control" type="text" name="company" required id="id_company" maxlength="254" />
                            </div>
                            <div>
                                <label for="id_numbers">Quantidade de Funcionários</label>
                                <br />
                                <select class="form-control" name="numbers" required id="id_numbers" >
                                    <option value="op01">0-50</option>
                                    <option value="op02">51-100</option>
                                    <option value="op03">101-1000</option>
                                    <option value="op04">1001-2000</option>
                                    <option value="op05">Mais de 2001</option>
                                </select>
                                
                            </div>

                            <div >
                                <input style="margin-top: 20px;" class="btn btn-default btn-primary center-block" type="submit" value="Me Pergunte Como" />
                            </div>
                            <p class="help-msg">Prometemos não utilizar suas informações de contato para enviar qualquer tipo de SPAM.</p>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="container-fluid section02">
            <div class="row">
                <h2 class="text-center">Veja quem está usando Go Good</h2>
            </div>
            <div class="row">
                <section class="col-lg-offset-2 col-lg-8 col-md-8 col-md-offset-2 col-sm-offset-2 col-sm-8">
                    <img class="img-responsive center-block" src="img/companies.png" >
                </section>
                <section class="col-lg-offset-2 col-lg-8 col-md-8 col-md-offset-2 col-sm-offset-2 col-sm-8">
                    
                </section>
            </div>
        </div>
        <!--
        <div class="container-fluid section03">
            
            <div class="row">
                <section class="col-lg-8 col-md-8 col-sm-8">
                    
                </section>
            </div>
        </div>
    -->
    </main>
    <footer >
        <div class="container">
            
            <div class="row copyright">
                <p>Go Good | Pessoas e Resultados. Todos os direito reservados. Setembro, 2017.</p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/blip-chat-web" type="text/javascript"></script>
<script>
    (function () {
        window.onload = function () {
            new BlipWebSDK.ChatBuilder()
                .withApiKey('c246223d-9948-4b30-86e4-361e5ae89727')
                .build();
        }
    })();
</script>
</body>

</html>
