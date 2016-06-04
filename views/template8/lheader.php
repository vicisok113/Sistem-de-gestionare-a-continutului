<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$query = $this->db->query('SELECT * FROM general');
foreach ($query->result() as $row)
{
  $titlu = $row->titlu_nume_site;
  $meta_desc = $row->default_meta_description;
  $meta_key = $row->default_meta_key;
} ?>

<title><?php echo $titlu;?></title>
     <meta charset="utf-8">
     <meta name="description" content="<?php echo $meta_desc; ?>">
     <meta name="keywords" content="<?php echo $meta_key; ?>">
     <meta name = "format-detection" content = "telephone=no" />