<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<div class="container-fluid main-bg" style="min-height:100%;">
   <br><br><br><br>
    <div class="container">
    <div class="row">
        <h1>Dashboard</h1>
        <hr class="line" align="left">
    </div>
    <div class="row" style="background-color:#ffffff;">
    <br>
    <div class="row">
        <div class="col-sm-4">
            <center>
                <span class="stat-num">40</span>
                <h4>Siswa</h4>
            </center>
        </div>
        
        <div class="col-sm-4">
            <center>
                <span class="stat-num">40</span>
                <h4>Guru</h4>
            </center>
        </div>
        
        <div class="col-sm-4">
            <center>
                
            </center>
        </div>
    </div>
    <div class="row">
       <div class="col-sm-4">
            <center>
                <a <?php echo "href=".base_url('siswa')."";?>><button class="btn btn-utama">LIHAT DETAIL</button></a>
            </center>
        </div>
        
        <div class="col-sm-4">
            <center>
                <a <?php echo "href=".base_url('guru')."";?>><button class="btn btn-utama">LIHAT DETAIL</button></a>
            </center>
        </div>
        
        <div class="col-sm-4">
            <center>
                
            </center>
        </div>
    </div>
    <br><br>
    
    </div>
    
    <br><br><br><br><br><br>
</div>
</div>
<?php echo $this->session->flashdata('msg'); ?>


<!--
<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
      success:function(data){
        console.log(data);
     swal("Sukses!", "Anda login sebagai Admin!", "success");
      },
      error:function(data){
     swal("Oops...", "Something went wrong :(", "error");
      }
    });
    e.preventDefault(); 
});
</script>-->
