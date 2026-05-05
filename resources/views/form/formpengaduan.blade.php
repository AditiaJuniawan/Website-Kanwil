@extends('master')

@section('content')
  
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>Formulir Layanan Pengaduan</h1>
            <a href="/">Beranda</a> > <a href="/layanan1">layanan Pngaduan</a> > <a href="/formpengaduan">Formulir Layanan Pengaduan</a>
          
        </div>
    </section>
    <section class="profil-Layanan container">
    <h2 class="section-title-profil">Formulir Layanan Pengaduan</h2>
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
    <label for="NIK">Nomor Induk Kependudukan (NIK)</label>    
    <input id="NIK" type="text" placeholder="Masukan 16 Digit NIK KTP Anda">
            
    <label for="alamat">Alamat Lengkap</label>    
    <textarea rows="3" class="fullinput" id="alamat" type="text"></textarea>

    <label for="nohp">Nomor HP ( Whatsapp )</label>    
    <input id="nohp" type="text" placeholder="08xxxxxxxx">

    <div class="detail-informasi" style="border: 1px solid gray; border-radius:5px; padding : 20px; margin-bottom:20px">
    <div class="font-bold">
        <h6 class="fw-bold mb-3 border-bottom pb-2 text-danger"><i class="bi bi-megaphone"></i> Detail Pengaduan</h6>
    </div>
    <br>
    <label for="Namaterlapor">Nama Terlapor (Bisa dikosongkan jika tidak tahu)</label>
    <input type="text" name="Namaterlapor" id="Namaterlapor">

    <label for="Jenis">Kategori Pengaduan</label>
    <select name="Jenis" id="Jenis" style="display: block; border:1px solid black; padding:2px;">
        <option value="Pungli / Pemerasan">Pungli / Pemerasan</option>
        <option value="Peredara HP Ilegal">Peredara HP Ilegal</option>
        <option value="Peredara Narkoba">Peredara Narkoba</option>
        <option value="Kekerasan Fisik / Verbal">Kekerasan Fisik / Verbal</option>
        <option value="Kegiatan Lainnya">Kegiatan Lainnya</option>
    </select>
    <br>

    <label for="uraian">Uraian Ringkas (Lokasi & Waktu Pelaksanaan )</label>
    <textarea rows="6" class="fullinput" id="uraian" type="text"></textarea>

    <label for="filePerizinan"> Upload Bukti Pendukung (PDF/PNG/JPG, Wajib)</label>
    <input type="file" name="filePerizinan" id="filePerizinan">
    </div>


    <button type="submit" class="btn">Submit</button>
    <div>

    </div>
    </form>
    
    
    </section>

    

@endsection
