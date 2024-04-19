<?php
require_once 'Database.php';

Class Contact{ 
    static function select(){
        global $conn;
        $sql = "SELECT * FROM owner";
        $result = $conn->query($sql);
        $arr = array();

        if($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                foreach ($row as $key => $value){
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }

    static function delete(){
        global $conn;
        if (isset($_GET['id'])) {
            $id=htmlspecialchars($_GET["id"]);
      
            $sql="delete from owner where id='$id' ";
            $hasil=mysqli_query($conn,$sql);
      
            //Kondisi apakah berhasil atau tidak
                if ($hasil) {
                    header("Location:/../dashboard/dashboard.php");
      
                }
                else {
                    echo "<div class='alert alert-danger'>Gagal Menghapus Data</div>";
      
                }
            }
    }
  }
?>