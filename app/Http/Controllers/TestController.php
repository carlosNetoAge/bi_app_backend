<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LdapRecord\Auth\BindException;
use LdapRecord\Connection;
use LdapRecord\Container;
use LdapRecord\Models\ActiveDirectory\User;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $connection = new Connection([
            'hosts'            => ['10.25.0.1'],
            'base_dn'          => 'dc=tote, dc=local',
            'username'         => 'ldap',
            'password'         => 'iAcWMMqC@',

            // Optional Configuration Options
            'port'             => 389,
            'use_ssl'          => false,
            'use_tls'          => false,
            'version'          => 3,
            'timeout'          => 5,
            'follow_referrals' => false,

        ]);

        $message = '';

        try {
            $connection->connect();

            $username = $request->input('username').'@tote.local';
            $password = $request->input('password');

            if ($connection->auth()->attempt($username, $password)) {



            } else {
                // Invalid credentials.
                return "Usuário ou senha incorretos!";
            }


        } catch (BindException $e) {
            $error = $e->getDetailedError();

            echo $error->getErrorCode();
            echo $error->getErrorMessage();
            echo $error->getDiagnosticMessage();
        }


    }
}
