<?php
include('connect.php');
class data_user{
    public function login($user,$pass)
    {
        global $conn;
        $sql = " select * from admin where username='$user' and password='$pass'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_admin($user){
        global $conn;
        $sql = "SELECT * from admin WHERE username='$user'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
   
};

class data{
   
    public function delete_contact($id_con){
        global $conn;
        $sql = "DELETE FROM contact WHERE id_contact = '$id_con'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function delete_category($name_cat)
    {
        global $conn;
        $sql = "delete from category where name_cate='$name_cat'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function delete_pet($id)
    {
        global $conn;
        $sql = "delete from product where id_pet='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function delete_image($id_pet){
        global $conn;
        $sql = "DELETE FROM `image_library` WHERE id_pet = $id_pet";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_contact(){
        global $conn;
        $sql = "SELECT * FROM contact";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>