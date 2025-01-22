<body>
    <?php

    $str = "On n est pas le meilleur quand on le croit mais quand on le sait";

    $dic = [
        "voyelles" => 0,
        "consonnes" => 0,
    ];

    $vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $dic["voyelles"]++;
        } else if ($str[$i] != " ") {
            $dic["consonnes"]++;
        }
    }
    ?>

    <table>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
        <tr>
            <td><?php echo $dic['voyelles']; ?></td>
            <td><?php echo $dic['consonnes']; ?></td>
        </tr>
    </table>
</body>