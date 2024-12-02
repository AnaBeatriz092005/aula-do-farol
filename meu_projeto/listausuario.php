<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Irmãos Bridgerton</title>
    <style>
        /* Estilos básicos para a tabela */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f0f9;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #e91e63; /* Rosa forte */
            color: white;
        }

        td {
            background-color: #fce4ec; /* Rosa claro */
        }

        button {
            padding: 8px 16px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .visualizar {
            background-color: #f06292; /* Rosa médio */
            color: white;
        }

        .editar {
            background-color: #ec407a; /* Rosa mais forte */
            color: white;
        }

        .deletar {
            background-color: #d81b60; /* Rosa escuro */
            color: white;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <h1>Lista de Irmãos Bridgerton</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Anthony Bridgerton</td>
                <td>anthony.bridgerton@email.com</td>
                <td>987.654.321-01</td>
                <td>
                    <button class="visualizar" onclick="alert('Visualizar Nome: Anthony Bridgerton')">Visualizar</button>
                    <button class="editar" onclick="alert('Editar Nome: Anthony Bridgerton')">Editar</button>
                    <button class="deletar" onclick="alert('Deletar Nome: Anthony Bridgerton')">Deletar</button>
                </td>
            </tr>
            <tr>
                <td>Benedict Bridgerton</td>
                <td>benedict.bridgerton@email.com</td>
                <td>123.456.789-02</td>
                <td>
                    <button class="visualizar" onclick="alert('Visualizar Nome: Benedict Bridgerton')">Visualizar</button>
                    <button class="editar" onclick="alert('Editar Nome: Benedict Bridgerton')">Editar</button>
                    <button class="deletar" onclick="alert('Deletar Nome: Benedict Bridgerton')">Deletar</button>
                </td>
            </tr>
            <tr>
                <td>Colin Bridgerton</td>
                <td>colin.bridgerton@email.com</td>
                <td>564.738.920-03</td>
                <td>
                    <button class="visualizar" onclick="alert('Visualizar Nome: Colin Bridgerton')">Visualizar</button>
                    <button class="editar" onclick="alert('Editar Nome: Colin Bridgerton')">Editar</button>
                    <button class="deletar" onclick="alert('Deletar Nome: Colin Bridgerton')">Deletar</button>
                </td>
            </tr>
            <tr>
                <td>Daphne Bridgerton</td>
                <td>daphne.bridgerton@email.com</td>
                <td>112.233.445-04</td>
                <td>
                    <button class="visualizar" onclick="alert('Visualizar Nome: Daphne Bridgerton')">Visualizar</button>
                    <button class="editar" onclick="alert('Editar Nome: Daphne Bridgerton')">Editar</button>
                    <button class="deletar" onclick="alert('Deletar Nome: Daphne Bridgerton')">Deletar</button>
                </td>
            </tr>
            <tr>
                <td>Eloise Bridgerton</td>
                <td>eloise.bridgerton@email.com</td>
                <td>738.291.054-05</td>
                <td>
                    <button class="visualizar" onclick="alert('Visualizar Nome: Eloise Bridgerton')">Visualizar</button>
                    <button class="editar" onclick="alert('Editar Nome: Eloise Bridgerton')">Editar</button>
                    <button class="deletar" onclick="alert('Deletar Nome: Eloise Bridgerton')">Deletar</button>
                </td>
            </tr>
            <tr>
                <td>Francesca Bridgerton</td>
                <td>francesca.bridgerton@email.com</td>
                <td>829.374.015-06</td>
                <td>
                    <button class="visualizar" onclick="alert('Visualizar Nome: Francesca Bridgerton')">Visualizar</button>
                    <button class="editar" onclick="alert('Editar Nome: Francesca Bridgerton')">Editar</button>
                    <button class="deletar" onclick="alert('Deletar Nome: Francesca Bridgerton')">Deletar</button>
                </td>
            </tr>
            <tr>
                <td>Gregory Bridgerton</td>
                <td>gregory.bridgerton@email.com</td>
                <td>918.374.062-07</td>
                <td>
                    <button class="visualizar" onclick="alert('Visualizar Nome: Gregory Bridgerton')">Visualizar</button>
                    <button class="editar" onclick="alert('Editar Nome: Gregory Bridgerton')">Editar</button>
                    <button class="deletar" onclick="alert('Deletar Nome: Gregory Bridgerton')">Deletar</button>
                </td>
            </tr>
            <tr>
                <td>Hyacinth Bridgerton</td>
                <td>hyacinth.bridgerton@email.com</td>
                <td>647.382.910-08</td>
                <td>
                    <button class="visualizar" onclick="alert('Visualizar Nome: Hyacinth Bridgerton')">Visualizar</button>
                    <button class="editar" onclick="alert('Editar Nome: Hyacinth Bridgerton')">Editar</button>
                    <button class="deletar" onclick="alert('Deletar Nome: Hyacinth Bridgerton')">Deletar</button>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>



