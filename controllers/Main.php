<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index($error = array())
	{
		$query = $this->db->query('SELECT * FROM general');
		foreach ($query->result() as $row)
		{
		    $template = $row->template;
		}
		if($template == 1) {
			$this->load->view('template1/index.php', array('error'=>''));
		}
		if($template == 2) {
			$this->load->view('template2/index.php', array('error'=>''));
		}
		if($template == 3) {
			$this->load->view('template3/index.php', array('error'=>''));
		}
		if($template == 4) {
			$this->load->view('template4/index.php', array('error'=>''));
		}
		if($template == 5) {
			$this->load->view('template5/index.php', array('error'=>''));
		}
		if($template == 6) {
			$this->load->view('template6/index.php', array('error'=>''));
		}
		if($template == 7) {
			$this->load->view('template7/index.php', array('error'=>''));
		}
		if($template == 8) {
			$this->load->view('template8/index.php', array('error'=>''));
		}
		if($template == 9) {
			$this->load->view('template9/index.php', array('error'=>''));
		}
	}

	public function produse()
	{
		$query = $this->db->query('SELECT * FROM general');
		foreach ($query->result() as $row)
		{
		    $template = $row->template;
		}
		if($template == 2) {
			$this->load->view('template2/produse.php');
		}
		if($template == 3) {
			$this->load->view('template3/produse.php');
		}
		if($template == 4) {
			$this->load->view('template4/produse.php');
		}
		if($template == 5) {
			$this->load->view('template5/produse.php');
		}
		if($template == 6) {
			$this->load->view('template6/produse.php');
		}
		if($template == 7) {
			$this->load->view('template7/produse.php');
		}
		if($template == 8) {
			$this->load->view('template8/produse.php');
		}
		if($template == 9) {
			$this->load->view('template9/produse.php');
		}
	}
	public function pagini()
	{
		$this->load->view('template2/pagini.php');
	}
	public function blog()
	{
		$query = $this->db->query('SELECT * FROM general');
		foreach ($query->result() as $row)
		{
		    $template = $row->template;
		}
		if($template == 2) {
			$this->load->view('template2/blog.php');
		}
		if($template == 3) {
			$this->load->view('template3/blog.php');
		}
		if($template == 4) {
			$this->load->view('template4/blog.php');
		}
		if($template == 5) {
			$this->load->view('template5/blog.php');
		}
		if($template == 6) {
			$this->load->view('template6/blog.php');
		}
		if($template == 7) {
			$this->load->view('template7/blog.php');
		}
		if($template == 8) {
			$this->load->view('template8/blog.php');
		}
		if($template == 9) {
			$this->load->view('template9/blog.php');
		}
	}
	public function contact()
	{
		$query = $this->db->query('SELECT * FROM general');
		foreach ($query->result() as $row)
		{
		    $template = $row->template;
		}
		if($template == 2) {
			$this->load->view('template2/contact.php', array('error'=>''));
		}
		if($template == 3) {
			$this->load->view('template3/contact.php', array('error'=>''));
		}
		if($template == 4) {
			$this->load->view('template4/contact.php', array('error'=>''));
		}
		if($template == 5) {
			$this->load->view('template5/contact.php', array('error'=>''));
		}
		if($template == 6) {
			$this->load->view('template6/contact.php', array('error'=>''));
		}
		if($template == 7) {
			$this->load->view('template7/contact.php', array('error'=>''));
		}
		if($template == 8) {
			$this->load->view('template8/contact.php', array('error'=>''));
		}
		if($template == 9) {
			$this->load->view('template9/contact.php', array('error'=>''));
		}
		
	}

	/*public function produs($id='')
	{
		$data['name'] = ($id) ? $id : $this->name;

		$query = $this->db->query('SELECT * FROM general');
		foreach ($query->result() as $row)
		{
		    $template = $row->template;
		}
		if($template==1)
			$this->load->view('template1/produs', $data);
		else
			$this->load->view('template2/produs', $data);
	}*/
	public function page($id='')
	{
		$data['name'] = ($id) ? $id : $this->name;

		$query = $this->db->query('SELECT * FROM general');
		foreach ($query->result() as $row)
		{
		    $template = $row->template;
		}
		if($template==1)
			$this->load->view('template1/page', $data);
		else
			$this->load->view('template2/page', $data);
	}
	public function blgs($id='')
	{
		$data['name'] = ($id) ? $id : $this->name;

		$this->load->view('template1/blgs', $data);
	}
	/*public function blg($id='')
	{
		$data['name'] = ($id) ? $id : $this->name;

		$query = $this->db->query('SELECT * FROM general');
		foreach ($query->result() as $row)
		{
		    $template = $row->template;
		}
		if($template==1)
			$this->load->view('template1/blg', $data);
		else
			$this->load->view('template2/blg', $data);
	}*/

	public function comanda()
	{
		$query = $this->db->query('SELECT * FROM general');
		foreach ($query->result() as $row)
		{
		    $template = $row->template;
		}
		if($template==1) {
			$this->load->view('template1/comanda');
		} elseif ($template==2) {
			$this->load->view('template2/comanda');
		} elseif ($template==3) {
			$this->load->view('template3/comanda');
		} elseif ($template==4) {
			$this->load->view('template4/comanda');
		} elseif ($template==5) {
			$this->load->view('template5/comanda');
		} elseif ($template==6) {
			$this->load->view('template6/comanda');
		} elseif ($template==7) {
			$this->load->view('template7/comanda');
		} elseif ($template==8) {
			$this->load->view('template8/comanda');
		} elseif ($template==9) {
			$this->load->view('template9/comanda');
		}	
	}

	public function trimite_comanda() {
		$this->load->library("form_validation");

		$this->form_validation->set_rules("nume", "Nume", "required");
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("nume_produs", "Nume Produs", "required");
		$this->form_validation->set_rules("pret", "pret", "required");
		$this->form_validation->set_rules("adresa", "Adresa de livrare", "required");
		$this->form_validation->set_rules("telefon", "Numar de telefon", "required");
		//$this->form_validation->set_rules("mesaj", "Mesaj", "required");

		if ($this->form_validation->run()) {

			if($this->input->post('mesaj')) {
				$date = array(
				   'nume_dest' => $this->input->post('nume'),
				   'email_dest' => $this->input->post('email'),
				   'adresa_dest' => $this->input->post('adresa'),
				   'telefon_dest' => $this->input->post('telefon'),
				   'nume_produs' => $this->input->post('nume_produs'),
				   'pret_produs' => $this->input->post('pret'),
				   'adaugari_client' => $this->input->post('mesaj'),
				   'data' => date("d/m/Y")
				);
				$this->db->insert('comenzi', $date);
			} else {
				$date = array(
				   'nume_dest' => $this->input->post('nume'),
				   'email_dest' => $this->input->post('email'),
				   'adresa_dest' => $this->input->post('adresa'),
				   'telefon_dest' => $this->input->post('telefon'),
				   'nume_produs' => $this->input->post('nume_produs'),
				   'pret_produs' => $this->input->post('pret'),
				   'data' => date("d/m/Y")
				);
				$this->db->insert('comenzi', $date);
			}

			$this->load->library('email', array('mailtype'=>'html'));

			$this->email->from($this->input->post('email'), $this->input->post('nume'));

			$query = $this->db->query('SELECT * FROM general');
			foreach ($query->result() as $row)
			{
				$email_contact = $row->email_contact;
			}
			$this->email->to($email_contact);

			$this->email->subject("Comanda: ".$this->input->post('nume_produs'));

			$message = "<p>Comanda: ".$this->input->post('nume_produs')." &nbsp;&nbsp; Pret: ".$this->input->post('pret')."</p><br>
					<p>De la ".$this->input->post('nume')." cu email-ul: ".$this->input->post('email')."</p><br>
					<p>Cu numarul de telefon: ".$this->input->post('telefon')."</p><br>
					<p>Adresa de livrare: ".$this->input->post('adresa')."</p><br>
					";

			if($this->input->post('mesaj')) {
				$m = $message." <p>Alte adaugari din partea clientului: ".$this->input->post('mesaj')."</p>";
			} else {
				$m = $message;
			}

			$this->email->message($m);

			if ($this->email->send()) {
				?>
				<script type="text/javascript">
					alert("Comanda a fost trimisa cu succes!");
					window.location.href = "<?php echo base_url().'index.php/main'; ?>";
				</script>
				<?php
			} else {
				?>
				<script type="text/javascript">
					alert("Email-ul nu a fost trimis!");
					window.location.href = "<?php echo base_url().'index.php/main'; ?>";
				</script>
				<?php }
		} else {
			$this->comanda();
		}
	}

	public function send_email() {
		$this->load->library("form_validation");

		$this->form_validation->set_rules("nume", "Nume", "required");
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("subiect", "Subiect", "required");
		$this->form_validation->set_rules("mesaj", "Mesaj", "required");

		if ($this->form_validation->run()) {

			$this->load->library('email', array('mailtype'=>'html'));

			$this->email->from($this->input->post('email'), $this->input->post('nume'));

			$query = $this->db->query('SELECT * FROM general');
			foreach ($query->result() as $row)
			{
				$email_contact = $row->email_contact;
			}
			$this->email->to($email_contact);
			$this->email->subject($this->input->post('subiect'));

			$message = "<p>".$this->input->post('mesaj')."</p>";
			$this->email->message($message);
			if ($this->email->send()) {
				//$this->index();
				//$message = "Email-ul a fost trimis cu succes!";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				?>
				<script type="text/javascript">
				alert("Email-ul a fost trimis cu succes!");
				window.location.href = "<?php echo base_url().'index.php'; ?>";
				</script>
				<?php
			} else {
				echo "Email-ul nu a fost trimis!";
			}
		} else {
			//redirect('/index.php#contact', 'refresh');
			$this->index();
		}
	}
	public function send_email_template_complex() {
		$this->load->library("form_validation");

		$this->form_validation->set_rules("nume", "Nume", "required");
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("subiect", "Subiect", "required");
		$this->form_validation->set_rules("mesaj", "Mesaj", "required");

		if ($this->form_validation->run()) {

			$this->load->library('email', array('mailtype'=>'html'));

			$this->email->from($this->input->post('email'), $this->input->post('nume'));

			$query = $this->db->query('SELECT * FROM general');
			foreach ($query->result() as $row)
			{
				$email_contact = $row->email_contact;
			}
			$this->email->to($email_contact);
			$this->email->subject($this->input->post('subiect'));

			$message = "<p>".$this->input->post('mesaj')."</p>";
			$this->email->message($message);
			if ($this->email->send()) {
				//$this->index();
				//$message = "Email-ul a fost trimis cu succes!";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				?>
				<script type="text/javascript">
				alert("Email-ul a fost trimis cu succes!");
				window.location.href = "<?php echo base_url().'index.php/main/contact'; ?>";
				</script>
				<?php
			} else {
				echo "Email-ul nu a fost trimis!";
			}
		} else {
			//redirect('/index.php#contact', 'refresh');
			$this->contact();
		}
	}
	
}