$(document).ready(function(){

    $('#select').on('change',function(){

        var selectValor = '#'+$(this).val();

        $('#vtp').children('div').hide();
        $('#vtp').children(selectValor).show();
        

    });


});