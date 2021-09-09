<table class="table table-dark">
  <thead>
    <tr>
      <th>No BP</th>
      <th>Nama</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Jurusan</th>
      <th>#</th>
    </tr>
  </thead>
<tbody class="table formtambah">
    <tr class="control-group">
      <td>
          <input type="text" class="form-control" placeholder="Nomor BP" name="no_bp[]" required>
      </td>
      <td>
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama[]" required>
      </td>
      <td>
        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmp_lahir[]" required>
      </td>
      <td>
        <input type="date" class="form-control" name="tgl_lahir[]"required>
      </td>
      <td>
        <input type="text" class="form-control" name="jurusan[]" required>
      </td>
      <td>
        <button class="btnAdd" > + </button>
      </td>
    </tr>
  </tbody>
</table>


<script>
$(document).ready(function(e){
    $('.btnAdd').click(function(e){
        e.preventDefault();
        $('.formtambah').append('<tr class="control-group"><td><input type="text" class="form-control" placeholder="Nomor BP" name="no_bp[]" required></td><td><input type="text" class="form-control" placeholder="Nama Lengkap" name="nama[]" required></td><td><input type="text" class="form-control" placeholder="Tempat Lahir" name="tmp_lahir[]" required></td><td><input type="date" class="form-control" name="tgl_lahir[]"required></td><td><input type="text" class="form-control" name="jurusan[]"required></td><td><button class=" btnRmv" > - </button></td></tr></tbody>');

    })

})

$(document).on('click','.btnRmv',function(e){
    e.preventDefault();
    $(this).parents('tr').remove();



})


/*
function add_form(){

  $('.formtambah').append('<tr class="control-group"><td><input type="text" class="form-control" placeholder="Nomor BP" name="no_bp[]" required></td><td><input type="text" class="form-control" placeholder="Nama Lengkap" name="nama[]" required></td><td><input type="text" class="form-control" placeholder="Tempat Lahir" name="tmp_lahir[]" required></td><td><input type="date" class="form-control" name="tgl_lahir[]"required></td><td><input type="text" class="form-control" name="jurusan[]" required></td><td><button class="btn btn-danger" onclick="remove_form()"> - </button> </td></tr>');

}

function remove_form(){
  $(this).parents(".control-group").remove();
}

function tutup(){
  $('#viewform').html('');
}

*/
</script>
