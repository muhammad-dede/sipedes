@extends('penduduk.layouts.main')

@section('title', $jenis_surat->nama ?? '')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <form id="form_submit"
                        action="{{ route('penduduk.surat.update', [
                            'jenis_surat' => $jenis_surat,
                            'surat' => $surat,
                        ]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card">
                            <div class="card-status-top bg-primary"></div>
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="card-title mb-1">
                                            {{ $jenis_surat->nama ?? '' }}
                                        </h3>
                                        <div class="text-muted">
                                            Input dengan tanda <strong class="text-danger">*</strong> wajib diisi!
                                        </div>
                                    </div>
                                </div>
                                <div class="card-actions">
                                    <a class="btn-link text-warning mx-2" href="{{ route('penduduk.surat.index') }}">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label required">
                                        Keperluan
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" name="keperluan"
                                            class="form-control @error('keperluan') is-invalid @enderror"
                                            value="{{ old('keperluan') ?? $surat->keperluan }}" />
                                        @error('keperluan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="form-label col-md-3 col-12 col-form-label">
                                        Dokumen Pendukung (Ijazah atau Akta Kelahiran)
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" name="file_pendukung"
                                            class="form-control @error('file_pendukung') is-invalid @enderror"
                                            accept="image/png, image/jpeg" />
                                        @error('file_pendukung')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-hint">
                                            Ekstensi: PNG, JPG | Max: 2MB.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {!! JsValidator::formRequest('App\Http\Requests\Penduduk\Surat\UpdateRequest', '#form_submit') !!}
@endpush