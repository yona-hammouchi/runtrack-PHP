<title>Formulaire de transformation</title>

<body>
    <form method="post" action="">
        <label for="text">Entrez une chaîne de caractères :</label><br>
        <input type="text" id="text" name="text" required><br><br>

        <label for="transformation">Choisissez une transformation :</label><br>
        <select id="transformation" name="transformation" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>

        <input type="submit" value="Transformer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $text = $_POST['text'];
        $transformation = $_POST['transformation'];

        // Fonction pour mettre en gras les mots commençant par une majuscule
        function makeBold($text)
        {
            return preg_replace_callback('/\b[A-Z][a-zA-Z]*\b/', function ($matches) {
                return '<strong>' . $matches[0] . '</strong>';
            }, $text);
        }

        // Fonction pour appliquer le chiffrement de César
        function cesar($text, $shift = 2)
        {
            $result = '';
            foreach (str_split($text) as $char) {
                if (ctype_alpha($char)) {
                    $ascii_offset = ctype_upper($char) ? 65 : 97;
                    $result .= chr(($ascii_offset + (ord($char) - $ascii_offset + $shift) % 26));
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        // Fonction pour ajouter un underscore aux mots finissant par "me"
        function addUnderscore($text)
        {
            return preg_replace('/\b(\w*me)\b/', '$1_', $text);
        }

        // Appliquer la transformation sélectionnée
        $result = '';
        switch ($transformation) {
            case 'gras':
                $result = makeBold($text);
                break;
            case 'cesar':
                $result = cesar($text);
                break;
            case 'plateforme':
                $result = addUnderscore($text);
                break;
            default:
                $result = "Transformation invalide.";
        }

        echo "<h3>Résultat :</h3><p>$result</p>";
    }
    ?>
</body>