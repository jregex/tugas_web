<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/Database.php";
class M_barang
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBarang()
    {
        $this->db->query('select * from barang');
        return $this->db->resultSet();
    }

    public function saveBarang($nama, $jumlah, $tgl)
    {
        $this->db->query("insert into barang(nama_barang,jumlah,tgl_masuk) values(:nama_barang,:jumlah,:tgl_masuk)");
        $this->db->bind('nama_barang', $nama);
        $this->db->bind('jumlah', $jumlah);
        $this->db->bind('tgl_masuk', $tgl);
        $this->db->execute();
        return 1;
    }

    public function deleteBarang($id)
    {
        $this->db->query("delete from barang where id_barang=:id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return 1;
    }

    public function getBarangbyid($id)
    {
        $this->db->query('select * from barang where id_barang=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function updateBarang($id,$nama,$jumlah,$tgl)
    {
        $this->db->query("update barang set nama_barang=:nama,jumlah=:jumlah,tgl_masuk=:tgl where id_barang=:id");
        $this->db->bind('id',$id);
        $this->db->bind('nama',$nama);
        $this->db->bind('jumlah',$jumlah);
        $this->db->bind('tgl',$tgl);
        $this->db->execute();
        return 1;
    }
}
