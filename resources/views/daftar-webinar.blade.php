@extends('layouts.layouts-public')

@section('content')

<div class="container-xxl py-5 bg-dark hero-header2 mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Minerva Indonesia</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#"><b>TINGKATKAN POTENSI YANG DIRI KAMU PUNYA PADA BERBAGAI BIDANG DENGAN TEPAT<br/>BERSAMA MENTOR YANG EXPERT DI BIDANGNYA</b>
                    </a></li>                
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->
        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Pendaftaran</h5>
                        <h1 class="text-white mb-4">Daftar Webinar</h1>
                        <form action="{{ route('insertdaftarwebinar')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" name="post_id" value="{{ old('post_id')}}">
                                          <option value=" ">Nama Event</option>
                                            @foreach ($post as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                        <label for="post_id">Pilih Event Yang Diikuti</label>
                                    </div>
                                </div>
                                {{-- <div class="col-12">    
                                  <div class="form-group">
                                    <label for="post_id"></label>
                                    <select name="post_id" class="form-control" value="{{ old('post_id')}}">
                                        <option value="">Pilih Event</option>
                                        @foreach ($post as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Your Name">
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                        <label for="email">Email Aktif</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="notelp" class="form-control" name="notelp" id="notelp" placeholder="Nomor Whatsapp">
                                        <label for="notelp">No. Whatsapp</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="instansi" class="form-control" name="instansi" id="instansi" placeholder="Instansi/Universitas/Perusahaan">
                                        <label for="instansi">Instansi/Universitas/Perusahaan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="domisili" class="form-control" name="domisili" id="domisili" placeholder="Domisili">
                                        <label for="domisili">Domisili</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" name="featured">
                                        <label for="featured">Masukan Bukti ScreenShot Follow Instagram @gama.inovasi</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Daftar Sekarang</button>
                                </div>
                                {{-- <div class="col-12">
                                <a class="btn btn-secondary w-100 py-3" href="https://t.me/Grouppeserta">Gabung Grup Telegram</a>
                                </div>
                                <p class="text-white mb-2">*) Peserta yang telah mendaftar silahkan bergabung ke grup telegram di atas</p> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->
@include('sweetalert::alert')
@endsection
        
