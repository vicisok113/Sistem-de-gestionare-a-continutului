<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*$query = $this->db->query('SELECT * FROM pages');
foreach ($query->result() as $row)
{
    $id = $row->id;
    $nume = $row->titlu;
    $pret = $row->pret;
    $descriere = $row->continut;
    $video = $row->video;
}*/
?><!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
</head>
<body>
<?php 
$query = $this->db->query("DELETE FROM produse WHERE id = '". $name ."'");
?>
<script language="javascript">
    window.location.href = "<?php echo base_url().'index.php/admin/succes'; ?>"
</script>
</body>
</html>