$(function () {

    $("input[name='fonte[]']").mask('99.9');

    $('#alinkPanelFonte').click(function () {
        $("#valorFonte").focus();
    })

    $('#alinkPanelFundo').click(function () {
        $("#valorFundo").focus();
    })
    $("input[name='fundo[]']").mask('99.9');

    $("#valorFonte").mask('99.9');
    $("#valorFundo").mask('99.9');
    $('#inicio,#fim').mask('99:99');

    $("input[name='dataMedicao']").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior',
        autoSize: true
    });

    $("input,select").css('border-color','#1D232F');
    $("input,select").css('border-radius','3px');
    $("input,select").css('color','black');
    $("input,select,select option").css('font-size','large');

    $('input,select').on('focus',function () {
        $(this).css('background-color','#EEEEEE');
    })

    $('input,select').on('blur',function () {
        $(this).css('background-color','white');
    })


    $(".panel-heading").css('background-color','#1D232F');
    $(".panel-heading").css('color','white');

    $("#inicio").clockpicker();
    $("#fim").clockpicker();




/*



    $("input,select").css('border-color','#1D232F');
    $("input,select").css('border-radius','3px');
    $("input,select").css('color','black');
    $("input,select").css('color','black');
    $("input,select").css('font-weight','bold');
    $(".panel-body").css('background-color','#1D232F');
    $(".panel-body").css('color','white');
    $(".panel-heading").css('border-color','#1D232F');
    $(".panel-heading").css('background-color','#00A65A');


    $('.panel').css('border','none');
    $('.panel').css('border-radius','0px');
    $("table-input table-body").css('background-color','#1D232F');

*/

})