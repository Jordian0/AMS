<?php

error_reporting(E_ALL);
ini_set('display_error', 1);

// class for subjects table
class Subjects {

    // Subjects properties
    public $course_id;
    public $course_name;
    public $faculty;

    // Database Data
    private $connection;
    private $table = 'subjects';

    // constructor
    public function __construct($db) {
        $this->connection = $db;
    }

    // Method to read all the saved posts from database
    public function readPosts() {
        // Query for reading posts table
    }
}
