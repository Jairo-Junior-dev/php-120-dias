<?php
$pessoa = [
    "Nome" => "Jairo",
    "Idade" => 27,
    "Gostos Musicais" => ["Rock", "Blues", "Jazz"]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Pessoa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 20px;
        }
        table {
            width: 60%;
            margin: 0 auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            vertical-align: top;
        }
        th {
            background-color: #4CAF50;
            color: white;
            width: 30%;
        }
        ul {
            margin: 0;
            padding-left: 20px;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        caption {
            caption-side: top;
            font-size: 1.5em;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <table>
        <caption>Informações da Pessoa</caption>
        <tbody>
        <?php foreach ($pessoa as $key => $values): ?>
            <tr>
                <th><?php echo $key; ?></th>
                <td>
                    <?php if (is_array($values)): ?>
                        <ul>
                            <?php foreach ($values as $value): ?>
                                <li><?php echo $value; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <?php echo $values; ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
