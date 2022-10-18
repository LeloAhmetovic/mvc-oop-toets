<?php

/**
 * Dit is de model voor de controller countries
 */

 class People
 {
    //properties
    private $db;
    
    // Dit is de constructor van de Country model class
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPeople()
    {
        $this->db->query('SELECT * FROM richestpeople');
        return $this->db->resultSet();
    }
 }