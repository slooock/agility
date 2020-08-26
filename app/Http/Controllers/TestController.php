<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request){

        $api_url = 'https://eagle-backend-staging.somosagility.com.br/getTeste';

        $response = file_get_contents($api_url);

        $info = json_decode($response, true)['user'];

        usort($info, function ($a, $b) {
            return $a['customer'] <=> $b['customer'];
        });


        $nome = $request->name;
        $customer = $request->customer;
        $email = $request->email;
        $itensFiltrados = $info;

        if($nome!=''){
          $itensFiltrados = array_filter($info, function($user) use ($nome){
              return $user['name'] == $nome;
          });
      }

      if($customer!=''){

        $itensFiltrados = array_filter($itensFiltrados, function($user) use ($customer){
            return $user['customer'] == $customer;
        });
      }

      if($email!=''){

        $itensFiltrados = array_filter($itensFiltrados, function($user) use ($email){
            return $user['email'] == $email;
        });

      }


        // return(json_decode(json_encode($info)));
        return view('getTeste', ['users' => json_decode(json_encode($itensFiltrados))]);
        // return redirect('/');
        // return 'aaaaa';

    }

    public function create(Request $request){
        $api_url = 'https://eagle-backend-staging.somosagility.com.br/getTeste';

        $response = file_get_contents($api_url);
        dd('post');

    //     $info = json_decode($response, true)['user'];

    //     usort($info, function ($a, $b) {
    //         return $a['customer'] <=> $b['customer'];
    //     });


    //     $nome = $request->name;
    //     $customer = $request->customer;
    //     $email = $request->email;
    //     $itensFiltrados = $info;

    //     if($nome!=''){
    //       $itensFiltrados = array_filter($info, function($user) use ($nome){
    //           return $user['name'] == $nome;
    //       });
    //   }

    //   if($customer!=''){

    //     $itensFiltrados = array_filter($itensFiltrados, function($user) use ($customer){
    //         return $user['customer'] == $customer;
    //     });
    //   }

    //   if($email!=''){

    //     $itensFiltrados = array_filter($itensFiltrados, function($user) use ($email){
    //         return $user['email'] == $email;
    //     });

    //   }


    //     // return(json_decode(json_encode($info)));
    //     return view('getTeste', ['users' => json_decode(json_encode($itensFiltrados))]);
        // return redirect('/');
        return 'aaaaa';

    }
}
