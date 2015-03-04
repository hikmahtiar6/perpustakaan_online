<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminih extends CI_Model {

        function __construct()
        {
            parent::__construct();
            $this->load->database();
            
        }
        
        function rak_buku()
        {
            $sql =$this->db->query("select * from library_rak_buku order by kode_rak DESC");
            return $sql;
        }
        
        function rak_limit($limit,$offset)
        {
            $sql =$this->db->query("select * from library_rak_buku order by kode_rak DESC LIMIT $offset,$limit");
            return $sql->result();
        }
        
        function edit_rak($id)
        {
            $sql =$this->db->query("select * from library_rak_buku where kode_rak = '$id'");
            return $sql->result();
        }
        
        function add_rak($simpan)
        {
            $this->db->insert('library_rak_buku',$simpan);
        }
        
        function delete_rak($id)
        {
            $sql =$this->db->query("delete from library_rak_buku where kode_rak = '$id'");
            return $sql;
        }
        
        function update_rak($kd,$nm)
        {
            $this->db->where('kode_rak',$kd);
            $data = array('nama_rak'=>$nm);
            $this->db->update('library_rak_buku',$data);
        }
        
        function kategori_buku()
        {
            $sql =$this->db->query("select * from library_kategori order by kode_kategori DESC");
            return $sql;
        }
        
        function kategori_limit($limit,$offset)
        {
            $sql =$this->db->query("select * from library_kategori order by kode_kategori DESC LIMIT $offset,$limit");
            return $sql->result();
        }
        
        function add_kategori($simpan)
        {
            $this->db->insert('library_kategori',$simpan);
        }
        
        function delete_kategori($id)
        {
            $sql =$this->db->query("delete from library_kategori where kode_kategori = '$id'");
            return $sql;
        }
        
        function edit_kategori($id)
        {
            $sql =$this->db->query("select * from library_kategori where kode_kategori = '$id'");
            return $sql->result();
        }
        
        function update_kategori($id,$nm,$kode)
        {
            $this->db->where('kode_kategori',$id);
            $data = array('nama_kategori'=>$nm,'kode'=>$kode);
            $this->db->update('library_kategori',$data);
        }
        
        function buku()
        {
            $sql =$this->db->query("select * from library_books LEFT JOIN library_kategori on library_books.kode = library_kategori.kode order by library_books.id DESC");
            return $sql;
        }
        
        function buku_limit($limit,$offset)
        {
            $sql =$this->db->query("select * from library_books LEFT JOIN library_kategori on library_books.kode = library_kategori.kode order by library_books.id DESC LIMIT $offset,$limit");
            return $sql->result();
        }
        
        function add_buku($simpan)
        {
            $this->db->insert('library_books',$simpan);
        }
        
        function delete_buku($id)
        {
            $sql =$this->db->query("delete from library_books where id = '$id'");
            return $sql;
        }
        
        function edit_buku($id)
        {
            $sql =$this->db->query("select * from library_books where id = '$id'");
            return $sql->result();
        }
        
        function update_buku($id,$kode,$tgl,$prg,$pnr,$jdl,$jml)
        {
            $this->db->where('id',$id);
            $data = array('kode'=>$kode,'tanggal'=>$tgl,'Pengarang'=>$prg,'penerbit'=>$pnr,'judul_books'=>$jdl,'jumlah'=>$jml);
            $this->db->update('library_books',$data);
        }
        
        function ebook()
        {
            $sql =$this->db->query("select * from library_ebooks order by id DESC");
            return $sql;
        }
        
        function ebook_limit($limit,$offset)
        {
            $sql =$this->db->query("select * from library_ebooks order by id DESC LIMIT $offset,$limit");
            return $sql->result();
        }
        
        function add_ebook($simpan)
        {
            $this->db->insert('library_ebooks',$simpan);
        }
        
        function delete_ebook($id)
        {
            $sql =$this->db->query("delete from library_ebooks where id = '$id'");
            return $sql;
        }
        
        function edit_ebook($id)
        {
            $sql =$this->db->query("select * from library_ebooks where id = '$id'");
            return $sql->result();
        }
    
        function update_ebook($id,$namaf,$tgl)
        {
            $this->db->where('id',$id);
            $data = array('nama_file'=>$namaf,'tanggal'=>$tgl);
            $this->db->update('library_ebooks',$data);
        }
        
        function pengunjung()
        {
            $sql =$this->db->query("select * from library_pengunjung order by id DESC");
            return $sql->result();
        }
        
        function delete_pengunjung($id)
        {
            $sql =$this->db->query("delete from library_pengunjung where id = '$id'");
            return $sql;
        }
        
        function anggota()
        {
            $sql =$this->db->query("select * from library_anggota order by id DESC");
            return $sql;
        }
        
        function anggota_limit($limit,$offset)
        {
            $sql =$this->db->query("select * from library_anggota order by id DESC LIMIT $offset,$limit");
            return $sql->result();
        }
        
        function delete_anggota($id)
        {
            $sql =$this->db->query("delete from library_anggota where id = '$id'");
            return $sql;
        }
        
        function admin()
        {
            $sql =$this->db->query("select * from library_users order by id DESC");
            return $sql;
        }
        
        function admin_limit($limit,$offset)
        {
            $sql =$this->db->query("select * from library_users order by id DESC LIMIT $offset,$limit");
            return $sql->result();
        }
        
        function add_admin($simpan)
        {
            $sql =$this->db->insert('library_users', $simpan);
            return $sql;
        }
        
        function edit_admin($id)
        {
            $sql =$this->db->query("select * from library_users where id = '$id'");
            return $sql->result();
        }
        
        function update_admin($id,$nama,$username,$password,$status,$email,$alamat,$telepon)
        {
            $this->db->where('id',$id);
            $data = array('nama_lengkap'=>$nama,'username'=>$username,'password'=>$password,'status'=>$status,'email'=>$email,'alamat'=>$alamat,'telepon'=>$telepon);
            $this->db->update('library_users',$data);
        }
        
        function delete_admin($id)
        {
            $sql =$this->db->query("delete from library_users where id = '$id'");
            return $sql;
        }
        
        function kritik()
        {
            $sql =$this->db->query("select * from library_kritik order by id DESC");
            return $sql->result();
        }
        
        function delete_kritik($id)
        {
            $sql =$this->db->query("delete from library_kritik where id = '$id'");
            return $sql;
        }
        
        function add_peminjaman($simpan)
        {
            $sql =$this->db->insert('library_peminjaman', $simpan);
            return $sql;
        }
        
        function peminjaman()
        {
            $sql =$this->db->query("select * from library_peminjaman LEFT JOIN library_books on library_peminjaman.kode = library_books.kode order by library_peminjaman.id_p DESC");
            return $sql;
        }
        
        function peminjaman_limit($limit,$offset)
        {
            $sql =$this->db->query("select * from library_peminjaman LEFT JOIN library_books on library_peminjaman.kode = library_books.kode order by library_peminjaman.id_p  DESC LIMIT $offset,$limit");
            return $sql->result();
        }
        
        function edit_peminjaman($id)
        {
            $sql =$this->db->query("select * from library_peminjaman LEFT JOIN library_books on library_peminjaman.kode = library_books.kode where library_peminjaman.id_p = '$id'");
            return $sql->result();
        }
        
        function update_peminjaman($id,$nama,$alamat,$kode,$kembali)
        {
            $this->db->where('id_p',$id);
            $data = array('nama'=>$nama,'tanggal'=>$tgl);
            $this->db->update('library_ebooks',$data);
        }
        
        function delete_peminjaman($id)
        {
            $sql =$this->db->query("delete from library_peminjaman where id_p = '$id'");
            return $sql;
        }
        
        function berita()
        {
            $sql =$this->db->query("select * from library_berita order by id_berita DESC");
            return $sql;
        }
        
        function berita_limit($limit,$offset)
        {
            $sql =$this->db->query("select * from library_berita order by id_berita DESC LIMIT $offset,$limit");
            return $sql->result();
        }
        
        function add_berita($simpan)
        {
            $sql =$this->db->insert('library_berita', $simpan);
            return $sql;
        }
        
        function delete_berita($id)
        {
            $sql =$this->db->query("delete from library_berita where id_berita = '$id'");
            return $sql;
        }
}
