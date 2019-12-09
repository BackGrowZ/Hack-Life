<link rel="stylesheet" href="Script/All_Projets/style.css" type="text/css"> 

        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=anthfpxc_web;charset=utf8', 'anthfpxc', 'rItxfJ96O9cE');
        $reponse = $bdd->query('SELECT * FROM projects');
        while ($donnees = $reponse->fetch())
        {
            $TitleProject = $donnees['Titre'];
            $PresProject = $donnees['Presentation'];
            $ProjectID = $donnees['ID'];
            $UseWordpress = $donnees['Wordpress']; //$UseWordpress = 1;
            $UsePrestashop = $donnees['Prestashop']; //$UseWordpress = 1;
            $UseBootstrap = $donnees['Bootstrap']; //$UseWordpress = 1;
            $UseHTML = $donnees['HTML']; //$UseWordpress = 1;
            $UseCSS = $donnees['CSS']; //$UseWordpress = 1;
            $UsePHP = $donnees['PHP']; //$UseWordpress = 1;
            $UseSiteVitrine = $donnees['Site_Vitrine']; //$UseWordpress = 1;
            $Useecomerce = $donnees['E-commerce']; //$UseWordpress = 1;
            
            $BadgeLabel = array(
                "WordPress" => $UseWordpress,
                "Prestashop" => $UsePrestashop,
                "Bootstrap" => $UseBootstrap,
                "HTML" => $UseHTML,
                "CSS" => $UseCSS,
                "PHP" => $UsePHP,
                "Site Vitrine" => $UseSiteVitrine,
                "E-COMMERCE" => $Useecomerce
            ); 
        ?>
        
        <div class="col-xs-6 col-md-4 project">
            <div class="home-project-box">
                <?php echo '<h1 class="display box">' . $TitleProject . '</h3>'; ?>
                <div class="home-project-desc">
                    <hr class="my-4">
                    <?php echo '<p class="lead">' . $PresProject . '</p>'; ?>
                    <hr class="my-4">
                    <div class="home-project-footer">
                        <h5>
                            <?php 
                                foreach ($BadgeLabel as $BadgeLabels => $BadgeValue)
                                {
                                    if ($BadgeValue == 1)
                                    {
                                        echo '<span class="badge badge-pill badge-info" style="margin: 0px 5px;">' . $BadgeLabels . '</span>';
                                    }
                                } 
                            ?>
                        </h5>
                        <div class="home-project-btn">
                            <?php echo '<a class="btn btn-success btn-lg" href="projet.php?id=' . $ProjectID . '" role="button">Plus d\'info</a>'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>