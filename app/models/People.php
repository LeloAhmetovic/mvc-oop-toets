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

    public function getRichPeoples()
    {
        $this->db->query('SELECT * FROM richestpeople ORDER BY Networth DESC');
        return $this->db->resultSet();
    }
 }