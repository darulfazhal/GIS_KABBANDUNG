<h2 class="sub-header">Daftar Usaha</h2>
<div class="table-responsive">
  <table class="display" id="table-data-akun"  cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Usaha</th>
        <th>Nama Pemilik</th>
        <th>Alamat</th>
        <th>Produk Utama</th>
        <th>Skala</th>
        <th>Detail</th>
      	<th>#</th>
      </tr>
    </thead>
    <tbody>
    <?php for($i = 0;$i<100;$i++){?>
      <tr>
        <td><?php echo $i;?></td>
        <td>Lorem</td>
        <td>ipsum</td>
        <td>dolor</td>
        <td>sit</td>
   	 	<td>sit</td>
   	  	<td>  <a href="#">Detail</a></td>

        <td><a href="#">Delete</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

         
