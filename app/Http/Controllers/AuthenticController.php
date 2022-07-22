<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
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
//
//        try {
//            $connection->connect();
//
//            $username = $request->input('username').'@tote.local';
//            $password = $request->input('password');
//
//            if ($connection->auth()->attempt($username, $password)) {
//
//                // Separa o nome e o sobrenome
//                $nomeSeparado = explode(".", explode("@", $username)[0]);
//
//                if(empty($nomeSeparado[1])){
//                    $nomeSeparado[1] = "";
//                    $username = $nomeSeparado[0]."@agetelecom.com.br";
//                } else {
//                    $username = $nomeSeparado[0].".".$nomeSeparado[1]."@agetelecom.com.br";
//                }
//
//                $user = User::where('email', $username)->first();
//
//                if(isset($user->email)) {
//
//                    if($user->ativo === 1) {
//                        $user->update([
//                            'personal_token' => Hash::make(Str::random(40))
//                        ]);
//
//                        return response()->json([
//                            'token' => $user->personal_token,
//                            'user_id' => $user->id,
//                            'email' => $user->email,
//                            'privilege' => $user->privilegio,
//                            'msg' => 'Usuário autenticado com sucesso!'
//                        ]);
//                    } else {
//
//                        return response()->json([
//                           'status' => false,
//                           'msg' => 'Usuário inativo! Contacte o setor responsável'
//                        ]);
//
//                    }
//
//                } else {
//
//                    // Separa o nome e o sobrenome
//                    $nomeSeparado = explode(".", explode("@", $username)[0]);
//
//                    if(empty($nomeSeparado[1])){
//                        $nomeSeparado[1] = "";
//                        $username = $nomeSeparado[0]."@agetelecom.com.br";
//                    } else {
//                        $username = $nomeSeparado[0].".".$nomeSeparado[1]."@agetelecom.com.br";
//                    }
//
//                    $date = Carbon::parse(now());
//
//                    $date = $date->format("d/m/Y");
//
//                    $user = User::create([
//                                'nome' => ucfirst($nomeSeparado[0]),
//                                'sobrenome' => ucfirst($nomeSeparado[1]),
//                                'email' => $username,
//                                'setor_id' => 1,
//                                'privilegio' => 0,
//                                'personal_token' => Hash::make(Str::random(40)),
//                                'registrado_em' => $date
//                            ]);
//
//                    return response()->json([
//                        'token' => $user->personal_token,
//                        'user_id' => $user->id,
//                        'email' => $user->email,
//                        'privilege' => $user->privilegio,
//                        'msg' => 'Usuário autenticado com sucesso!'
//                    ]);
//
//                }
//
//            } else {
//                // Invalid credentials.
//                return response()->json([
//                    'status' => false,
//                    'msg' => 'Usuário ou senha incorretos!'
//                ]);
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
//
//                    if($request->input('username') === 'administrador' && $request->input('password') === 'T2EFTuyBC') {
//
//
//                        $user = User::where('email', 'a@a')->first();
////
//                        if(isset($user->email)) {
//
//                            if ($user->ativo === 1) {
//                                $user->update([
//                                    'personal_token' => Hash::make(Str::random(40))
//                                ]);
//
//                                return response()->json([
//                                    'token' => $user->personal_token,
//                                    'user_id' => $user->id,
//                                    'email' => $user->email,
//                                    'privilege' => $user->privilegio,
//                                    'msg' => 'Usuário autenticado com sucesso!'
//                                ]);
//                            } else {
//
//                                return response()->json([
//                                    'status' => false,
//                                    'msg' => 'Usuário inativo! Contacte o setor responsável'
//                                ]);
//
//                            }
//                        }

                        return response()->json([
                            'token' => 'uiahuaisuhashahs',
                            'user_id' => 1,
                            'email' => 'a@a',
                            'privilege' => 1,
                            'msg' => 'Usuário autenticado com sucesso!'
                        ]);

                    }
    }

}
