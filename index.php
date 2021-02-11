<?php require_once("_reqs.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Sample</title>
</head>

<body>
    <main id="main-content">
        <table>
            <tbody>
                <tr>
                    <td><?php getStory(1); ?></td>
                    <td><?php getStory(2); ?></td>
                    <td><?php getStory(3); ?></td>
                    <td><?php getStory(4); ?></td>
                    <td><?php getStory(5); ?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>