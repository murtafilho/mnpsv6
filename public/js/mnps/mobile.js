$(function () {

    $("#valorFonte").focus();

    $("#valorFonte").mask("99.9");

    $("#valorFundo").mask("99.9");

    $('form').keypress(function (e) {
        if (e.which == 13) {

            e.preventDefault();

        }
    })

    $("#valorFonte").keypress(function (e) {

        if (e.which == 13) {

            registraValorFonte();

        }
    })

    $("#valorFundo").keypress(function (e) {

        if (e.which == 13) {

            registraValorFundo();

        }
    })



    $("#okFonte").on('click', function () {

        registraValorFonte();

    })

    $("#okFundo").on('click', function () {

        registraValorFundo();

    })

    $('#lFonte').click(function () {

        $('#fonte table input').val('');

    })

    $('#lFundo').click(function () {

        $('#fonte table input').val('');

    })

    function registraValorFonte() {

        var num = $('#valorFonte').val();

        if(num.length != 4){
            alert('Valor inválido');
            $('#valorFonte').val('').focus();

            $('#valorFonte'). selectRange(0,4);
            exit;
        }

        $("#valorFonte").val('');

        $('#fonte table input').each(function () {

            if ($(this).val() == 0) {

                $('#fonte table input').css('background-color','white');

                $(this).css('background-color','#EEEEEE');

                $(this).val(num);

                exit;
            }
        })

        num = 0;

    }

    function registraValorFundo() {

        var num = $('#valorFundo').val();

        if(num.length != 4){
            alert('Valor inválido');
            $('#valorFundo').val('').focus();

            $('#valorFundo'). selectRange(0,4);
            exit;
        }

        $("#valorFundo").val('');

        $('#fundo table input').each(function () {

            if ($(this).val() == 0) {

                $('#fundo table input').css('background-color','white');

                $(this).css('background-color','#EEEEEE');

                $(this).val(num);

                exit;
            }
        })

        num = 0;

    }

    $("#cFonte").on('click', function () {
        $("#valorFonte").val('');
    })

    $("#cFundo").on('click', function () {
        $("#valorFundo").val('');
    })


    $('.numeroFonte').on('click', function (e) {

        e.preventDefault();

        var valor = $.trim($(this).text());

        var texto = $("#valorFonte").val() + valor;

        if(texto.length > 4) exit;

        if (texto.length == 2) {
            texto = texto + '.';
        }

        $("#valorFonte").val(texto);


    })


    $('.numeroFundo').on('click', function (e) {

        e.preventDefault();

        var valor = $.trim($(this).text());

        var texto = $("#valorFundo").val() + valor;

        if(texto.length > 4) exit;

        if (texto.length == 2) {
            texto = texto + '.';
        }

        $("#valorFundo").val(texto);

    })



    $.fn.selectRange = function(start, end) {
        return this.each(function() {
            if (this.setSelectionRange) {
                this.focus();
                this.setSelectionRange(start, end);
            } else if (this.createTextRange) {
                var range = this.createTextRange();
                range.collapse(true);
                range.moveEnd('character', end);
                range.moveStart('character', start);
                range.select();
            }
        });
    };

})