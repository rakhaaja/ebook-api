<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nama' => 'Rakha Arbiyandanu',
            'NIS' => '141341342242',
            'Phone' => '0895384022398',
            'Kelas' => 'XII RPL 6'
    
        ];
    }
}
