<?php
/**
Template Name: Home Page
 */
?>
<html><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Hilary Grant Dixon</title>
    <meta name="description" content="Photography and Writer">
    <meta name="keywords" content="Hilary Grant Dixon, hilary with one l, photography, HGD, HGD photography">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory(); ?>/css/main.css">

    <style>
    /* ==========================================================================
       HTML5 Boilerplate styles - h5bp.com (generated via initializr.com)
       ========================================================================== */

    html,
    button,
    input,
    select,
    textarea {
        color: #222;
    }

    html {
        background: #d7d7d7;
    }

    body {
        font-size: 1em;
        line-height: 1.4;
        background: #d7d7d7; /* Old browsers */
        background: -moz-linear-gradient(left,  #d7d7d7 0%, #e0e0e0 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#d7d7d7), color-stop(100%,#e0e0e0)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(left,  #d7d7d7 0%,#e0e0e0 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(left,  #d7d7d7 0%,#e0e0e0 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(left,  #d7d7d7 0%,#e0e0e0 100%); /* IE10+ */
        background: linear-gradient(to right,  #d7d7d7 0%,#e0e0e0 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d7d7d7', endColorstr='#e0e0e0',GradientType=1 ); /* IE6-9 */

    }

    ::-moz-selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    ::selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #ccc;
        margin: 1em 0;
        padding: 0;
    }

    img {
        vertical-align: middle;
    }

    fieldset {
        border: 0;
        margin: 0;
        padding: 0;
    }

    textarea {
        resize: vertical;
    }

    .chromeframe {
        margin: 0.2em 0;
        background: #ccc;
        color: #000;
        padding: 0.2em 0;
    }


    /* ==========================================================================
       Author's custom styles
       ========================================================================== */
    #wrap {
        width:100%;
        position:relative;
        height: 745px;
        overflow: hidden;
        margin-bottom: 0 !important;
    }
    #navwrap {
        position: absolute;
        left: 770px;
        top: 126px;
        width: 316px;
        height: 466px;
    }
    #navwrap ul li a {
        display: block;
        margin-left: 20%;
        margin-top: 0;
        width: 80%;
        height: 100%;
        text-indent:-999em;
        overflow:hidden;
    }
    #navwrap ul li.about {
        left: 34px;
        top: 0;
        width: 138px;
        height: 92px;
    }
    #navwrap ul li.projects {
        left: 38px;
        top: 87px;
        width: 218px;
        height: 113px;
        background-position: -138px 0;
    }
    #navwrap ul li.photography {
        left: 34px;
        top: 205px;
        width: 282px;
        height: 84px;
        background-position: -358px 0;
    }
    #navwrap ul li.writing {
        left: 14px;
        top: 293px;
        width: 184px;
        height: 91px;
        background-position: -640px 0;
    }
    #navwrap ul li.contact {
        left: 0;
        top: 353px;
        width: 168px;
        height: 113px;
        background-position: -822px 0;
    }
    #navwrap ul li.about a {
        margin-left: 26px;
        margin-top: 9px;
        width: 102px;
        height: 72px;
    }
    #navwrap ul li.projects a {
        margin-left: 50px;
        margin-top: 13px;
        width: 160px;
        height: 93px;
    }
    #navwrap ul li.photography a {
        margin-left: 41px;
        margin-top: 13px;
        width: 234px;
        height: 61px;
    }
    #navwrap ul li.writing a {
        margin-left: 20%;
        margin-top: 6px;
        width: 137px;
        height: 74px;
    }
    #navwrap ul li.contact a {
        margin-left: 25px;
        margin-top: 24px;
        width: 131px;
        height: 81px;
    }








    /* ==========================================================================
       Media Queries
       ========================================================================== */

    @media only screen
    and (min-width : 320px)
    and (max-width : 900px) {
        #mainbg {
            height: 745px;
            left: auto;
            margin-left: 0;
            right: -200px;
            background-position: top right;
        }

    }

    @media print,
    (-o-min-device-pixel-ratio: 5/4),
    (-webkit-min-device-pixel-ratio: 1.25),
    (min-resolution: 120dpi) {

    }

    /* ==========================================================================
       Helper classes
       ========================================================================== */

    .ir {
        background-color: transparent;
        border: 0;
        overflow: hidden;
        *text-indent: -9999px;
    }

    .ir:before {
        content: "";
        display: block;
        width: 0;
        height: 150%;
    }

    .hidden {
        display: none !important;
        visibility: hidden;
    }

    .visuallyhidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .visuallyhidden.focusable:active,
    .visuallyhidden.focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto;
    }

    .invisible {
        visibility: hidden;
    }

    .clearfix:before,
    .clearfix:after {
        content: " ";
        display: table;
    }

    .clearfix:after {
        clear: both;
    }

    .clearfix {
        *zoom: 1;
    }

    /* ==========================================================================
       Print styles
       ========================================================================== */

    @media print {
        * {
            background: transparent !important;
            color: #000 !important; /* Black prints faster: h5bp.com/s */
            box-shadow: none !important;
            text-shadow: none !important;
        }

        a,
        a:visited {
            text-decoration: underline;
        }

        a[href]:after {
            content: " (" attr(href) ")";
        }

        abbr[title]:after {
            content: " (" attr(title) ")";
        }

        /*
         * Don't show links for images, or javascript/internal links
         */

        .ir a:after,
        a[href^="javascript:"]:after,
        a[href^="#"]:after {
            content: "";
        }

        pre,
        blockquote {
            border: 1px solid #999;
            page-break-inside: avoid;
        }

        thead {
            display: table-header-group; /* h5bp.com/t */
        }

        tr,
        img {
            page-break-inside: avoid;
        }

        img {
            max-width: 100% !important;
        }

        @page {
            margin: 0.5cm;
        }

        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h2,
        h3 {
            page-break-after: avoid;
        }
    }    </style>

    <script src="http://wufoo.com/scripts/embed/form.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div id="wrap">
    <div id="footer-nav">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'wpex_footer_menu',
        'sort_column' => 'menu_order',
        'fallback_cb' => false
    ));
    ?>
    </div>
    <div id="mainbg">
        <div id="navwrap">
            <nav>
                <ul>
                    <li class="about" style="width: 138px;"><a href="/about">about</a></li>
                    <li class="projects" style="width: 218px;"><a href="/projects">projects</a></li>
                    <li class="photography" style="width: 282px;"><a href="/portfolio">photography</a></li>
                    <li class="writing" style="width: 184px;"><a href="/category/writing">writing</a></li>
                    <li class="contact" style="width: 168px;"><a href="#">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

