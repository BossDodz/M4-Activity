<?php include_once("./partials/_p2.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/serv/p2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/icons/favicon-16x16.png">
    <link rel="manifest" href="./img/icons/site.webmanifest">
    <title>KStrings</title>
</head>

<body>
    <header id="main-header">
        <h2 class="back"><a href="../index.php"><i class="fas fa-arrow-left"></i></a></h2>
        <div class="headings">
            <h1 class="bg-header"><span class="bg-header-text">K</span>Array</h1>
            <h4 class="sm-header">A simple string manipulator</h4>
        </div>
    </header>

    <main id="main-content">
        <div class="container">
            <div class="form-elements">
                <form action="" method="post">
                    <h2 class="form-title">
                        Input the values of the array separated by commas
                    </h2>
                    <input type="text" name="array" class="inp-arr" placeholder="e.g. Eren, Annie, Saitama" autocomplete="off" required>
                    <input type="submit" value="Submit" class="btn-submit">
                    <?php if ($postGood) {
                    ?> <h2 class="array-list">Array List: <h2 class="array-items"><?php print(json_encode($strs)); ?></h2>
                        </h2>
                    <?php }
                    ?>
                </form>
            </div>
        </div>
        <?php if ($postGood) {
            echo "<div class='res'>
                    <table>
                       <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Number of Characters</th>
                          <th>Switch first character</th>
                          <th>Replace vowels with @</th>
                          <th>Check position of letter 'a'</th>
                          <th>Reverse Name</th>
                       </tr>
            ";
            for ($i = 1; $i <= count($strings); $i++) {
                $curr = $strings[$i - 1];
                echo "
                    <tr>
                      <td>$i</td>
                      <td>$curr</td>
                      <td>" . strlen($curr) . "</td>
                      <td>";
                echo (preg_match('#^\p{Lu}#u', $curr)) ? lcfirst($curr) : ucfirst($curr) . "</td>";
                echo "
                      <td>" . preg_replace('#[aeiou\s]+#i', '@', $curr) . "</td>
                      <td>";
                echo (str_contains($curr, 'A') || str_contains($curr, 'a')) ? stripos($curr, 'A') : "None" . "</td>";
                echo "
                      <td>" . strrev($curr) . "</td>
                    </tr>
                ";
            }
            echo "</table></div>";
        }

        ?>
    </main>
    <footer id="main-footer">
        <div class="copy">
            <h3 class="copyrigt"><i>&copy; 2021, Charles King. All rights reserved.</i></h3>
        </div>
        <div class="navs">
            <ul class="nav-links">
                <li class="nav-items"><a href="https://bit.ly/2YScNJD"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li class="nav-items"><a href="https://bit.ly/3oUMNry"><i class="fab fa-twitter fa-2x"></i></a></li>
                <li class="nav-items"><a href="https://bit.ly/3aBugvz"><i class="fab fa-github fa-2x"></i></a></li>
                <li class="nav-items"><a href="https://bit.ly/39VgPaK"><i class="fab fa-linkedin fa-2x"></i></a></li>
            </ul>
        </div>
    </footer>


</body>

</html>