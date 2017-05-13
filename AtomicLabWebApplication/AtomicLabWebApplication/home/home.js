//*********************************
// NOTA: imp de js referente a home
//*********************************

$(document).ready(function () {

    initializeContactBox();


});


function initializeContactBox() {
    $('#characterLeft').text('140 caracteres para utilizar');
    $('#message').keydown(function () {

        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('Ha llegado al limite');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        }
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' caracteres faltantes');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });
}

function scrollTo(item) {
    
    if (item == 'top') {
        $('body').animate({ scrollTop: 0 }, 800);
    }
    else {
        lastElementTop = $('#' + item).position().top;
        scrollAmount = lastElementTop - 80;
        $('body').animate({ scrollTop: scrollAmount }, 800);
    }
    
}

