<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserSettingController extends Controller
{
    public function edit($id)
    {
    $user_datas = User::where('id', $id)
        ->where('email', 'like', 'bbbb%')
        ->get();
   
    /*foreach ($user_datas as $user_data) {
        $user_name = $user_data->name;
    }*/
//git test desu

//sourcetree test

//feature-setting test

    return view('users_setting.setting_page',[
            'user_datas' => $user_datas,
        ]);
    }
}
