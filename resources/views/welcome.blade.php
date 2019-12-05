@extends('layouts.app', ['class' => 'bg-gradient-info'])

@section('content')
    <div class="bg-gradient-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-10 shadow mt-7">
                    <div class="card-header text-center">
                        <h1 class="mb-0">Guest Book</h1>
                        <h2 class="mb-0">" In situ Hotel "</h2>
                    </div>
                    <div class="card-body mt-2">
                        <form action="{{route('testi.store')}}" method="POST">
                            @csrf
                            <div class="form-group form-group-alternative">
                                <label for="room">Room Number</label>
                                <input type="text" name="r_number" class="form-control form-control-alternative" id="room">
                            </div>
                            <div class="form-group form-group-alternative">
                                <label for="">Your Name</label>
                                <input type="text" name="name" class="form-control form-control-alternative">
                            </div>
                            <div class="form-group form-group-alternative">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control form-control-alternative">
                            </div>
                            <div class="form-group form-group-alternative">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control form-control-alternative">
                            </div>
                            <div class="form-group form-group-alternative">
                                <label for="">Testimoni</label>
                                <textarea name="testimoni" id="" cols="30" rows="10" class="form-control form-control-alternative"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control form-control-alternative btn btn-danger">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
