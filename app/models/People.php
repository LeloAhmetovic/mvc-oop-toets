<?php

/**
 * Dit is de model voor de controller countries
 */

 class Country
 {
    //properties
    private $db;
    
    // Dit is de constructor van de Country model class
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCountries()
    {
        $this->db->query('SELECT * FROM country');
        return $this->db->resultSet();
    }
 }