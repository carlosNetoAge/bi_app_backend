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

        return response()->json([
            "cabecalho" => [
                "entrada" => "00260613177",
                "produto" => "LOCALIZE",
                "consulta" => "PESSOA_FISICA",
                "protocoloTransacao" => "66540347-f307-4a43-9632-26bc80e86c63",
                "dataHora" => "11/07/2022 15:49:03"
            ],
            "cadastro" => [
                "cpf" => "00260613177",
                "nome" => "VINICIUS GALILEU LOPES DA SILVA",
                "sexo" => "M",
                "dataNascimento" => "02/06/1984",
                "idade" => "38",
                "faixaIdade" => "35 a 39 anos",
                "signo" => "Gêmeos",
                "rg" => null,
                "ufRg" => null,
                "status" => "REGULAR",
                "statusData" => "31/01/2022",
                "maeNome" => "RUTE SOUSA DA SILVA",
                "maeCpf" => "21004579187",
                "obitoProvavel" => "NÃO",
                "tituloEleitoral" => null,
                "grauInstrucao" => "Informação não disponível",
                "dependentes" => null,
                "estadoCivil" => null,
                "tags" => null,
                "ppe" => 0
            ],
            "participacoesEmpresas" => [],
            "rendaEmpregador" => [
                [
                    "posicao" => "0",
                    "empregador" => "SAMA SERVICOS OPERACIONAIS LTDA",
                    "documentoEmpregador" => "22918594000157",
                    "setorEmpregador" => "Publicidade",
                    "cboCodigo" => null,
                    "cboDescricao" => null,
                    "cboSetor" => null,
                    "cboSinonimos" => null,
                    "rendaEstimada" => null,
                    "faixaRenda" => null,
                    "rendaDataRef" => "2021-12-31",
                    "tags" => null
                ],
                [
                    "posicao" => "1",
                    "empregador" => "OFICINA DE SERVICOS OPERACIONAIS EIRELI",
                    "documentoEmpregador" => "08870900000100",
                    "setorEmpregador" => "Publicidade",
                    "cboCodigo" => "411005",
                    "cboDescricao" => "Auxiliar de escritório",
                    "cboSetor" => null,
                    "cboSinonimos" => null,
                    "rendaEstimada" => null,
                    "faixaRenda" => null,
                    "rendaDataRef" => "2021-12-31",
                    "tags" => null
                ],
                [
                    "posicao" => "2",
                    "empregador" => "P.O.P. SERVICOS TEMPORARIOS LTDA",
                    "documentoEmpregador" => "03774670000153",
                    "setorEmpregador" => "Locação de mão de obra temporária",
                    "cboCodigo" => null,
                    "cboDescricao" => null,
                    "cboSetor" => null,
                    "cboSinonimos" => null,
                    "rendaEstimada" => null,
                    "faixaRenda" => null,
                    "rendaDataRef" => "2020-09-22",
                    "tags" => null
                ],
                [
                    "posicao" => "3",
                    "empregador" => "FEELING TRADE MARKETING E PROMOCAO LTDA",
                    "documentoEmpregador" => "05569822000101",
                    "setorEmpregador" => "Publicidade",
                    "cboCodigo" => "411005",
                    "cboDescricao" => "Auxiliar de escritório",
                    "cboSetor" => null,
                    "cboSinonimos" => null,
                    "rendaEstimada" => null,
                    "faixaRenda" => null,
                    "rendaDataRef" => "2018-01-10",
                    "tags" => null
                ]
            ],
            "telefones" => [
                "fixos" => null,
                "moveis" => [
                    [
                        "posicao" => "0",
                        "telefone" => "61984685793",
                        "operadora" => "OI Móvel S.A",
                        "pontuacao" => null,
                        "grupo" => null,
                        "relacao" => "Direto",
                        "naoPerturbe" => false,
                        "tags" => null
                    ],
                    [
                        "posicao" => "1",
                        "telefone" => "61984685798",
                        "operadora" => "OI Móvel S.A",
                        "pontuacao" => null,
                        "grupo" => null,
                        "relacao" => "Direto",
                        "naoPerturbe" => false,
                        "tags" => null
                    ]
                ]
            ],
            "enderecos" => [
                [
                    "posicao" => "0",
                    "tipoLogradouro" => null,
                    "logradouro" => "SHCES QD 1105 BL H",
                    "numero" => null,
                    "complemento" => "101",
                    "bairro" => "CRUZEIRO NOVO",
                    "cidade" => "BRASILIA",
                    "uf" => "DF",
                    "cep" => "70658158",
                    "latitude" => "-15.796390000001",
                    "longitude" => "-47.937095000001",
                    "pontuacao" => null,
                    "grupo" => null,
                    "tags" => null
                ]
            ],
            "emails" => [
                [
                    "posicao" => "0",
                    "email" => "vinicius.galileu2@gmail.com",
                    "pontuacao" => null,
                    "grupo" => null,
                    "relacao" => "Direto",
                    "tags" => null
                ],
                [
                    "posicao" => "1",
                    "email" => "vinicius.galileu@gmail.com",
                    "pontuacao" => null,
                    "grupo" => null,
                    "relacao" => "Direto",
                    "tags" => null
                ]
            ]
        ]);

    }
}
