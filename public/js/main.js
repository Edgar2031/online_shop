$(document).ready(function() {
    'use strict';
    var body = $('body');
    function goToNextInput(e) {
        var key = e.which,
        t = $(e.target),
        sib = t.next('.inp');

        if (key != 9 && (key < 37 || key > 116)) {
            e.preventDefault();
            return false;
        }
        if (key === 9) {
            return true;
        }
        if (!sib || !sib.length) {
            sib = body.find('input').eq(0);
        }
        sib.select().focus();
    }

    function onKeyDown(e) {
        var key = e.which;
        if ((key >= 8 && key <= 13) || (key >= 37 && key <= 116)) {
            return true;
        }
        e.preventDefault();
        return false;
    }

    function onFocus(e) {
        $(e.target).select();
    }

    body.on('keyup', '.inp', goToNextInput);
    body.on('keydown', '.inp', onKeyDown);
    body.on('click', '.inp', onFocus);

    //validate email
    $('.email').on('input', function(){
        const verify_token = $('#all_pro').val();
        const verify_email = $('.email').val();
        $.ajax({
            url: '/user_verify/verify_password',
            type: 'post',
            data: {
                    "_token": verify_token,
                    verify_email
                },
            success: function(r){   
                if (r == '') {
                    $('.email').css({
                        border: '1px solid green'
                    });
                }else {
                    $('.email').css({
                        border: '1px solid red'
                    });
                }
            }
        })
    });

    function send(){
        $('.load_1').css({
            display: 'block'
        });
        const verify_token = $('#all_pro').val();
        const verify_email_send = $('.email').val();
        $.ajax({
            url: '/user_verify/verify_password_send',
            type: 'post',
            data: {
                    "_token": verify_token,
                    verify_email_send
                },
            success: function(r){   
                if (r == '') {
                    $('.email').css({
                        border: '1px solid green'
                    });
                    $('.form-content').attr('data-id', verify_email_send);
                    $('.div_1','.form-content').addClass('hide-it');
                    $('.form-sent','.form-content').addClass('show-it');
                    $('.load_1').css({
                        display: 'none'
                    });
                    $('.inp').val('');
                    $('.inp').css({
                        border: 'solid 1px #ccc'
                    });
                }else {
                    $('.email').css({
                        border: '1px solid red'
                    });
                    $('.load_1').css({
                        display: 'none'
                    });
                }
            }
        })
    }

    $('#submit').click( function() {
        send();
    });

    $('.div_1').keydown(function(e) {
        if(e.key == 'Enter') {
            send();
        }
    });

    $('.close').click(function() {
        $('.form-items','.form-content').removeClass('hide-it');
        $('.form-sent','.form-content').removeClass('show-it');
        $('.inp').val('');
        $('.inp').css({
            border: 'solid 1px #ccc'
        });
    });

    $('.change_email').click(function() {
        $('.form-items','.form-content').removeClass('hide-it');
        $('.form-sent','.form-content').removeClass('show-it');
        $('.inp').val('');
        $('.inp').css({
            border: 'solid 1px #ccc'
        });
    });
});