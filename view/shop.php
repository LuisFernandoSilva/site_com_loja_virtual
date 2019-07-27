
<?php include_once("header.php");?>

    <section ng-controller="destaque-controller">
        <div class="container" id="destaque-produtos-container" >
            <div id="destaque-produtos">
                <div class="item" ng-repeat="produto in produtos"><!--repete o produtos dentro do array de produtos-->
                    <div class="col-sm-6 col-imagem">
                        <a href="produto-{{produto.id_prod}}">
                            <img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
                        </a>
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2>{{produto.nome_prod_longo}}</h2>
                        <div class="box-valor">
                            <div class="text-boleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-roxo">R$</div>
                            <div class="text-valor text-roxo">{{produto.preco}}</div>
                            <div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
                            <div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela_valor}}</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>
                        </div>
                        <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart text-roxo"></i> compre agora</a>
                    </div>
                    
                </div>
                 
            </div>

            <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
            <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
        </div>

        <div id="promocoes" class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="box-promocao box-1">
                        <p>escolha por desconto</p>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row-fluid">
                        <div class="col-md-3">
                            <div class="box-promocao">
                                <div class="text-ate">até</div>
                                <div class="text-numero">40</div>
                                <div class="text-porcento">%</div>
                                <div class="text-off">off</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box-promocao">
                                <div class="text-ate">até</div>
                                <div class="text-numero">60</div>
                                <div class="text-porcento">%</div>
                                <div class="text-off">off</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box-promocao">
                                <div class="text-ate">até</div>
                                <div class="text-numero">80</div>
                                <div class="text-porcento">%</div>
                                <div class="text-off">off</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box-promocao">
                                <div class="text-ate">até</div>
                                <div class="text-numero">85</div>
                                <div class="text-porcento">%</div>
                                <div class="text-off">off</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mais-buscados" class="container">
            <div class="row text-center title-default-roxo">
                <h2>Os mais buscados</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3" ng-repeat="produto in buscados">
                    <div class="box-produto-info">
                        <a href="produto-{{produto.id_prod}}">
                        <img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
                        <h3>{{produto.nome_prod_longo}}</h3>
                        <div class="estrelas" data-score="{{produto.media}}"></div>
                        <div class="text-reviews text-arial-cinza">{{produto.total_reviews}}</div>
                        <div class="text-valor text-roxo">R$ {{produto.preco}}</div>
                        <div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de r$ {{produto.parcela_valor}} sem juros</div>
                        </a>
                    </div>
                </div>
                
                              
            </div>
        </div>

    </section>

    <!--rodape-->
 <?php include_once("footer.php");?>
<script>
angular.module("shop", []).controller("destaque-controller", function($scope, $http){
    $scope.buscados =[];
    $scope.produtos =[];
    

    var initCarousel = function () {
        $("#destaque-produtos").owlCarousel({
            autoPlay: 5000,
            items:1,
            singleItem: true
        }); 

        var owlDestaque = $(".thumbnails").data('owlCarousel');

        $('#btn-destaque-prev').on("click",function () {
        owlDestaque.prev(); 
        });
        $('#btn-destaque-next').on("click",function () {
        owlDestaque.next(); 
        });
    };

	$http({
	  method: 'GET',
	  url: 'produtos'
	}).then(function successCallback(response) {

	    $scope.produtos = response.data;

	    setTimeout(initCarousel, 1000);

	  }, function errorCallback(response) {
	    console.log("erro:",response);
	  });

    var initEstrelas = function(){

        $('.estrelas').each(function(){

            $(this).raty({
            starHalf    : 'lib/raty/lib/images/star-half.png',                               
            starOff     : 'lib/raty/lib/images/star-off.png',                                
            starOn      : 'lib/raty/lib/images/star-on.png',
            score		: parseFloat($(this).data("score"))
            });

        });

    };  

    $http({
	  method: 'GET',
	  url: 'produtos-mais-buscados'
	}).then(function successCallback(response) {

	    $scope.buscados = response.data;

	    setTimeout(initEstrelas, 1000);

	  }, function errorCallback(response) {
	    console.log("erro:",response);
	  });
 

});

</script>