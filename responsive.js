jQuery(function($){
    $(document).ready(function(){

        $('img').each(function(){
            $(this).removeAttr('width')
            $(this).removeAttr('height');
        });

        $("<select />").appendTo("#navigation");
        $("<option />", {
            "selected": "selected",
            "value" : "",
            "text" : wpexLocalizeNav.text
        }).appendTo("#navigation select");

        $("#navigation a").each(function() {
            var el = $(this);
            if(el.parents('.sub-menu').length >= 1) {
                $('<option />', {
                    'value' : el.attr("href"),
                    'text' : '- ' + el.text()
                }).appendTo("#navigation select");
            }
            else if(el.parents('.sub-menu .sub-menu').length >= 1) {
                $('<option />', {
                    'value' : el.attr('href'),
                    'text' : '-- ' + el.text()
                }).appendTo("#navigation select");
            }
            else {
                $('<option />', {
                    'value' : el.attr('href'),
                    'text' : el.text()
                }).appendTo("#navigation select");
            }
        });

        $("#navigation select").change(function() {
            var $val = $(this).find("option:selected").val();
            if($val.indexOf('contact') >= 0) {
                // open contact form
            }
            window.location = $val;
        });

        $(function(){
            $("#navigation select").uniform();
        });

        $(".fitvids").fitVids();

    });
});