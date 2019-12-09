<link rel="stylesheet" href="Script/Projets/style.css" type="text/css"> 

<?php
$bdd = new PDO('mysql:host=localhost;dbname=anthfpxc_web;charset=utf8', 'anthfpxc', 'rItxfJ96O9cE');
$MaxID = $bdd->query('SELECT ID FROM projects ORDER BY ID DESC LIMIT 1');

while ($value = $MaxID->fetch())
{
    if (isset($_GET['id']) AND $_GET['id'] <= $value['ID'] ) /* Si la variable existe*/
    {
        $ID = $_GET['id'];
    }
    else
    {
        $ID = 1;
    }
    
    $reponse = $bdd->query('SELECT * FROM projects WHERE ID = ' . $ID);
    while ($donnees = $reponse->fetch())
    {
        $Title = $donnees['Titre'];
        $Desc = $donnees['Presentation'];
        $Besoin = [$donnees['Besoin1'], $donnees['Besoin2'], $donnees['Besoin3'], $donnees['Besoin4'], $donnees['Besoin5']];
        $Imperatif = [$donnees['Imperatif1'],$donnees['Imperatif2'],$donnees['Imperatif3'],$donnees['Imperatif4'],$donnees['Imperatif5']];
        $Outils = [$donnees['Wordpress'],$donnees['Prestashop'],$donnees['Bootstrap'],$donnees['HTML'],$donnees['CSS'],$donnees['PHP'],$donnees['Site_Vitrine'],$donnees['E-commerce']];


?>

<div class="Container_Presentation_Projet">
    <?php 
        echo '<h4 class="title_cat">' . $Title . '</h4>';
        echo '<h5 class="desc_cat">' . $Desc . '</h5>' ;
    ?>
    <div class="Container_block">
        <div class="row">
            <div class="col-md-4 project-section">
                <div class="box-project">
                    <div class="cicle-project">
                        <img class="icon-project" src="Script/Projets/img/client.svg" title="Clients">
                    </div>
                    <h3 class="box-project-title">Besoins du client</h3>
                    <div class="box-project-desc">
                        <?php 
                            for ($Number = 0; $Number <= 4; $Number++) // pour generer l'id de $Besoin
                            {
                                if ($Besoin[$Number])
                                {
                                    echo '<p><b>-</b> ' . $Besoin[$Number] . '</p>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 project-section">
                <div class="box-project">
                    <div class="cicle-project">
                        <img class="icon-project" src="Script/Projets/img/project.svg" title="Projets">
                    </div>
                    <h3 class="box-project-title">Imperatifs du projet</h3>
                    <div class="box-project-desc">
                        <?php 
                            for ($Number = 0; $Number <= 4; $Number++) // pour generer l'id de $Imperatif
                            {
                                if ($Imperatif[$Number])
                                {
                                    echo '<p><b>-</b> ' . $Imperatif[$Number] . '</p>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 project-section">
                <div class="box-project">
                    <div class="cicle-project">
                        <img class="icon-project" src="Script/Projets/img/tool.svg" title="tools">
                    </div>
                    <h3 class="box-project-title">Outils utilisés</h3>
                    <div class="box-project-desc">
                        <?php
                            // Ligne 1 
                            if ($Outils[0])
                            {
                                echo '<p><b>-</b> Wordpress</p>';
                            }
                            elseif ($Outils[1])
                            {
                                echo '<p><b>-</b> Prestashop</p>';
                            }
                            
                            // Ligne 2 
                            if ($Outils[2])
                            {
                                echo '<p><b>-</b> Bootstrap </p>';
                            }

                            // Ligne 3 
                            if ($Outils[3] AND $Outils[4] AND $Outils[5])
                            {
                                echo '<p><b>-</b> HTML / CSS / PHP</p>';
                            }
                            elseif ($Outils[3]AND $Outils[4] AND !$Outils[5])
                            {
                                echo '<p><b>-</b> HTML / CSS</p>';
                            }
                            elseif (!$Outils[3] AND !$Outils[4] AND $Outils[5])
                            {
                                echo '<p><b>-</b> PHP</p>';
                            }

                            // Ligne 4 JS ??? :P
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } } ?>