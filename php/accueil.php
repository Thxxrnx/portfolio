<a href="#a_propos"><section id="site" >
<div id="accueil">
        <h1>ACCUEIL</h1>
        <?php
        $data=yaml_parse_file("yml/accueil.yaml");
        echo"<p>".$data["sous-titre"]."</p>";
        ?>
    </div>
    
</section></a>