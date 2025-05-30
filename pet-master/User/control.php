<?php
    include("connect.php");
class data_user
{
public function login($user, $pass) {
    global $conn;
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        $pass = trim($pass);

        // Kiểm tra mật khẩu với password_verify
        if (password_verify($pass, $row['password'])) {
            return $row;
        } else {
            return false; // Đăng nhập thất bại nếu mật khẩu không khớp
        }
    } else {
        return false; // Đăng nhập thất bại nếu không tìm thấy người dùng
    }
}
    public function select_user($user)
    {
        global $conn;
        $sql = "SELECT * FROM user WHERE username='$user'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function insert_User($name, $pass, $email)
    {
        global $conn;
        $sql = "INSERT INTO user (username, password, email) 
                VALUES ('$name', '$pass','$email')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function count_Cart($user){
        global $conn;
        $sql = "SELECT * FROM `cart` where username='$user'";
        $run = mysqli_query($conn, $sql);
        return mysqli_num_rows($run);
    }
    public function insert_contact($name, $email, $phone, $mes)
    {
        global $conn;
        $sql = "INSERT INTO `contact`( `name`, `email`, `phone`, `messenger`) VALUES ('$name','$email','$phone','$mes')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_product()
    {
        global $conn;
        $sql = "select * from pet";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_product_cat($category)
    {
        global $conn;
        $sql = "select * from pet where category='$category'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_product_id($id)
    {
        global $conn;
        $sql = "select * from pet where id_pet='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function get_additional_images($id_pro)
    {
        global $conn;
        $sql = "SELECT path FROM image_library WHERE id_pet = '$id_pro'";
        $result = mysqli_query($conn, $sql);
        $images = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $images[] = $row['path'];
            }
        }
        return $images;
    }
    public function update_quantity_pro($id_pro, $quantity)
    {
        global $conn;
        $sql = "UPDATE `product` SET `quantity`='$quantity' WHERE id_pet ='$id_pro'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_Cart($username){
        global $conn;
        $sql = "SELECT * FROM cart WHERE username='$username'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function insert_Cart($user,$id_pro,$name,$price,$pic,$num,$total){
        global $conn;
        $sql = "INSERT INTO cart(`username`, `id_pet`, `name_pet`, `price`, `picture`, `quantity_order`, `total`) 
                VALUES ('$user','$id_pro','$name','$price','$pic', '$num', '$total')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function delete_Cart($id_pro,$user){
        global $conn;
        $sql = "DELETE FROM cart WHERE id_pet = '$id_pro' and username='$user'";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
    public function delete_All_Cart($user){
        global $conn;
        $sql = "DELETE FROM cart where username='$user'";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
    public function get_cart_item($id,$size){
        global $conn;
        $sql = "SELECT * FROM cart where id_pet='$id' and size ='$size'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_cart_item($id_pro, $newQuantity,$total,$user){
        global $conn;
        $sql="update cart set quantity_order ='$newQuantity', total='$total' where id_pet='$id_pro' and username='$user'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_cart_item($id_pro,$username){
        global $conn;
         $sql = "SELECT * FROM cart WHERE username='$username' and id_pet='$id_pro'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function insert_Order($username,$name,$phone,$add,$tatol,$pay,$status){
        global $conn;
        $sql = "INSERT INTO `order_pro`( `username`,`name`, `phone`, `address`, `total_order`, `payment`, `status`) 
            values('$username','$name','$phone','$add','$tatol','$pay','$status')";
        mysqli_query($conn,$sql);
        $lastInsertId = mysqli_insert_id($conn);
        return $lastInsertId;
    }
    public function insert_Order_Detail($id_order, $id_pro, $name, $quantity, $total)
    {
        global $conn;
        $sql = "insert into order_detail(id_order,id_pet,name_pro,quantity,total) 
            values('$id_order','$id_pro','$name','$quantity','$total')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function insert_address($user,$name,$phone,$address){
        global $conn;
        $sql = "INSERT INTO `address`(`username`, `name`, `phone`, `address`) VALUES ('$user','$name','$phone','$address')";
        $run = mysqli_query($conn,$sql);
        return $run;
    } 
        
    public function select_address($user){
        global $conn;
        $sql = "SELECT * FROM Address WHERE username='$user'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_address($user,$id, $name, $phone,$address){
        global $conn;
        $sql = "UPDATE Address SET name='$name',phone='$phone',address='$address' WHERE id_address ='$id' AND username='$user'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function delete_address($user, $id)
    {
        global $conn;
        $sql = "DELETE FROM Address WHERE username='$user' AND id_address='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_order($user){
        global $conn;
        $sql = "SELECT * FROM order_pro WHERE userName = '$user'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_add_id($user, $id)
    {
        global $conn;
        $sql = "SELECT * FROM address WHERE username= '$user' and id_address='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_add_id($user, $id, $name, $phone, $address)
    {
        global $conn;
        $sql = "UPDATE address SET name='$name', phone='$phone', address='$address' WHERE username= '$user' and id_address='$id' ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function delete_add_id($user, $id){
        global $conn;
        $sql = "DELETE FROM address WHERE username= '$user' and id_address='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_cat_list()
    {
        global $conn;
        $sql= "SELECT * FROM category";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function search($productName){
        global $conn;
        $sql = "SELECT * FROM `pet` WHERE `name_pet` LIKE N'%$productName%';";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>