<footer id="footer">

<?php $query = $this->db->query('SELECT * FROM general');

foreach ($query->result() as $row)

{

    $ftext = $row->footer_text;

    $flink = $row->footer_link;

    $facebook_link = $row->facebook_link;

    $twiter_link = $row->twiter_link;

    $google_link = $row->google_link;

}?>  
    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <p>

                    <?php if($flink!="" && $flink!="#") { ?><a href="<?=$flink?>"><?php } ?>

                        <?=$ftext?>

                    <?php if($flink!="" && $flink!="#") { ?></a><?php } ?>

                </p>

            </div>

            <center><div class="col-md-4">

                <ul class="social-icons">

                    <li class="social-icons-facebook"><a href="<?=$facebook_link?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>

                    <li class="social-icons-twitter"><a href="<?=$twiter_link?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>

                    <li class="social-icons-googleplus"><a href="<?=$google_link?>" target="_blank" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>

                </ul>

            </div> </center>

         </div>

    </div>

</footer>