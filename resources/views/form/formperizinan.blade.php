@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>Formulir Layanan Perizinan</h1>
            <a href="/">Beranda</a> > <a href="/layanan1">layanan Perizinan</a> > <a href="/formLayananInformasi">Formulir Layanan Perizinan</a>
          
        </div>
    </section>
    <section class="profil-Layanan container">
    <h2 class="section-title-profil">Formulir Layanan Perizinan</h2>
    <form action="">
        <div class="row">
            <div class="col">
                <label for="nama">Nama Lengkap</label>    
                <input id="nama" type="text" >
            </div>
            <div class="col">
                <label for="Instansi">Instansi / Asal</label>    
                <input id="Instansi" type="text" placeholder="Contoh : Universitas Terbuka / Masyarakata Umum">
            </div>
        </div>
            
    <label for="alamat">Alamat Lengkap</label>    
    <textarea rows="3" class="fullinput" id="alamat" type="text"></textarea>

    <label for="nohp">Nomor HP ( Whatsapp )</label>    
    <input id="nohp" type="text" placeholder="08xxxxxxxx">

    <div class="detail-informasi" style="border: 1px solid gray; border-radius:5px; padding : 20px; margin-bottom:20px">
    <div class="font-bold">
        <h6 class="fw-bold mb-3 border-bottom pb-2 text-primary"><i class="bi bi-file-earmark-person"></i> Detail Perizinan</h6>
    </div>
    <br>
    <label for="Nosurat">Nomor Surat Pengantar Instansi/Kampus</label>
    <input type="text" name="Nosurat" id="Nosurat">

    <label for="Jenis">Jenis Perizinan</label>
    <select name="Jenis" id="Jenis" style="display: block; border:1px solid black; padding:2px;">
        <option value="Magang / PKL">Magang / PKL</option>
        <option value="Penelitian / Skripsi">Penelitian / Skripsi</option>
        <option value="Kegiatan Lainnya">Kegiatan Lainnya</option>
    </select>
    <br>

    <label for="uraian">Uraian Ringkas (Lokasi & Waktu Pelaksanaan )</label>
    <textarea rows="6" class="fullinput" id="uraian" type="text"></textarea>

    <label for="filePerizinan">Upload Surat Pengantar (PDF/DOC/PNG/JPG, Wajib)</label>
    <input type="file" name="filePerizinan" id="filePerizinan">
    </div>


    <button type="submit" class="btn">Submit</button>
    <div>

    </div>
    </form>
    
    
    </section>

    

@endsection
