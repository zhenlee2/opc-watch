<?php

namespace App\Services\User;

use App\Models\Users;


use Illuminate\Support\Facades\DB;

class UserAccount
{
    public function execute()
    {
        $data = Users::all();
        return $data;
    }

}
