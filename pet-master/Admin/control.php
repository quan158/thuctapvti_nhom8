<?php
include("connect.php");
    class data_user{
    // get accounts admin
    public function select_admin($user)
    {
        global $conn;
        $sql = "SELECT * FROM `Admin` WHERE username='$user'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    
    //get accounts user
    public function select_user()
    {
        global $conn;
        $sql = "SELECT * FROM User";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //get top 5 users
    public function select_user_top()
    {
        global $conn;
        $sql = "SELECT * FROM `user` ORDER BY `user`.`id_user` DESC";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //login to page
    public function login($user,$pass)
    {
        global $conn;
        $sql = " select * from admin where username='$user' and password='$pass'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    }
    class data{
    //create category
    public function insert_cat($name_cat, $description)
    {
        global $conn;
        $sql = " INSERT INTO category(name_cat,description)
                            values ('$name_cat','$description')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //get categories
    public function select_cats()
    {
        global $conn;
        $sql = "SELECT * FROM category";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //get category
    public function select_cat($old_name){
        global $conn;
        $sql = "SELECT * FROM category WHERE name_cat='$old_name'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //update category
    public function update_cat($old_name,$name_cat, $description)
    {
        global $conn;
        $sql = "UPDATE category set name_cat='$name_cat' ,description ='$description' WHERE name_cat='$old_name'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //delete category
    function delete_cat($name_cat)
    {
        global $conn;
        $sql = "delete from category where name_cat='$name_cat'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //delete contact
    public function delete_contact($id_con){
        global $conn;
        $sql = "DELETE FROM contact WHERE id_contact = '$id_con'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //get contacts
        public function select_contact(){
        global $conn;
        $sql = "SELECT * FROM contact";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    }
?>
