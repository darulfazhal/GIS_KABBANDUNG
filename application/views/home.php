<div class=" col-sm-12">
  <div class="col-sm-4">
    <select class="form-control" id="id_kecamatan">
      <option>Select Kecamatan</option>
     <?php  foreach ($data_wilayah as $wilayah):?>
      <option value="<?php echo $wilayah->IDKecamatan;?>" ><?php echo $wilayah->nama_kecamatan;?></option>
      
       <?php  endforeach;?>
    </select>
  </div>
  <button type="button" class="btn btn-primary" id="filter">Filter</button>
</div>
<div class=" col-sm-12">&nbsp;</div>
<div class=" col-sm-12">
 <div id="map-canvas"></div>
</div>

 
