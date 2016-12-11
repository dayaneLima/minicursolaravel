<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form method="post" action="{{route("aluno.gravar")}}">
            {{csrf_field()}}
            <label for="">Nome</label>
            <input type="text" name="nome" value="{{$aluno->nome}}">
            <br>
            <label for="">E-mail</label>
            <input type="text" name="email" value="{{$aluno->email}}">
            <br>
            <input type="hidden" name="idAluno" value="{{$aluno->idAluno}}">
            <br>
            <button type="submit" >Gravar</button>            
        </form>
    </body>
</html>