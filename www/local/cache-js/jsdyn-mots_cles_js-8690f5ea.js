/* #PRODUIRE{fond=mots_cles.js}
   md5:1de9b14d046e4c30ae1dd42fa2fba358 */
$(function(){
    $('#key-word-selector').change(function(event) {
        event.preventDefault();
        $('#sites-by-key-words').empty();              
        var valeurs = [];
        $('input:checked[name=key-word]').each(function(){
            valeurs.push($(this).val());
        });

        
        if(valeurs.length==0){
            $.ajax( {
                url: 'https://alumnifortheplanet.piell.pro/?page=ajax_mots_cles',
                dataType: 'html',
                data: {titre_mot: ''},
            }).done(function(data) {
                $('#sites-by-key-words').append(data);  
            });
            
        }

        else{
            valeurs.forEach(keyWord => {
                $.ajax( {
                    url: 'https://alumnifortheplanet.piell.pro/?page=ajax_mots_cles',
                    dataType: 'html',
                    data: {titre_mot: keyWord},
                }).done(function(data) {
                    $('#sites-by-key-words').append(data);
                });
            });
        }
        
        
        
    });

    $('#key-word-selector').change();

});