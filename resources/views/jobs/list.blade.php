@extends('layouts.master')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- /container -->
<div class="container">
<div class="col-lg-12">
    <!--table-->
    <table class="table">
        <thead>   
          <tr>            
            <th scope="col">Job Title</th>
            <th scope="col">Description</th>
            <th scope="col">Budget</th>
            <th scope="col">Job Category</th>
            <th scope="col">Experience level</th>
            <th scope="col">Delivery Date</th>
            <th scope="col">Operation</th>
            <th scope="col">Proposals</th>
          </tr>
          
        </thead>
        <tbody>
            @foreach($Jobs as $Job)
          <tr>          
            <td>{{$Job->title}}</td>
            <td>{{$Job->description}}</td>
            <td>${{$Job->budget}}</td>
            <td></td>
            <td>{{$Job->experience_level}}</td>
            <td>{{$Job->delivery_date}}</td>
            <td><a href="/deletejobs/{{$Job->id}}"><i class="fas fa-trash" style="color: red"></i></a>
              <a href="/editjobs/{{$Job->id}}"><i class="fas fa-pencil-alt" style="margin-left: 20px"></i></a>
              </td>
             

              <td><a href="/proposal/{{$Job->id}}"><input type="button" value="Proposals"></a></td>
             
          </tr>
          @endforeach
        </tbody>
      </table>
    <!--/table-->
  </div>
  <!-- /.col-md-12 -->
</div>
  <!-- /.container -->

  <!-- /container -->
  <div class="container">
    <div class="col-lg-12">

  </div>
  </div>
  <!-- /.container -->
@endsection
