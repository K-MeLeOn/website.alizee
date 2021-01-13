function myScript(){
    var includes = $('[data-include]');
    jQuery.each(includes, function(){
        var file = 'shared/' + $(this).data('include') + '.html';
        $(this).load(file);
    });

    $("#msgid").html("This is Hello World by JQuery");
};