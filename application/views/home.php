
<?php $this->load->helper('url'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php base_url();?>assets/home/css/normalize.min.css">
        <link rel="stylesheet" href="<?php base_url();?>assets/home/css/main.css">
        <script src="<?php base_url();?>assets/home/js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <div class="row-content">
            <section id="content" class="center">
                <div class="box-top">
                    <img class="logo" src="<?php base_url();?>assets/home/images/logo.png" width="420" heigth="50"> 
                    <div id="player">
                    <iframe  src="http://www.sisdera.com/stream/webplayer3.php?canal=camposfm&amp;autoplay=1"  width="284" height="38" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                    </div>
                    <nav id="menu" class="center">
                        <ul>
                            <li><a href="">Notícias</a></li>
                            <li><a href="">Promoções</a></li>
                            <li><a href="">Artistas</a></li>
                            <li><a href="">Shows</a></li>
                            <li><a href="">Contatos</a></li>
                        </ul>
                    </nav> 
                </div>

                <div id="banner-fade">                    
                    <ul class="bjqs">
                        <li><img src="<?php base_url();?><?php base_url();?><?php base_url();?>assets/home/images/bn01.png" title="Apoio Cultural - <span class='color03'>Intelbras</span>"></li>
                        <li><img src="<?php base_url();?><?php base_url();?>assets/home/images/bn02.png" title="Apoio Cultural - <span class='color04'>WV</span>"></li>
                        <li><img src="<?php base_url();?>assets/home/images/bn03.png" title="Apoio Cultural - <span class='color06'>Itaú</span>"></li>
                    </ul>
                </div>

                <!--
                <div class="box-dest">   
                    <div id="show-slide">
                        <ul class="bjqs">
                            <li><img src="assets/home/images/banner01.jpg" title="Próximos Shows"></li>
                            <li><img src="assets/home/images/banner02.jpg" title="Próximos Shows"></li>
                            <li><img src="assets/home/images/banner03.jpg" title="Próximos Shows"></li>
                        </ul>   
                    </div>            
                </div>   -->

                <div class="center m-top">
                    <div class="box-content">
                        <div class="box-mensagem">
                            <h3 class="t-title color05">Deixe sua <span class="color05"> Mensagem</span></h3>
                            <ul>
                                <li>
                                    <img src="" />
                                    <h5></h5>
                                    <p></p>
                                </li>
                                <li>
                                    <img src="" />
                                    <h5></h5>
                                    <p></p>
                                </li>
                                <li>
                                    <img src="" />
                                    <h5></h5>
                                    <p></p>
                                </li>                                
                            </ul>
                        </div>

                        <div class="box-news"> 
                            <h3 class="t-box color01">Últimas <span class="color01"> Notícias</span></h3>                        
                            <div class="news">
                                <img src="<?php base_url();?><?php base_url();?><?php base_url();?>assets/home/images/img01.jpg" width="205" heigth="80">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <div class="news">
                                <img src="<?php base_url();?><?php base_url();?>assets/home/images/img02.jpg" title="Apoio Cultura A" width="205" >
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <div class="news">
                                <img src="<?php base_url();?>assets/home/images/img03.jpg" title="Apoio Cultura A" width="205" >
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                        </div>

                        <div class="box-news"> 
                             <h3 class="t-box color02">Últimos <span class="color02">Shows</span></h3>                        
                            <div class="news">
                                <img src="<?php base_url();?><?php base_url();?><?php base_url();?>assets/home/images/show01.jpg" width="205" heigth="80">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <div class="news">
                                <img src="<?php base_url();?><?php base_url();?>assets/home/images/show02.jpg" title="Apoio Cultura A" width="205" >
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <div class="news">
                                <img src="<?php base_url();?>assets/home/images/show03.jpg" title="Apoio Cultura A" width="205" >
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="banner-slide">                    
                    <ul class="bjqs">
                        <li><img src="<?php base_url();?><?php base_url();?><?php base_url();?>assets/home/images/b01.png" title="Apoio Cultural - <span class='color03'>Nivea</span>"></li>
                        <li><img src="<?php base_url();?><?php base_url();?>assets/home/images/b02.png" title="Apoio Cultural - <span class='color03'>Wall Disney</span>"></li>
                        <li><img src="<?php base_url();?>assets/home/images/b03.png" title="Apoio Cultural - <span class='color03'>Ypê</span>"></li>
                    </ul>
                </div>

                <div class="center m-top">
                    <div class="box-content">
                        <div class="box-mensagem">
                            <h3 class="t-title color04">Playlist do<span class="color04"> Progrma</span></h3>
                            <ul>
                                <li>
                                    <img src="" />
                                    <h5></h5>
                                    <p></p>
                                </li>
                                <li>
                                    <img src="" />
                                    <h5></h5>
                                    <p></p>
                                </li>
                                <li>
                                    <img src="" />
                                    <h5></h5>
                                    <p></p>
                                </li>                                
                            </ul>
                        </div>

                        <div class="box-news"> 
                            <h3 class="t-box color03">Artistas em <span class="color03"> Destaque</span></h3>                        
                            <div class="news">
                                <img src="<?php base_url();?><?php base_url();?><?php base_url();?>assets/home/images/art01.jpg" width="205" heigth="80">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <div class="news">
                                <img src="<?php base_url();?><?php base_url();?>assets/home/images/art02.jpg" title="Apoio Cultura A" width="205" >
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <div class="news">
                                <img src="<?php base_url();?>assets/home/images/art03.jpg" title="Apoio Cultura A" width="205" >
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                        </div>

                        <div class="box-news"> 
                             <h3 class="t-box color06">Os Melhores <span class="color06">Vídeos</span></h3>                        
                            <div class="news">
                                <img src="<?php base_url();?>assets/home/images/video01.jpg" width="205" heigth="80">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <div class="news">
                                <img src="<?php base_url();?><?php base_url();?>assets/home/images/video02.jpg" title="Apoio Cultura A" width="205" >
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <div class="news">
                                <img src="<?php base_url();?>assets/home/images/video03.jpg" title="Apoio Cultura A" width="205" >
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

        <div class="row-footer">
            <footer id="footer" class="center">
                
            </footer>
        </div>

        <!--  -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php base_url();?>assets/home/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="<?php base_url();?><?php base_url();?><?php base_url();?><?php base_url();?>assets/home/js/plugins.js"></script>
        <script src="<?php base_url();?><?php base_url();?><?php base_url();?>assets/home/js/main.js"></script>
        <script src="<?php base_url();?><?php base_url();?>assets/home/js/bjqs-1.3.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
