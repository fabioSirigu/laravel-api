@extends('layouts.admin')
@section('content')
<a class="btn btn-primary" href="{{route('admin.leads.index')}}" role="button"><i class="fas fa-angle-left fa-fw"></i></a>
<div class="container p-5">
      <div class="card text-left bg-dark text-light">
            <div class="card-body">
                  <div>
                        <h1>Name: {{$lead->name}}</h1>
                  </div>
                  <div>
                        <h1>Email: {{$lead->email}}</h1>
                  </div>

                  <div>
                        <h3>Message: {{$lead->message}}</h3>
                  </div>
                  <div>
                        <h3>Date: {{$lead->created_at}}</h3>
                  </div>
            </div>
      </div>



</div>
@endsection