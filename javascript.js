$(document).ready(function(){
    
    $('#pesquisa').keyup(function(){
        $('form').submit(function(){
            
            var dados = $(this).serialize();
            $.ajax({
                url: 'processa.php', 
                type: 'POST', 
                dataType: 'html', 
                data: dados,
                success: function(data){
                    
                    $('.container').empty().html(data);
                }
            });
            return false;
        });
        $('form').trigger('submit');


    });

    
});
