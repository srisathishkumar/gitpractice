
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = "customdb";

// Create connection
global $conn;
$conn = mysqli_connect($localhost, $username, $password, $db);

// Check connection
/*if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/
/*class con {
  


     public $localhost = "localhost";
      public $user = "root";
    public $password= "";
     public $database ="customdb";
   public $conn;
    public function __construct(){
      
        $this->conn= mysqli_connect($this->localhost,$this->user,$this->password,$this->database);
        echo "connected";
}

}*/




/*class entryconnect extends con{
    public function getentry($pname,$ppass,$stq){
     echo $query = "INSERT INTO `product_entry`( `name`, `Price`,`stock_quantity`) VALUES ('$pname','$ppass','$stq')";

        $result = mysqli_query($this->conn, $query);
     var_dump($result);
    }
}


class update_entry extends con{
  public function updatetb  ($prod,$upprice,$upstq){
   echo $query =" INSERT INTO `product_update`(`productupdate`,`updateprice`,`updatestock`) VALUES ('$prod','$upprice','$upstq')";
  $result = mysqli_query ($this->conn,$query);
  var_dump ($result);

  }
}

class stock_inventory extends con{
  public function inventory ($input){
     $query = "select * from product_update where productupdate like '%{$input}%'";
    $result = mysqli_query ($this->conn,$query);
    $res = mysqli_fetch_all($result);
   
    return $res;
    
  }
  public function getdata($input){
    $query = "select * from log_data where time like '%{$input}%'";
    $result = mysqli_query ($this->conn,$query);
    $res = mysqli_fetch_all($result);
   
    return $res;
    
  }
}
class listdown extends con{
public function selectproduct(){
  $query = "select name from product_entry";
  $result = mysqli_query ($this->conn,$query);
  return $result;
}
}

/*class stockcolumns extends con{
  public function combinecolumns(){
    $query ="select name  from proudct_entry";
    $query0_1 ="select stock_update from product_entry";
    $query1 = "select updatestock from product_update";
    $result = mysqli_query ($this->conn,$query,$query0_1);
    $result = mysqli_query ($this->conn,$query1);
  return $result;

  }
}*/
?>
