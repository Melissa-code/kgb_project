<?php
    ob_start();

    require('../Entity/Mission.php');
    require('../Controller/MissionController.php');


    if(isset($_POST['code'])){
        $mission = new Mission(
            [
                'code'=>$_POST['codeMission'], 
                'title'=>$_POST('titleMission'), 
                'description'=>$_POST('descriptionMission'), 
                'country'=>$_POST('countryMission'), 
                'duration'=>$_POST('durationMission'), 
                'status'=>$_POST('statusMission'), 
                'type'=>$_POST('typeMission')
            ]
        );

        if($mission->isMissionValid()){
            $manager->addMission($mission); 
            echo 'mission enregistrée'; 
        }

    }




?>


<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@700&family=Montserrat:wght@700&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   
    <link rel="stylesheet" href="../style.css">

    <title>Inscrire une mission secrete</title>
</head>

<body>
    <h1 style="color:black";>Créer une nouvelle mission</h1> -->
        
    <section class="row">
        <div class="col-8" id="login-body" >
            

            <form method="post" action="createMission.php" >
                <!-- Mission code -->
                <div class="form-group">
                    <input type="text" name="codeMission" class="form-control p-4" placeholder="Code de la mission" required>
                </div>
                <!-- Mission title -->
                <div class="form-group">
                    <input type="text" name="titleMission" class="form-control p-4" placeholder="Titre de la mission" required>
                </div>
                <!-- Mission description -->
                <div class="form-group">
                   <textarea name="descriptionMission" id="missionDescription" class="form-control p-4" cols="30" placeholder="Description de la mission" ></textarea>
                </div>
                <!-- Mission country -->
                <div class="form-group">
                    <input type="text" name="countryMission" class="form-control p-4" placeholder="Pays de la mission" required>
                </div>
                <!-- Mission duration -->
                <div class="form-group">
                    <input type="number" name="durationMission" class="form-control p-4" placeholder="Identifiant de la durée de la mission" required>
                </div>
                <!-- Mission status -->

                <div class="pb-3">
                    <select name="code_status" id="status" class="form-control ">
                        <option value="">Sélectionner un statut</option>
                        <option value="1">En préparation</option>
                        <option value="2">En cours</option>
                        <option value="3">Terminé</option>
                        <option value="3">Echec</option>
                    </select>
                </div>
                <!-- Mission type -->

                <div class="pb-3">
                    <select name="name_type" id="type" class="form-control">
                        <option value="">Sélectionner un type</option>
                        <option value="1">Surveillance</option>
                        <option value="2">Assassinat</option>
                        <option value="3">Infiltration</option>
                    </select>
                </div>
                <!-- Button-->
                <button type="submit" id="login-btn" class="btn btn-dark p-3">Créer une mission</button>
            </form>
        </div>
    </section>
</body>
</html>


<?php
    $content = ob_get_clean();
    $title = "Créer une nouvelle mission";
    require('../templates/template.php');
?>