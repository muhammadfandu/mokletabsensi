<div class="container-fluid main-bg">
   <br><br><br><br>
    <div class="container" style="background-color:#ffffff;">
    <br>
        <h2 align="center">Data Siswa</h2> 
        <hr class="line">
        <form action="<?php echo base_url().'siswa/tambah'; ?>" method="post" >
        <div class="col-lg-8 col-lg-offset-2">
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-user"></i></div>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
            </div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-server"></i></div>
                <select name="kelas" class="form-control">
                    <option value="">---Kelas---</option>
                    <?php
                    for ($a=1; $a<=5; $a++) {
                echo "<option>XIIRPL$a</option>";}
                      for ($a=1; $a<=4; $a++) {
                echo "<option>XIITKJ$a</option>";}
                    for ($a=1; $a<=6; $a++) {
                echo "<option>XIIRPL$a</option>";}
                    for ($a=1; $a<=5; $a++) {
                echo "<option>XITKJ$a</option>";}
                    for ($a=1; $a<=6; $a++) {
                echo "<option>XRPL$a</option>";}
                    for ($a=1; $a<=5; $a++) {
                echo "<option>XTKJ$a</option>";}
                    ?>
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
                <input type="password" class="form-control" placeholder="Password" name="password"/>
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
                <td>No. </td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>No. Telp</td>
                <td>ID User</td>
                <td colspan="2">Aksi</td>
            </tr>
            <?php 
                $i=1;
                foreach($siswa as $row){
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['nama_siswa'];?></td>
                <td><?php echo $row['kelas_siswa'];?></td>
                <td><?php echo $row['jk_siswa'];?></td>
                <td><?php echo $row['alamat_siswa'];?></td>
                <td><?php echo $row['telp_siswa'];?></td>
                <td><?php echo $row['id_user'];?></td>   
                <td>
                    <?php echo anchor('siswa/edit/'.$row['id_siswa'],'Edit'); ?>
                    <?php echo anchor('siswa/hapus/'.$row['id_siswa'],'Hapus'); ?>	
        </td>
            </tr>
              <?php $i++;} ?>

        </table>
    </div>
    <br><br>
</div>

<?php echo $this->session->flashdata('msg'); ?>
