<?php 

require_once 'db_connect.php';


function showAllCustomer(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `customerdata` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

 function showCustomer($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `customerdata` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
} 

function showAllOwner(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `restaurantownerdata` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

 function showOwner($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `restaurantownerdata` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
} 

function showAllReport(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `report` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

 function showReport($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `report` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
} 

function searchCustomer($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `customerdata` WHERE Username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showAllDeliveryboy(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `deliveryboydata` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

 function showDeliveryboy($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `deliveryboydata` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
} 

function addCustomer($data){
	$conn = db_conn();
    $selectQuery = "INSERT into customerdata (Name, Email, Username, Password, Gender, Mobile)
VALUES (:name, :email, :username, :password, :gender, :mobile)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':gender' => $data['gender'],
        	':mobile' => $data['mobile'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function addDeliveryboy($data){
	$conn = db_conn();
    $selectQuery = "INSERT into deliveryboydata (Name, Email, Username, Password, Gender, Age, Mobile)
VALUES (:name, :email, :username, :password, :gender, :age, :mobile)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':gender' => $data['gender'],
        	':age' => $data['age'],
        	':mobile' => $data['mobile'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateCustomer($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE customerdata set Name = ?, Email = ?, Username = ?, Gender = ?, Mobile = ? where Id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username'], $data['gender'], $data['mobile'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateOwner($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE restaurantownerdata set Name = ?, Email = ?, Username = ?, RestaurantName = ?, Gender = ?, MobileNumber = ? where Id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username'], $data['restaurantname'], $data['gender'], $data['mobile'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateDeliveryboy($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE deliveryboydata set Name = ?, Email = ?, Username = ?, Gender = ?, Age = ?, Mobile = ? where Id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username'], $data['gender'], $data['age'], $data['mobile'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function deleteCustomer($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `customerdata` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deleteOwner($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `restaurantownerdata` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deleteDeliveryboy($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `deliveryboydata` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deleteReport($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `report` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showProfile($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `registration` where Username = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
} 

function searchUser($username,$pass){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `registration` where Username ='{$username}' and Password ='{$pass}'";

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function registerUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into registration (Name, Email, Username, Password, Gender, Mobile)
VALUES (:name, :email, :username, :password, :gender, :mobile)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':gender' => $data['gender'],
        	':mobile' => $data['mobile'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateProfile($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE registration set Name = ?, Email = ?, Username = ?, Gender = ?, Mobile = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username'], $data['gender'], $data['mobile'],$id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE registration set Password = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['pass'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}