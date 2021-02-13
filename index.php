<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./dist/css/menu.css" />
    <title>Menu | Module 4</title>
</head>

<body id="body">
    <main id="main-content">
        <div class="card">
            <div class="cover">
                <span class="cover-text">
                    <h2>Hover over me</h2>
                </span>
            </div>
            <div class="contents">
                <span class="button p1"><a href="./dist/P1.php">Problem 1</a></span>
                <span class="button p2"><a href="./dist/P2.php">Problem 2</a></span>
            </div>
        </div>
    </main>
</body>
<script type="text/javascript" src="./js/vanilla-tilt.min.js"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 400,
        glare: true,
        "max-glare": 1,
    });
</script>

</html>