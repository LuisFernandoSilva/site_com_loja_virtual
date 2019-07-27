<!DOCTYPE h<tml>

<html ng-app="shop">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width:device-width ,initial-scale=1">
    <title>Orlando City</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">

    <script src="lib/angula_js/angular.min.js"></script>
    <!--minha propria configuração de css evitando mexer no bootstrap pra alinhar os elementos da pagina-->
    <link rel="stylesheet" href="css/orlando.css">
    <link rel="stylesheet" href="css/orlando-mobile.css">
</head>

<body>
    <!--cabeçalho-->
    <header>
        <div id="menu-mobile-mask" class="visible-xs"></div>
        <div id="menu-mobile" class="visible-xs">
            <ul class="list-unstyled">
                <li><a href="videos.html">Videos</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Schedule</a></li>
            </ul>
            <div class="bar-close">
                <button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
            </div>
        </div>


        <div class="container">
            <img id="logotipo" src="img/orlando-logo.png" alt="logotipo">
        </div>
        <div class="header-black">
            <div class="container">
                <input type="search" id="input-search-mobile" class="visible-xs" placeholder="search...">

                <button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
                <button id="btn-search" type="button"><i class="fa fa-search"></i></button>
                <!--itens da lista de menu-->
                <ul class="pull-right">
                    <li class="club-01">
                        <a href="#"></a>
                    </li>
                    <li class="club-02">
                        <a href="#"></a>
                    </li>
                    <li class="club-03">
                        <a href="#"></a>
                    </li>
                    <li class="club-04">
                        <a href="#"></a>
                    </li>
                    <li class="club-05">
                        <a href="#"></a>
                    </li>
                    <li class="club-06">
                        <a href="#"></a>
                    </li>
                    <li class="club-07">
                        <a href="#"></a>
                    </li>
                    <li class="club-08">
                        <a href="#"></a>
                    </li>
                    <li class="club-09">
                        <a href="#"></a>
                    </li>
                    <li class="club-10">
                        <a href="#"></a>
                    </li>
                    <li class="club-11">
                        <a href="#"></a>
                    </li>
                    <li class="club-12">
                        <a href="#"></a>
                    </li>
                    <li class="club-13">
                        <a href="#"></a>
                    </li>
                    <li class="club-14">
                        <a href="#"></a>
                    </li>
                    <li class="club-15">
                        <a href="#"></a>
                    </li>
                    <li class="club-16">
                        <a href="#"></a>
                    </li>
                    <li class="club-17">
                        <a href="#"></a>
                    </li>
                    <li class="club-18">
                        <a href="#"></a>
                    </li>
                    <li class="club-19">
                        <a href="#"></a>
                    </li>
                    <li class="club-20">
                        <a href="#"></a>
                    </li>
                    <li class="club-21">
                        <a href="#"></a>
                    </li>
                    <li class="club-22">
                        <a href="#"></a>
                    </li>
                </ul>

            </div>
        </div>
        <!--faz com os elementos fiquem centralizados e argrupados em container-->
        <div class="container">

            <div class="row">
                <nav id="menu" class="pull-right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="videos.html">Videos</a></li>
                        <li><a href="#">Tickets</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li class="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="search..." id="input-search">
                                <span class="input-group-btn">
                                    <button class="" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>