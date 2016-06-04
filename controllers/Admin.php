<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function indexx()
	{
		if($this->session->userdata('is_logged_in')) {
		        $this->load->view('admin/sidebar');
			$this->load->view('admin/index');
		} else {
			$this->login();
		}
	}
	public function index() {
		
		if($this->session->userdata('is_logged_in')) {
		        $this->load->view('admin_panel/pages/index');
		} else {
			$this->login();
		}
	}
	public function blank() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/blank');
		} else {
			$this->login();
		}
	}
	public function succes() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/succes');
		} else {
			$this->login();
		}
	}
	public function setari_design(){
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/setari_design');
		} else {
			$this->login();
		}
	}
	public function setari_general(){
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/setari_general');
		} else {
			$this->login();
		}
	}

	public function trimitemail(){
		$this->load->library('email');

		$this->email->from('your@example.com', 'Your Name');
		$this->email->to('tudosa.victor@yahoo.com'); 
		$this->email->cc(''); 
		$this->email->bcc(''); 

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		echo $this->email->print_debugger();

		if ($this->email->send()) {
			echo "Am trimis sefu!";
		} else {
			echo "Sorry boss!";
		}
	}

	//NEFOLOSITOARE

	

	// END NEFOLOSITOARE

	public function services() {
		$this->load->library('form_validation');
		
		$this->db->query("UPDATE servicii SET da = '".$this->input->post('show')."'");

		$this->db->query("UPDATE servicii SET titlu1 = '".$this->input->post('titlu1')."'");
		$this->db->query("UPDATE servicii SET continut1 = '".$this->input->post('continut1')."'");

		$this->db->query("UPDATE servicii SET titlu2 = '".$this->input->post('titlu2')."'");
		$this->db->query("UPDATE servicii SET continut2 = '".$this->input->post('continut2')."'");

		$this->db->query("UPDATE servicii SET titlu3 = '".$this->input->post('titlu3')."'");
		$this->db->query("UPDATE servicii SET continut3 = '".$this->input->post('continut3')."'");

		$this->db->query("UPDATE servicii SET titlu4 = '".$this->input->post('titlu4')."'");
		$this->db->query("UPDATE servicii SET continut4 = '".$this->input->post('continut4')."'");

		redirect('index.php/admin/setari_design');
	}

	public function change_slide3() {
		$this->load->library('form_validation');
		if(is_uploaded_file($_FILES["slide3"]["tmp_name"]))
				move_uploaded_file($_FILES["slide3"]["tmp_name"],"./images/slide3.jpg");
		redirect('index.php/admin/setari_design');
	}

	public function change_slide2() {
		$this->load->library('form_validation');
		if(is_uploaded_file($_FILES["slide2"]["tmp_name"]))
				move_uploaded_file($_FILES["slide2"]["tmp_name"],"./images/slide2.jpg");
		redirect('index.php/admin/setari_design');
	}

	public function change_slide1() {
		$this->load->library('form_validation');
		if(is_uploaded_file($_FILES["slide1"]["tmp_name"]))
				move_uploaded_file($_FILES["slide1"]["tmp_name"],"./images/slide1.jpg");
		redirect('index.php/admin/setari_design');
	}

	public function change_logo() {
		$this->load->library('form_validation');
		if(is_uploaded_file($_FILES["logo"]["tmp_name"]))
				move_uploaded_file($_FILES["logo"]["tmp_name"],"./images/logo.png");
		redirect('index.php/admin/setari_design');
	}

	public function change_template() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET template = '".$this->input->post('template')."'");

		if($this->input->post('template')>=3 && empty($this->input->post('primaryc'))==false && empty($this->input->post('secondary'))==false && empty($this->input->post('tertiary'))==false && empty($this->input->post('quaternary'))==false) 
		{
			$this->db->query("UPDATE general SET layout = '".$this->input->post('layout')."'");
			$this->db->query("UPDATE general SET bgcolor = '".$this->input->post('bgcolor')."'");

			$this->db->query("UPDATE general SET primaryc = '".$this->input->post('primaryc')."'");
			$this->db->query("UPDATE general SET secondary = '".$this->input->post('secondary')."'");
			$this->db->query("UPDATE general SET tertiary = '".$this->input->post('tertiary')."'");
			$this->db->query("UPDATE general SET quaternary = '".$this->input->post('quaternary')."'");
		}
		$this->setari_design();
	}

	public function setari() {
		$this->load->view('admin/sidebar');
		$this->load->view('admin/setari');
	}
	public function titlu_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET titlu_nume_site = '".$this->input->post('titlu_nume_site')."'");
		$this->setari_general();
	}
	public function email_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET email_contact = '".$this->input->post('email_contact')."'");
		$this->setari_general();
	}
	public function meta_desc_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET default_meta_description = '".$this->input->post('default_meta_description')."'");
		$this->setari_general();
	}
	public function meta_key_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET default_meta_key = '".$this->input->post('default_meta_key')."'");
		$this->setari_general();
	}
	public function tel_con_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET telefon_contact = '".$this->input->post('telefon_contact')."'");
		$this->setari_general();
	}
	public function ftext_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET footer_text = '".$this->input->post('footer_text')."'");
		$this->setari_general();
	}
	public function flink_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET footer_link = '".$this->input->post('footer_link')."'");
		$this->setari_general();
	}
	public function despre_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET about = '".$this->input->post('despre')."'");
		$this->setari_design();
	}
	public function facebook_link_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET facebook_link = '".$this->input->post('facebook_link')."'");
		$this->setari_general();
	}
	public function twiter_link_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET twiter_link = '".$this->input->post('twiter_link')."'");
		$this->setari_general();
	}
	public function google_link_ins() {
		$this->load->library('form_validation');
		$this->db->query("UPDATE general SET google_link = '".$this->input->post('google_link')."'");
		$this->setari_general();
	}

	public function add_produs($error = array()) {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/add_produs', array('error'=>''));
		} else {
			$this->login();
		}
	}
	public function add_produs_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titlu', 'Titlu', 'required|trim');
		$this->form_validation->set_rules('continut', 'Continut', 'required|trim');
		$this->form_validation->set_rules('pret', 'Pret', 'required|trim');
		$this->form_validation->set_rules('categorie', 'Categorie', 'required|trim');
		$this->form_validation->set_rules('seo_title', 'SEO TITLE', 'required|trim');
		$this->form_validation->set_rules('seo_description', 'SEO DESCRIPTION', 'required|trim');
		$this->form_validation->set_rules('seo_key', 'SEO KEYWORDS', 'required|trim');

		if($this->form_validation->run()) {
			$produs = array(
			   'titlu' => $this->input->post('titlu'),
			   'continut' => $this->input->post('continut'),
			   'pret' => $this->input->post('pret'),
			   'categorie' => $this->input->post('categorie'),
			   'seo_title' => $this->input->post('seo_title'),
			   'seo_description' => $this->input->post('seo_description'),
			   'seo_key' => $this->input->post('seo_key'),
			   'video' => $this->input->post('video'),
			   'nume_imagine' => $this->input->post('titlu').".jpg"
			);
			$this->db->insert('produse', $produs);
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				move_uploaded_file($_FILES["pic"]["tmp_name"],"./images/".$this->input->post('titlu').".jpg");
			$this->load->view('admin_panel/pages/succes');
		} else {
			$this->add_produs();
		}
	}
	public function produse() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/produse');
		} else {
			$this->login();
		}
	}
	public function edit_produs($id='') {
		if($this->session->userdata('is_logged_in')) {
			$date['name'] = ($id) ? $id : $this->name;
			$this->load->view('admin_panel/pages/edit_produs', $date);
		} else {
			$this->login();
		}
	}
	public function edit_produs_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titlu', 'Titlu', 'required|trim');
		$this->form_validation->set_rules('continut', 'Continut', 'required|trim');
		$this->form_validation->set_rules('pret', 'Pret', 'required|trim');
		$this->form_validation->set_rules('categorie', 'Categorie', 'required|trim');
		$this->form_validation->set_rules('seo_title', 'SEO TITLE', 'required|trim');
		$this->form_validation->set_rules('seo_description', 'SEO DESCRIPTION', 'required|trim');
		$this->form_validation->set_rules('seo_key', 'SEO KEYWORDS', 'required|trim');

		if($this->form_validation->run()) {
			$paje = array(
			   'titlu' => $this->input->post('titlu'),
			   'continut' => $this->input->post('continut'),
			   'pret' => $this->input->post('pret'),
			   'seo_title' => $this->input->post('seo_title'),
			   'seo_description' => $this->input->post('seo_description'),
			   'seo_key' => $this->input->post('seo_key'),
			   'video' => $this->input->post('video')
			);
			
			$t = $this->input->post('titlu');
			$this->db->query("UPDATE produse SET titlu = '".$this->input->post('titlu')."', continut = '".$this->input->post('continut')."', pret = '".$this->input->post('pret')."', categorie = '".$this->input->post('categorie')."', seo_title = '".$this->input->post('seo_title')."', seo_description = '".$this->input->post('seo_description')."', seo_key = '".$this->input->post('seo_key')."', video = '".$this->input->post('video')."' WHERE id = '". $this->input->post('id') ."'");
			
			$query = $this->db->query("SELECT * FROM produse WHERE id = '". $this->input->post('id') ."'");
			foreach ($query->result() as $row)
			{
			  $nume_imagine = $row->nume_imagine;
			}

			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				move_uploaded_file($_FILES["pic"]["tmp_name"],"./images/".$nume_imagine);
			
			$this->edit_produs($this->input->post('id'));
			?>
			<center><h2>Produsul a fost editat</h2></center>
			<!--<a style="text-decoration:none;" href="<?php echo base_url().'index.php/admin/'; ?>">Inapoi la pagina principala</a></center> -->
		<?php } else {
			$this->edit_produs($this->input->post('id'));
		}
	}
	public function delete_produs($id='') {
		if($this->session->userdata('is_logged_in')) {
			$date['name'] = ($id) ? $id : $this->name;
			$this->load->view('admin_panel/pages/delete_produs', $date);
		} else {
			$this->login();
		}
	}

	public function add_page($error = array()) {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/add_page', array('error'=>''));
		} else {
			$this->login();
		}
	}
	public function add_page_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titlu', 'Titlu', 'required|trim');
		$this->form_validation->set_rules('continut', 'Continut', 'required|trim');
		$this->form_validation->set_rules('seo_title', 'SEO TITLE', 'required|trim');
		$this->form_validation->set_rules('seo_description', 'SEO DESCRIPTION', 'required|trim');
		$this->form_validation->set_rules('seo_key', 'SEO KEYWORDS', 'required|trim');

		if($this->form_validation->run()) {
			$page = array(
			   'titlu' => $this->input->post('titlu'),
			   'continut' => $this->input->post('continut'),
			   'seo_title' => $this->input->post('seo_title'),
			   'seo_description' => $this->input->post('seo_description'),
			   'seo_key' => $this->input->post('seo_key'),
			   'video' => $this->input->post('video')
			);
			
			$this->db->insert('pages', $page);

			$query = $this->db->query("SELECT * FROM pages");
            foreach ($query->result() as $row)
            {
            	$id = $row->id;
            }

			if($this->input->post('target')) {
				$this->db->query("UPDATE pages SET target_blank = '".$this->input->post('target')."' WHERE id = '". $id ."' ");
			} else {
				$this->db->query("UPDATE pages SET target_blank = '0' WHERE id = '". $id ."' ");
			}
			if($this->input->post('show_menu')) {
				$this->db->query("UPDATE pages SET show_menu = '".$this->input->post('show_menu')."' WHERE id = '". $id ."' ");
			} else {
				$this->db->query("UPDATE pages SET show_menu = '0' WHERE id = '". $id ."' ");
			}
			if($this->input->post('show_site')) {
				$this->db->query("UPDATE pages SET show_site = '".$this->input->post('show_site')."' WHERE id = '". $id ."' ");
			} else {
				$this->db->query("UPDATE pages SET show_site = '0' WHERE id = '". $id ."' ");
			}

			$this->load->view('admin_panel/pages/succes');
		} else {
			$this->add_page();
		}
	}
	public function pages() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/pages');
		} else {
			$this->login();
		}
	}
	public function edit_page($id='') {
		if($this->session->userdata('is_logged_in')) {
			$date['name'] = ($id) ? $id : $this->name;
			$this->load->view('admin_panel/pages/edit_page', $date);
		} else {
			$this->login();
		}
	}
	public function edit_page_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('continut', 'Continut', 'required|trim');
		if($this->input->post('id')!=1) {
			$this->form_validation->set_rules('titlu', 'Titlu', 'required|trim');
			$this->form_validation->set_rules('seo_title', 'SEO TITLE', 'required|trim');
			$this->form_validation->set_rules('seo_description', 'SEO DESCRIPTION', 'required|trim');
			$this->form_validation->set_rules('seo_key', 'SEO KEYWORDS', 'required|trim');
		}

		if($this->form_validation->run()) {
			
			$t = $this->input->post('titlu');
			$this->db->query("UPDATE pages SET titlu = '".$this->input->post('titlu')."', continut = '".$this->input->post('continut')."', seo_title = '".$this->input->post('seo_title')."', seo_description = '".$this->input->post('seo_description')."', seo_key = '".$this->input->post('seo_key')."', video = '".$this->input->post('video')."' WHERE id = '". $this->input->post('id') ."'");
			
			if($this->input->post('target')) {
				$this->db->query("UPDATE pages SET target_blank = '".$this->input->post('target')."' WHERE id = '". $this->input->post('id') ."' ");
			} else {
				$this->db->query("UPDATE pages SET target_blank = '0' WHERE id = '". $this->input->post('id') ."' ");
			}
			if($this->input->post('show_menu')) {
				$this->db->query("UPDATE pages SET show_menu = '".$this->input->post('show_menu')."' WHERE id = '". $this->input->post('id') ."' ");
			} else {
				$this->db->query("UPDATE pages SET show_menu = '0' WHERE id = '". $this->input->post('id') ."' ");
			}
			if($this->input->post('show_site')) {
				$this->db->query("UPDATE pages SET show_site = '".$this->input->post('show_site')."' WHERE id = '". $this->input->post('id') ."' ");
			} else {
				$this->db->query("UPDATE pages SET show_site = '0' WHERE id = '". $this->input->post('id') ."' ");
			}
			
			$this->edit_page($this->input->post('id'));
			?>
			<center><h2>Pagina a fost editata</h2></center>

		<?php } else {
			$this->edit_page($this->input->post('id'));
		}
	}
	public function delete_page($id='') {
		if($this->session->userdata('is_logged_in')) {
			$date['name'] = ($id) ? $id : $this->name;
			$this->load->view('admin_panel/pages/delete_page', $date);
		} else {
			$this->login();
		}
	}
	
	public function add_art($error = array()) {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/add_art', array('error'=>''));
		} else {
			$this->login();
		}
	}
	public function add_blog_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titlu', 'Titlu', 'required|trim');
		$this->form_validation->set_rules('continut', 'Continut', 'required|trim');
		$this->form_validation->set_rules('categorie', 'Categorie', 'required|trim');
		$this->form_validation->set_rules('seo_title', 'SEO TITLE', 'required|trim');
		$this->form_validation->set_rules('seo_description', 'SEO DESCRIPTION', 'required|trim');
		$this->form_validation->set_rules('seo_key', 'SEO KEYWORDS', 'required|trim');

		if($this->form_validation->run()) {
			$blog = array(
			   'titlu' => $this->input->post('titlu'),
			   'continut' => $this->input->post('continut'),
			   'categorie' => $this->input->post('categorie'),
			   'seo_title' => $this->input->post('seo_title'),
			   'seo_description' => $this->input->post('seo_description'),
			   'seo_key' => $this->input->post('seo_key'),
			   'video' => $this->input->post('video'),
			   'nume_imagine' => $this->input->post('titlu').".jpg"
			);
			$this->db->insert('blogs', $blog);
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				move_uploaded_file($_FILES["pic"]["tmp_name"],"./images/".$this->input->post('titlu').".jpg");
			$this->load->view('admin_panel/pages/succes');
		 } else {
			$this->add_art();
		}
	}
	public function articole() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/articole');
		} else {
			$this->login();
		}
	}
	public function edit_art($id='') {
		$date['name'] = ($id) ? $id : $this->name;
		$this->load->view('admin_panel/pages/edit_art', $date);
	}
	public function edit_blog_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titlu', 'Titlu', 'required|trim');
		$this->form_validation->set_rules('continut', 'Continut', 'required|trim');
		$this->form_validation->set_rules('categorie', 'Categorie', 'required|trim');
		$this->form_validation->set_rules('seo_title', 'SEO TITLE', 'required|trim');
		$this->form_validation->set_rules('seo_description', 'SEO DESCRIPTION', 'required|trim');
		$this->form_validation->set_rules('seo_key', 'SEO KEYWORDS', 'required|trim');

		if($this->form_validation->run()) {
			$paje = array(
			   'titlu' => $this->input->post('titlu'),
			   'continut' => $this->input->post('continut'),
			   'seo_title' => $this->input->post('seo_title'),
			   'seo_description' => $this->input->post('seo_description'),
			   'seo_key' => $this->input->post('seo_key'),
			   'video' => $this->input->post('video')
			);
			
			$t = $this->input->post('titlu');
			$this->db->query("UPDATE blogs SET titlu = '".$this->input->post('titlu')."', continut = '".$this->input->post('continut')."', categorie = '".$this->input->post('categorie')."', seo_title = '".$this->input->post('seo_title')."', seo_description = '".$this->input->post('seo_description')."', seo_key = '".$this->input->post('seo_key')."', video = '".$this->input->post('video')."' WHERE id = '". $this->input->post('id') ."'");
			
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				move_uploaded_file($_FILES["pic"]["tmp_name"],"./images/".$nume_imagine);
			
			$this->edit_art($this->input->post('id'));
			?>
			<center><h2>Pagina de blog a fost editata</h2></center>
			<!--<a style="text-decoration:none;" href="<?php echo base_url().'index.php/admin/'; ?>">Inapoi la pagina principala</a></center> -->
		<?php } else {
			$this->edit_art($this->input->post('id'));
		}
	}
	public function delete_art($id='') {
		$date['name'] = ($id) ? $id : $this->name;
		$this->load->view('admin_panel/pages/delete_art', $date);
	}

	public function categorii_blog() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/categorii_blog');
		} else {
			$this->login();
		}
	}
	public function add_cat_blog_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('categorie', 'Nume categorie', 'required|trim|callback_add_cat_blog_validare');

		if($this->form_validation->run()) {
			$categorie = array(
				'categorie' => $this->input->post('categorie'),
				'parinte' => $this->input->post('parinte')
				);
			$this->db->insert('categorii_blog', $categorie); 
			$this->load->view('admin_panel/pages/succes');
		} else {
			$this->categorii_blog();
		}
	}
	public function add_cat_blog_validare() {
		$this->load->model('model_users');

		if($this->model_users->cat_blog_exist()) {
			$this->form_validation->set_message('add_cat_blog_validare', 'Aceasta categorie exista deja');
			return false;
		} else {
			return true;
		}
	}
	public function edit_cat_blog($id='') {
		$date['name'] = ($id) ? $id : $this->name;
		$this->load->view('admin_panel/pages/edit_cat_blog', $date);
	}
	public function edit_cat_blog_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('categorie', 'Nume categorie', 'required|trim');

		if($this->form_validation->run()) {
			
			$this->db->query("UPDATE categorii_blog SET categorie = '".$this->input->post('categorie')."', parinte = '".$this->input->post('parinte')."' WHERE id = '". $this->input->post('id') ."'");
			
			$this->categorii_blog();
			?>
			<?php } else {
			$this->edit_cat_blog($this->input->post('id'));
		}
	}
	public function delete_cat_blog($id='') {
		if($this->session->userdata('is_logged_in')) {
			$date['name'] = ($id) ? $id : $this->name;
			$this->load->view('admin_panel/pages/delete_cat_blog', $date);
		} else {
			$this->login();
		}
	}

	public function categorii_produse() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/categorii_produse');
		} else {
			$this->login();
		}
	}
	public function add_cat_produse_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('categorie', 'Nume categorie', 'required|trim|callback_add_cat_produse_validare');

		if($this->form_validation->run()) {
			$categorie = array(
				'categorie' => $this->input->post('categorie'),
				'parinte' => $this->input->post('parinte')
				);
			$this->db->insert('categorii_produse', $categorie); 
			$this->load->view('admin_panel/pages/succes');
		} else {
			$this->categorii_produse();
		}
	}
	public function add_cat_produse_validare() {
		$this->load->model('model_users');

		if($this->model_users->cat_produse_exist()) {
			$this->form_validation->set_message('add_cat_produse_validare', 'Aceasta categorie exista deja');
			return false;
		} else {
			return true;
		}
	}
	public function edit_cat_produse($id='') {
		$date['name'] = ($id) ? $id : $this->name;
		$this->load->view('admin_panel/pages/edit_cat_produse', $date);
	}
	public function edit_cat_produse_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('categorie', 'Nume categorie', 'required|trim');

		if($this->form_validation->run()) {
			
			$this->db->query("UPDATE categorii_produse SET categorie = '".$this->input->post('categorie')."', parinte = '".$this->input->post('parinte')."' WHERE id = '". $this->input->post('id') ."'");
			
			$this->categorii_produse();
			?>
			<?php } else {
			$this->edit_cat_produse($this->input->post('id'));
		}
	}
	public function delete_cat_produse($id='') {
		if($this->session->userdata('is_logged_in')) {
			$date['name'] = ($id) ? $id : $this->name;
			$this->load->view('admin_panel/pages/delete_cat_produse', $date);
		} else {
			$this->login();
		}
	}

	public function comenzi() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/comenzi');
		} else {
			$this->login();
		}
	}
	public function comanda($id='') {
		$date['name'] = ($id) ? $id : $this->name;
		$this->load->view('admin_panel/pages/comanda', $date);
	}
	public function delete_comanda($id='') {
		$date['name'] = ($id) ? $id : $this->name;
		$this->load->view('admin_panel/pages/delete_comanda', $date);
	}


	public function login()
	{
		$this->load->view('admin_panel/pages/login');
	}
    public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|callback_validare');
		$this->form_validation->set_rules('parola', 'Parola', 'required|md5|trim');

		if($this->form_validation->run()) {
			$query = $this->db->query('SELECT id FROM users WHERE email = "'. $this->input->post('email') .'"');
			foreach ($query->result() as $row)
			{
			    $id= $row->id;
			}

			$data = array(
				'id' => $id,
				'email' => $this->input->post('email'),
				'is_logged_in' => 1
			);
			$this->session->set_userdata($data);
			redirect('index.php/admin');
		} else {
			$this->login();
		}

	}
	public function validare() {
		$this->load->model('model_users');

		if($this->model_users->can_log_in()) {
			return true;
		} else {
			$this->form_validation->set_message('validare', 'Email sau parola gresita');
			return false;
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('index.php/admin/login');
	}

	public function add_user() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/add_user');
		} else {
			$this->login();
		}
	}
	public function add_user_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|callback_add_validare');
		$this->form_validation->set_rules('parola', 'Parola', 'required|md5|trim');
		$this->form_validation->set_rules('type', 'Tip utilizator', 'required|trim');

		if($this->form_validation->run()) {
			$dataa = array(
			   'email' => $this->input->post('email'),
			   'parola' => $this->input->post('parola'),
			   'type' => $this->input->post('type')
			);
			$this->db->insert('users', $dataa);
			$this->load->view('admin_panel/pages/succes');
		} else {
			$this->add_user();
		}
	}
	public function add_validare() {
		$this->load->model('model_users');

		if($this->model_users->user_exist()) {
			$this->form_validation->set_message('add_validare', 'Acest email exista deja');
			return false;
		} else {
			return true;
		}
	}
	public function change_pass() {
		$this->load->view('admin_panel/pages/change_pass');
	}
	public function change_pass_validation() {

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|callback_vld');

		if($this->form_validation->run()) {
			
			$key = md5(uniqid());

			$this->load->library('email', array('mailtype'=>'html'));

			$query = $this->db->query('SELECT * FROM general ');
			foreach ($query->result() as $row)
			{
			    $email_contact = $row->email_contact;
			    $titlu = $row->titlu_nume_site;
			}

			$this->email->from($email_contact, $titlu);
			$this->email->to($this->input->post('email'));
			$this->email->subject("Schimbare parola");

			$message = "<p>Accesand link-ul urmator va veti putea schimba parola.</p>";
			$message .= "<p> <a href='".base_url()."index.php/admin/reset_pass/$key'>Schimbare parola</a> </p>";
			$this->email->message($message);

			if($this->model_users->add_key($key)) {

				if ($this->email->send()) { ?>
					<script type="text/javascript">
						alert("Email-ul a fost trimis, accesati link-ul din email pentru a va schimba parola.");
						window.location.href = "<?php echo base_url().'index.php/admin'; ?>";
					</script>

					<?php
				} else { ?>
					<script type="text/javascript">
						alert("Email-ul nu a fost trimis, incercati din nou.");
						window.location.href = "<?php echo base_url().'index.php/admin/change_pass'; ?>";
					</script>
					<?
				}
			} else { ?>
				<script type="text/javascript">
					alert("Problema la adaugarea in baza de date.");
					window.location.href = "<?php echo base_url().'index.php/admin/change_pass'; ?>";
				</script>
				<?
			}

		} else {
			$this->change_pass();
		}
	}
	public function vld() {
		$this->load->model('model_users');

		if($this->model_users->change_dates()) {
			return true;
		} else {
			$this->form_validation->set_message('vld', 'Email gresit.');
			return false;
		}
	}
	public function reset_pass($id='') {
		$this->load->model('model_users');

		if($this->model_users->is_key_valid($id)) {

			$date['key'] = ($id) ? $id : $this->key;
			$this->load->view('admin_panel/pages/reset_pass', $date);
			
		} else {
			echo 'Invalid key'; 
		}
	}
	public function reset_pass_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Parola', 'required|md5|trim');
		$this->form_validation->set_rules('re_pass', 'Confirmare parola', 'required|trim|callback_potrivire');

		if($this->form_validation->run()) {
			$k = $this->input->post('key');

			$query = $this->db->query("SELECT * FROM `users` WHERE `key` = '".$k."'");
			foreach ($query->result() as $row)
			{
			  $id1 = $row->id;
			}

			$this->db->query("UPDATE `users` SET `parola` = '".$this->input->post('password')."', `key` = '' WHERE `id` = '".$id1."'"); ?>

			<script type="text/javascript">
				alert("Parola a fost resetata.");
				window.location.href = "<?php echo base_url().'index.php/admin/'; ?>";
			</script>

		<?php
		} else {
			$this->reset_pass($k);
		}
	}
	public function potrivire() {
		if(md5($this->input->post('password')) != md5($this->input->post('re_pass'))) {
			$this->form_validation->set_message('potrivire', 'Parolele nu se potrivesc.');
			return false;
		} else {
			return true;
		}
	}

	public function users() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('admin_panel/pages/users');
		} else {
			$this->login();
		}
	}
	public function delete_user($id='') {
		if($this->session->userdata('is_logged_in')) {
			$date['name'] = ($id) ? $id : $this->name;
			$this->load->view('admin_panel/pages/delete_user', $date);
		} else {
			$this->login();
		}
	}

	public function edit_user($id='') {
		$date['name'] = ($id) ? $id : $this->name;
		$this->load->view('admin_panel/pages/edit_user', $date);
	}
	public function edit_user_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('type', 'Tip utilizator', 'required|trim');

		if($this->form_validation->run()) {
			
			$this->db->query("UPDATE users SET email = '".$this->input->post('email')."', type = '".$this->input->post('type')."' WHERE id = '". $this->input->post('id') ."'");
			
			if($this->input->post('acces_produse')) {
				$this->db->query("UPDATE users SET acces_produse = '".$this->input->post('acces_produse')."' WHERE id = '". $this->input->post('id') ."'");
			} else {
				$this->db->query("UPDATE users SET acces_produse = '0' WHERE id = '". $this->input->post('id') ."'");
			}

			if($this->input->post('acces_articole')) {
				$this->db->query("UPDATE users SET acces_articole = '".$this->input->post('acces_articole')."' WHERE id = '". $this->input->post('id') ."'");
			} else {
				$this->db->query("UPDATE users SET acces_articole = '0' WHERE id = '". $this->input->post('id') ."'");
			}

			$this->edit_user($this->input->post('id'));
			?>
			<center><h2>Utilizatorul a fost editat</h2></center>
		<?php } else {
			$this->edit_user($this->input->post('id'));
		}
	}

	public function resett_pass() {
		$this->load->view('admin/sidebar');
			$this->load->view('admin/reset_pass');
	}
	public function resett_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('old_pass', 'Parola veche', 'required|md5|trim|callback_old');
		$this->form_validation->set_rules('parola', 'Parola noua', 'required|md5|trim|callback_reset_validare|callback_potrivire');
		$this->form_validation->set_rules('parola_re', 'Rescrieti parola noua', 'required|md5|trim');
		
		if($this->form_validation->run()) {
			$data = array(
		               'parola' => $this->input->post('parola')
		            );
			$this->db->where('id', $this->session->userdata('id'));
			$this->db->update('users', $data); 
			?>
			<center><h2>Parola a fost resetata<h2>
			<a style="text-decoration:none;" href="<?php echo base_url().'index.php/admin/'; ?>">Inapoi la pagina principala</a></center>
			<?php
		} else {
			$this->reset_pass();
		}
	}
	public function resett_validare() {
		$this->load->model('model_users');

		if($this->model_users->pass_exist()) {
			$this->form_validation->set_message('reset_validare', 'Aceasta parola exista deja');
			return false;
		} else {
			return true;
		}
	}
	
	public function old() {
		$this->load->model('model_users');

		if($this->model_users->old()) {
			return true;
		} else {
			$this->form_validation->set_message('old', 'Parola veche nu se potriveste cu parola ta actuala');
			return false;
		}
	}

}