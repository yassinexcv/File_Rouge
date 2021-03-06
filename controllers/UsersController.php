<?php 

class UsersController
{
    public function auth()
    {
        if (isset($_POST["submit"])) {
            $data["username"] = $_POST["username"];
            $result = User::login($data);
            if ($result->username === $_POST["username"] && password_verify($_POST["password"], $result->password)) {
                session_start();
                $_SESSION["logged"] = true;
                $_SESSION["username"] = $result->username;
                $_SESSION["fullname"] = $result->fullname;
                $_SESSION["admin"] = $result->admin;
                $_SESSION["user_id"] = $result->user_id;
                // Redirect::to("home");
                if($result->admin == 1) {
                    header("Location: " . BASE_URL."dashboard");
                    exit;
                }else if($result->admin == 0) {
                    header("Location: " . BASE_URL);
                    exit;
                }
                header("Location: " . BASE_URL);
            }else{
                Session::set("error","Pseudo ou mot de passe est incorrect");
                header("Location: " . BASE_URL."login");
            }
        }
    }
    
    public function register()
    {
       
        $options = [
            "cost" => 12
        ];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT, $options);
        $data = array(
            "fullname" => $_POST["fullname"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => $password,
        );
        $result = User::createUser($data);
        if ($result === "ok") {
            Session::set("success", "Account created successfully");
            Redirect::to("login");
        } else {
            echo $result;
        }
    }
    public function logout()
    {
       session_destroy();
       header("Location: " . BASE_URL);
    }
    public function getAllUsers(){
        $users = User::getAll();
        return $users;
    }
    public function getUserById($id){

        
            $data = array(
                'id' => $id
            );
            $user = User::getUserById($data);
            return $user;
        
    }
    public function deleteUser($id){
        if(isset($id)){
            $data = array(
                'id' => $id
            );
            $result = User::deleteUser($data);
            if($result === "ok"){
                Session::set("success","User deleted successfully");
                header("Location: " . BASE_URL."users");
            }else{
                echo $result;
            }
        }
    }

}