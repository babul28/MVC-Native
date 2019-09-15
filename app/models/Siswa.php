<?php

class Siswa extends Model
{
    public function All()
    {
        $result = $this->db->prepare('SELECT * FROM siswa');
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Store($data)
    {
    	$query = $this->db->prepare('INSERT INTO siswa VALUES (:NIS, :Nama)');
    	$query->bindParam(':NIS', $data['NIS']);
    	$query->bindParam(':Nama', $data['Nama']);
    	$query->execute();

    	return $query->rowCount();
    }

    public function Find($id)
    {
    	$query = $this->db->prepare('SELECT * FROM siswa WHERE NIS = :NIS');
    	$query->bindParam(':NIS', $id);
    	$query->execute();

    	return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function Update($data)
    {
    	$query = $this->db->prepare('UPDATE siswa SET Nama=:Nama WHERE NIS=:NIS');
    	$query->bindParam(':NIS', $data['NIS']);
    	$query->bindParam(':Nama', $data['Nama']);
    	$query->execute();

    	return $query->rowCount();
    }
}