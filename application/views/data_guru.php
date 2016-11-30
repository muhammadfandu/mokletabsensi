<div class="container-fluid main-bg">
   <br><br><br><br>
    <div class="container" style="background-color:#ffffff;">
    <br>
<h2 align="center">Data Guru</h2> 
<hr class="line">
<form action="<?php echo base_url().'guru/tambah'; ?>" method="post" >
<div class="col-lg-8 col-lg-offset-2">
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-user"></i></div>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
            </div>
            <br>
      <div class="input-group">   
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-server"></i></div>
                <select name="mapel" class="form-control">
        <option value="">---Mapel---</option>
        <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
        <option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan</option>
        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
        <option value="Seni Budaya">Seni Budaya</option>
    </select>
    </div>
      <br>    
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-intersex"></i></div>
                <select name="jenis_kelamin" class="form-control">
                    <option value="">---Jenis Kelamin---</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-map"></i></div>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat"/>
            </div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-phone"></i></div>
                <input type="text" class="form-control" placeholder="Telepon" name="telp"/>
            </div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-user-plus"></i></div>
                <input type="text" class="form-control" placeholder="Username" name="username"/>
            </div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-key"></i></div>
                <input type="text" class="form-control" placeholder="Password" name="password"/>
            </div>
            <br>
            <center>
                <input type="submit" name="submit" value="Tambah" class="btn btn-utama">                
            </center>
            <br>
        </div>

        </form>
<table class="table table-striped">
    <tr>
        <td>ID Guru</td>
        <td>Nama</td>
        <td>Mata Pelajaran</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>No. Telp</td>
        <td>ID User</td>
        <td colspan="2">Aksi</td>
    </tr>
    <?php 
    	$i=1;
        foreach($guru as $row){
    ?>
    <tr>
    	<td><?php echo $i;?></td>
        <td><?php echo $row['nama_guru'];?></td>
        <td><?php echo $row['mapel_guru'];?></td>
        <td><?php echo $row['jk_guru'];?></td>
        <td><?php echo $row['alamat_guru'];?></td>
        <td><?php echo $row['telp_guru'];?></td>
        <td><?php echo $row['id_user'];?></td>
        <td>
            <?php echo anchor('guru/edit/'.$row['id_guru'],'Edit'); ?>
            <?php echo anchor('guru/hapus/'.$row['id_guru'],'Hapus'); ?>	
</td>
    </tr>
     
    <?php $i++;}
    ?>
</table>
</div>
    <br><br>
</div>