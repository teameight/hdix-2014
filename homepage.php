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

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="http://wufoo.com/scripts/embed/form.js"></script><script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css"><script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/js/page_context.js"></script><style type="text/css"></style>
</head>
<body style="" screen_capture_injected="true" class=" hasGoogleVoiceExt">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div id="wrap">
    <div id="mainbg">
        <div id="navwrap">
            <nav>
                <ul>
                    <li class="about" style="width: 138px;"><a href="http://hilarygrantdixon.com/about">about</a></li>
                    <li class="projects" style="width: 218px;"><a href="http://hilarygrantdixon.com/projects">projects</a></li>
                    <li class="photography" style="width: 282px;"><a href="http://hilarygrantdixon.com/galleries">photography</a></li>
                    <li class="writing" style="width: 184px;"><a href="http://hilarygrantdixon.com/writing">writing</a></li>
                    <li class="contact" style="width: 168px;"><a href="#">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div id="contactwrap">
    <div id="contactform">
        <div id="close-contact"><a href="#" title="Close">X</a></div>
        <div id="wufoo-z1kfg9fr180gifd"><iframe id="wufooFormz1kfg9fr180gifd" class="wufoo-form-container" height="1166" allowtransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none" src="https://teameight.wufoo.com/embed/z1kfg9fr180gifd/def/embedKey=z1kfg9fr180gifd538816&amp;entsource=&amp;referrer=">&lt;a href="https://teameight.wufoo.com/forms/z1kfg9fr180gifd/" title="html form"&gt;Fill out my Wufoo form!&lt;/a&gt;</iframe></div>
        <script type="text/javascript">var z1kfg9fr180gifd;(function(d, t) {
                var s = d.createElement(t), options = {
                    'userName':'teameight',
                    'formHash':'z1kfg9fr180gifd',
                    'autoResize':true,
                    'height':'567',
                    'async':true,
                    'host':'wufoo.com',
                    'header':'show',
                    'ssl':true};
                s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
                s.onload = s.onreadystatechange = function() {
                    var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                    try { z1kfg9fr180gifd = new WufooForm();z1kfg9fr180gifd.initialize(options);z1kfg9fr180gifd.display(); } catch (e) {}};
                var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
            })(document, 'script');</script>
    </div>
</div>

<div class="contact-fill"></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
    $( document ).ready(function() {
        var delayInc = 45,
            frames = 3,
            frameHeight = 129,
            liCnt = 0;
        $( "div#navwrap ul li.contact a" ).click(function(e) {
            e.stopPropagation();
            $( "div#contactwrap, div.contact-fill").fadeIn(600);
        });
        $( "div#close-contact a" ).click(function(e) {
            e.stopPropagation();
            $( "div#contactwrap, div.contact-fill").fadeOut(600);
        });
        $( "div#navwrap ul li" ).each(function() {
            var that = $(this);
            var elWidth = that.width();
            that.data('fWidth', elWidth).width(0);
            that.delay(liCnt*delayInc*8).animate({'width':elWidth}, delayInc*20 );
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


</body></html>