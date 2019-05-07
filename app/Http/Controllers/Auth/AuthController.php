<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Modules\User\Authentication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    /**
     * @var Authentication $authentication
     */
    private $authentication;


    /**
     * @var User $user
     */
    private $user;


    /**
     * AuthController constructor.
     */
    public function __construct()
    {

        $this->authentication = new Authentication();
        $this->user = new User();
    } // end constructor
    /**
     * login user...
     *
     * @param Request $request
     * @return array|null
     */
    public function login(Request $request)
    {

        // validate request
        $validation = $this->handleLoginValidation($request);

        if ($validation->fails()) {
            return return_msg(false, 'validation error...', [
                'errors' => $validation->getMessageBag()->getMessages()
            ]);
        }

        $user_login = $this->authentication->login($request->all());

        if (!$user_login['status']) {

            // append username validation error to error bag
            $validation->getMessageBag()->add($user_login['data']['parameter'], $user_login['msg']);

            // response...
            return return_msg(false, 'invalid credentials...', [
                'errors' => $validation->getMessageBag()->getMessages()
            ]);
        }

        $user = $user_login['data']['user'];

        return return_msg(true, 'login done successfully', compact('user'));
    }


    public function handleLoginValidation(Request $request)
    {

        return validator($request->all(), [
            'username' => 'required|min:1',
            'password' => 'required|min:6|max:20'
        ]);
    }

}