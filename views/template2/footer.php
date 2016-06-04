<footer> 
<?php $query = $this->db->query('SELECT * FROM general');
foreach ($query->result() as $row)
{
    $ftext = $row->footer_text;
    $flink = $row->footer_link;
    $facebook_link = $row->facebook_link;
    $twiter_link = $row->twiter_link;
    $google_link = $row->google_link;
}?>  
    <div class="container_12">
      
      <div class="grid_12">
         <div class="socials">
      <section id="facebook">
        <a href="<?php echo $facebook_link; ?>" target="_blank"><span id="fackbook" class="tooltip" title="Link us on Facebook">f</span></a>
        </section>
        <section id="twitter">
        <a href="<?php echo $twiter_link; ?>" target="_blank"><span id="twitter-default" class="tooltip" title="Follow us on Twitter">t</span></a>
        </section>      
        <section id="google">
        <a href="<?php echo $google_link; ?>" target="_blank"><span id="google-default" class="tooltip" title="Follow us on Google Plus">g<span>+</span></span></a>
        </section>

        </div>
        <div class="copy"><a href="<?php echo $flink; ?>"><?php echo $ftext; ?></a> 
        <br> Designed by <a href="" rel="nofollow">ZaoMedia.ro</a>
        </div>
         
      </div>
    </div>  
</footer>