<?php
    require '../koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    // $refresh = header("Location:../register.php");

    if(empty($nama)){
        setcookie('error_register','Username anda kosong', time() + 2,"/");
        // echo $refresh;
    }elseif(empty($email)){
        setcookie('error_register',' Email anda kosong', time() + 2,"/");
        // echo $refresh;
    }elseif(empty($password)){
        setcookie('error_register','Password anda kosong', time() + 2,"/");
        // echo $refresh;
    }elseif(empty($confirm_password)){
        setcookie('error_register','Konfirmasi password anda kosong', time() + 2,"/");
        // echo $refresh;
    }elseif($password != $confirm_password){
        setcookie('error_register','Password & Konfirmasi tidak sama', time() + 2,"/");
        // echo $refresh;
    }else{
        $checkUser = $conn->prepare("SELECT * FROM user WHERE email=:email");
        $checkUser->bindValue(':email',$email);
        $checkUser->execute();
        if($checkUser->rowCount()){
            setcookie('error_register','Akun email sudah terdaftar', time() + 2,"/");
            // echo $refresh;
        }else{
            setcookie('error_register','',time() + 2, "/");
            $hashedpass = password_hash($password,PASSWORD_DEFAULT);
            $register = $conn->prepare("insert into user(nama,email,password,role) 
            VALUES(:nama,:email,:password,:role)");

            $register->bindValue(':nama', $nama);
            $register->bindValue(':email', $email);
            $register->bindValue(':password', $hashedpass);
            $register->bindValue(':role', 'Member');
            $register->execute();
            header("Location:../Login.php");
        }
    }
?>