@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>Formulir Layanan Informasi</h1>
            <a href="/">Beranda</a> > <a href="/layanan1">layanan Informasi</a> > <a href="/formLayananInformasi">Formulir Layanan Informasi</a>
          
        </div>
    </section>
    <section class="profil-kanwil container">
    <h2 class="section-title-profil">Formulir Layanan Informasi</h2>
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

    <label for="uraian">Uraian Informasi / Data yang diminta</label>
    <textarea rows="6" class="fullinput" id="alamat" type="text"></textarea>

    <label for="tujuan">Tujuan Penggunaan Informasi</label>
    <input type="text" name="tujuan" id="tujuan">

    <label for="fileinformasi">Upload informasi/Surat Permohonan (PDF/DOC/PNG/JPG)</label>
    <input type="file" name="fileinformasi" id="fileinformasi">
    </div>


    <button type="submit" class="btn">Submit</button>
    <div>

    </div>
    </form>
    
    
    </section>

    

@endsection
