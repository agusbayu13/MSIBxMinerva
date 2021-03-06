@extends('layouts.layouts-admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 col-xl-12 mb-4 mb-xl-0">
            <h3 class="text-center font-weight-bold">Daftar Peserta Event Minerva Indonesia</h3>
            <div class="d-flex justify-content mt-3">
                {{-- <a class="btn btn-primary mx-1" href="{{ route('excel') }}"><small><b>Excel</b></small></a> --}}
                <a type="button" class="btn btn-info btn-icon-text " href="{{ route('excel') }}">
                  Export as Excel
                  <i class="ti-printer btn-icon-append"></i>                                                                              
                </a>
            </div>
          </div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <!--<h4 class="card-title">Data Peserta Webinar</h4>
        <p class="card-description">
          Add class <code>.table-striped</code>
        </p>-->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Event</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Instansi</th>
                <th>Domisili</th>
                <th>Bukti Follow</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->post_id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>0{{ $item->notelp }}</td>
                <td>{{ $item->instansi }}</td>
                <td>{{ $item->domisili }}</td>
                <td>
                  <img src="{{ asset('upload/bukti_ss/'.$item->featured)}}"  
                </td>
              </tr>
            @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>

@endsection