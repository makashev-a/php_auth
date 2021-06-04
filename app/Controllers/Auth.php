<?php


namespace App\Controllers;


use App\Services\Router;

class Auth
{
    public function register($data, $files)
    {
        $email = $data["email"];
        $username = $data["username"];
        $fullname = $data["fullname"];
        $password = $data["password"];
        $password_confirmation = $data["password_confirmation"];

        if ($password !== $password_confirmation) {
            Router::error('500');
            die();
        }

        $profile_photo = $files["profile_photo"];

        $ext = '.' . pathinfo($profile_photo["name"], PATHINFO_EXTENSION);
        $fileName =  md5(strtotime('now')) . '_' . md5($profile_photo["name"]) . $ext;
        $path = "uploads/profile_photos/" . $fileName;


        if (move_uploaded_file($profile_photo["tmp_name"], $path)) {
             $user = \R::dispense('users');
             $user->email = $email;
             $user->username = $username;
             $user->fullname = $fullname;
             $user->group = 1;
             $user->profile_photo = "/" . $path;
             $user->password = password_hash($password, PASSWORD_DEFAULT);
             \R::store($user);
             Router::redirect('/login');

        } else {
            Router::error('500');
            die();
        }

    }

    public function login($data)
    {
        $email = $data["email"];
        $password = $data["password"];

        $user = \R::findOne('users', 'email = ?', [$email]);

        if (!$user) {
            die('User not found');
        }

        if (password_verify($password, $user->password)) {
            $_SESSION["user"] = [
                "id" => $user->id,
                "fullname" => $user->fullname,
                "username" => $user->username,
                "group" => $user->group,
                "email" => $user->email,
                "profile_photo" => $user->profile_photo
            ];
            Router::redirect('/profile');
        } else {
            die('Wrong password');
        }
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        Router::redirect('login');
    }
}