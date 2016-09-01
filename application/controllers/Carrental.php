<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrental extends CI_Controller 
{
/*
--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `id` int(11) NOT NULL,
  `marka` varchar(25) NOT NULL,
  `model` varchar(40) NOT NULL,
  `modelYili` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--*/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('carrental_model');
		$this->load->library('session');


	}

	public function index()
	{

		redirect(base_url('carrental/adminPanel'));

		
 	}
 	public function adminPanel(){
 		
 		$this->load->view('admin/index');

		redirect(base_url('carrental/listele'));

 	}
 	public function insert_aracEkle(){
 		//$data['marka'] = $this->input->post('marka');
 		//$data['model'] = $this->input->post('model');
 		//$data['modelYili'] = $this->input->post('modelYili');
 		//$data['fiyat'] = $this->input->post('fiyat');
 		//$data['foto'] = $this->input->post('foto');

				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/register', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						 	
						$data=array(
							'marka' => $this->input->post('marka'),
							'model' => $this->input->post('model'),
							'modelYili' => $this->input->post('modelYili'),
							'fiyat' => $this->input->post('fiyat'),
							'detay' => $this->input->post('detay'),
							'title' => $this->input->post('title'),
							'keywords' => $this->input->post('keywords'),
							'desc' => $this->input->post('description'),
							'foto' => $file_name 
						);
						// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
						$this->carrental_model->insert_aracEkle($data);

  
		 
						redirect(base_url('carrental/listele_a_araclar'));
											
                }	

 		

 	}
 	public function insert_metaEkle(){
 		$data['title'] = $this->input->post('title');
 		$data['description'] = $this->input->post('description');
 		$data['keywords'] = $this->input->post('keywords');
 		 
		$id = $this->uri->segment('3');
  		
 		$this->carrental_model->insert_metaEkle($id,$data);

   		if ($id==4) {
   			redirect(base_url('carrental/listele_a_about'));

   		}elseif($id==5){
   			redirect(base_url('carrental/listele_a_duyurular'));

 		}elseif($id==6){
   			redirect(base_url('carrental/listele_a_iletisim'));

 		}else{
   			redirect(base_url('carrental/listele_a_ayarlar'));
   		}

 	}
 	public function insert_duyuruEkle(){ 
 		$data['duyuru'] = $this->input->post('editor1');


 		$this->carrental_model->insert_duyuruEkle($data);

 		 
		redirect(base_url('carrental/listele_a_duyurular'));
		redirect(base_url('carrental/listele_duyurular'));

 	} 
 		public function insert_iletisimEkle(){ 
 		$data['tel'] = $this->input->post('tel');
 		$data['adres'] = $this->input->post('adres');


 		$this->carrental_model->insert_iletisimEkle($data);

 		 
		redirect(base_url('carrental/listele_a_iletisim'));
		 
 	}
 	public function guncelle(){ 
 		$id = $this->uri->segment('3');


 		$query = $this->db->get_where('m_duyuru', array('id' => $id));
 		$data['g_duyuru'] = $query->result();

 		$query = $this->db->get("m_duyuru");
 		$data['m_duyuru'] = $query->result();

		$this->load->view('admin/signup',$data);
		 
 	}

 	public function guncelle_arac(){ 
 		$id = $this->uri->segment('3');


 		$query = $this->db->get_where('araclar', array('id' => $id));
 		$data['g_araclar'] = $query->result();

 		$query = $this->db->get("araclar");
 		$data['araclar'] = $query->result();

		$this->load->view('admin/portfolio',$data);
		 
 	}
 	public function guncelle_admin(){ 
 		$id = $this->uri->segment('3');


 		$query = $this->db->get_where('kullanicilar', array('id' => $id));
 		$data['g_admin'] = $query->result();
 		$query = $this->db->get_where('kullanicilar', array('id' => 0));
 		$data['g_uye'] = $query->result();


 		$query = $this->db->get_where('siteayarlar', array('id' => 3));
 		$data['siteayarlar3'] = $query->result();

		$query = $this->db->get_where('siteayarlar', array('id' => 4));
 		$data['siteayarlar4'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 5));
 		$data['siteayarlar5'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 6));
 		$data['siteayarlar6'] = $query->result();

		$query = $this->db->get_where('siteayarlar', array('id' => 7));
 		$data['siteayarlar7'] = $query->result();


		$query = $this->db->get("kullanicilar");
 		$data['kullanicilar'] = $query->result();

		$query = $this->db->get("m_uyeler");
 		$data['m_uyeler'] = $query->result();
 

		$this->load->view('admin/forms',$data);

		
 	}
 	public function guncelle_uye(){ 
 		$id = $this->uri->segment('3');

		$query = $this->db->get_where('m_uyeler', array('id' => $id));
 		$data['g_uye'] = $query->result();

 		$query = $this->db->get_where('kullanicilar', array('id' => 0));
 		$data['g_admin'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 3));
 		$data['siteayarlar3'] = $query->result();

		$query = $this->db->get_where('siteayarlar', array('id' => 4));
 		$data['siteayarlar4'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 5));
 		$data['siteayarlar5'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 6));
 		$data['siteayarlar6'] = $query->result();

		$query = $this->db->get_where('siteayarlar', array('id' => 7));
 		$data['siteayarlar7'] = $query->result();


		$query = $this->db->get("kullanicilar");
 		$data['kullanicilar'] = $query->result();

		$query = $this->db->get("m_uyeler");
 		$data['m_uyeler'] = $query->result();
 

		$this->load->view('admin/forms',$data);

		
 	}
 	public function uyeGuncelle(){ 
 		$id = $this->uri->segment('3');


 		$data['ad'] = $this->input->post('uad');
		$data['soyad'] = $this->input->post('usoyad');
		$data['mail'] = $this->input->post('umail');
		$data['e_yil'] = $this->input->post('ueyil');
 		$data['sifre'] = $this->input->post('usifre');


		$this->carrental_model->uyeGuncelle($id,$data);

		redirect(base_url('carrental/listele_a_ayarlar'));
		 
 	}

	public function adminGuncelle(){ 
 		$id = $this->uri->segment('3');


 		$data['ad'] = $this->input->post('ad');
		$data['sifre'] = $this->input->post('sifre');


		$this->carrental_model->adminGuncelle($id,$data);

		redirect(base_url('carrental/listele_a_ayarlar'));
		 
 	}

 	 public function duyuruGuncelle(){ 
 		$id = $this->uri->segment('3');


 		$data['duyuru'] = $this->input->post('editor2');


 		 
		$this->carrental_model->duyuruGuncelle($id,$data);

		redirect(base_url('carrental/listele_a_duyurular'));
		 
 	}
 	public function aracGuncelle(){ 
 				
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/register', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						 	
						$data1['foto'] = $file_name;
				 }	

						// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
						  $id = $this->uri->segment('3');
						  $data1['marka'] = $this->input->post('marka');
						$data1['model'] = $this->input->post('model');
						$data1['modelYili'] = $this->input->post('modelYili');
						$data1['fiyat'] = $this->input->post('fiyat');
						$data1['detay'] = $this->input->post('detay3');
						$data1['title'] = $this->input->post('title');
						$data1['keywords'] = $this->input->post('keywords');
						$data1['desc'] = $this->input->post('desc');
						


		 			    $this->carrental_model->aracGuncelle($id,$data1);

		 					
                
 		 
						redirect(base_url('carrental/listele_a_araclar'));
						
		
		 
 	}
 	public function insert_uyeEkle(){ 
 		$data['mail'] = $this->input->post('mail2');
 		$data['sifre'] = $this->input->post('password2');
		$data['ad'] = $this->input->post('ad2');
 		$data['soyad'] = $this->input->post('soyad2');
 		$data['e_yil'] = $this->input->post('eyas2');


 		$this->carrental_model->insert_uyeEkle($data);

 		 
 		 $this->load->view('carrental/login',['mesaj'=>"Başarılı bir şekilde kayıt oldunuz. Artık giriş yapabilirsiniz..."]); 


		 
		 
 	}
 	public function insert_aboutEkle(){ 
 		$data['about'] = $this->input->post('detay');


 		$this->carrental_model->insert_aboutEkle($data);

 		  
		redirect(base_url('carrental/listele_a_about'));

		redirect(base_url('carrental/listele_duyurular'));

 	}
	public function insert_mesajEkle(){
 		$data['ad'] = $this->input->post('ad');
 		$data['tel'] = $this->input->post('tel');
 		$data['mail'] = $this->input->post('mail');
 		$data['mesaj'] = $this->input->post('mesaj');
 

 	    $this->carrental_model->insert_mesajEkle($data);

 // Email Ayarlarını veritabanından okuma
	    $query=$this->db->get("mutluayarlar"); // settings tablasonun veritananından çek
	    $data["veri"]=$query->result(); // Sonuçları veri değişkenine yükle
		
	  
	  // Email Server Ayarları
		$config = Array(
		'protocol' => 'mail',
		'smtp_host' => $data["veri"][0]->smtpserver,
		'smtp_port' => $data["veri"][0]->smtpport,
		'smtp_user' => $data["veri"][0]->smtpemail, // change it to yours
		'smtp_pass' => $data["veri"][0]->smtpsifre, // change it to yours
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'wordwrap' => TRUE
		);
		
		$adsoy=$this->input->post('ad');
		$email=$this->input->post('mail');
		
		// İstediğiniz şekilde mail içeriğini html olarak oluşturabilirsiniz
		$mesaj="Değerli : ".$adsoy."<br> Göndermiş olduğunuz mesaj alınmıştır.<br>Teşekkür ederiz<br>";
	 
		$mesaj.="Gönderdiğiniz Mesaj Aşğıdaki gibidir<br>";
		$mesaj.=$this->input->post('mesaj');
		
		
		// EMAİL gönderme *******************
				
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail); // change it to yours
		$this->email->to($email); // change it to yours
		$this->email->subject('Bilgi!');
		$this->email->message($mesaj); 
		
		//Send mail 
         if($this->email->send()) 
			$this->session->set_flashdata("email_sent","Email başarı ile gönderildi."); 
         else 
		 {
		    $this->session->set_flashdata("email_sent","Email Gondermede Hata Oluştu."); 
           //  show_error($this->email->print_debugger()); // ayrıntılı hata dökümü için
		 }
 		
 		$query = $this->db->get_where('siteayarlar', array('id' => 6));
 		$data['siteayarlar6'] = $query->result();

 		$query = $this->db->get("m_iletisim");
 		$data['iletisim'] = $query->result();

		 $this->load->view('carrental/locations',$data);

 	}


 	public function delete_aracDel(){

 		$id = $this->uri->segment('3');
  		
  		
 		$this->carrental_model->delete_aracDel($id);

 		redirect(base_url('carrental/listele_a_araclar'));


 	}
 		public function delete_metaDel(){

 		$id = $this->uri->segment('3');
  		
  		
 		$this->carrental_model->delete_metaDel($id);
 
 		redirect(base_url('carrental/listele_a_ayarlar'));


 	}
 	 
 	 	public function delete_mesajDel(){

 		$id = $this->uri->segment('3');
  		
 		$this->carrental_model->delete_mesajDel($id);
 
 		redirect(base_url('carrental/listele_a_mesajlar'));


 	}
 		 	public function delete_duyuruDel(){

 		$id = $this->uri->segment('3');
  		
 		$this->carrental_model->delete_duyuruDel($id);

  		redirect(base_url('carrental/listele_a_duyurular'));
 		redirect(base_url('carrental/listele_duyurular'));



 	}
 	public function delete_uyeDel(){

 		$id = $this->uri->segment('3');
  		
 		$this->carrental_model->delete_uyeDel($id);

  		redirect(base_url('carrental/listele_a_ayarlar'));
 		 


 	}
 		public function delete_aboutDel(){

 		$id = $this->uri->segment('3');
  		
 		$this->carrental_model->delete_aboutDel($id);

  		redirect(base_url('carrental/listele_a_about'));
 		redirect(base_url('carrental/listele_about'));



 	}
 	public function delete_adminDel(){

 		$id = $this->uri->segment('3');
  		
 		$this->carrental_model->delete_adminDel($id);

  		redirect(base_url('carrental/listele_a_ayarlar')); 

 	}
 	public function insert_adminEkle(){ 
 		$data['ad'] = $this->input->post('a_isim');
		$data['sifre'] = $this->input->post('a_sifre');


 		$this->carrental_model->insert_adminEkle($data);

 		  
		redirect(base_url('carrental/listele_a_ayarlar'));
 

 	}
 	public function listele(){


 		 $this->db->select('*');
		  $this->db->from('mesaj');
		  $this->db->order_by("id", "desc");
		    
		  $query = $this->db->get();
 
		$data['mesaj'] = $query->result();

 		$this->load->view('admin/index',$data);



		
 	}
 	public function listele_duyurular(){

 		$query = $this->db->get("m_duyuru");
 		$data['m_duyuru'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 5));
 		$data['siteayarlar5'] = $query->result();

 		$this->load->view('carrental/duyuru',$data);


		
 	}
 	public function listele_about(){

 		$query = $this->db->get("m_about");
 		$data['m_about'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 4));
 		$data['siteayarlar4'] = $query->result();

 		$this->load->view('carrental/about',$data);


		
 	}
 	 	public function listele_a_duyurular(){

 		$query = $this->db->get("m_duyuru");
 		$data['m_duyuru'] = $query->result();

		$query = $this->db->get_where('m_duyuru', array('id' => 1));
 		$data['g_duyuru'] = $query->result();

		$query = $this->db->get_where('siteayarlar', array('id' => 5));
 		$data['siteayarlar5'] = $query->result();
 		
 		$this->load->view('admin/signup',$data);


		
 	}
 	public function listele_a_uyeler(){

 		$query = $this->db->get("m_uyeler");
 		$data['m_uyeler'] = $query->result();

 

 		$this->load->view('admin/forms',$data);


		
 	}
 	public function listele_a_about(){

 		$query = $this->db->get("m_about");
 		$data['m_about'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 4));
 		$data['siteayarlar4'] = $query->result();

 		$this->load->view('admin/blog',$data);


		
 	} 	
 	public function listele_a_iletisim(){

 		$query = $this->db->get("m_iletisim");
 		$data['m_iletisim'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 6));
 		$data['siteayarlar6'] = $query->result();


 		$this->load->view('admin/iletisim',$data);


		
 	} 	
 	public function listele_a_mesajlar(){

 		//$query = $this->db->get("mesaj");
 		//$data['mesaj'] = $query->result();

 		  $this->db->select('*');
		  $this->db->from('mesaj');
		  $this->db->order_by("id", "desc");
		    
		  $query = $this->db->get();
 
		$data['mesaj'] = $query->result();

 		$this->load->view('admin/index',$data);


		
 	}
 	 	public function listele_a_araclar(){

 		$query = $this->db->get("araclar");
 		$data['araclar'] = $query->result();
		
		$query = $this->db->get_where('araclar', array('id' => 1));
 		$data['g_araclar'] = $query->result();

 		$this->load->view('admin/portfolio',$data);


		
 	}
 		public function listele_a_aracekle(){


 		$this->load->view('admin/register');


		
 	}
 	public function listele_a_ayarlar(){
 		$query = $this->db->get_where('kullanicilar', array('id' => 0));
 		$data['g_admin'] = $query->result();

 		$query = $this->db->get_where('m_uyeler', array('id' => 0));
 		$data['g_uye'] = $query->result();


		$query = $this->db->get_where('siteayarlar', array('id' => 3));
 		$data['siteayarlar3'] = $query->result();

		$query = $this->db->get_where('siteayarlar', array('id' => 4));
 		$data['siteayarlar4'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 5));
 		$data['siteayarlar5'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 6));
 		$data['siteayarlar6'] = $query->result();

		$query = $this->db->get_where('siteayarlar', array('id' => 7));
 		$data['siteayarlar7'] = $query->result();


		$query = $this->db->get("kullanicilar");
 		$data['kullanicilar'] = $query->result();

		$query = $this->db->get("m_uyeler");
 		$data['m_uyeler'] = $query->result();

 		$this->load->view('admin/forms',$data);


		
 	}


 	 	public function listele2(){

 	 	 
		if (!$this->session->userdata('logged_in')) {
			  

  				$data['mailadres'] = "Giriş yapılmadı, detaları görebilmek için üye girişi yapınız!";

  				$query = $this->db->get("araclar");
 		$data['araclar'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 3));
 		$data['siteayarlar'] = $query->result();
			 
 	 
 		
 		$this->load->view('carrental/index2',$data);
 		
			 
		}else{
			$session_data = $this->session->userdata['logged_in'];
       
			$data['mailadres'] = $session_data['mail'];
 		
		 $query = $this->db->get("araclar");
 		$data['araclar'] = $query->result();

 		$query = $this->db->get_where('siteayarlar', array('id' => 3));
 		$data['siteayarlar'] = $query->result();
			 
 	 
 		
 		$this->load->view('carrental/index',$data);
 
		}

		
 
 	}
 public function detay(){
		
		$id = $this->uri->segment('3');
  		
 		$query = $this->db->get_where("araclar",array("id"=>$id));
 		$data['araclar'] = $query->result();

 		
	//    $query = $this->db->get_where('siteayarlar', array('id' => 7));
 	//	$data['siteayarlar7'] = $query->result();

		

 		$this->load->view('carrental/aracSayfasi',$data);
 
 	}
 public function loginControl(){
 
 		$girisyaptimi = $this->session->userdata('login');
	
		if ($girisyaptimi == true) {
			redirect('carrental/index');
		}
}
 public function login(){
 
 		$girisyaptimi = $this->session->userdata('login');
	
		if($this->input->post() == false){
			$this->load->view('carrental/login');
 		
		}else{
			$user =$this->input->post('mail');
                $passw =$this->input->post('password');
                $this->load->model('Carrental_model');
                $result = $this->Carrental_model->login2($user,$passw);
			 
				if($result) {
                   $sess_array = array();
                   foreach($result as $row) {
                       $sess_array = array(
                       'id' => $row->id, 
                       'mail' => $row->mail 
                       );
                       
                       $this->session->set_userdata('logged_in', $sess_array);

                       $session_data = $this->session->userdata['logged_in'];
                     
                       $query = $this->db->get("araclar");
 						$data['araclar'] = $query->result();

 						$query = $this->db->get_where('siteayarlar', array('id' => 3));
 						$data['siteayarlar'] = $query->result();

 	 					$data['mailadres'] = $session_data['mail'];
 		
 						$this->load->view('carrental/index',$data);
                      // redirect(base_url('carrental/listele2'));
                       }
                  return TRUE;
                } else {
                    
                  $hata= 'Invalid username or password';
                  $this->load->view('carrental/login');
                  return FALSE;
                }
			 

		}
}

 public function logout(){
			$this->session->unset_userdata('login');
			$this->session->sess_destroy();
			redirect(base_url('carrental/login'));


 }
  public function listelewl(){
			$this->session->unset_userdata('login');
			$this->session->sess_destroy();
			redirect(base_url('carrental/listele2'));


 }

 public function okundu(){

 		$id = $this->uri->segment('3');

 		$this->db->set('okundu', 1, FALSE);
		$this->db->where('id', $id);
		$this->db->update('mesaj');

		redirect('carrental/listele_a_mesajlar');

 		
 }

 public function sifremiunuttum(){

 		$email = $this->input->post('mail3');
        

 		$sonuc = $this->carrental_model->forgot($email);
		 

// Email Ayarlarını veritabanından okuma
	    $query=$this->db->get("mutluayarlar"); // settings tablasonun veritananından çek
	    $data["veri"]=$query->result(); // Sonuçları veri değişkenine yükle
		
	  
	  // Email Server Ayarları
		$config = Array(
		'protocol' => 'mail',
		'smtp_host' => $data["veri"][0]->smtpserver,
		'smtp_port' => $data["veri"][0]->smtpport,
		'smtp_user' => $data["veri"][0]->smtpemail, // change it to yours
		'smtp_pass' => $data["veri"][0]->smtpsifre, // change it to yours
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'wordwrap' => TRUE
		);
		
		
		// İstediğiniz şekilde mail içeriğini html olarak oluşturabilirsiniz
		$mesaj="Değerli : ".$email."<br> Şifreniz gönderilmiştir.<br>";
	 
		$mesaj.="Kullanıcı şifreniz aşağıdaki gibidir...<br>";
		$mesaj.=$sonuc;
		
		
		// EMAİL gönderme *******************
				
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail); // change it to yours
		$this->email->to($email); // change it to yours
		$this->email->subject('Şifre!');
		$this->email->message($mesaj); 
		
		//Send mail 
         if($this->email->send()) 
			$this->session->set_flashdata("email_sent","Email başarı ile gönderildi."); 
         else 
		 {
		    $this->session->set_flashdata("email_sent","Email Gondermede Hata Oluştu."); 
           //  show_error($this->email->print_debugger()); // ayrıntılı hata dökümü için
		 }
 		
		$this->load->view('carrental/login');
                 




 }





 }
