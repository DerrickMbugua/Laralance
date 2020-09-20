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
<!-- /container
<div class="container">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tips</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
         <p>   When you submit a proposal, clients review your profile to decide if your skills and experience match what they are looking for.
            It's time to create a profile with the jobs you want in mind. This is your opportunity to market your freelance business to clients.</p>
            <small>Note that your profile must be approved, so take time to fill it out accurately.</small>
        </div>
        
      </div>
  </div>
  
</div>
   /.container -->

   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="../../dist/img/user4-128x128.jpg"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <form class="">
<input type="file" name="img">
<input type="submit" class="btn btn-danger" name="upload image">
              </form>
             

              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Hourly rate</strong>

              <p class="text-muted">$135</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

              <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Overview</strong>

              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#overview" data-toggle="tab">Overview</a></li>
                <li class="nav-item"><a class="nav-link" href="#personal_info" data-toggle="tab">Comment</a></li>
                <li class="nav-item"><a class="nav-link" href="#approval" data-toggle="tab">Approval</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="overview">
                 <!--Overview-->
                 <form class="form-horizontal" action="overview" method="POST">
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
                   @csrf
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Write a brief professional overview</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" placeholder="Highlight your top skills, experience, and interests.This is one of the first things clients will see on your profile." rows="6" name="overview"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">What is your English proficiency?</label>
                      <div class="col-sm-10">
  
                            <select class="form-control select2" style="width: 100%;" placeholder="Select your proficiency" name="english_proficiency">
                                <option>Basic - I am only able to communicate in this language through written text</option>
                                <option>Conversational - I know this language quite well to have project conversations with a client</option>
                                <option>Fluent - I have a complete understanding of this language with perfect grammar</option>
                                <option>Native/Billingual - I have complete command of this language, including breadth of vocabulary, Idioms, and Colloquialisms</option>
                              </select>
                       
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience Level</label>
                      <div class="col-sm-10">
                        <select class="form-control select2" style="width: 100%;" placeholder="Select your proficiency" name="experience_level">
                            <option>High School</option>
                            <option>Bachelors</option>
                            <option>Masters</option>
                            <option>phD</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Professional Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Software Engineer" name="professional_title">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Education</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="B.sc Computer Technology in Jkuat" name="education">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Hourly_rate</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="$10" name="hourly_rate">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Skills</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills" name="skills">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a> of Laralance
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        
                       <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                 <!--/.Overview-->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="personal_info">
                  <!--Personal info -->
                  <form class="form-horizontal" action="overview" method="POST">
                    @csrf
                   
                    
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                  <!--/.Personal info-->
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="approval">

                  <form class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a> of Laralance
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Approve</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
