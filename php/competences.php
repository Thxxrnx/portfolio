<section id="competences" class="two-column-section">
    <div id="cpt" class="left-column">
    <?php
        $data=yaml_parse_file("yml/competences.yaml");
        echo"<h2>".$data["sous-titre"]."</h2>";
    ?>
    </div>
    <div class="right-column">
        <article>
        <ul>
        <?php
        $data = yaml_parse_file("yml/competences.yaml");

        foreach ($data['competences'] as $categorie) {
            echo "<li><strong>" . $categorie['nom'] . "</strong><ul>";
            
            foreach ($categorie['competences'] as $competence) {
                echo "<li>";
                echo $competence['nom'] . "<br>";
                echo $competence['description'] . "<br>";
                echo $competence['niveau'];
                echo "</li>";
            }
            echo "</ul></li>";
        }
        ?>
        </ul>
        </article>
    </div>
    </section>