<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sayfagecis extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('carrental_model');
 	}
public function index()
	{
		
 	}
 public function git_home()
 {

		redirect(base_url('carrental/listele2'));
 }
  public function git_contact()
 {
 		$query = $this->db->get_where('siteayarlar', array('id' => 6));
 		$data['siteayarlar6'] = $query->result();

 		$query = $this->db->get_where('m_iletisim', array('id' => 1));
 		$data['iletisim'] = $query->result();

		$this->load->view('carrental/locations.php',$data);
 }
   public function git_about()
 {
		redirect(base_url('carrental/listele_about'));
 }
    public function git_adminPanel()
 {
		$this->load->view('auth/giris.php');
 }
  public function git_login()
 {
		$this->load->view('carrental/login.php');
 }
     public function git_duyurular()
 {
		redirect(base_url('carrental/listele_duyurular'));
 }
  public function git_pindex()
 {

		redirect(base_url('carrental/listele_a_mesajlar'));
 }
   public function git_pduyuru()
 {

		redirect(base_url('carrental/listele_a_duyurular'));
 } 
  public function git_phakkimizda()
 {

		redirect(base_url('carrental/listele_a_about'));
 }
   public function git_paraclar()
 {

		redirect(base_url('carrental/listele_a_araclar'));
 }
   public function git_paracekle()
 {

		redirect(base_url('carrental/listele_a_aracekle'));
 }
   public function git_payarlar()
 {

		redirect(base_url('carrental/listele_a_ayarlar'));
 }
  public function git_piletisim()
 {

		redirect(base_url('carrental/listele_a_iletisim'));
 }
  public function git_panasayfa()
 {


		redirect(base_url('carrental/listelewl'));
 }
}