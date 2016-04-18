<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
class UserController extends Controller {

    /**
     * Mostrar el perfil de un usuario dado.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {

        return view('form.form');
    }

}