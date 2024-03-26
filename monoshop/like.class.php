<?php

class like{
    private $DB ;
    
    public function __construct($DB){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
          } 
        if(!isset($_SESSION['like'])){

            $_SESSION['like']= array();
        }
        $this->DB= $DB;
        if (isset($_GET['dellike'])) {
            $this->del($_GET['dellike']);
        }
    }
    public function count(){
        return array_sum($_SESSION['like']);

    }

    public function total(){
        $total = 0;
        $ids=array_keys($_SESSION['like']);
                                            //  var_dump($ids);
		if(empty($ids)){
			$products = array();
		}else {
		   $products = $this->DB->query('SELECT id ,prix FROM produits WHERE id IN ('.implode(',',$ids).')');
                                            	
		}
        foreach ($products as  $product) {
            $total += $product->prix*$_SESSION['like'][$product->id];
        }
        return $total;
    }




    public function add($product_id){
        if(isset($_SESSION['like'][$product_id])){
            $_SESSION['like'][$product_id]++ ;
        }else{
            $_SESSION['like'][$product_id]=1;
        }
        
    }

    public function del ($produit_id){
           unset($_SESSION['like'][$produit_id]);
    }
    
}
?>