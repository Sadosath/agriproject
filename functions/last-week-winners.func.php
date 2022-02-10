

  <?php

    function get_jokes(){
        global $db;
        $req1 = $db->query("SELECT * FROM last where num_lweek = ( select max(num_lweek) from last)");
        $results = array();
        while($rows1 = $req1->fetchObject()){
        $id = $rows1->id_ljokes ;
        $req = $db->query("SELECT * FROM jokes , user  WHERE jokes.user_number = user.id AND jokes.id_joke = '$id'  ");
        $rows = $req->fetchObject();
            $results[] = $rows;
        }
        
    return $results;
    }