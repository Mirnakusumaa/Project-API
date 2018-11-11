@extends('template.main')
@section('content')
<section id="abouts" class="abouts">
            <div class="container">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" id="pesan-form" action="{{url('kirim')}}" method="POST" name="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!--<legend class="text-center">PESANAN</legend>-->
                    <div class="head_title text-center">
                    <h4>PESANAN</h4>
                    </div>

                    <br><br>
                    <fieldset>
                        <legend>1. Identitas Pelanggan</legend>

                        <div class="form-group col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                            @if ($errors->has('nama'))
                              <span class="invalid-feedback" role="alert" style="color: red">
                                  <strong>{{ $errors->first('nama') }}</strong>
                              </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telp" id="" placeholder="Nomor Telepon">
                            @if ($errors->has('no_telp'))
                              <span class="invalid-feedback" role="alert" style="color: red">
                                  <strong>{{ $errors->first('no_telp') }}</strong>
                              </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                            @if ($errors->has('alamat'))
                              <span class="invalid-feedback" role="alert" style="color: red">
                                  <strong>{{ $errors->first('alamat') }}</strong>
                              </span>
                            @endif
                        </div>

                        <!-- <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="" placeholder="Email">
                            @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert" style="color: red">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                        </div> -->

                        <!-- <div class="form-group col-md-6">
                            <label>Kode Pos</label>
                            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode pos">
                            @if ($errors->has('kode_pos'))
                              <span class="invalid-feedback" role="alert" style="color: red">
                                  <strong>{{ $errors->first('kode_pos') }}</strong>
                              </span>
                            @endif
                        </div> -->

                    </fieldset>
                        <br><br><br>

                    <fieldset>
                        <legend>2. Layanan</legend>
                        <div class="form-group col-md-6">
                            <label>Jenis Layanan</label>
                            <select class="form-control" name="jenis_layanan" id="jenis_layanan">
                                <option value="">Pilih jenis layanan</option>
                                <option value="1">Fast Cleaning</option>
                                <option value="2">Deep Cleaning</option>
                                <option value="3">Leather Care</option>
                                <option value="4">Repair</option>
                                <option value="5">Repaint</option>
                                <option value="6">Unyellowing and Whitening</option>
                                <option value="7">Just For Her</option>
                                <option value="8">Waterproff Action</option>
                                <option value="9">Fast Cleaning + Waterproff Action</option>
                                <option value="10">Deep Cleaning + Waterproff Action</option>
                            </select>
                            @if ($errors->has('jenis_layanan'))
                              <span class="invalid-feedback" role="alert" style="color: red">
                                  <strong>{{ $errors->first('jenis_layanan') }}</strong>
                              </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label>Warna</label>
                            <input type="text" class="form-control" name="warna" id="warna" placeholder="Warna">
                            <p style="color: red">*diisi jika memilih layanan repaint</p>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Jumlah Sepatu</label>
                            <input type="text" class="form-control" name="jml_sepatu" id="jml_sepatu" placeholder="Jumlah sepatu">
                        </div>

                        
                    </fieldset>
                    <br><br><br>

                    <fieldset>
                        <legend>2. Pengiriman</legend>
                        <p style="color: red">*diisi jika menggunakan jasa antar</p>
                        <div class="form-group col-md-6">
                            <label>Provinsi Tujuan</label>
                            <select class="form-control" name="provinsi_tujuan" id="provinsi_tujuan">
                                <option>Pilih provinsi Tujuan</option>
                            @foreach($results->rajaongkir->results as $key => $value)
                                <option value="{{$value->province_id}}">{{$value->province}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Kota/Kabupaten Tujuan</label>
                            <select class="form-control" name="kota_tujuan" id="kota_tujuan">
                                <option>Pilih kota/kabupaten Tujuan</option>
                            
                            </select>
                        </div>

                        
                    </fieldset>
                    <br><br><br>

                    <div class="form-group">
                        <div class="col-md-12">
                        	<!-- <a href="konfirmasi"> -->
                        	<button type="submit" class="btn-primary">
			                    Submit
			                </button>
			            	<!-- </a> -->
                            <!-- <input type="submit" name="" class="btn-primary" value="Submit"> -->
                        </div>
                    </div>

                </form>
        </section>
@endsection


@section('script')

<script type="text/javascript">
    console.log({{url('kota-tujuan')}});
  $(document).ready(function(){
    $('#provinsi_tujuan').change(function(){
        var prov = $('#provinsi_tujuan').val();
            $.ajax({
                type : 'GET',
                url : "{{url('kota-tujuan')}}" + '/' + prov,

                    success: function (data) {
                        
                        
                          $("#kota_tujuan").html(data); 
                        
                    //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                    
                }
            });
        });
    });
</script>
@endsection