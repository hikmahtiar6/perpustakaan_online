<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {
        
        function __construct()
        {
            parent::__construct();
            session_start();
        }
    
        function masuk_cpanel()
        {
        $user=$this->input->post('username');
        $pass=$this->input->post('password');
        $passmd5=substr(md5($pass),0,24);
            if(empty($user) || empty($pass))
            {
                ?>
                    <script type="application/x-javascript">
                        alert('Maaf Username atau Password Kosong !');
                        document.location="<?php echo base_url()?>administrator/";
                    </script>
                <?php
            }
            else
            {
                $exsekusi = $this->Websitenih->login($user,$passmd5);
                if(count($exsekusi->result_array())>0)
                {
                    foreach($exsekusi->result() as $hsl )
                    {
                        $session = $hsl->username;
                        $stat = $hsl->status;
                    }
                        $_SESSION['username'] = $session;
                        $_SESSION['status'] = $stat;
                        ?>
                            <script type="application/x-javascript">
                                document.location="<?php echo base_url()?>administrator/beranda";
                            </script>
                        <?php    
                    }
                else
                {
                    ?>
                        <script type="application/x-javascript">
                            alert('Maaf Username or Password Salah !');
                            document.location="<?php echo base_url()?>administrator/";
                        </script>
                    <?php
                }
            }
    }
    
    function masuk_anggota()
        {
        $user=$this->input->post('username');
        $pass=$this->input->post('password');
        $passmd5=substr(md5($pass),0,24);
            if(empty($user) || empty($pass))
            {
                ?>
                    <script type="application/x-javascript">
                        alert('Maaf Username atau Password Kosong !');
                        document.location="<?php echo base_url()?>website/";
                    </script>
                <?php
            }
            else
            {
                $exsekusi = $this->Websitenih->login_anggota($user,$passmd5);
                if(count($exsekusi->result_array())>0)
                {
                    foreach($exsekusi->result() as $hsl )
                    {
                        $session = $hsl->username;
                        $stat = $hsl->status;
                    }
                        $_SESSION['username'] = $session;
                        $_SESSION['status'] = $stat;
                        ?>
                            <script type="application/x-javascript">
                                document.location="<?php echo base_url()?>anggota/beranda";
                            </script>
                        <?php    
                    }
                else
                {
                    ?>
                        <script type="application/x-javascript">
                            alert('Maaf Username or Password Salah !');
                            window.history.go(-1);
                        </script>
                    <?php
                }
            }
    }
    
    function kritik_dan_saran()
    {
        $data['buku'] = $this->Websitenih->buku();
        $data['berita'] = $this->Websitenih->berita();
        $this->load->view('web/header',$data);
        $this->load->view('admin/input/pancibox');
        $this->load->view('web/menu/kritik',$data);
        $this->load->view('web/slide',$data);
        $this->load->view('web/konten-kiri',$data);
        $this->load->view('web/konten/kritik',$data);
        $this->load->view('web/footer',$data);
        $this->load->view('web/skin');
        $this->load->view('admin/input/jstitle');
    }
        
    public function index()
    {
        $data['buku'] = $this->Websitenih->buku();
        $data['berita'] = $this->Websitenih->berita();
        $this->load->view('web/header',$data);
        $this->load->view('admin/input/pancibox');
        $this->load->view('web/menu',$data);
        $this->load->view('web/slide',$data);
        $this->load->view('web/konten-kiri',$data);
        $this->load->view('web/konten-kanan',$data);
        $this->load->view('web/footer',$data);
        $this->load->view('web/skin');
        $this->load->view('admin/input/jstitle');
    }
    
    function daftar_buku()
    {
        $data['buku'] = $this->Websitenih->buku();
        $data['berita'] = $this->Websitenih->berita();
        $data['bukufull'] = $this->Websitenih->buku_full();
        $this->load->view('web/header');
        $this->load->view('admin/input/pancibox');
        $this->load->view('web/menu/menu_buku');
        $this->load->view('web/slide');
        $this->load->view('web/konten-kiri',$data);
        $this->load->view('web/konten/buku',$data);
        $this->load->view('web/footer');
        $this->load->view('web/skin');
        $this->load->view('admin/input/jstitle');
    }
    
    function buku_terbaru()
    {
        $id = '';
        if($id = $this->uri->segment(3) === FALSE)
        {
            $id = $id;
        }
        else
        {
            $id = $this->uri->segment(3);
        }
        
        $data['buku'] = $this->Websitenih->buku();
        $data['berita'] = $this->Websitenih->berita();
        $data['bukupilih'] = $this->Websitenih->buku_pilih($id);
        $this->load->view('web/header');
        $this->load->view('admin/input/pancibox');
        $this->load->view('web/default');
        $this->load->view('web/slide');
        $this->load->view('web/konten-kiri',$data);
        $this->load->view('web/konten/buku_pilih',$data);
        $this->load->view('web/footer');
        $this->load->view('web/skin');
        $this->load->view('admin/input/jstitle');
    }
    
    function berita_hot()
    {
        $id = '';
        if($id = $this->uri->segment(3) === FALSE)
        {
            $id = $id;
        }
        else
        {
            $id = $this->uri->segment(3);
        }
        
        $data['buku'] = $this->Websitenih->buku();
        $data['berita'] = $this->Websitenih->berita();
        $data['berita_hot'] = $this->Websitenih->berita_hot($id);
        $this->load->view('web/header');
        $this->load->view('admin/input/pancibox');
        $this->load->view('web/default');
        $this->load->view('web/slide');
        $this->load->view('web/konten-kiri',$data);
        $this->load->view('web/konten/berita_hot',$data);
        $this->load->view('web/footer');
        $this->load->view('web/skin');
        $this->load->view('admin/input/jstitle');
    }
    
    function daftar_ebook()
    {
        $data['ebook'] = $this->Adminih->ebook();
        $data['berita'] = $this->Websitenih->berita();
        $data['buku'] = $this->Websitenih->buku();
        $this->load->view('web/header');
        $this->load->view('admin/input/pancibox');
        $this->load->view('web/menu/menu_ebook');
        $this->load->view('web/slide');
        $this->load->view('web/konten-kiri',$data);
        $this->load->view('web/konten/ebook',$data);
        $this->load->view('web/footer');
        $this->load->view('web/skin');
        $this->load->view('admin/input/jstitle');
    }
    
    function kritik()
    {
        $nama = $this->input->POST('nama');
        $email = $this->input->POST('email');
        $kritik = $this->input->POST('kritik');
        if(empty($nama) || empty($kritik))
        {
            ?>
                <script type="text/javascript">
                    alert('Isian Nama dan Kritikmu Kosong !');
                    document.location="<?php echo base_url()?>website";
                </script>
            <?php
            
        }
        else
        {
            $simpan = array('id'=>NULL,'nama'=>$nama,'email'=>$email,'kritik'=>$kritik);
            $this->Websitenih->kritik($simpan);
            ?>
                <script type="text/javascript">
                    alert('Terima Kasih Atas Kritikan Dari Anda , Semoga Membuat Kami Menjadi Lebih Baik :)');
                    document.location="<?php echo base_url()?>website";
                </script>
            <?php
        }
    }
    
    function tambah_anggota()
    {
        $this->load->view('web/konten/tambah_anggota');
    }
    
    function lupa()
    {
        $this->load->view('web/konten/lupa');
    }
    
    function signup()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $md5 = substr(md5($password),0,24);
        $status = $this->input->post('status');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        
        $waktu= date('Y-m-d');
        $tanggal=date('Y-m-d',strtotime($waktu."+30 day"));
        
        if(empty($nama) || empty($username) || empty($password) || empty($status) || empty($email) || empty($alamat) || empty($telepon))
        {
            ?>
                <script type="text/javascript">
                    alert('Isilah Dengan Baik dan Benar !');
                    document.location="<?php echo base_url()?>website";
                </script>
            <?php
        }
        else
        {
            $simpan = array('id'=>NULL,'nama_lengkap'=>$nama,'username'=>$username,'password'=>$md5,'status'=>$status,'email'=>$email,'alamat'=>$alamat,'telepon'=>$telepon,'waktu'=>$waktu);
            $this->Websitenih->signup($simpan);
            ?>
                <script type="text/javascript">
                    alert('Selamat Bergabung Anggota Baru :) Masa Aktif Anda 30 Hari');
                    document.location="<?php echo base_url()?>website";
                </script>
            <?php
        }
        
    }
    
    function tentang()
    {
        $data['buku'] = $this->Websitenih->buku();
        $data['berita'] = $this->Websitenih->berita();
        $this->load->view('web/header');
        $this->load->view('admin/input/pancibox');
        $this->load->view('web/menu/menu_tentang');
        $this->load->view('web/slide');
        $this->load->view('web/konten-kiri',$data);
        $this->load->view('web/konten-kanan',$data);
        $this->load->view('web/footer');
        $this->load->view('web/skin');
        $this->load->view('admin/input/jstitle');
    }
}