<script>
    // Avoid `console` errors in browsers that lack a console.
    (function() {
        var method;
        var noop = function () {};
        var methods = [
            'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
            'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
            'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
            'timeStamp', 'trace', 'warn'
        ];
        var length = methods.length;
        var console = (window.console = window.console || {});

        while (length--) {
            method = methods[length];

            // Only stub undefined methods.
            if (!console[method]) {
                console[method] = noop;
            }
        }
    }());

    // Place any jQuery/helper plugins in here.
</script>

<script>
    $( document ).ready(function() {
        var delayInc = 45,
            frames = 3,
            frameHeight = 129,
            liCnt = 0;

        $( "div#navwrap ul li" ).each(function() {
            var that = $(this);
            var elWidth = that.width();
            that.data('fWidth', elWidth).width(0);
            that.delay(liCnt*delayInc*8).show().animate({'width':elWidth}, delayInc*20 );
            liCnt++;
        });
        var sqwiggle = function(that){
            var anim = 0,
                cycle = 0,
                frame = 1,
                inAnim = $(that).data('inAnim');
            if( inAnim != 1 ){ //only fire anim if not already in anim
                that.data('inAnim', 1);
                that.data('frame', frame);
                thatpos = that.css("background-position").split(" ")
                var xpos = thatpos[0]
                anim = setInterval( function(){
                    //console.log('cycle:'+cycle);
                    frame = that.data('frame');
                    if(cycle < 3){
                        if( frame < ( (frames-1)*2 ) ){
                            if( frame < frames){ //up
                                that.css({'background-position': xpos+' -' + frame*frameHeight + 'px'});
                                console.log('frame:'+frame);
                                that.data('frame', frame + 1 );
                            } else { //down
                                var framePos = (frames-1)-(frame-(frames-1)) * frameHeight;
                                that.css({'background-position': xpos+' -' + framePos + 'px'});
                                that.data('frame', frame + 1 );
                            }
                        }else{
                            that.css({'background-position': xpos+' 0px'});
                            that.data('frame', 0);
                            cycle++;
                        }
                    }else{
                        window.clearInterval(anim);
                        cycle = 0;
                        that.css({'background-position': xpos+' 0px'});
                        that.data('frame', 0);
                        that.data('inAnim', 0);
                    }
                },delayInc);
            }
        };
        $( "div#navwrap ul li a" ).hover(
            function() {
                var that = $(this).parent();
                sqwiggle(that);
            }, function() {}
        );

    });
    /* !!! setup google analytics
     var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
     (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
     g.src='//www.google-analytics.com/ga.js';
     s.parentNode.insertBefore(g,s)}(document,'script'));
     */
</script>

<?php get_footer(); ?>