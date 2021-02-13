<?php require_once("./partials/_reqs.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/p1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Sample</title>
</head>

<body>
    <header id="main-header">
        <div class="headings">
            <h1 class="heading-bg">
                Theorybase
            </h1>
            <h3>A simple anime theory page</h3>
        </div>
        <div class="navs">
            <ul>
                <li class="list-items"><a href="https://www.facebook.com/chokeme.daddee"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li class="list-items"><a href="https://twitter.com/sintaxx_"><i class="fab fa-twitter fa-2x"></i></a></li>
                <li class="list-items"><a href="https://github.com/BossDodz"><i class="fab fa-github fa-2x"></i></a></li>
                <li class="list-items"><a href="https://www.linkedin.com/in/sintaxx/"><i class="fab fa-linkedin fa-2x"></i></a></li>
            </ul>
        </div>
    </header>
    <main id="main-content">
        <table>
            <tbody>
                <tr>
                    <td>
                        <div class="container"><?php getStory(1); ?></div>
                    </td>
                    <td>
                        <div class="container"><?php getStory(2); ?></div>
                    </td>
                    <td>
                        <div class="container"><?php getStory(3); ?></div>
                    </td>
                    <td>
                        <div class="container"><?php getStory(4); ?></div>
                    </td>
                    <td>
                        <div class="container"><?php getStory(5); ?></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>