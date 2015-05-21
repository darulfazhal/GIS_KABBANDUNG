<h2 class="sub-header">Daftar User</h2>
<div class="table-responsive">
  <table class="display" id="table-data-akun"  cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
 		 <th>Email</th>
        <th>No Ktp</th>
        <th>TTL</th>
        <th>Telp</th>
       
        <th>#</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1; foreach ($users as $user):?>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $user->first_name;?></td>
        <td><?php echo $user->email;?></td>
        <td><?php echo $user->no_ktp;?></td>
        <td><?php echo $user->tempat_lahir;?></td>
        <td><?php echo $user->phone;?></td>
       <td><a href="#">Delete</a></td>
      </tr>
    <?php $i++; endforeach;?>
    </tbody>
  </table>
</div>

         
