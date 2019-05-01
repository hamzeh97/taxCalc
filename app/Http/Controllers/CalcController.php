<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 4/30/2019
 * Time: 3:59 AM
 */
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController{

    public function index(){
        return view('calc');
    }

}