<div class="container-fluid main-bg">
   <br><br><br><br>
    <div class="container" style="background-color:#ffffff;">
    <br>
<h2 align="center">Edit Data Guru</h2> 
<hr class="line">
<?php foreach($guru as $s) {?>
<form action="<?php echo base_url().'guru/update'; ?>" method="post" >
<div class="col-lg-8 col-lg-offset-2">
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-user"></i></div>
    <input type="hidden" name="id" value="<?php echo $s->id_guru ?>"/>
    <input type="text" name="nama" class="form-control" value="<?php echo $s->nama_guru ?>"/> </div>
<br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-server"></i></div>
    <select name="mapel" class="form-control">
        <option value="<?php echo $s->mapel_guru ?>"><?php echo $s->mapel_guru ?></option>
        <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
        <option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan</option>
        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
        <option value="Seni Budaya">Seni Budaya</option>
    </select></td></div>
<br>    
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-intersex"></i></div>
    <select name="jenis_kelamin" class="form-control">
        <option value="<?php echo $s->jk_guru ?>"><?php echo $s->jk_guru ?></option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select> </div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-map"></i></div> <input type="text" class="form-control" name="alamat" value="<?php echo $s->alamat_guru ?>"/></div>
            <br>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-phone"></i></div>  <input type="text" class="form-control" name="telp" value="<?php echo $s->telp_guru ?>"/></div>
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
$("select[name='mapel'] > option").each(function () {
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