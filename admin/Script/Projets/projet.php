<link rel="stylesheet" href="Script/Projets/style.css" type="text/css"> 

<?php

if (isset($_GET['id'])) /* Si la variable existe*/
{
    $ID = $_GET['id'];
}
else
{
    $ID = 1;
}

$bdd = new PDO('mysql:host=localhost;dbname=anthfpxc_web;charset=utf8', 'anthfpxc', 'rItxfJ96O9cE');
$reponse = $bdd->query('SELECT * FROM projects WHERE ID = ' . $ID);
while ($donnees = $reponse->fetch())
{
    $Title = $donnees['Titre'];
    $Desc = $donnees['Presentation'];
    $Besoin = [$donnees['Besoin1'], $donnees['Besoin2'], $donnees['Besoin3'], $donnees['Besoin4'], $donnees['Besoin5']];
    $Imperatif = [$donnees['Imperatif1'],$donnees['Imperatif2'],$donnees['Imperatif3'],$donnees['Imperatif4'],$donnees['Imperatif5']];
    $Outils = [$donnees['Wordpress'],$donnees['Prestashop'],$donnees['Bootstrap'],$donnees['HTML'],$donnees['CSS'],$donnees['PHP'],$donnees['Site_Vitrine'],$donnees['E-commerce']];


?>
<form>
    </form>
    <div class="Container_Presentation_Projet">
        <?php 
        echo '<input type="texte" class="form-control" id="exampleFormControlInput1" placeholder="' . $Title . '">';
        echo '<h5 class="desc_cat">' . $Desc . '</h5>' ;
    ?>
    <div class="Container_block">
        <div class="row">
            <div class="col-md-4 project-section">
                <div class="box-project">
                    <div class="cicle-project">
                        <img class="icon-project" src="Script/Projets/img/client.svg" title="Clients">
                    </div>
                    <h3 class="box-project-title">Besoin du client</h3>
                    <div class="box-project-desc">
                        <?php 
                            for ($Number = 0; $Number <= 4; $Number++)
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
                    <h3 class="box-project-title">Imperatif du Projet</h3>
                    <div class="box-project-desc">
                        <?php 
                            for ($Number = 0; $Number <= 4; $Number++)
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
                    <h3 class="box-project-title">Outils utilisé</h3>
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
<?php } ?>