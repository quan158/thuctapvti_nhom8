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
        $sql = "SELECT * 
                FROM `user` 
                ORDER BY `created_at` DESC 
                LIMIT 10;
                ";
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

    //add pet
    public function insert_pet($name_pet, $category, $quantity, $gender, $price, $picture, $description) {
        global $conn; // Kết nối với cơ sở dữ liệu

        $sql = "INSERT INTO pet (name_pet, category, quantity, gender, price, picture, description) 
                VALUES ('$name_pet', '$category', $quantity, '$gender', $price, '$picture', '$description')";
        mysqli_query($conn, $sql); 
        $lastInsertId = mysqli_insert_id($conn);
        return $lastInsertId;
    }


    //get all pets
    public function select_all_pets(){
        global $conn;
        $sql = "SELECT * FROM pet";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_pet($id_pet){
        global $conn;
        $sql = "SELECT * FROM pet WHERE id_pet =$id_pet";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //delete pet
    public function delete_pet($id_pet) {
        global $conn; // Kết nối với cơ sở dữ liệu
        $sql = "DELETE FROM pet WHERE id_pet = $id_pet"; // Sử dụng trực tiếp giá trị id_pet trong câu lệnh SQL
        return mysqli_query($conn, $sql); // Thực thi câu lệnh SQL
    }


    //update pet
    public function update_pet($id_pet, $name_pet, $category, $quantity, $gender, $price, $picture, $description)
    {
        global $conn;
        $sql = "UPDATE pet 
                SET name_pet = '$name_pet', 
                    category = '$category', 
                    quantity = '$quantity', 
                    gender = '$gender', 
                    price = '$price', 
                    picture = '$picture', 
                    description = '$description' 
                WHERE id_pet = '$id_pet'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }



    //insert image library
    public function insert_image($id_pet, $path) {
        global $conn; // Kết nối với cơ sở dữ liệu
        $sql = "INSERT INTO image_library (id_pet, path) VALUES ($id_pet, '$path')";
        
        $run = mysqli_query($conn, $sql);
        
        return $run; // Trả về kết quả thực thi câu lệnh
    }


    //delete pet's image
    public function delete_image($id_pro){
        global $conn;
        $sql = "DELETE FROM `image_library` WHERE id_pro = $id_pro";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_order(){
        global $conn;
        $sql = "SELECT * FROM order_pro";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    //get order_detail
    public function order_detail( $id_order ){
        global $conn;
        $sql = "SELECT * FROM order_detail WHERE id_order='$id_order'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function order_status($id_order, $status)
    {
        global $conn;
        $sql = "UPDATE order_pro SET status='$status' WHERE id_order='$id_order'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_sale(){
        global $conn;
        $sql = "SELECT * FROM `order_pro` WHERE status = N'Hoàn thành'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function revenue(){
        global $conn;
        $sql = "SELECT month(date) as month, SUM(total_order) as total 
                FROM order_pro 
                WHERE status = N'Hoàn thành' 
                GROUP BY month(date)";
        $run = mysqli_query($conn,$sql);
        return $run;
    }

    }
?>
