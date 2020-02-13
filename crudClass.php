<?php class Crud  
{
    private $db;

    /**
     * Class constructor.
     */
    public function __construct($con)
    {
       // var_dump($con);
        $this->db = $con;
    } 

    public function getProducts()
    {
        $query = "select * from products";
        $q = $this->db->prepare($query);
        $q->execute();   
        return $q->fetchAll();
    }

    function createProduct($post)
    {
        extract($post);
        $query = "insert into products(name,price,quantity) values(?,?,?)";
        $q = $this->db->prepare($query);
        $q->bindparam(1,$name);
        $q->bindparam(2,$price);
        $q->bindparam(3,$quantity);
        if($q->execute()){
            return 1 ;
        }else{
            var_dump($q->errorInfo());
        }

    }

    function getSingleProduct($id)
    {
        $query = "select * from products where id=?";
        $q = $this->db->prepare($query);
        $q->bindparam(1,$id);
        $q->execute();
        return $q->fetch();
    }

    function editProduct($post)
    {
        extract($post);
        //var_dump($post);exit;
        $query = "update products set name=?,price=?,quantity=? where id=?";
        $q = $this->db->prepare($query);
        $q->bindparam(1 , $name);
        $q->bindparam(2 , $price);
        $q->bindparam(3 , $quantity);
        $q->bindparam(4 , $id);
        $q->execute();

    }

    public function deleteProduct($id)
    {
        $query = "delete from products where id = ?";
        $q = $this->db->prepare($query);
        $q->bindparam(1 , $id);
        $q->execute();   
        
    }

}
 

?>