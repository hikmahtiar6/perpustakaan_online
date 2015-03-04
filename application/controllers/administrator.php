<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

    function __construct()
    {
        session_start();
        parent::__construct();
        $this->load->database();
        
    }
    
    public function index()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
                $this->load->view('admin/input/jstitle');
                $this->load->view('admin/header');
                $this->load->view('admin/input/pancibox');
                $this->load->view('admin/menu');
                $this->load->view('admin/konten');
                $this->load->view('admin/footer');
            
        }
        else
        {
            $this->load->view('web/login');
        }
    }
    
    function beranda()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            
                $this->load->view('admin/input/jstitle');
                $this->load->view('admin/header');
                $this->load->view('admin/input/pancibox');
                $this->load->view('admin/menu');
                $this->load->view('admin/konten');
                $this->load->view('admin/footer');
            
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function rak_buku()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
                $page=$this->uri->segment(3);
                        $limit=10;
                        if(!$page):
                        $offset = 0;
                        else:
                        $offset = $page;
                        endif;
                $quwe = $this->Adminih->rak_buku();        
                $data['sql'] = $this->Adminih->rak_limit($limit,$offset);
            
                $config['base_url'] = base_url() . 'administrator/rak_buku/';
                $config['total_rows'] = $quwe->num_rows();
                $config['per_page'] = $limit;
                $config['uri_segment'] = 3;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);
                $data["paginator"] =$this->pagination->create_links();
            
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/rak_buku',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function tambah_rak()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->rak_buku();
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/tambah_rak',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function edit_rak()
    {
        $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->edit_rak($id);
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/edit_rak',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function add_rak()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $nm = $this->input->POST('nm_rak');
            if(empty($nm))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/rak_buku";
                </script>
                <?php
            }
            
            else
            {
                $simpan = array('kode_rak'=>NULL,'nama_rak'=>$nm);
                $this->Adminih->add_rak($simpan);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Ditambah !');
                        document.location="<?php echo base_url()?>administrator/rak_buku";
                </script>
                <?php
                
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_rak()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_rak($id);
             ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/rak_buku";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function update_rak()
    {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->rak_buku();
            $nm = $this->input->POST('nm_rak');
            if(empty($nm))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/rak_buku";
                </script>
                <?php
            }
            else
            {
                $this->Adminih->update_rak($id,$nm);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Diubah !');
                        document.location="<?php echo base_url()?>administrator/rak_buku";
                </script>
                <?php
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    
    function pdfrak()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            
            $this->load->library('fpdf');
    
            define('FPDF_FONTPATH',$this->config->item('fonts_path'));
    
    
            $data['rak'] = $this->Adminih->rak_buku();
         
            $this->load->view('admin/konten/pdf_rak', $data);
            }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function kategori_buku()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            
                $page=$this->uri->segment(3);
                        $limit=10;
                        if(!$page):
                        $offset = 0;
                        else:
                        $offset = $page;
                        endif;
                        $data['nomor'] = $page;
                $quwe = $this->Adminih->kategori_buku();        
                $data['sql'] = $this->Adminih->kategori_limit($limit,$offset);
            
                $config['base_url'] = base_url() . 'administrator/kategori_buku/';
                $config['total_rows'] = $quwe->num_rows();
                $config['per_page'] = $limit;
                $config['uri_segment'] = 3;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);
                $data["paginator"] =$this->pagination->create_links();
            
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/kategori_buku',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function tambah_kategori()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->kategori_buku();
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/tambah_kategori',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function add_kategori()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->kategori_buku();
            $kd = $this->input->POST('kode');
            $nm = $this->input->POST('nm_kategori');
                
            if(empty($nm) || empty($kd))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        window.history.go(-1);
                </script>
                <?php
            }
            
            else
            {
                $simpan = array('kode_kategori'=>NULL,'nama_kategori'=>$nm,'kode'=>$kd);
                $this->Adminih->add_kategori($simpan);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Ditambah !');
                        document.location="<?php echo base_url()?>administrator/kategori_buku";
                </script>
                <?php
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_kategori()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_kategori($id);
             ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/kategori_buku";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function edit_kategori()
    {
        $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->edit_kategori($id);
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/edit_kategori',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function update_kategori()
    {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->kategori_buku();
            $nm = $this->input->POST('nm_kategori');
            $kode = $this->input->POST('kode');
            if(empty($nm) || empty($kode))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/kategori_buku";
                </script>
                <?php
            }
            else
            {
                $this->Adminih->update_kategori($id,$nm,$kode);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Diubah !');
                        document.location="<?php echo base_url()?>administrator/kategori_buku";
                </script>
                <?php
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function pdfkategori()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            
            $this->load->library('fpdf');
    
            define('FPDF_FONTPATH',$this->config->item('fonts_path'));
    
    
            $data['kategori'] = $this->Adminih->kategori_buku();
         
            $this->load->view('admin/konten/pdf_kategori', $data);
            }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function buku()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            
                $page=$this->uri->segment(3);
                        $limit=10;
                        if(!$page):
                        $offset = 0;
                        else:
                        $offset = $page;
                        endif;
                $quwe = $this->Adminih->buku();        
                $data['sql'] = $this->Adminih->buku_limit($limit,$offset);
            
                $config['base_url'] = base_url() . 'administrator/buku/';
                $config['total_rows'] = $quwe->num_rows();
                $config['per_page'] = $limit;
                $config['uri_segment'] = 3;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);
                $data["paginator"] =$this->pagination->create_links();
            
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/buku',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function tambah_buku()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->kategori_buku();
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/tambah_buku',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function add_buku()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->buku();
            $kode = $this->input->POST('kategori');
            $pgr = $this->input->POST('pengarang');
            $pnr = $this->input->POST('penerbit');
            $jdl = $this->input->POST('judul');
            $jml = $this->input->POST('jml');
            $tgl = $this->input->POST('tgl');
            if(empty($pgr) || empty($pnr) || empty($kode) || empty($jdl) || empty($tgl))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/buku";
                </script>
                <?php
            }
            elseif($kode == "none")
            {
                ?>
                <script type="application/x-javascript">
                        alert('Anda Belum Memilih Kategori !');
                        document.location="<?php echo base_url()?>administrator/buku";
                </script>
                <?php
            }
            
            else
            {
                $simpan = array('id'=>NULL,'kode'=>$kode,'tanggal'=>$tgl,'Pengarang'=>$pgr,'penerbit'=>$pnr,'judul_books'=>$jdl,'jumlah'=>$jml);
                $this->Adminih->add_buku($simpan);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Ditambah !');
                        document.location="<?php echo base_url()?>administrator/buku";
                </script>
                <?php
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_buku()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_buku($id);
             ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/buku";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function edit_buku()
    {
        $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['kategori'] = $this->Adminih->kategori_buku();
            $data['sql'] = $this->Adminih->edit_buku($id);
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/edit_buku',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function update_buku()
    {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->buku();
            $kode = $this->input->POST('kategori');
            $pgr = $this->input->POST('pengarang');
            $pnr = $this->input->POST('penerbit');
            $jdl = $this->input->POST('judul');
            $jml = $this->input->POST('jml');
            $tgl = $this->input->POST('tgl');
            if(empty($pgr) || empty($pnr) || empty($kode) || empty($jdl) || empty($tgl))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/buku";
                </script>
                <?php
            }
            else
            {
                $this->Adminih->update_buku($id,$kode,$tgl,$pgr,$pnr,$jdl,$jml);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Diubah !');
                        document.location="<?php echo base_url()?>administrator/buku";
                </script>
                <?php
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function pdfbuku()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            
            $this->load->library('fpdf');
    
            define('FPDF_FONTPATH',$this->config->item('fonts_path'));
    
    
            $data['buku'] = $this->Adminih->buku();
         
            $this->load->view('admin/konten/pdf_buku', $data);
            }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function ebook()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            
                $page=$this->uri->segment(3);
                        $limit=10;
                        if(!$page):
                        $offset = 0;
                        else:
                        $offset = $page;
                        endif;
                $quwe = $this->Adminih->ebook();        
                $data['sql'] = $this->Adminih->ebook_limit($limit,$offset);
            
                $config['base_url'] = base_url() . 'administrator/ebook/';
                $config['total_rows'] = $quwe->num_rows();
                $config['per_page'] = $limit;
                $config['uri_segment'] = 3;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);
                $data["paginator"] =$this->pagination->create_links();
            
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/ebook',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function tambah_ebook()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->ebook();
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/tambah_ebook',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function add_ebook()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $nm = $this->input->POST('namaf');
            $file = $_FILES['pdf']['name'];
            $tgl = $this->input->POST('tanggal');
            $ext = end(explode(".",$file));
            if(empty($nm) || empty($tgl))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/ebook";
                </script>
                <?php
            }
            elseif($ext == "pdf")
            {
                $directori = "./plugin/filpdf/";
                $dir = $directori.basename($_FILES['pdf']['name']);
                move_uploaded_file($_FILES['pdf']['tmp_name'],$dir);
                $ext = end(explode(".",$file));
                $filee = $nm.".".$ext;
                    rename("./plugin/filpdf/$file","./plugin/filpdf/$filee");
                
                
                $simpan = array('id'=>NULL,'nama_file'=>$filee,'tanggal'=>$tgl);
                $this->Adminih->add_ebook($simpan);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Ditambah !');
                        document.location="<?php echo base_url()?>administrator/ebook";
                </script>
                <?php
            }
            else
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Yang Dimasukkan Bukan File PDF !');
                        document.location="<?php echo base_url()?>administrator/ebook";
                </script>
                <?php
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_ebook()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $getgmb = $this->Adminih->edit_ebook($id);
                foreach($getgmb as $row)
                {
                    $gam = $row->nama_file;
                }
                unlink("./plugin/filpdf/$gam");
            $this->Adminih->delete_ebook($id);
             ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/ebook";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function edit_ebook()
    {
        $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->edit_ebook($id);
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/edit_ebook',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function update_ebook()
    {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $namaf = $this->input->POST('namaf');
            $sql = $this->Adminih->edit_ebook($id);
            $file = $_FILES['pdf']['name'];
            $ext = end(explode(".",$file));
            $tgl = $this->input->POST('tanggal');
            if(empty($namaf) || empty($tgl))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/ebook";
                </script>
                <?php
            }
            elseif(empty($_FILES['pdf']['name']))
                {
                    foreach($sql as $ada)
                    {
                        $gmb = $ada->nama_file;
                    }
                    $ext = end(explode(".",$gmb));
                    $filee = $namaf.".".$ext;
                    rename("./plugin/filpdf/$gmb","./plugin/filpdf/$filee");
                    
                    $this->Adminih->update_ebook($id,$filee,$tgl);
                    ?>
                    <script type="application/x-javascript">
                            alert('Data Telah Diubah !');
                            document.location="<?php echo base_url()?>administrator/ebook";
                    </script>
                    <?php
                }
                elseif ($ext == "pdf")
                {
                        foreach($sql as $ada)
                    {
                        $gmb = $ada->nama_file;
                    }
                    unlink("./plugin/filpdf/$gmb");
                    
                    $directori = "./plugin/filpdf/";
                    $dir = $directori.basename($_FILES['pdf']['name']);
                    move_uploaded_file($_FILES['pdf']['tmp_name'],$dir);
                    $ext = end(explode(".",$file));
                    $filee = $namaf.".".$ext;
                    
                    rename("./plugin/filpdf/$file","./plugin/filpdf/$filee");
                    
                    $this->Adminih->update_ebook($id,$filee,$tgl);
                    ?>
                    <script type="application/x-javascript">
                            alert('Data Telah Diubah !');
                            document.location="<?php echo base_url()?>administrator/ebook";
                    </script>
                    <?php
                }
            else
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Yang Dimasukkan Bukan File PDF !');
                        document.location="<?php echo base_url()?>administrator/ebook";
                </script>
                <?php
                
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function pdfebook()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            
            $this->load->library('fpdf');
    
            define('FPDF_FONTPATH',$this->config->item('fonts_path'));
    
    
            $data['ebook'] = $this->Adminih->ebook();
         
            $this->load->view('admin/konten/pdf_ebook', $data);
            }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    public function tujuan_pengunjung()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data['sql'] = $this->Adminih->pengunjung();
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/tujuan_pengunjung',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_pengunjung()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_pengunjung($id);
             ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/tujuan_pengunjung";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    
    function pdfpengunjung()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            
            $this->load->library('fpdf');
    
            define('FPDF_FONTPATH',$this->config->item('fonts_path'));
    
    
            $data['pengunjung'] = $this->Adminih->pengunjung();
         
            $this->load->view('admin/konten/pdf_pengunjung', $data);
            }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function laporan()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->rak_buku();
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/laporan',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function data_anggota()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
                $page=$this->uri->segment(3);
                        $limit=7;
                        if(!$page):
                        $offset = 0;
                        else:
                        $offset = $page;
                        endif;
                $quwe = $this->Adminih->anggota();        
                $data['sql'] = $this->Adminih->anggota_limit($limit,$offset);
            
                $config['base_url'] = base_url() . 'administrator/data_anggota/';
                $config['total_rows'] = $quwe->num_rows();
                $config['per_page'] = $limit;
                $config['uri_segment'] = 3;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);
                $data["paginator"] =$this->pagination->create_links();
            
            
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/data_anggota',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_anggota()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_anggota($id);
             ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/data_anggota";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function pdfanggota()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            
            $this->load->library('fpdf');
    
            define('FPDF_FONTPATH',$this->config->item('fonts_path'));
    
    
            $data['anggota'] = $this->Adminih->anggota();
         
            $this->load->view('admin/konten/pdf_anggota', $data);
            }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function kritik_dan_saran()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->kritik();
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/kritik',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_kritik()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_kritik($id);
             ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/kritik_dan_saran";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function data_admin()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            
            $data=array();
            
                $page=$this->uri->segment(3);
                        $limit=7;
                        if(!$page):
                        $offset = 0;
                        else:
                        $offset = $page;
                        endif;
                $quwe = $this->Adminih->admin();        
                $data['sql'] = $this->Adminih->admin_limit($limit,$offset);
            
                $config['base_url'] = base_url() . 'administrator/data_admin/';
                $config['total_rows'] = $quwe->num_rows();
                $config['per_page'] = $limit;
                $config['uri_segment'] = 3;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);
                $data["paginator"] =$this->pagination->create_links();
            if($_SESSION['status'] == "Admin")
            {
                $this->load->view('admin/input/jstitle');
                $this->load->view('admin/header');
                $this->load->view('admin/input/pancibox');
                $this->load->view('admin/menu');
                $this->load->view('admin/konten/data_admin2',$data);
                $this->load->view('admin/footer');
            }
            else
            {
                $this->load->view('admin/input/jstitle');
                $this->load->view('admin/header');
                $this->load->view('admin/input/pancibox');
                $this->load->view('admin/menu');
                $this->load->view('admin/konten/data_admin',$data);
                $this->load->view('admin/footer');
            }
            
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function tambah_admin()
    {
        $this->load->view('admin/konten/tambah_admin');
    }
    
    function add_admin()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $md5 = substr(md5($password),0,24);
        $status = $this->input->post('status');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        
        if(empty($nama) || empty($username) || empty($password) || empty($status) || empty($email) || empty($alamat) || empty($telepon))
        {
            ?>
                <script type="text/javascript">
                    alert('Isilah Dengan Baik dan Benar !');
                    document.location="<?php echo base_url()?>administrator/data_admin";
                </script>
            <?php
        }
        else
        {
            $simpan = array('id'=>NULL,'nama_lengkap'=>$nama,'username'=>$username,'password'=>$md5,'status'=>$status,'email'=>$email,'alamat'=>$alamat,'telepon'=>$telepon);
            $this->Adminih->add_admin($simpan);
            ?>
                <script type="text/javascript">
                    alert('Anda Telah Menambahkan Admin Baru :)');
                    document.location="<?php echo base_url()?>administrator/data_admin";
                </script>
            <?php
        }
        
    }
    
    function edit_admin()
    {
        $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['sql'] = $this->Adminih->edit_admin($id);
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/edit_admin',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    
    function update_admin()
    {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $md5 = substr(md5($password),0,24);
            $status = $this->input->post('status');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $telepon = $this->input->post('telepon');
            if(empty($nama) || empty($username) || empty($status) || empty($email) || empty($alamat) || empty($telepon))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/data_admin";
                </script>
                <?php
            }
            elseif(empty($password))
            {
                $ada = $this->Adminih->edit_admin($id);
                foreach($ada as $pass)
                {
                    $pas = $pass->password;
                }
                $this->Adminih->update_admin($id,$nama,$username,$pas,$status,$email,$alamat,$telepon);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Diubah !');
                        document.location="<?php echo base_url()?>administrator/data_admin";
                </script>
                <?php
            }
            else
            {
                $this->Adminih->update_admin($id,$nama,$username,$md5,$status,$email,$alamat,$telepon);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Diubah !');
                        document.location="<?php echo base_url()?>administrator/data_admin";
                </script>
                <?php
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_admin()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_admin($id);
            ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/data_admin";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }

    
    function peminjaman()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
                $page=$this->uri->segment(3);
                        $limit=10;
                        if(!$page):
                        $offset = 0;
                        else:
                        $offset = $page;
                        endif;
                $quwe = $this->Adminih->peminjaman();        
                $data['sql'] = $this->Adminih->peminjaman_limit($limit,$offset);
            
                $config['base_url'] = base_url() . 'administrator/peminjaman/';
                $config['total_rows'] = $quwe->num_rows();
                $config['per_page'] = $limit;
                $config['uri_segment'] = 3;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);
                $data["paginator"] =$this->pagination->create_links();
            
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/peminjaman',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function tambah_peminjaman()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/tambah_peminjaman',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function tambah_anggota()
    {
        $this->load->view('web/konten/tambah_anggota');
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
                    document.location="<?php echo base_url()?>administrator/data_anggota";
                </script>
            <?php
        }
        else
        {
            $simpan = array('id'=>NULL,'nama_lengkap'=>$nama,'username'=>$username,'password'=>$md5,'status'=>$status,'email'=>$email,'alamat'=>$alamat,'telepon'=>$telepon,'waktu'=>$waktu);
            $this->Websitenih->signup($simpan);
            ?>
                <script type="text/javascript">
                    alert('Anda Telah Menambahkan Anggota ,  Masa Aktif Anggota 30 Hari');
                    document.location="<?php echo base_url()?>administrator/data_anggota";
                </script>
            <?php
        }
        
    }
    
    function add_peminjaman()
    {
        $nama = $this->input->post('nama');
        $buku = $this->input->post('buku');
        $alamat = $this->input->post('alamat');
        
        $waktu= date('Y-m-d H:i:s');
        
        if(empty($nama) || empty($alamat))
        {
            ?>
                <script type="text/javascript">
                    alert('Isilah Dengan Baik dan Benar !');
                    document.location="<?php echo base_url()?>administrator/peminjaman";
                </script>
            <?php
        }
        elseif($buku == "none")
        {
            ?>
                <script type="text/javascript">
                    alert('Buku Belum Dipilih !');
                    document.location="<?php echo base_url()?>administrator/peminjaman";
                </script>
            <?php
        }
        else
        {
            $simpan = array('id_p'=>NULL,'nama'=>$nama,'alamat'=>$alamat,'kode'=>$buku,'waktu'=>$waktu);
            $this->Adminih->add_peminjaman($simpan);
            ?>
                <script type="text/javascript">
                    alert('Anda Telah Menambahkan Peminjaman Buku ,  Masa Aktif Anggota 7 Hari');
                    document.location="<?php echo base_url()?>administrator/peminjaman";
                </script>
            <?php
        }
        
    }
        
    function edit_peminjaman()
    {
        $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $data['peminjaman'] = $this->Adminih->edit_peminjaman($id);
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/konten/edit_peminjaman',$data);
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function update_peminjaman()
    {
        $nama = $this->input->post('nama');
        $buku = $this->input->post('buku');
        $alamat = $this->input->post('alamat');
        
        $waktu= date('Y-m-d H:i:s');
        
        if(empty($nama) || empty($alamat))
        {
            ?>
                <script type="text/javascript">
                    alert('Isilah Dengan Baik dan Benar !');
                    document.location="<?php echo base_url()?>administrator/peminjaman";
                </script>
            <?php
        }
        elseif($buku == "none")
        {
            ?>
                <script type="text/javascript">
                    alert('Buku Belum Dipilih !');
                    document.location="<?php echo base_url()?>administrator/peminjaman";
                </script>
            <?php
        }
        else
        {
            $simpan = array('id_p'=>NULL,'nama'=>$nama,'alamat'=>$alamat,'kode'=>$buku,'waktu'=>$waktu);
            $this->Adminih->add_peminjaman($simpan);
            ?>
                <script type="text/javascript">
                    alert('Anda Telah Menambahkan Peminjaman Buku ,  Masa Aktif Anggota 7 Hari');
                    document.location="<?php echo base_url()?>administrator/peminjaman";
                </script>
            <?php
        }
        
    }
    
    function delete_peminjaman()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_peminjaman($id);
            ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/peminjaman";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }

    function berita()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            
                $page=$this->uri->segment(3);
                        $limit=10;
                        if(!$page):
                        $offset = 0;
                        else:
                        $offset = $page;
                        endif;
                $quwe = $this->Adminih->berita();        
                $data['sql'] = $this->Adminih->berita($limit,$offset);
            
                $config['base_url'] = base_url() . 'administrator/berita/';
                $config['total_rows'] = $quwe->num_rows();
                $config['per_page'] = $limit;
                $config['uri_segment'] = 3;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);
                $data["paginator"] =$this->pagination->create_links();
            
            $this->load->view('admin/input/jstitle');
            $this->load->view('admin/header');
            $this->load->view('admin/input/pancibox');
            $this->load->view('admin/menu');
            $this->load->view('admin/konten/berita',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function tambah_berita()
    {
        $this->load->view('admin/konten/tambah_berita');
    }
    
    function add_berita()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $data=array();
            $judul = $this->input->POST('judul');
            $link = $this->input->POST('link');
            $isi = $this->input->POST('isi');
            $sesi = $_SESSION['username'] ;
            $wew = $this->db->query("select * from library_users where username = '$sesi'");
            foreach($wew->result() as $wow)
            {
                date_default_timezone_set("Asia/Jakarta");
                $nih = $wow->nama_lengkap;
                $tgl = date("d-M-Y", mktime(0, 0, 0, date('m'), date('d'), date('Y')));
                $jam = date('H:i:s');
                $hasil = "Author : ".$nih." | ".$tgl." ".$jam;
            }
            if(empty($judul) || empty($link) || empty($isi))
            {
                ?>
                <script type="application/x-javascript">
                        alert('Data Masih Ada Yang Kosong !');
                        document.location="<?php echo base_url()?>administrator/berita";
                </script>
                <?php
            }
            
            else
            {
                $simpan = array('id_berita'=>NULL,'judul'=>$judul,'link'=>$link,'isi'=>$isi,'identitas'=>$hasil);
                $this->Adminih->add_berita($simpan);
                ?>
                <script type="application/x-javascript">
                        alert('Data Telah Ditambah !');
                        document.location="<?php echo base_url()?>administrator/berita";
                </script>
                <?php
                
            }
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function delete_berita()
    {
        $session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
            $id = '';
            if($id=$this->uri->segment(3) === FALSE)
            {
                $id=$id;
            }
            else
            {
                $id=$this->uri->segment(3);
            }
            $this->Adminih->delete_berita($id);
             ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>administrator/berita";
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>administrator/";
                </script>
            <?php
        }
    }
    
    function logout()
    {
        session_destroy();
        $this->load->view('web/login');
    }
}
