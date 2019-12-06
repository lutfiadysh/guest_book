@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">  
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success mt-2" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card shadow">
                    <div class="card-header border-0 bg-gradient-warning mb-2">
                        <h3 class="mb-0 text-white">Konfigurasi Aplikasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="container col-12 ">
                            <form action="{{route('store')}}" method="POST">
                                @csrf
                                <div class="form-group form-group-alternative">
                                    <label for="">Nama Aplikasi</label>
                                    <input type="text" name="app_name" class="form-control form-control-alternative">
                                </div>
                                <div class="form-group form-group-alternative">
                                    <label for="">Logo Aplikasi</label>
                                    <input type="file" name="foto" class="form-control form-control-alternative">
                                </div>
                                <div class="form-group form-group-alternative row justify-content-center mt-4 mb--2">
                                    <button type="submit" class="btn btn-default">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush