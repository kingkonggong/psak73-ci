<section>
    <?php $id_kontrak = '1';?>
<div id="<?php echo $id_kontrak?>-pdf" class=" pdfobject-container">
    <embed class="pdfobject" src="<?php echo base_url('assets/pdf'); ?>/lease_residential.pdf" type="application/pdf" style="overflow: auto; width: 100%; height: 1900px;">
    </embed>
</div>
</section>
<!-- insert just before the closing body tag </body> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.js'></script>
<script>
var options = {
    pdfOpenParams: { scrollbar: '1', toolbar: '1', statusbar: '1', navpanes: '1' }
};

PDFObject.embed("<?php echo base_url('assets/pdf'); ?>/lease_residential.pdf", "<?php echo $id_kontrak?>-pdf");
</script>