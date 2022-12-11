<?php
class Course_model extends CI_Model {

public $title;
public $content;
public $date;



public function countRow($post_course_id){


    $query = $this->db->query("select count(l.post_course_id) total from course_application ca,post_course pc,lession l where pc.id=ca.post_course_id and pc.id=l.post_course_id and ca.post_course_id='$post_course_id' ");
        // print_r($query->result());
        return $query->row_array();
    }

public function insert_entry()
{
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
}

public function update_entry()
{
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
}

}


?>