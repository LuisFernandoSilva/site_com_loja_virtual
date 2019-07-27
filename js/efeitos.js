//estrutura basica do jquery, quando o documento estiver carregado executa uma funcao
$(document).ready(function() {
    $("#logotipo").on("mouseover", function() {
        $("#banner h1").addClass("efeito");
    }).on("mouseout", function() {
        $("#banner h1").removeClass("efeito");
    });
    $("#input-search").on("focus", function() {
        $("li.search").addClass("ativo");
    }).on("blur", function() {
        $("li.search").removeClass("ativo");
    });
    $(".thumbnails").owlCarousel({
        /*   loop: true,
           margin: 10,
           nav: true,
           navText: ["Anterior, Proximo"],
           responsive: {
               0: {
                   items: 1
               },
               480: {
                   items: 3
               },
               768: {
                   items: 4
               }

           }*/
        items: 4

    });
    var owl = $(".thumbnails").data('owlCarousel');
    $('#btn-news-prev').on("click", function() {
        owl.prev();
    });
    $('#btn-news-next').on("click", function() {
        owl.next();
    });
    $("#page-up").on("click", function(event) {
        $("body").animate({
            scrollTop: 0
        }, 1000);
        event.preventDefault();
    });
    /*quando clicarem nele tira a classe menu e fecha a aba de menu */
    $("#btn-bars").on("click", function() {
        $("header").toggleClass("open-menu");
    });
    $("#menu-mobile-mask, .btn-close").on("click", function() {
        $("header").removeClass("open-menu");
    });
    $("#btn-search").on("click", function() {
        $("header").toggleClass("open-search");
        $("#input-search-mobile").focus();
    });

});