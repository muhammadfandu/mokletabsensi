<div class="container-fluid main-bg" style="min-height:100%;">
   <br><br><br><br>
    <div class="container">
    <div class="row">
        <h1>Dashboard</h1>
        <hr class="line" align="left">
    </div>
    <div class="row" style="background-color:#ffffff;">
     <br>
        <div class="col-sm-4" style="">
           <center style="background-color:#ffffff;height:300px;vertical-align:middle;">
            <i class="fa fa-4x fa-fw fa-user" style="font-size:12em;color:#017fa5;"></i>
            <h2><?php  echo $_SESSION['username']; ?></h2>
            </center>
        </div>
        <div class="col-sm-8">
           <table class="" style="background-color:#ffffff;height:300px;width:100%;">
               <tr>
                   <td><h4><b>Fakultas</b></h4></td>
                   <td><h4>:</h4></td>
                   <td><h4>Informatics System</h4></td>
               </tr>
               <tr>
                   <td><h4><b>Tempat Kelahiran</b></h4></td>
                   <td><h4>:</h4></td>
                   <td><h4>Malang</h4></td>
               </tr>
               <tr>
                   <td><h4><b>Tanggal Kelahiran</b></h4></td>
                   <td><h4>:</h4></td>
                   <td><h4>17 August 1945</h4></td>
               </tr>
               <tr>
                   <td><h4><b>Alamat Email</b></h4></td>
                   <td><h4>:</h4></td>
                   <td><h4>mail@mail.mail</h4></td>
               </tr>
               <tr>
                   <td><h4><b>Nomor Telepon</b></h4></td>
                   <td><h4>:</h4></td>
                   <td><h4>+62 822 4545 0689</h4></td>
               </tr>
           </table>
        </div>
    </div>
    <div class="row" style="background-color:#ffffff;">
       
        <h2 class="text-center">Data Absensi</h2>
        <hr class="line">
        
        <div class="col-sm-12">
            <table class="table table-striped" style="border-radius:15px;">
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Tanggal Absen</th>
                <th>Jam Absen</th>
                <th>Status</th>
            </tr>
                <?php
                $i=1;
                foreach($data as $row){
                ?>

            <tr>
                <td><?php echo $i; $i++?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['tanggal_absen']?></td>
                <td><?php echo $row['jam_absen']?></td>
                <td><?php if($row['status'] = 1) echo "<i class='fa fa-fw fa-2x fa-check-circle' style='color:#017fa5'></i>"; else echo "<i class='fa fa-fw fa-2x fa-close' style='color:#c40f0f'></i>"; ?></td>
            </tr>

            <?php } ?>
            </table>
        </div>
       
    </div>
    
    <br><br>
    
    </div>
    
    <br><br><br><br><br><br>
</div>
<?php echo $this->session->flashdata('msg'); ?>

