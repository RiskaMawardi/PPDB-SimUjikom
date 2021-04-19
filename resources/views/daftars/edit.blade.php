@extends('daftars.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('daftars.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('daftars.update',$daftar->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NoReg:</strong>
                    <input type="text" name="noreg" value="{{ $daftar->noreg }}" class="form-control" placeholder="Noareg">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $daftar->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <div class="wrap-input100 validate-input" data-validate = "Pilih Jenis Kelamin" value="{{ $daftar->jk }}">
                <select class="input100"style="width: 100%;" name="jk" id="jk">
                            <option value=""disable selected >Jenis kelamin</option>
                            <option value="Islam"@if($daftar ->jk == 'Laki-laki') selected @endif>Laki-laki</option>
                            <option value="Kristen"@if($daftar ->jk == 'Perempuan') selected @endif>Perempuan</option>
                     </select>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat">{{ $daftar->alamat }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agama:</strong>
                    <div class="wrap-input100 validate-input" data-validate = "Pilih Agama" value="{{ $daftar->agama }}">
                <select class="input100"style="width: 100%;" name="agama" id="agama">
                            <option value=""disable selected >Agama</option>
                            <option value="Islam"@if($daftar ->agama == 'Islam') selected @endif>Islam</option>
                            <option value="Kristen"@if($daftar ->agama == 'Kristen') selected @endif>Kristen</option>
                            <option value="Hindu"@if($daftar ->agama == 'Hindu') selected @endif>Hindu</option>
                            <option value="Budha"@if($daftar ->agama == 'Budha') selected @endif>Budha</option>
                            <option value="Konghucu"@if($daftar ->agama == 'Konghucu') selected @endif>Konghucu</option>
                            <option value="Katolik"@if($daftar ->agama == 'Katolik') selected @endif>Katolik</option>
                     </select>
                </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal Sekolah:</strong>
                    <input type="text" name="asal_sekolah" value="{{ $daftar->asal_sekolah }}" class="form-control" placeholder="Asal Sekolah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"> 
                <strong>Minat Jurusan:</strong>
                <select class="form-control" data-validate = "Pilih Minat Jurusan" value="{{ $daftar->minat_jurusan }}" name="minat_jurusan" id="minat_jurusan">
                            <option value=""disable selected > Pilih jurusan  </option>
                            <option value="Rekayasa Perangkat Lunak" @if($daftar ->minat_jurusan == 'Rekayasa Perangkat Lunak') selected @endif>Rekayasa Perangkat Lunak</option>
                            <option value="Tata Boga" @if($daftar ->minat_jurusan == 'Tata Boga') selected @endif >Tata Boga</option>
                            <option value="Tata Busana" @if($daftar ->minat_jurusan == 'Tata Busana') selected @endif >Tata Busana</option>
                            <option value="Multimedia" @if($daftar ->minat_jurusan == 'Multimedia') selected @endif >Multimedia</option>
                     </select>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection