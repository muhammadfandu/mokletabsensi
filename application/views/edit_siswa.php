
<div class="container-fluid main-bg">
   <br><br><br><br>
    <div class="container" style="background-color:#ffffff;">
    <br>
<h2 align="center">Edit Data Siswa</h2> 
 <hr class="line">
<?php foreach($siswa as $s) {?>
<form action="<?php echo base_url().'siswa/update'; ?>" method="post" >
<div class="col-lg-8 col-lg-offset-2">
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-user"></i></div>
    <input type="hidden" name="id" value="<?php echo $s->id_siswa ?>"/>
    <input type="text" name="nama" class="form-control" value="<?php echo $s->nama_siswa ?>"/> </div>
<br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-server"></i></div>
    <select name="kelas" class="form-control">
        <option value="<?php echo $s->kelas_siswa ?>"><?php echo $s->kelas_siswa ?></option>
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
    </select></div>
<br>    
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-intersex"></i></div>
    <select name="jenis_kelamin" class="form-control">
        <option value="<?php echo $s->jk_siswa ?>"><?php echo $s->jk_siswa ?></option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select> </div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-map"></i></div> <input type="text" class="form-control" name="alamat" value="<?php echo $s->alamat_siswa ?>"/> </div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-phone"></i></div> 
            <input type="text" class="form-control" name="telp" value="<?php echo $s->telp_siswa ?>"/></div>
    <?php } ?>
<br>
            <center>
                <input type="submit" name="submit" value="Edit" class="btn btn-utama">                
            </center>
            <br>
        </div>
    </div>
</form>


  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
var u = {};
$("select[name='kelas'] > option").each(function () {
    if(u[this.text]) {
        $(this).remove();
    } else {
        u[this.text] = this.value;
    }
});
    
$("select[name='jenis_kelamin'] > option").each(function () {
    if(u[this.text]) {
        $(this).remove();
    } else {
        u[this.text] = this.value;
    }
});
$("select[name='user'] > option").each(function () {
    if(u[this.text]) {
        $(this).remove();
    } else {
        u[this.text] = this.value;
    }
});
    

</script>