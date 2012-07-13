<div id="photo_details">
    <div id="photo_photo">
        <img src="<?php echo url_for( $fileAddress ) ?>" />
    </div>
    <div class="photo_exif" >
        <b>EXIF:</b><br/><br/>
        <?php if( is_array($exif) ): ?>
          <?php include_partial('prObservationPhoto/exif', array( 'exif' => $exif)); ?>
        <?php endif; ?>
    </div>
    
    <div class="photo_exif" >
        <b>IPTC:</b><br/><br/>
        <?php if( is_array($iptc) ): ?>
          <?php include_partial('prObservationPhoto/iptc', array( 'iptc' => $iptc)); ?>
        <?php endif; ?>
    </div>
</div>