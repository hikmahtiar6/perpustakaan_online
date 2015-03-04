<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {

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
				$this->load->view('anggota/input/jstitle');
				$this->load->view('anggota/header');
				$this->load->view('anggota/input/pancibox');
				$this->load->view('anggota/menu');
				$this->load->view('anggota/konten');
				$this->load->view('anggota/footer');
			
		}
        else
        {
           	?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>website/";
                </script>
            <?php
        }
	}
	
	function beranda()
	{
		$session=isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($session!='')
        {
			
				$this->load->view('anggota/input/jstitle');
				$this->load->view('anggota/header');
				$this->load->view('anggota/input/pancibox');
				$this->load->view('anggota/menu');
				$this->load->view('anggota/konten');
				$this->load->view('anggota/footer');
			
		}
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>website/";
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
			
				$config['base_url'] = base_url() . 'anggota/rak_buku/';
				$config['total_rows'] = $quwe->num_rows();
				$config['per_page'] = $limit;
				$config['uri_segment'] = 3;
				$config['first_link'] = 'Awal';
				$config['last_link'] = 'Akhir';
				$config['next_link'] = 'Selanjutnya';
				$config['prev_link'] = 'Sebelumnya';
				$this->pagination->initialize($config);
				$data["paginator"] =$this->pagination->create_links();
			
			$this->load->view('anggota/input/jstitle');
			$this->load->view('anggota/header');
			$this->load->view('anggota/input/pancibox');
			$this->load->view('anggota/menu');
			$this->load->view('anggota/konten/rak_buku',$data);
			$this->load->view('anggota/footer');
		}
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>website/";
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
				$quwe = $this->Adminih->kategori_buku();        
				$data['sql'] = $this->Adminih->kategori_limit($limit,$offset);
			
				$config['base_url'] = base_url() . 'anggota/kategori_buku/';
				$config['total_rows'] = $quwe->num_rows();
				$config['per_page'] = $limit;
				$config['uri_segment'] = 3;
				$config['first_link'] = 'Awal';
				$config['last_link'] = 'Akhir';
				$config['next_link'] = 'Selanjutnya';
				$config['prev_link'] = 'Sebelumnya';
				$this->pagination->initialize($config);
				$data["paginator"] =$this->pagination->create_links();
			
			$this->load->view('anggota/input/jstitle');
			$this->load->view('anggota/header');
			$this->load->view('anggota/input/pancibox');
			$this->load->view('anggota/menu');
			$this->load->view('anggota/konten/kategori_buku',$data);
			$this->load->view('anggota/footer');
		}
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>website/";
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
			
				$config['base_url'] = base_url() . 'anggota/buku/';
				$config['total_rows'] = $quwe->num_rows();
				$config['per_page'] = $limit;
				$config['uri_segment'] = 3;
				$config['first_link'] = 'Awal';
				$config['last_link'] = 'Akhir';
				$config['next_link'] = 'Selanjutnya';
				$config['prev_link'] = 'Sebelumnya';
				$this->pagination->initialize($config);
				$data["paginator"] =$this->pagination->create_links();
			
			$this->load->view('anggota/input/jstitle');
			$this->load->view('anggota/header');
			$this->load->view('anggota/input/pancibox');
			$this->load->view('anggota/menu');
			$this->load->view('anggota/konten/buku',$data);
			$this->load->view('anggota/footer');
		}
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>website/";
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
			
				$config['base_url'] = base_url() . 'anggota/ebook/';
				$config['total_rows'] = $quwe->num_rows();
				$config['per_page'] = $limit;
				$config['uri_segment'] = 3;
				$config['first_link'] = 'Awal';
				$config['last_link'] = 'Akhir';
				$config['next_link'] = 'Selanjutnya';
				$config['prev_link'] = 'Sebelumnya';
				$this->pagination->initialize($config);
				$data["paginator"] =$this->pagination->create_links();
			
			$this->load->view('anggota/input/jstitle');
			$this->load->view('anggota/header');
			$this->load->view('anggota/input/pancibox');
			$this->load->view('anggota/menu');
			$this->load->view('anggota/konten/ebook',$data);
			$this->load->view('anggota/footer');
		}
        else
        {
            ?>
                <script type="application/x-javascript">
                        alert('Maaf Anda Belum Login atau Sudah Keluar !');
                        document.location="<?php echo base_url()?>website/";
                </script>
            <?php
        }
	}
	
	
	function logout()
	{
		session_destroy();?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>website/";
                </script>
            <?php
	}
}
