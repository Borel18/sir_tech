// (function($) {      
//       $('.addpanier').click(function(event)  
//     {
//         event.preventDefault();
//         alert("bonjour");
//         $.get($(this).attr('href'),{},function(data){
//       alert("au revoir");
//     //         console.log(data);
//     //         if (data.error) {
//     //          alert(data.message)
            
//     //         }else{
//     //           alert("bonjour");
//     //           $('#total1').empty().append(data.total1)
//     //           $('#count').empty().append(data.count)
//     //         }
//        },'json');
//        return false;
//      });

// }

function lien(id){
$.ajax({
    url:'annulation.php?id='+id,
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