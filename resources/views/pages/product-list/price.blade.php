<?php $total = 0; ?>

@if($count > 0)
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      @foreach($data as $res)
        <tr>
          <th scope="row">{{ $no }}</th>
          <td>{{ $res->description }}</td>
          <td align="right">{{ number_format($res->price,2,',',',') }}</td>
        </tr>
        <?php $no++; ?>
        <?php $total+= $res->price; ?>
      @endforeach
      <tr style="font-size:24px;">
        <th scope="row">#</th>
        <td scope="row">Total</td>
        <td scope="row" align="right">{{ number_format($total,2,',',',') }}</td>
      </tr>
    </tbody>
  </table>
  <hr>
  <div style="padding:10px;">
    Informasi lain :  <br>
    <?php
    $convert = (string)$data[0]->group_package->information;
    echo "".$convert;
    ?>
  </div>
@else
  <h4 style="margin:10px;">Mohon maaf rincian harga belum dilampirkan harap hubungi</h4>
@endif
