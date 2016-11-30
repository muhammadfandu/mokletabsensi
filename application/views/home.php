<div id="tf-home" class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
    <div class="jumbotron text-center" style="height:500px;">
       <br><br><br><br>
        <h1 style="color:white;position:relative;font-family:'Raleway', sans-serif;">SISTEM ABSENSI</h1> 
        <p style="color:white;">SMK TELKOM MALANG</p> 
         <?php 
          $attributes = array("class" => "form-inline", "id" => "loginform", "name" => "loginform");
          echo form_open("master/home", $attributes);?>
        <fieldset>
            <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-user"></i></div>
                <input type="text" class="form-control" size="50" placeholder="Identifikasi" name="identification" value="<?php echo set_value('identification'); ?>">
            </div>
            <div class="input-group">
                <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-key"></i></div>
                <input type="password" class="form-control" size="50" placeholder="Password" name="credential" value="<?php echo set_value('credential'); ?>">
            </div>
               <br><br>               
               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-lg btn-primary" style="border-radius:0px;min-width:300px;" value="Login" />
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
        <br><br>
</div>

<div class="container text-center">
  <h2>SEMANGAT PAGI!!!</h2>
  <h4>SMK, Bisa! SMK Telkom, Luar Biasa!</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <h1><span class="glyphicon glyphicon-link" style="font-size:250%"></span></h1>
      <h3>SOLID</h3>
      <p>1 hati. 1 pikiran. 1 tindakan.</p>
    </div>
    <div class="col-sm-4">
      <h1><span class="glyphicon glyphicon-flash" style="font-size:250%"></span></h1>
      <h3>SPEED</h3>
      <p>Awal. Arah. Aksi.</p>
    </div>
    <div class="col-sm-4">
      <h1><span class="glyphicon glyphicon-fire" style="font-size:250%"></span></h1>
      <h3>SMART</h3>
      <p>Intuisi. Inovasi. Impresif</p>
    </div>
    </div>
    <br><br>
</div>

<div class="container-fluid text-center bg-grey">
  <h2>News</h2>
  <h4>What we have created</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
       <div class="jumbotron" style="background-image: url('<?php echo base_url("assets/media/news1.PNG"); ?>');height:400px;"></div>
        <p><strong>Prestasi Terus Berlanjut</strong></p>
        <p>Dari lomba tingkat Kota hingga Tingkat Negara, dari Hardware hingga Software, tidak membedakan gender.. #smk #telkom #luarbiasa</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <div class="jumbotron" style="background-image: url('<?php echo base_url("assets/media/news2.PNG"); ?>');height:400px;"></div>
        <p><strong>Syukuran Gugus Depan</strong></p>
        <p>Sebagai bentuk rasa syukur atas telah diresmikannya gugus depan Ir. SOekarno dan Dewi Sartika berbasis SMK Telkom Malang, manajemen sekolah ...</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <div class="jumbotron" style="background-image: url('<?php echo base_url("assets/media/news3.PNG"); ?>');height:400px;"></div>
        <p><strong>Guru - Guru Hebat</strong></p>
        <p>"Engkau laksana embun penyejuk dalam kehausan.." Terimakasih kepada Bapak Mulyadi Abdullah yg selama 5 th mengemban amanah menjadi Kepala Sekolah, mengantar almamater menjadi yg terbaik..</p>
      </div>
    </div>
</div>
</div>