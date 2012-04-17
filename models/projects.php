<?php
    function ProjectList(){
        $res = db( 'SELECT
                      *
                    FROM
                      lab
                    ORDER BY
                      created DESC'
                );
        $ret = array();
        while($row = mysql_fetch_array($res)){
            $ret[] = $row;
        }
        return $ret;
    }
    function singleproject($id){
        $res = db( 'SELECT
                     *
                    FROM
                     lab
                    WHERE
                     id = "'.$id.'"'
                 );
        $ret = array();
        while($row = mysql_fetch_array($res)){
            $ret[] = $row;
        }
        return $ret;
    }
    function addproject($title, $uniqueFile, $text, $created, $link){
        db( 'INSERT INTO
               lab
             SET
               title = "'.$title.'",
               image = "'.$uniqueFile.'",
               text = "'.$text.'",
               created = "'.$created.'",
               link = "http://'.$link.'"'
               );
        header('Location: ../index.php');
    }
    function deleteproject($id){
        db( 'DELETE
              
             FROM
              lab
             WHERE
              id = "'.$id.'"'
          );
    header('Location: ../index.php?deleted=1');
    }
    function changeproject($id, $title, $text, $link, $created){
        db( 'UPDATE
              lab
             SET 
              title = "'.$title.'",
              text = "'.$text.'",
              link = "'.$link.'",
              created = "'.$created.'"
             WHERE
              id = "'.$id.'"'
          );
        header('Location: ../index.php?changed=1');
    }
?>
