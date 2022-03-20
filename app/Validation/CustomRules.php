<?php

namespace App\Validation;

class CustomRules
{

    public function isLogin(string $str, string $fields, array $data)
    {
        if ($data['password'] == "imigrasi") {
            session()->set([
                'username' => "admin",
                'logged_in' => TRUE
            ]);
            return true;
        }
        return false;
    }
    
    
}
