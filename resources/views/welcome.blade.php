<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #E5E5E5;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: center;
        }

        .lineInfo{
            margin-top: 30px;
            width: 300px;
            height: 350px;
            display: flex;
            background-color: #65BDC0;
            flex-direction: column;
            border-radius: 35px;
        }

        .lineInfoCustomer{
            margin-top: 30px;
            width: 300px;
            height: 350px;
            display: flex;
            background-color: #EE777F;
            flex-direction: column;
            border-radius: 35px;
        }

        .imageUser{
            height: 100px;
            width: 100px;
        }

        .headerCard{
            height: 200px;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            /* margin-bottom: 10px; */
        }


        .bottomCard {
            background: #FFF;
            height: 150px;
            border-bottom-left-radius: 35px;
            border-bottom-right-radius: 35px;
            display: flex;
            align-items: start;
            justify-content: center;
            /* padding-left: 30px; */
            display: flex;
            flex-direction: column;
            padding-left: 30px;
            font-size: 20px;

        }

        #name {
            margin-top: 10px;
            color: #FFF;
            font-size: 25px;
            /* font-weight: 400; */
            font-weight: bold;
        }

        #email{
            color: #FFF;
        }

        .input-block {
            /* width: 100%; */
            height: 60px;
            margin-top: 0.8rem;
            border-radius: 0.8rem;
            background:#F8F8FC;
            border: 1px solid  #E6E6F0;
            outline: 0;
            padding: 0 1.6rem;
            /* margin-left:20px; */
            /* font: 1.6rem Archivo; */


        }

        .form{
            width: 100%;
            margin-left: 20px;
            margin-top: 20px;
            margin-right: 30px;
            display: flex;
            flex-direction: column;
            max-width: 1100px;
            /* background-color: #636b6f */
        }


        .enviarButton{
            /* width: 20rem; */
            height: 60px;
            background: #8257E5;
            color: #FFF;
            border: 0;
            border-radius: 0.8rem;
            cursor: pointer;
            /* font: 700 1.4rem Archivo; */
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            transition: 0.2s;
            text-decoration: none;
            margin-top: 15px
        }

        .enviarButton:hover{
            background: #6842C2;
        }



        @media( min-width: 1100px){
            body{
                flex-direction: column;
                /* flex-basis: 30%; */
                /* flex-wrap: wrap; */
                /* justify-content: center; */
            }
            .lineInfo {
                margin-left: 30px;
            }

            .lineInfoCustomer{
                margin-left: 30px;
                margin-top: 30px;
                width: 300px;
                height: 350px;
                display: flex;
                background-color: #EE777F;
                flex-direction: column;
                border-radius: 35px;
            }
            .cards{
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .enviarButton:hover{
                background: #6842C2;
            }

            .form{
                min-width: 1100px;
            }
        }
    </style>
</head>

<body>


    <form action="{{route('employee.index')}}" method="GET" class="form" name='get'>
        <a href='{{route('employee.store')}}' class="enviarButton">GET</a>
    </form>
    <form action="{{route('employee.store')}}" method="POST" class="form" name='users'>
        @csrf
        <a href='javascript:users.submit()' class="enviarButton">POST</a>
    </form>
    {{-- <a href='{{route('employee.store')}}' class="enviarButton">POST</a> --}}
    {{-- <a href="{{route('test.index')}}">cadastrar</a> --}}

</body>

</html>
