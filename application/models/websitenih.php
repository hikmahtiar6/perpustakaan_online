<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Websitenih extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    
    function login($user,$pass)
    {
        $user_b = mysql_real_escape_string($user);
        $pass_b = mysql_real_escape_string($pass);
        $sql = $this->db->query("select * from library_users where username = '$user_b' and password = '$pass_b'");
        return $sql;
    }
    
    function login_anggota($user,$pass)
    {
        $user_b = mysql_real_escape_string($user);
        $pass_b = mysql_real_escape_string($pass);
        $sql = $this->db->query("select * from library_anggota where username = '$user_b' and password = '$pass_b'");
        return $sql;
    }
    
        function buku()
        {
            $sql =$this->db->query("select * from library_books order by id DESC LIMIT 0 , 7");
            return $sql->result();
        }
        
        function buku_pilih($id)
        {
            $sql =$this->db->query("select * from library_books LEFT JOIN library_kategori on library_books.kode = library_kategori.kode where library_books.id = '$id' ");
            return $sql->result();
        }
        
        function buku_full()
        {
            $sql =$this->db->query("select * from library_books LEFT JOIN library_kategori on library_books.kode = library_kategori.kode order by library_books.id DESC");
            return $sql->result();
        }
    
        function kritik($simpan)
        {
            $this->db->insert('library_kritik',$simpan);
        }
        
        function signup($simpan)
        {
            $this->db->insert('library_anggota',$simpan);
        }
        
        function berita_hot($id)
        {
            $sql =$this->db->query("select * from library_berita  where link = '$id' ");
            return $sql->result();
        }
        
        function berita()
        {
            $sql =$this->db->query("select * from library_berita  order by id_berita DESC LIMIT 0 , 7");
            return $sql->result();
        }
    
}
