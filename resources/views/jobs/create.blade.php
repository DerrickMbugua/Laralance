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
<div class="col-lg-8">
    <!--form-->
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Job</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="postjob" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
                
                <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
              </div>
            <div class="form-group">
              <label>Job Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter job title">
            </div>
            <div class="form-group">
              <label>Description</label>
              <input type="text" class="form-control" name="description" placeholder="Enter job description">
            </div>
            <div class="form-group">
                <label>Job Category</label>
                <select type="text" class="form-control" name="category" placeholder="Enter job category">
                    @foreach ($categories as $cat)
                    <option value="{{ $cat->id}}">{{ $cat->name}}</option>
                  @endforeach
                </select>
              </div>
            <div class="form-group">
                <label>Experience Level</label>
                
                <select class="form-control" name="experience_level">
                    <option>High School</option>
                    <option>Bachelors</option>
                    <option>Masters</option>
                    <option>phD</option>
                  </select>
              </div>
            <div class="form-group">
                <label>Budget</label>
                <input type="number" class="form-control" name="budget" placeholder="Enter budget for the job">
              </div>
              <div class="form-group">
                <label>Delivery Date</label>
                <input type="datetime" class="form-control" name="delivery_date" placeholder="Enter delivery date of the job">
              </div>
            <div class="form-group">
              <label>File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="doc">
                  <label class="custom-file-label">Choose file</label>
                </div>
              </div>
            </div>
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    <!--/.form-->
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
