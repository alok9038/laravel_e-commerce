@extends('layouts.adminBase')
@section('css')
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

@endsection
@section('content')
    <div class="container">
        <h5 class="fs-1">Sub Categories</h5>
        <p class="small">Add, edit or delete a subcategory</p>
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
            <div class="col-lg-4 col">
                <div class="card border sticky-top shadow-sm" style="border-radius: 15px; top:100px">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control shadow-none bg-light border-0">
                            </div>
                            <div class="mb-3">
                                <label for="name">Slug</label>
                                <input type="text" class="form-control shadow-none bg-light border-0">
                            </div>
                            <div class="mb-3">
                                <label for="name">Parent</label>
                                <select type="text" class="form-select shadow-none bg-light border-0">
                                    <option value="" selected hidden disabled>select</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control bg-light border-0 shadow-none" id="description" cols="30" rows="4"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col">
                <div class="card border shadow-sm" style="border-radius: 15px">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>

@endsection
