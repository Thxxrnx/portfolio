<section id="a_propos" class="two-column-section">
<div id="bio" class="right-column">
    <article>
    <?php
            $data = yaml_parse_file("yml/a_propos.yaml");

            if (isset($data['presentation'])) {
                echo "<h2>" . $data['presentation']['nom'] . " " . $data['presentation']['prenom'] . "</h2>";
                echo "<p>" . nl2br($data['presentation']['description']) . "</p>";

                echo "<h3>Objectifs :</h3>";
                echo "<ul>";
                foreach ($data['presentation']['objectifs'] as $objectif) {
                    echo "<li>$objectif</li>";
                }
                echo "</ul>";

                echo "<h3>Recherche :</h3>";
                echo "<p>" . $data['presentation']['recherche'] . "</p>";
            } else {
                echo "<h2>Aucune information de présentation disponible.</h2>";
            }
            ?>
    </article>
    </div>    

<div id="ap" class="left-column">
        <?php
        $data=yaml_parse_file("yml/a_propos.yaml");
        echo"<h2>".$data["sous-titre"]."</h2>";
        ?>
    </div>    
    </section>