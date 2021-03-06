/* #PRODUIRE{fond=js/ecole.js}
   md5:63195ea928da8b5fd058ea754efc2890 */
$(function(){
    $('select[name=session_pays]').change(function(event) {
    event.preventDefault();
    
    if($('#session_pays').val()!=""){

        $.ajax( {
            url: 'https://alumnifortheplanet.piell.pro/?page=ajax_ecole',
            dataType: 'html',
            data: {id_pays: $(this).val()},
        }).done(function(data) {
            $('select[name=session_ecole]').html(data);
            

            
            
            if($('select[name=session_ecole] option[value=""]').attr('data-status') != "empty"){
                $('select[name=session_ecole]').prop('disabled', false);
                var ecole_value = $('#session_ecole').attr('data-value');
                if($('select[name=session_ecole] option[value='+ecole_value+']').attr('value')!=null){
                    $('#session_ecole').val(ecole_value);
                }
                
            }
            else{
                $('select[name=session_ecole]').prop('disabled', true);

            }
            
        });
    }

    else{
        $('#session_ecole').empty();
        $('#session_ecole').append(new Option("Veuillez selectionner un pays", "", true, true));
        $('select[name=session_ecole]').prop('disabled', true);
    }

    });
    
    var pays_value = $('#session_pays').attr('data-value');
    $('#session_pays').val(pays_value);	

    var pays_entreprise_value = $('#session_pays_entreprise').attr('data-value');
    $('#session_pays_entreprise').val(pays_entreprise_value);
    
    $('#session_pays').change();    
    /* CSS input et select */
    var toVerify = new Object();
    toVerify.input = {0 : '#session_nom', 1 : '#session_prenom', 2 : '#session_naissance', 3 : '#session_email', 4 : '#session_pays', 5 : '#session_ecole', 6 : '#session_ecole_ajout', 7 : '#session_entreprise', 8 : '#session_fonction', 9 : '#session_pays_entreprise', 10 : '#session_ville', 11 : '#session_linkedin'};
    toVerify.container={0:'#lastname-container', 1:'#firstname-container', 2 :'#birthday-container', 3:'#email-container', 4:'#country-container', 5:'#ecole-container', 6:'#ecole-ajout-container', 7:'#organisation-container', 8:'#fonction-container', 9:'#country-organisation-container', 10:'#ville-container', 11:'#linkedin-container'};
    
    for(let i=0; i<12; i++){        
        if($(toVerify.input[i]).val()!=''){
        $(toVerify.container[i]).toggleClass("floating-label-form-group-with-value");
        
        }
    }

    /* Apparition/disparition du formulaire de localisation */
    $('#location_inputs').click(function(){
        $('.location-formular').toggleClass('opacity-0');
    });

    $('#cancel-button').click(function(){
        $('#champ_ville').val('');
        $('#champ_pays').val('');
        $('#champ_editer_gis_oui_geocoder').val('');
        $('.location-formular').toggleClass('opacity-0');
    });
    
    if( $('#champ_pays').val()!=""){
        $('.location-formular').removeClass('opacity-0');
    }
    else{
        $('.location-formular').addClass('opacity-0');
    }

    /* Apparition/disparition de la case "ajout école" à cocher */
    if( $('#session_ecole_ajout').val()!=""){
        $('#ajout-ecole-case').removeClass('none');
    }
    else{
        $('#ajout-ecole-case').addClass('none');
    }

    $('#session_ecole_ajout').on('input',function(e){
        if( $('#session_ecole_ajout').val()!=""){
            $('#ajout-ecole-case').removeClass('none');
        }
        else{
            $('#ajout-ecole-case').addClass('none');
        }
    });
});

