$(document).ready(function(){

    let b = $('body');

    Barba.Pjax.Dom.wrapperId = 'port';
    Barba.Pjax.Dom.containerClass = 'dynamic';

    Barba.Pjax.start();

    Barba.Pjax.getTransition = function() {
        return FadeTransition;
    };

    $('article').addClass('on');
    let d = localStorage.getItem( 'dark' );
    if( d === '1' ) {
        $(b).addClass('d');
    }

    $(b)

    .on('click','.dark',function(){
        $(b).toggleClass('d');
        d = $(b).hasClass('d') ? "1" : "0";
        localStorage.setItem( 'dark', d );
    })

    .on('click','#doc_menu ul>li>div', function () {
        $(this).parents('ul').toggleClass('on');
    })

    .on('click','[data-scroll]',function () {
        let to = $(this).data('scroll');
        $('[aria-label="'+to+'"]')[0].scrollIntoView({
            behavior:'smooth',
            block:'start',
        });
    })

});

function active_nav() {
    $('#doc_menu ul,#doc_menu a').removeClass('on');
    let am = $('#doc_menu a[href="'+location.href+'"]');
    am.addClass('on').parents('ul').addClass('on').prev('a').addClass('on');
}

let FadeTransition = Barba.BaseTransition.extend({
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
        let _this = this;
        let $el = $(this.newContainer);
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
        //restore_scroll();
        //store_scroll();
        active_nav();
        $('#menu,#doc_menu').removeClass('on');
    }
});