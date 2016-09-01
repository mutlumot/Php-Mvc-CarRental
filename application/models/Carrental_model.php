<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Carrental_Model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

    public function insert_aracEkle($data)
	{
		 $this->db->insert('araclar',$data);
	}
	 public function insert_duyuruEkle($data)
	{
		 $this->db->insert('m_duyuru',$data);
	}
	 public function insert_uyeEkle($data)
	{
		 $this->db->insert('m_uyeler',$data);
	}
	 public function insert_aboutEkle($data)
	{
		 $this->db->where('id', 1);
		 $this->db->update('m_about',$data); 
		 
	}
		 public function insert_iletisimEkle($data)
	{
		 $this->db->where('id', 1);
		 $this->db->update('m_iletisim',$data); 
		 
	}
	  public function insert_mesajEkle($data)
	{
		 $this->db->insert('mesaj',$data);
	}
	 public function insert_metaEkle($id,$data)
	{
		 $this->db->where('id', $id);
		 $this->db->update('siteayarlar',$data);
	}
		 public function duyuruGuncelle($id,$data)
	{
		 $this->db->where('id', $id);
		 $this->db->update('m_duyuru',$data);
	}
			 public function adminGuncelle($id,$data)
	{
		 $this->db->where('id', $id);
		 $this->db->update('kullanicilar',$data);
	}
	 public function uyeGuncelle($id,$data)
	{
		 $this->db->where('id', $id);
		 $this->db->update('m_uyeler',$data);
	}
	public function aracGuncelle($id,$data)
	{
		 $this->db->where('id', $id);
		 $this->db->update('araclar',$data);
	}
	public function insert_adminEkle($data)
	{
		 $this->db->insert('kullanicilar',$data);
	}
	public function delete_adminDel($id)
	{
		 $this->db->where('id', $id);
		 $this->db->delete('kullanicilar'); 
	}
	public function delete_aracDel($id)
	{
		 $this->db->where('id', $id);
		 $this->db->delete('araclar'); 
	}
	public function delete_metaDel($id)
	{
		 $this->db->where('id', $id);
		 $this->db->delete('siteayarlar'); 
	}
	public function delete_mesajDel($id)
	{
		 $this->db->where('id', $id);
		 $this->db->delete('mesaj'); 
	}
	public function delete_duyuruDel($id)
	{
		 $this->db->where('id', $id);
		 $this->db->delete('m_duyuru'); 
	}
	public function delete_uyeDel($id)
	{
		 $this->db->where('id', $id);
		 $this->db->delete('m_uyeler'); 
	}
	public function delete_aboutDel($id)
	{
		 $this->db->where('id', $id);
		 $this->db->delete('m_about'); 
	}
		  function login($user,$passw) 
		{
		  
		  $this->db->select('*');
		  $this->db->from('kullanicilar');
		  $this->db->where('ad', $user);
		  $this->db->where('sifre', $passw);
		  $this->db->limit(1);
		   
		  $query = $this->db->get();
		  if($query->num_rows() == 1) {
			  return $query->result(); 
		  } else {
			  return false; 
		  }
	   }
	     function login2($user,$passw) 
		{
		  
		  $this->db->select('*');
		  $this->db->from('m_uyeler');
		  $this->db->where('mail', $user);
		  $this->db->where('sifre', $passw);
		  $this->db->limit(1);
		   
		  $query = $this->db->get();
		  if($query->num_rows() == 1) {
			  return $query->result(); 
		  } else {
			  return false; 
		  }
	   }
	   	     function forgot($email) 
		{
		  
		  $this->db->select('sifre');
		  $this->db->from('m_uyeler');
		  $this->db->where('mail', $email);
		  $this->db->limit(1);
		   
		  $query = $this->db->get();
		  if($query->num_rows() == 1) {
			  return $query->row()->sifre; 
		  } else {
			  return false; 
		  }
	   }
}

