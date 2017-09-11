$(function () {
    $('#enderecoMedicao').autocomplete({
        source: 'searchender',
        minlength: 1,
        autofocus: true,
        select: function (event, ui) {
            $("#enderecoMedicao").val(ui.item.value);
            $("#id_enderecoMedicao").val(ui.item.id);
        },
        search: function () {
            $(this).addClass('loading');
        },
        open: function () {
            $(this).removeClass('loading');
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).removeClass('loading');
                this.value = '';
                alert('"CAMPO OBRIGATÓRIO!!!"\nLogradouro nao encontrado. Verifique se o logradouro inicia com ' +
                    'Professor, Desembargador...\nSe o logradouro não existir utilize o termo "Nao Identificado"');
            }
        }
    });

    $('#enderecoReclamado').autocomplete({
        source: '/searchender',
        minlength: 1,
        autofocus: true,

        select: function (event, ui) {
            $("#enderecoReclamado").val(ui.item.value);
            $("#id_enderecoReclamado").val(ui.item.id);

        },
        search: function () {
            $(this).addClass('loading');
        },
        open: function () {
            $(this).removeClass('loading');
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).removeClass('loading');
                this.value = '';
                alert('"CAMPO OBRIGATÓRIO!!!"\nLogradouro nao encontrado. Verifique se o logradouro inicia com ' +
                    'Professor, Desembargador...\nSe o logradouro não existir utilize o termo "Nao Identificado"');
            }
        }
    });


});
