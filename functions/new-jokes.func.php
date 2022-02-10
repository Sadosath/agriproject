<?php
    	
         function get_jokes($this_page_first_result, $results_per_page){
        global $db;
        $req = $db->query("SELECT * FROM jokes , user WHERE jokes.user_number = user.id ORDER BY date desc limit {$this_page_first_result},{$results_per_page}");
        $results = array();
        while($rows = $req->fetchObject()){
              $results[] = $rows;
        }
        return $results;
    }
    function number_of_results(){
         global $db;
        $req = $db->query("SELECT * FROM jokes , user WHERE jokes.user_number = user.id ORDER BY date desc");
        $number_of_results = $req->rowCount();
        return $number_of_results ;
    }