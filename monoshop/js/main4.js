
function liencommande(){
    $.ajax({
        url:'addcommande.php',
        type:'POST',
        success: function(reponse){
            alert(reponse);
            // location.reload();
        },
        error:function(){
            console.log(zerreur);
        }
    })
    }