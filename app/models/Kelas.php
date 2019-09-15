<?php 

class Kelas extends Model
{
    public function all()
    {
        $query =  $this->db->prepare('SELECT * FROM kelas');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}