<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #4CAF50;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <h1>Editar Produto</h1>
    <div class="container">
        <form action="/editar-produto/{{ $produto->id }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="lblNome">Nome:</label>
                <input type="text" name="nome" value="{{ $produto->nome }}" required>
            </div>

            <div class="form-group">
                <label for="lblValor">Valor:</label>
                <input type="text" name="valor" value="{{ $produto->valor }}" required>
            </div>

            <div class="form-group">
                <label for="lblQuantidade">Quantidade:</label>
                <input type="text" name="estoque" value="{{ $produto->estoque }}" required>
            </div>

            <button type="submit">Atualizar Produto</button>
        </form>
    </div>
</body>

</html>
