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
            <input type="text" name="nome" value="">
            <br>
            <label for="">E-mail</label>
            <input type="text" name="email" value="">
            <br>
            <label for="">Matrícula</label>
            <input type="text" name="matricula" value="">
            <br>
            <input type="hidden" name="idAluno" value="">
            <br>
            <button type="submit" >Gravar</button>            
        </form>
    </body>
</html>