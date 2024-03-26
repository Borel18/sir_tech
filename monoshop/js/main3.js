function lienlike(id){
    $.ajax({
        url:'addlike.php?id='+id,
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