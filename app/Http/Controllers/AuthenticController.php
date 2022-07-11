<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use LdapRecord\Auth\BindException;
use LdapRecord\Connection;

class AuthenticController extends Controller
{
    public function login(Request $request)
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

                // Separa o nome e o sobrenome
                $nomeSeparado = explode(".", explode("@", $username)[0]);

                if(empty($nomeSeparado[1])){
                    $nomeSeparado[1] = "";
                    $username = $nomeSeparado[0]."@agetelecom.com.br";
                } else {
                    $username = $nomeSeparado[0].".".$nomeSeparado[1]."@agetelecom.com.br";
                }

                $user = User::where('email', $username)->first();

                if(isset($user->email)) {

                    $user->update([
                        'personal_token' => Hash::make(Str::random(40))
                    ]);

                    return response()->json([
                        'token' => $user->personal_token,
                        'user_id' => $user->id,
                        'email' => $user->email,
                        'msg' => 'Usuário autenticado com sucesso!'
                    ]);

                } else {

                    // Separa o nome e o sobrenome
                    $nomeSeparado = explode(".", explode("@", $username)[0]);

                    if(empty($nomeSeparado[1])){
                        $nomeSeparado[1] = "";
                        $username = $nomeSeparado[0]."@agetelecom.com.br";
                    } else {
                        $username = $nomeSeparado[0].".".$nomeSeparado[1]."@agetelecom.com.br";
                    }

                    $user = User::create([
                                'nome' => ucfirst($nomeSeparado[0]),
                                'sobrenome' => ucfirst($nomeSeparado[1]),
                                'email' => $username,
                                'setor_id' => 1,
                                'privilegio' => 0,
                                'personal_token' => Hash::make(Str::random(40))
                            ]);

                    return response()->json([
                        'token' => $user->personal_token,
                        'user_id' => $user->id,
                        'email' => $user->email,
                        'msg' => 'Usuário autenticado com sucesso!'
                    ]);

                }

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

//

    }

}
