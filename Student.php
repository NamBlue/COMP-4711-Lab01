<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Represents a student which holds information about itself
 *
 * @author namblue
 */
class Student 
{
    /**
     * Initializes a new instance of a Student
     */
    function __construct() 
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Adds a email address to a collection of emails for this Student
     * @param type $which the index of where in the collection to add
     * @param type $address the string representation of the email address to add
     */
    function add_email($which,$address) 
    {
        $this->emails[$which] = $address;
    }

    /**
     * Adds a grade to the collection of grades for this Student
     * @param type $grade the unsigned int representation of the grade to add
     */
    function add_grade($grade) 
    {
        $this->grades[] = $grade;
    }
    
    /**
     * Gets the average for all grades for this Student
     * @return type the average grades as a unsigned decimal
     */
    function average() 
    {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * Gets the string representation of this Student
     * @return type the Student as a string
     */
    function toString() 
    {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
