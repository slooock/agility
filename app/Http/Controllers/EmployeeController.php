<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $api_url = 'https://eagle-backend-staging.somosagility.com.br/getTeste';

        $response = file_get_contents($api_url);

        $info = json_decode($response, true)['user'];
        // dd($info);
        usort($info, function ($a, $b) {
            return $a['customer'] <=> $b['customer'];
        });


        $nome = $request->name;
        $customer = $request->customer;
        $email = $request->email;
        $itensFiltrados = $info;

        if ($nome != '') {
            $itensFiltrados = array_filter($info, function ($user) use ($nome) {
                return $user['name'] == $nome;
            });
        }

        if ($customer != '') {

            $itensFiltrados = array_filter($itensFiltrados, function ($user) use ($customer) {
                return $user['customer'] == $customer;
            });
        }

        if ($email != '') {

            $itensFiltrados = array_filter($itensFiltrados, function ($user) use ($email) {
                return $user['email'] == $email;
            });
        }

        $tipoChamada = 'GET';
        // return(json_decode(json_encode($info)));
        return view('getTeste')
            ->with(['users' => json_decode(json_encode($itensFiltrados))])
            ->with(['tipoChamada' => $tipoChamada]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = http_build_query(array(
            "name"=> "Pedro Santana",
            "email"=>"augusto.santana@cashpay.com",
            "customer"=>"Cash Pay",
            "status"=> 0
            ));

        $contexto = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'content' => $dados,
                'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($dados) . "\r\n",
            )
        ));

        $resposta = file_get_contents('https://eagle-backend-staging.somosagility.com.br/postTeste?key=%40a5rom%23MnW10tW', null, $contexto);

        $info = json_decode($resposta, true)['user']['entries'];

        usort($info, function ($a, $b) {
            return $a['customer'] <=> $b['customer'];
        });

        $nome = $request->name;
        $customer = $request->customer;
        $email = $request->email;
        $itensFiltrados = $info;

        if ($nome != '') {
            $itensFiltrados = array_filter($info, function ($user) use ($nome) {
                return $user['name'] == $nome;
            });
        }

        if ($customer != '') {

            $itensFiltrados = array_filter($itensFiltrados, function ($user) use ($customer) {
                return $user['customer'] == $customer;
            });
        }

        if ($email != '') {

            $itensFiltrados = array_filter($itensFiltrados, function ($user) use ($email) {
                return $user['email'] == $email;
            });
        }

        $tipoChamada = 'POST';
        // return(json_decode(json_encode($info)));
        return view('getTeste')
            ->with(['users' => json_decode(json_encode($itensFiltrados))])
            ->with(['tipoChamada' => $tipoChamada]);

        return 'paramore é mmelhor que billie elish';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
