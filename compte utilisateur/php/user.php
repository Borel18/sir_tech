<?php
function getUserById($id,$pdo){
    
	$query = "SELECT * FROM user WHERE id= :id  ";
    $req = $pdo->prepare($query);
    $req ->execute(['id' => $id ]);
											
    

    if($req->rowCount() == 1){
        $user = $req->fetch();
        return $user;
    }else {
       return 0; 
    }

}


?>