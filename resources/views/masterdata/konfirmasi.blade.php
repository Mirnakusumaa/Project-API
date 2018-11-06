@extends('template.main')
@section('content')
<section id="features" class="features">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_features_content_area text-center  wow fadeIn" data-wow-duration="3s">
                            <div class="col-md-12">
                                <div class="head_title text-center">
                                <h4>KONFIRMASI</h4>
                                </div>
                                <div class="konfirmasi">
                                <div class="single_pakeg_one text-right wow rotateInDownRight">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-8">
                                <div class="single_pakeg_text" style="color: #000">
                                 
<table>
  <!--<tr>
    <th>tabel</th>
    <th>tanda</th>
    <th>Isi</th>
  </tr>-->
  <tr>
    <td>Nomor Order &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->id_order}}</td>
  </tr>
  <tr>
    <td>Nama &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->nama}}</td>
  </tr>
  <tr>
    <td>Alamat &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->alamat}}</td>
  </tr>
  <tr>
    <td>Nomor Telepon &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->no_telp}}</td>
  </tr>
  <tr>
    <td>Email &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->email}}</td>
  </tr>
  <tr>
    <td>Kode Pos &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->kode_pos}}</td>
  </tr>
</table>
<hr>
<table>
<tr>
    <th></th>
    <th></th>
    <th></th>
    <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <!-- <tr>
    <td>Jenis Layanan &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->jenis_sepatu}}</td>
    <td></td>
    <td>Jenis Service 1 &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->service1}}</td>
  </tr> -->
  <!-- <tr>
    <td>Bahan Sepatu &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->jenis_bahan}}</td>
    <td></td>
    <td>Jenis Service 2 &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->service2}}</td>
  </tr> -->
  <tr>
    <td>Jumlah Sepatu &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->jumlah_sepatu}}</td>
    <td></td>
    <!-- <td>Jenis Service 3 &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->service3}}</td> -->
  </tr>
  <tr>
    <td>Warna &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->warna}}</td>
    <td></td>
    <!-- <td>Layanan Tambahan&nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->layanan_tambahan}}&nbsp</td> -->
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong>Total Bayar&nbsp</strong></td>
    <td><strong>: &nbsp</strong></td>
    <td>{{$orders->total_harga}}</td>
  </tr>
</table>
<br><br>
<a href="" onclick="event.preventDefault(); document.getElementById('pesan-form').submit();">
  <button class="btn-primary">
      Submit
  </button>
 <!-- <input type="submit" name="" class="btn-primary" value="Submit"> -->
 </a>
                                </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection