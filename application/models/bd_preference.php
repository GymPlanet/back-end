<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bd_preference extends CI_Model {
    
    function getAllSportsByIdioma($idioma) {
        $query = $this->db->query('SELECT * FROM preferencia_esportiva WHERE id_idioma = '.  $this->db->escape($idioma) .'');
        return $query->result_array();
    }
    
    function getAllPrefHoraria() {
        $query = $this->db->query('SELECT * FROM preferencia_horaria');
        return $query->result_array();
    }
    
    function getSexPrefByIdioma($idioma) {
        $query = $this->db->query('SELECT * FROM preferencia_usuari WHERE id_idioma = '.  $this->db->escape($idioma) .'');
        return $query->result_array();
    }
    
    function getAllPrefDies($idioma) {
        $query = $this->db->query('SELECT * FROM preferencia_setmana WHERE id_idioma = '.  $this->db->escape($idioma) .'');
        return $query->result_array();
    }
     
}