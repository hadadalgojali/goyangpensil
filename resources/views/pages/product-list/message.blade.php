<form action="javascript;;" id="form_message" method="post">
  <table width="100%">
    <tr>
      <td><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"></td>
    </tr>
    <tr>
      <td><input type="text" name="telepon" class="form-control" placeholder="Telepon"></td>
    </tr>
    <tr>
      <td><textarea rows="4" name="telepon" class="form-control">
@if($count > 0)<?php $convert = "Saya ingin memesan ".$data[0]->title.""; echo "".$convert; ?>@endif</textarea></td>
    </tr>
  </table>
</form>
