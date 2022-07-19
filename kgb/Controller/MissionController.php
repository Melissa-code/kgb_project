<?php 

class MissionController {

    private PDO $pdo; 


    public function __construct(PDO $db) {
        
        try {
            (new DotEnv(__DIR__ . '/../.env'))->load();
            $this->setPdo(new PDO(getenv('DATABASE_DNS'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD')));
        } 
        catch(PDOException $error) {
            echo "<p style='color:red'>Error</p>";
        }
    }    
    

    public function setPdo(PDO $pdo) {
        $this->pdo = $pdo;
        return $this;
    }
    

   /**
    * Print all the missions
    *
    * return array
    */
    public function getAllMissions() {
        
        $missions = []; 
        $req = $this->pdo->query('SELECT * FROM Missions'); 
        $data = $req->fetchAll(); 

        foreach($data as $mission) {
            $missions[] = new Mission($mission);
        }
        return $missions;
    }

    /**
    * Print one mission only 
    *
    * return string $code
    */
    public function getOneMission(string $code){
        ;
    }


    /**
    * Add a new mission
    *
    * return Mission $mission
    */
    public function addMission(Mission $mission) {

        $req = $this->db->prepare('INSERT INTO Missions (code_mission, title_mission, description_mission, country_mission, id_duration, code_status, name_type) VALUES (:code_mission, :title_mission, :description_mission, :country_mission, :id_duration, :code_status, :name_type)');
       
        $req->bindValue(':code_mission', $mission->getCode());
        $req->bindValue(':title_mission', $mission->getTitle());
        $req->bindValue(':code_description', $mission->getDescription());
        $req->bindValue(':code_country', $mission->getCountry());
        $req->bindValue(':id_duration', $mission->getDuration());
        $req->bindValue(':code_status', $mission->getStatus());
        $req->bindValue(':name_type', $mission->getType());

        $req->execute();
    }


    /**
    * Update a mission
    *
    * return string $code
    */
    public function updateMission(string $code){
        ;
    }


    /**
    * Delete a mission 
    *
    * return string $code
    */
    public function deleteMission(string $code){
        ;
    }


}
