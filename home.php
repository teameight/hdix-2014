<?php
get_header();
?>

<div id="wrap">
    <div id="mainbg">
        <div id="navwrap">
            <nav>
                <ul>
                    <li class="about" style="width: 138px;"><a href="/about">about</a></li>
                    <li class="projects" style="width: 218px;"><a href="/projects">projects</a></li>
                    <li class="photography" style="width: 282px;"><a href="/galleries">photography</a></li>
                    <li class="writing" style="width: 184px;"><a href="/writing">writing</a></li>
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

<?php
get_footer();
?>