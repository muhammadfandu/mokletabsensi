<div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
    <div class="jumbotron text-center" style="height:500px;">
       <br><br><br><br>
        <h1 style="color:white;position:relative;font-family:'Raleway', sans-serif;">SISTEM ABSENSI</h1> 
        <p style="color:white;">SMK TELKOM MALANG</p> 
        <form class="form-inline">
        <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-user"></i></div>
            <input type="text" class="form-control" size="50" placeholder="Nomor Induk">
        </div>
        <div class="input-group">
            <div class="input-group-addon" style="border-radius:0px;"><i class="fa fa-fw fa-key"></i></div>
            <input type="password" class="form-control" size="50" placeholder="Password">
        </div>
        <br><br><button type="button" class="btn btn-lg btn-primary" style="border-radius:0px;min-width:300px;"><span>LOGIN</span></button>
      </form>
    </div>
</div>
<div class="container">
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
        
        <?php
            foreach($data as $row){
        ?>
        
        <tr>
            <td><?php echo $row['id_data']?></td>
            <td><?php echo $row['title_data']?></td>
            <td><?php echo $row['desc_data']?></td>
            <td><?php echo $row['date']?></td>
        </tr>
        
        <?php } ?>
    </table>
</div>