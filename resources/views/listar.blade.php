<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Pessoas</title>

</head>

<body>
        <h1>Listar Pessoas</h1>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>*</th>
                    <th>*</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pessoas as $p)
                <tr>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->idade}}</td>
                    <td><a href="/editar/{{$p->id}}">Editar</a></td>
                    <td><a href="/excluir/{{$p->id}}">Excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
        <a href="/">Voltar</a>
</body>

</html>