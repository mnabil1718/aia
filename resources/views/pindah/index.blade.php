@extends('layouts.app')



@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Surat Pindah</h3>
                            <div class="right">
                                <a href="/pindah/add" class="btn btn-sm btn-primary float-right">Tambah Surat</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(count($data_surat)>0)
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Nama Siswa</th>
                                        <th>Pindah Ke</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_surat as $surat)
                                    <tr>
                                        <th>{{$surat->no_surat}}</th>
                                        <td>{{$surat->tanggal}}</td>
                                        <td>{{empty($surat->ruang) ? 'Kosong' : $surat->ruang->nama}}</td>
                                        <td>{{$surat->sekolah_tujuan}}</td>
                                        <td>
                                            <a href="/pindah/{{$surat->id}}/print" @click.prevent="print"
                                                class="btn btn-info btn-sm">Download</a>
                                            <a href="/pindah/{{$surat->id}}/delete" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <p class="text-center">Data not found</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection