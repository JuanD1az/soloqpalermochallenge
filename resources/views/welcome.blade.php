<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>SoloQ Palermo Challenge</title>
  </head>
  <body>
    <h1>SoloQ Palermo Challenge</h1>
    <table id="categorias" class="table table-striped table-bordered" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cuenta</th>
                <th scope="col">Rank</th>
                <th scope="col">LP</th>
                <th scope="col">Wins</th>
                <th scope="col">Losses</th>
                <th scope="col">Winrate</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($array as $participante)
            <tr>            
                @if (count($participante)<3)
                    <td>{{$participante[5]['nombre']}}</td>
                    <td>{{$participante[0]->summonerName}}</td>
                    <td>{{$participante[0]->tier}} {{$participante[0]->rank}}</td>
                    <td>{{$participante[0]->leaguePoints}}</td>
                    <td>{{$participante[0]->wins}}</td>
                    <td>{{$participante[0]->losses}}</td>
                    <td>{{number_format($participante[0]->wins/($participante[0]->wins+$participante[0]->losses)*100)}}%</td>
                @else(count($participante)<2)
                    <td>{{$participante[5]['nombre']}}</td>
                    <td>{{$participante[1]->summonerName}}</td>
                    <td>{{$participante[1]->tier}} {{$participante[1]->rank}}</td>
                    <td>{{$participante[1]->leaguePoints}}</td>
                    <td>{{$participante[1]->wins}}</td>
                    <td>{{$participante[1]->losses}}</td>
                    <td>{{number_format($participante[1]->wins/($participante[1]->wins+$participante[1]->losses)*100)}}%</td>
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