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
//        $connection = new Connection([
//            'hosts'            => ['10.25.0.1'],
//            'base_dn'          => 'dc=tote, dc=local',
//            'username'         => 'ldap',
//            'password'         => 'iAcWMMqC@',
//
//            // Optional Configuration Options
//            'port'             => 389,
//            'use_ssl'          => false,
//            'use_tls'          => false,
//            'version'          => 3,
//            'timeout'          => 5,
//            'follow_referrals' => false,
//
//        ]);
//
//        $message = '';

//        try {
//            $connection->connect();
//
//            $username = $request->input('username').'@tote.local';
//            $password = $request->input('password');
//
//            if ($connection->auth()->attempt($username, $password)) {
//
//
//                $user = User::where('email', $username)->first();
//
//                if(isset($user->email)) {
//
//                    $str = Str::random(40);
//
//                    $user->update([
//                        'personal_token' => Hash::make($str)
//                    ]);
//
//                    return response()->json([
//                        'token' => $user->personal_token,
//                        'user_id' => $user->id,
//                        'email' => $user->email,
//                        'msg' => 'Usuário autenticado com sucesso!'
//                    ]);
//
//                } else {
//
//                    // Separa o nome e o sobrenome
//                    $nomeSeparado = explode(".", explode("@", $username)[0]);
//
//                    $primeiroNome = $nomeSeparado[0];
//                    $segundoNome = $nomeSeparado[1];
//
//                    $str = Str::random(40);
//
//                    $user = User::create([
//                                'nome' => ucfirst($primeiroNome),
//                                'sobrenome' => ucfirst($segundoNome),
//                                'email' => $username,
//                                'setor_id' => 1,
//                                'privilegio' => 0,
//                                'personal_token' => Hash::make($str)
//                            ]);
//
//                    return response()->json([
//                        'token' => $user->personal_token,
//                        'user_id' => $user->id,
//                        'email' => $user->email,
//                        'msg' => 'Usuário autenticado com sucesso!'
//                    ]);
//
//                }
//
//            } else {
//                // Invalid credentials.
//                return "Usuário ou senha incorretos!";
//            }
//
//
//        } catch (BindException $e) {
//            $error = $e->getDetailedError();
//
//            echo $error->getErrorCode();
//            echo $error->getErrorMessage();
//            echo $error->getDiagnosticMessage();
//        }

                $username = $request->input('username');

                $user = User::where('email', $username)->first();

                if(isset($user->email)) {

                    $str = Str::random(40);

                    $user->update([
                        'personal_token' => Hash::make($str)
                    ]);

                    return response()->json([
                        'token' => $user->personal_token,
                        'user_id' => $user->id,
                        'email' => $user->email,
                        'msg' => 'Usuário autenticado com sucesso!'
                    ]);
                }

    }

}
