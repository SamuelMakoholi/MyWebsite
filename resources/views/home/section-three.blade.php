@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->

     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Text and Image to Hero Section</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hero Section</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-3">
<from> this is my form</form>
        </div>

        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Section Three</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('add.section.three') }}" enctype="multipart/form-data">
                    @csrf

                <div class="form-group">
                <label for="inputName">Title</label>
                <input type="text" id="inputName" name="title" class="form-control">
                </div>
              <div class="form-group">
                <label for="inputDescription">Main Text</label>
                <textarea id="inputDescription" name="main_text" class="form-control" rows="4"></textarea>
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
