<html>
<head>
    <title>certificado</title>
</head>
<body>
    <h1>{{ $certificado->membro->nome}}</h1>
    <p>{{ $certificado->descricao }}</p>
    <p>Horas {{ $certificado->horas }}</p>
    <p>{{ $certificado->data }}</p>
    <p>{{ $certificado->token }}</p>
</body>
</html>