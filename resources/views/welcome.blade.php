<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/853318240267534376/898733209385320478/unknown.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>SoloQ Palermo Challenge</title>

    <style>
        thead{
            background:linear-gradient(274deg, #47919d, #0a2830, #2e636c, #0a2830);
            border:0px solid transparent;
            background-size: 400% 400%;
            color:#a3a071;
        }
        td{
            border: 0px solid transparent;
        }
        .tdn {
            line-height: 250%;
        }
        body{
            background-color:#121212;
        }
        table{
            border-color:#af7c41 !important;
            background-color: white;
            border: 2px solid;
        }
    </style>
  </head>
  <body class="container-sm">
    <h1 class="text-center" style="color:white;">SoloQ Palermo Challenge</h1>
    <table id="categorias" class="table table-striped table-bordered  text-center" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cuenta</th>
                <th scope="col">Rank</th>
                <th scope="col">Winrate</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($array as $participante)
            <tr>            
                @if (count($participante)<4)
                    <td class="tdn">{{$participante[5]['nombre']}}</td>
                    <td class="tdn">{{$participante[0]->summonerName}}</td>
                    <td class="card-body">
                        <h6 class="card-title">{{$participante[0]->tier}} {{$participante[0]->rank}}</h5>
                        <p class="card-text">({{$participante[0]->leaguePoints}} LP)</p>
                    </td>
                    <td>
                        <h6 class="card-title">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{number_format($participante[0]->wins/($participante[0]->wins+$participante[0]->losses)*100)}}%">
                                {{$participante[0]->wins}}
                            </div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{number_format($participante[0]->losses/($participante[0]->losses+$participante[0]->wins)*100)}}%">
                                {{$participante[0]->losses}}
                            </div>
                        </div></h5>
                        <p class="card-text">
                            {{number_format($participante[0]->wins/($participante[0]->wins+$participante[0]->losses)*100)}}%
                        </p>
                    </td>



                @else(count($participante)<3)
                    <td class="tdn">{{$participante[5]['nombre']}}</td>
                    <td class="tdn">{{$participante[1]->summonerName}}</td>
                    <td class="card-body">
                        <h6 class="card-title">{{$participante[1]->tier}} {{$participante[1]->rank}}</h5>
                        <p class="card-text">({{$participante[1]->leaguePoints}} LP)</p>
                    </td>
                    <td class="card-body">
                        <h6 class="card-title">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{number_format($participante[1]->wins/($participante[1]->wins+$participante[1]->losses)*100)}}%">
                                {{$participante[1]->wins}}
                            </div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{number_format($participante[1]->losses/($participante[1]->losses+$participante[1]->wins)*100)}}%">
                                {{$participante[1]->losses}}
                            </div>
                        </div></h5>
                        <p class="card-text">
                            {{number_format($participante[1]->wins/($participante[1]->wins+$participante[1]->losses)*100)}}%
                        </p>
                    </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>