@extends('backend.adminpanel')
@section('content')
  <!-- Orders -->
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
      <h1>asfc</h1>
        <form action="{{route('company_create')}}" method="post">
          @csrf
        <div class="form-group">
          <label for="company_name">Company Name</label>
          <input type="text" class="form-control" id="company_name"  placeholder="Enter Company Name" name="company_name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div> <!-- /.table-stats -->
    </div>
  </div> <!-- /.card -->
</div>
@endsection
