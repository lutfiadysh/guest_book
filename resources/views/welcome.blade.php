@extends('layouts.app', ['class' => 'bg-gradient-default'])

@section('content')
    <div class="" style="background-image: url(../argon/img/theme/skul.jpg); background-size: cover; background-position: center top;">
        <span class="mask bg-gradient-default opacity-7"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                        @if (session('status'))
                            <div class="alert alert-success mt-2" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                <div class="card col-10 shadow-lg mt-7 mb-5">
                    <div class="card-header shadow-lg p-3 rounded bg-gradient-warning mt--4 p-4">
                        <h1 class="mb-0 title float-left text-white">GUEST BOOK</h1>
                        <h2 class="mb-0 float-right text-white">" In situ Hotel "</h2>
                    </div>
                    <div class="card-body mt-2">
                        <form action="{{route('testi.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group form-group-alternative col-6">
                                    <label for="room">Room Number</label>
                                    <input type="number" name="r_number" class="form-control form-control-alternative" id="room" placeholder=".." required>
                                </div>
                                <div class="form-group form-group-alternative col-6">
                                    <label for="">Phone</label>
                                    <input type="number" name="phone" class="form-control form-control-alternative" placeholder="+62xxxxxxxx">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-group-alternative col-6">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control form-control-alternative" placeholder="Your Name" >
                                </div>
                                <div class="form-group form-group-alternative col-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control form-control-alternative" placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="form-group form-group-alternative">
                                <label for="">Testimoni</label>
                                <textarea name="testimoni" id="" cols="10" rows="8" class="form-control form-control-alternative" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control form-control-alternative btn btn-primary shadow-lg--hover">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
