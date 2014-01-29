var z1kfg9fr180gifd;(function(d, t) {
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
})(document, 'script');

jQuery(document).ready(function() {
    jQuery( "li.contact a" ).click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        jQuery( "div#contactwrap, div.contact-fill").fadeIn(600);
        var iframe = document.getElementById('wufooFormz1kfg9fr180gifd');
        iframe.src = iframe.src;
    });
    jQuery( "div#close-contact a" ).click(function(e) {
        e.stopPropagation();
        jQuery( "div#contactwrap, div.contact-fill").fadeOut(600);
    });

});