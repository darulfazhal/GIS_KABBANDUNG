<h2 class="sub-header">Daftar Wilayah</h2>
<div class="table-responsive">
  <table class="display" id="table-data-akun"  cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Provinsi</th>
        <th>Kota/Kab</th>
        <th>Kecamatan</th>
        <th>Kelurahan / Desa</th>
      	<th>#</th>
      </tr>
    </thead>
    <tbody>
     <?php $i = 1; foreach ($data_wilayah as $wilayah):?>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $wilayah->nama_provinsi;?></td>
        <td><?php echo $wilayah->nama_kabupaten;?></td>
        <td><?php echo $wilayah->nama_kecamatan;?></td>
        <td><?php echo $wilayah->nama_desa;?></td>
        <td><a href="#">Delete</a></td>
      </tr>
      <?php $i++; endforeach;?>
    </tbody>
  </table>
</div>

         
