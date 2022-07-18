<?php 

class MissionManager {

    private $db; 

    // constructor 
    public function __construct(PDO $db) {
        $this->db = $db;
    }    
    
    
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




}
