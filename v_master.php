<title>
  S.I.M
</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<button class="btn btn-warning" style="margin:10px;" onclick="call_tambah()">Tambah Data</button>
<div class="col-sm-12" style="margin:10px;">
  <div class="row">
      <div class="col-sm-9">
        <table class="table table-dark">
          <thead>
             <th scope="row" colspan="7">Data Mahasiswa</th>
          </thead>
          <tbody>
            <?php foreach ($mhs as $r){ ?>
            <tr class="table-active">
              <td class="table-active"><?=$r->no_bp;?></td>
              <td><?=$r->nama;?></td>
              <td class="table-active"><?=$r->tmp_lahir;?></td>
              <td><?=$r->tgl_lahir;?></td>
              <td><?=$r->tgl_lahir;?></td>
              <td><?=$r->id_jurusan?></td>
              <td>
                  <a class="btn btn-primary" href="<?=base_url('index.php/admin/edit_mhs/').$r->no_bp;?>">Edit</a>
                  <a class="btn btn-danger" href="<?=base_url('index.php/admin/delete_mhs/').$r->no_bp;?>">Delete</a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Profile</h5>
            <h6 class="card-subtitle mb-2 text-muted">Administration Staff</h6>
            <div class="row">
                <div class="col-sm-6">
                  Name
                </div>
                <div class="col-sm-6">
                </div>
            </div>
          </div>
        </div>

      </div>

  </div>
  <div class="row">
    <div class="col-sm-9">
      <div id=viewform></div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script>


function call_tambah(){
      $.ajax({
              method  :'post',
              dataType:'json',
              url     :'<?=base_url();?>index.php/admin/call_tambah',
              success :function(response){
                  if(response.sukses){
                   $('#viewform').html(response.sukses).show();
//                        $('#viewform').append(response.sukses);
                  }
              }
      });
  }
</script>
