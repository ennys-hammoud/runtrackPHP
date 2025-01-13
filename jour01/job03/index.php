<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03 - Types de Variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tableau des Variables</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Déclaration des variables
            $boolean = true;
            $integer = 42;
            $string = "Bonjour, LaPlateforme!";
            $float = 3.14;

            // Tableau associatif des variables
            $variables = [
                "boolean" => $boolean,
                "integer" => $integer,
                "string" => $string,
                "float" => $float
            ];

            // Affichage des variables dans le tableau
            foreach ($variables as $name => $value) {
                echo "<tr>";
                echo "<td>" . gettype($value) . "</td>";
                echo "<td>$name</td>";
                echo "<td>";
                // Convertir booléens en texte pour un affichage lisible
                echo is_bool($value) ? ($value ? "true" : "false") : $value;
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>