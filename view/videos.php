<?php include_once("header.php");?>


    <section>

        <div id="call-to-action">
            <div class="container">
                <div class="row text-center">
                    <h2> Videos</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="player">
                        <video src="mp4/highlights.mp4" controls poster="img/highlights.jpg">
                            <track kind="subtitles" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default>
                        </video>

                    </div>



                    <!--<audio src="mp3/audio.mp3" controls></audio>-->
                </div>

            </div>
        </div>
        <div id="news" class="container" style="top: 0">
            <div class="row text-center">
                <h2> Latest news</h2>
                <hr>
            </div>
            <div class="row thumbnails ">
                <div class="item" data-video="highlights">
                    <div class="item-inner">
                        <img src="img/highlights.jpg" alt="Noticia">
                        <h3>Highlights</h3>

                    </div>
                </div>
                <div class="item" data-video="Orlando_City_Foundation_2015">
                    <div class="item-inner">
                        <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                        <h3>Orlando City Foundation 2015</h3>

                    </div>
                </div>
                <div class="item" data-video="highlights">
                    <div class="item-inner">
                        <img src="img/highlights.jpg" alt="Noticia">
                        <h3>Highlights</h3>

                    </div>
                </div>
                <div class="item" data-video="Orlando_City_Foundation_2015">
                    <div class="item-inner">
                        <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                        <h3>Orlando City Foundation 2015</h3>

                    </div>
                </div>
                <div class="item" data-video="highlights">
                    <div class="item-inner">
                        <img src="img/highlights.jpg" alt="Noticia">
                        <h3>Highlights</h3>

                    </div>
                </div>
                <div class="item" data-video="Orlando_City_Foundation_2015">
                    <div class="item-inner">
                        <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                        <h3>Orlando City Foundation 2015</h3>

                    </div>
                </div>

            </div>
        </div>

    </section>



    <?php include_once("footer.php");?>

    <script>
        $(function() {
            $(".thumbnails .item").on("click", function() {
                $("video").attr({
                    "src": "mp4/" + $(this).data('video') + ".mp4",
                    "poster": "img/" + $(this).data('video') + ".jpg"
                });
            });

        });
    </script>

