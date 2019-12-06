@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">  
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow mb-7">
                    <div class="card-header border-0 bg-gradient-warning">
                        <h3 class="mb-0 float-left text-white">Data testimoni</h3>
                    </div>
                    <div class="nav-wrapper row justify-content-center">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row col-10" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-map-big mr-2"></i>Hari ini</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-ungroup mr-2"></i>Bulan ini</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Tahun ini</a>
                            </li>
                        </ul>
                        </div>
                        <div class="card shadow">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                    <div class="description table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>#</th>
                                                <th>No Ruangan</th>
                                                <th>Nama</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>testimoni</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($testi as $t)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$t->r_number}}</td>
                                                    <td>{{$t->name}}</td>
                                                    <td>{{$t->phone}}</td>
                                                    <td>{{$t->email}}</td>
                                                    <td>{{$t->testimoni}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <div class="description table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>#</th>
                                                <th>No Ruangan</th>
                                                <th>Nama</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>testimoni</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($testib as $tb)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$tb->r_number}}</td>
                                                    <td>{{$tb->name}}</td>
                                                    <td>{{$tb->phone}}</td>
                                                    <td>{{$tb->email}}</td>
                                                    <td>{{$tb->testimoni}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                    <div class="description table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>#</th>
                                                <th>No Ruangan</th>
                                                <th>Nama</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>testimoni</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($testit as $tt)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$tt->r_number}}</td>
                                                    <td>{{$tt->name}}</td>
                                                    <td>{{$tt->phone}}</td>
                                                    <td>{{$tt->email}}</td>
                                                    <td>{{$tt->testimoni}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </p>
                                </div>
                            </div>
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
    <script>
        var date = document.getElementById('date');

        date.innerHTML = new Date("MM-DD-YYYY");
    </script>
@endpush