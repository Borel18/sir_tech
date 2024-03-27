
function lien(id, statut){
    $.ajax({
        url:'statut.php?id='+id+'&statut='+statut,
        type:'GET',
        success: function(reponse){
            alert(reponse);
            location.reload();
        },
        error:function(){
            console.log(erreur);
        }
    })
    }