<section id="formation" class="two-column-section">
    <div id="ap" class="left-column">
    <?php
        $data=yaml_parse_file("yml/formations.yaml");
        echo"<h2>".$data["sous-titre"]."</h2>";
    ?>
    </div>
    <div class="right-column">
        <article>
            <?php
            $data = yaml_parse_file("yml/formations.yaml");

            if (isset($data['formations']) && is_array($data['formations'])) {
                foreach ($data['formations'] as $formation) {
                    echo "<h2>" . $formation['diplome'] . "</h2>";
                    echo "<p> Spécialité : " . ($formation['specialite'] ?? 'Non spécifiée') . "</p>";
                    echo "<p>" . $formation['lieu'] . "</p>";
                    echo "<p>" . $formation['date'] . "</p>";
                }
            } else {
                echo "<h2>Aucune formation enregistrée pour le moment.</h2>";
            }
            ?>
        </article>
    </div>
</section>

