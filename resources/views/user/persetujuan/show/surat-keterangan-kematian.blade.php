@extends('user.layouts.main')

@section('title', $surat->jenisSurat->nama ?? '')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="card-title mb-1">
                                        Detail
                                    </h3>
                                    <div class="text-muted">
                                        Informasi {{ $surat->jenisSurat->nama ?? '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a class="btn-link text-warning mx-2" href="{{ route('user.persetujuan.index') }}">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    No. Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->no_surat ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Jenis Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->jenisSurat->nama ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Penduduk (Pemohon)
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->penduduk->nama ?? '-' }}&nbsp;-&nbsp;{{ $surat->penduduk->nik ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tanggal Surat
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->tanggal_surat ? date_format(date_create($surat->tanggal_surat), 'd-m-Y') : '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Keperluan
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->keperluan ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Penduduk Meninggal
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKematian->penduduk->nama ?? '-' }} -
                                    {{ $surat->suratKeteranganKematian->penduduk->nik ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tanggal Meninggal
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKematian->tanggal_meninggal ? date_format(date_create($surat->suratKeteranganKematian->tanggal_meninggal), 'd-m-Y') : '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Jam Meninggal
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKematian->jam_meninggal ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Tempat Meninggal
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKematian->tempat_meninggal ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Sebab Kematian
                                </div>
                                <div class="col-md-8 fw-bold">
                                    {{ $surat->suratKeteranganKematian->sebab_kematian ?? '-' }}
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-4">
                                    Surat Pengantar RT/RW
                                </div>
                                <div class="col-md-8 fw-bold">
                                    @if ($surat->suratKeteranganKematian->file_surat_pengantar)
                                        <a href="{{ $surat->suratKeteranganKematian->file_surat_pengantar }}"
                                            target="_blank">
                                            Lihat
                                        </a>
                                    @else
                                        <span class="text-warning">Belum Upload</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
