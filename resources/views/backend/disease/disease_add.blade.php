@extends('backend.adminpanel')
@section('content')
  <!-- Orders -->
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
      <h1>Disease Add</h1>
        <form action="{{route('disease_create')}}" method="post">
          @csrf
        <div class="form-group">
          <label for="disease_name">Disease Name</label>
          <input type="text" class="form-control" id="disease_name"  placeholder="Enter Disease Name" name="disease_name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div> <!-- /.table-stats -->
    </div>
  </div> <!-- /.card -->
</div>
@endsection
