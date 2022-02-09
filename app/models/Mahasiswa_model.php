<?php

class Mahasiswa_model{
    private $table = 'mahasiswa'; //nama table//
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllData()
        {
            $this->db->query('SELECT * FROM '.$this->table);
            return $this->db->resultSet();
        }

    public function getDataById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('',:nama, :email, :alamat, :jurusan, :nim)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('nim', $data['nim']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    email = :email,
                    alamat = :alamat,
                    jurusan = :jurusan,
                    nim = :nim
                    WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function cariData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}

    