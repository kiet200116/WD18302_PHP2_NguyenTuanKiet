<?php
namespace App\Models;
class ProductModel extends BaseModel{

    protected $name ="ProductModel";
    public $tableName = 'projects';

    public $table = "projects";
    public function __construct(){
  
        parent::__construct();
    }
    
    public function getAllProduct(){
        return $this->getAll()->get();
    }

    public function getOneTopic($id){
        return $this->select('*')->where('id','=',$id)->first();
    }

    public function getAllWithPaginate(int $limit = 10,int  $offset = 0){
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function addProduct($data){
        // $tableName = $this->tableName;
       
       $this->insertData($this->table,$data);
    }

    public function updateProduct($id,$data,$condition){
        // $tableName = $this->tableName;
        
       $this->updateData($id,$this->table,$data,$condition);
    }

    public function deleteProduct($data){
        // $tableName = $this->tableName;
        
       $this->deleteData($this->table,$data);
    }

    public function create($data){
        var_dump($this->tableName);
    }
}
?>