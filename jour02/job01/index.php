<title>Afficher les nombres</title>

</head>

<body>
    <?php
    for ($i = 0; $i <= 1337; $i++) {
        if ($i == 42) {
            echo "<span class='special'>$i</span><br>";
        } else {
            echo "$i<br>";
        }
    }
    ?>
</body>

</html>