<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produse extends CI_Controller {

	public function _remap($id='',$titlu)
	{
		$data['name'] = ($id) ? $id : $this->name;

		$str = implode(" ",$titlu); // acum avem array de tipul produs-mare
		$arr = explode("-",$str); // acum avem array-ul de tipul produs-mare spart in bucati
		
		$spatiu = implode(" ",$arr); // acum avem array de tipul produs mare

		$query = $this->db->query("SELECT * FROM produse WHERE id = '". $data['name'] ."'");
		foreach ($query->result() as $row)
		{
		    $real_title = $row->titlu;
		}

		if($real_title == $spatiu)
		{
			$query = $this->db->query('SELECT * FROM general');
			foreach ($query->result() as $row)
			{
			    $template = $row->template;
			}
			if($template==1)
				$this->load->view('template1/produs', $data);
			elseif ($template==2) {
				$this->load->view('template2/produs', $data);
			} elseif ($template==3) {
				$this->load->view('template3/produs', $data);
			} elseif ($template==4) {
				$this->load->view('template4/produs', $data);
			} elseif ($template==5) {
				$this->load->view('template5/produs', $data);
			} elseif ($template==6) {
				$this->load->view('template6/produs', $data);
			} elseif ($template==7) {
				$this->load->view('template7/produs', $data);
			} elseif ($template==8) {
				$this->load->view('template8/produs', $data);
			} elseif ($template==9) {
				$this->load->view('template9/produs', $data);
			}
				
		} else { ?>
			<script type="text/javascript">
				alert("Aceasta pagina nu exista, veti fi redirectionat catre pagina principala.");
				window.location.href = "<?php echo base_url(); ?>";
			</script>
		<? }
	}
	
}