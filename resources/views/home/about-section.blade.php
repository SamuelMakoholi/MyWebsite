@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->

     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Section</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Section</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-3">
        Add title and Image
        </div>

        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Section</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('add.about.section') }}" enctype="multipart/form-data">
                    @csrf

                <div class="form-group">
                <label for="inputName">About Title</label>
                <input type="text" id="inputName" name="text_title" class="form-control">
                </div>
              <div class="form-group">
                <label for="inputDescription">Who we are</label>
                <textarea id="inputDescription" name="who_we_are" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
            
                <label for="inputDescription">Our Version</label>
                <textarea id="inputDescription" name="our_vision" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Our History</label>
                <textarea id="inputDescription" name="our_history" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" id="inputProjectLeader"  name="abt_image" placeholder="Choose Image" class="form-control">
              </div>
         
              <div class="row">
                <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Add Section" class="btn btn-success float-right">
            </div>

        </form>

    </div>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
     
      </div>
   
    </section>
    <!-- /.content -->

@endsection
