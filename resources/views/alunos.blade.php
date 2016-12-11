<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Alunos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <a href="{{route('aluno.novo')}}" targer="_blank">Novo Aluno</a>
        <br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>        
            </thead>
            <tbody>                
                @foreach($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->matricula }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>
                            <a href="{{route('aluno.editar',$aluno->idAluno)}}">
                                Editar
                            </a>
                        </td>
                         <td>
                            <a href="{{route('aluno.excluir',$aluno->idAluno)}}">
                                Excluir
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>