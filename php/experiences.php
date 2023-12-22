<section id="experience">
    <div>
        <article>
            <?php
            $data = yaml_parse_file("yml/experiences.yaml");

            if (isset($data['experiences']) && is_array($data['experiences'])) {
                foreach ($data['experiences'] as $experience) {
                    echo "<h2>" . $experience['titre'] . "</h2>";
                }
            } else {
                echo "<h2>" . $data["sous-titre"] . "</h2>";
            }
            ?>
        </article>
    </div>
</section>
