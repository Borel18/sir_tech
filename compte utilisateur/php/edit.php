
<?php 
session_start();

if (isset($_SESSION['auth']->id) && isset($_SESSION['auth']->fname)) {
   
if(isset($_POST['fname']) && 
   isset($_POST['username']) ){
        
    include "..\include\db.php";
    
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $old_pp = $_POST['old_pp'];
    
    
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../edit.php?error=$em");
	    exit;
    }else if(empty($username)){
    	$em = "User name is required";
    	header("Location: ../edit.php?error=$em");
	    exit;
       
    }else {
      
      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
          
         
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($username, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../upload/'.$new_img_name;
            //    delete old profil picture
            $old_pp_des = "../upload/$old_pp";
            if(unlink($old_pp_des)){
                move_uploaded_file($tmp_name,$img_upload_path);
            }else {
                move_uploaded_file($tmp_name,$img_upload_path);
            }
            
            
               // Insert into Database
              $query= "UPDATE user SET fname = ?,username = ? ,pp = ? "; 
              $pdo -> prepare($query)-> execute([$fname,$username,$new_img_name]);
              
              $_SESSION['auth']->fname= $fname;
               // $sql = "UPDATE user
               //         SET fname=?, username=?, pp=? 
               //         ";
               // $stmt = $conn->prepare($sql);
               // $stmt->execute([$fname, $username, $new_img_name]);
               // $_SESSION['auth']->fname= $fname;
               
              
               
               header("Location: ../edit.php?success=votre compte a ete modifié avec succes");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ../edit.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ../edit.php?error=$em&$data");
            exit;
         }

        
      }else {
        $sql = "UPDATE user SET fname=?, username=?";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$fname, $username]);
         
       	header("Location: ../edit.php?success=votre compte a ete modifié avec succes");
   	    exit;
      }
    }


}else {
	header("Location: ../edit.php?error=error");
	exit;
}

}else {
	header("Location: login.php");
	exit;
} 
