<!-- Start Company Section -->
<?php
//var_dump($caddress);
?>
<div class="company-address">
    <div>
        <div class="row company-bg">
            <div class="col-md-4" style="padding:0px">
             <form role="form" action="<?php echo site_url('home/send_message')?>" method="post" enctype="multipart/form-data">
                <?php echo message_box(validation_errors(),'danger'); ?>
                 <div class="content" style="width: 100%; height: 300px; margin:0px">
                 <div class="col-md-6" style="padding: 2px">
                    Nama
                 	<div class=""><input id="iname" name="name" type="text" class="form-control"></div>
                 </div> 
                 <div class="col-md-6" style="padding: 2px">
                    Email
                 	<div class=""><input id="iemail" name="email" type="text" class="form-control"></div>
                 </div>               
                 <div class="col-md-12" style="padding: 2px">
                    Pesan
                 	<div class=""><textarea id="imessage" name="message" class="form-control"></textarea></div>
                 </div>
                  <div class="compayt-button">
                        <button  type="submit" class="btn btn-effect" id="contact-submit">Submit</i></button>
                    </div>
                 </div>
                 </form>
            </div>
            <div class="col-md-4" style="padding:0px">
                <div class="content" style="width: 100%; height: 300px; margin:0px">
                    <div style="font-size:20px; margin-bottom:10px"><?php echo isset($caddress['title'])?$caddress['title']:'';?></div>
                    <div style="margin-bottom:20px"><?php echo isset($caddress['address'])?$caddress['address']:'';?></div>
                    <div style="margin-bottom:5px"><i class="fa fa-phone"></i> phone : <?php echo isset($caddress['phone'])?$caddress['phone']:'';?></div>
                    <div style="margin-bottom:5px"><i class="fa fa-fax"></i> fax : <?php echo isset($caddress['fax'])?$caddress['fax']:'';?></div>
                    <div style="margin-bottom:5px"><i class="icon-envelope"></i> email : <?php echo isset($caddress['email'])?$caddress['email']:'';?></div>
                </div>
            </div>
            <div class="col-md-4" style="padding:0px">
            	<div class="content" style="width: 100%; height: 300px; margin:0px">
                <div id="imap" style="width: 100%; height: 100%; margin:0px; border-radius: 5px !important; border: 0px solid #ffffff"></div>
                </div>
            </div>
        </div>
    </div>    
    <!-- .container -->
</div>
<!-- End Company Section -->
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#contact-submit").click(function(){
                    if(jQuery("#iname").val() == ''){
                        alert("Nama tidak boleh kosong");
                        return false;
                    }
                    if(jQuery("#iemail").val() == ''){
                        alert("Email tidak boleh kosong");
                        return false;
                    }
                    if(jQuery("#imessage").val() == ''){
                        alert("Pesan tidak boleh kosong");
                        return false;
                    }
                });

                return false;
            });
        </script>
        <script type="text/javascript">
        function initMap() {        
        var map = new google.maps.Map(document.getElementById('imap'), {
            zoom: 10,
            center: new google.maps.LatLng(<?php echo isset($caddress['koordinat_x'])?$caddress['koordinat_x']:-7.371947;?>, <?php echo isset($caddress['koordinat_y'])?$caddress['koordinat_y']:112.774275;?>),            
            mapTypeControl: true,
            zoomControl: true,
            scaleControl: true,
            streetViewControl: true,
            rotateControl: false,
            fullscreenControl: false
        });
        var latLng = new google.maps.LatLng(<?php echo isset($caddress['koordinat_x'])?$caddress['koordinat_x']:-7.371947;?>, <?php echo isset($caddress['koordinat_x'])?$caddress['koordinat_y']:112.774275;?>);
        var marker = new google.maps.Marker({
            position: latLng,
            title: 'lokasi',
            map: map,
            streetViewControl: false,
            draggable: true
        });
        var ket = "<?php //echo isset($caddress['address'])?$caddress['address']:'';?>";
        var content = "<b style='border-bottom:1px solid #444;color:#333'><?php echo isset($caddress['title'])?$caddress['title']:'';?></b><div style='color:#333'>" + ket+ "</div>";
        var infowindow = new google.maps.InfoWindow();
         google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                return function () {
                    infowindow.setContent(content);
                    infowindow.open(map, marker);
                };
            })(marker, content, infowindow));
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3dcK9e1ybb9xpb0IKVnH7j6RpOon8n8o&callback=initMap">
</script>