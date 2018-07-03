<div class="container">
<div class="card mt-5">
	<div class="card-header">ÜYE LİSTESİ</div>

<table class="table table-bordered mb-0">
  <thead class="thead-light">
    <tr>
      <th>Kullanıcı Adı</th>
      <th>Şifre</th>
      <th>E-posta</th>
      <th>İl</th>
      <th>Rutbe</th>
    </tr>
  </thead>
  <tbody>
  
  <?php foreach($data as $v){
    echo '<tr>
      <td>'.$v["uye_kadi"].'</td>
      <td>'.$v["uye_sifre"].'</td>
      <td>'.$v["uye_eposta"].'</td>
      <td>'.$v["uye_il"].'</td>
      <td>'.$v["uye_rutbe"].'</td>
    </tr>';
  } ?>
  </tbody>
</table>

</div>
<?php echo "<br>".$this->deneme;
echo "<br>".$ok;
?>
</div>