<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Pessoa</title>
</head>

<body>
        <h1>Resultados:</h1>
        <p>ID pesquisado: <input type="text" name="id" value="{{$pessoa->id}}" disabled> </p>
        <br><br>
        <form action="/editar-pessoa/{{$pessoa->id}}" method="post">
            <fieldset>
                @csrf
                <label for="lblNome">Nome: </label>
                <input type="text" name="nome" value="{{$pessoa->nome}}" >
                <br>
                <label for="lblIdade">Idade: </label>
                <input type="text" name="idade" value="{{$pessoa->idade}}" >
                <br><br>
                <button>Salvar</button>
            </fieldset>
        </form>
        <br><br>
        <a href="/">Voltar ao início</a>
</body>

</html>