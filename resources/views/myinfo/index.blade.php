@extends('manageLayouts.app')
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ Auth::user()->name }}
                        <a href="#" data-toggle="modal" data-target="#updateInfo" class="btn btn-primary float-right btn-sm">Update Information</a>
                    </h4>
                </div>
                <div class="card-body container">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputName">Name :</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth->user()->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth->user()->email }}">
                        </div>  
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection