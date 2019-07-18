<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Many to Many</title>
    </head>
    <body>
        <h1>Relacion</h1>

        {!! Form::model($user, ['route' => ['putEdit', $user->id], 'method' => 'PUT']) !!}

            <div>
                <p>
                    <strong>Usuario (Autor):</strong>
                    {{ $user->name }}
                </p>
            </div>
            <div>
                {!! Form::label('books', 'Libros:') !!}
                {!! Form::select('books[]', $books, null, ['multiple']) !!}
            </div>

            {!! Form::submit('Actualizar') !!}

        {!! Form::close() !!}
    </body>
</html>