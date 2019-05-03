$(document).ready(function(){

    Barba.Pjax.Dom.wrapperId = 'port';
    Barba.Pjax.Dom.containerClass = 'dynamic';

    Barba.Pjax.start();

    Barba.Pjax.getTransition = function() {
        return FadeTransition;
    };

    $('article').addClass('on');

});

function active_nav() {

    $('#doc_menu ul,#doc_menu a').removeClass('on');
    var am = $('#doc_menu a[href="'+location.href+'"]');
    am.addClass('on').parents('ul').addClass('on').prev('a').addClass('on');

}

var FadeTransition = Barba.BaseTransition.extend({
    start: function() {
        Promise
            .all([this.newContainerLoading, this.fadeOut()])
            .then(this.fadeIn.bind(this));
    },
    fadeOut: function() {
        $('.loader').css({ opacity:'1' });
        $('.loader i').css({ width:'0' });
        return $(this.oldContainer).animate({ opacity: 0 }).promise();
    },
    fadeIn: function() {
        var _this = this;
        var $el = $(this.newContainer);
        $(this.oldContainer).hide();
        $el.find('article').addClass('on');
        $('.loader i').css({ width:'100%' });
        $el.css({
            visibility : 'visible',
            opacity : 0
        });
        $el.animate({
            opacity: 1
        }, 400, function() {
            _this.done();
            $('.loader').css({ opacity:'0' });
            $('.loader i').css({ width:'0' });
        });
        restore_scroll();
        store_scroll();
        active_nav();
    }
});