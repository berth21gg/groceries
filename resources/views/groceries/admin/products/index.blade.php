@extends('layout.groceries')

@section('main_content')
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="background-image: url({{ asset('assets/img/bg-header.jpg') }});">
            <div class="container">
                <h1 class="pt-5">
                    Admin Products
                </h1>
                <p class="lead">
                    Products administration
                </p>
            </div>
        </div>
    </div>

    <section class="pb-0">
        <div class="contact1 mb-5">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-lg-6">
                        <button id="btnLoadProducts" class="btn btn-primary">Load Products</button>
                        <table id="tblProducts" class="display" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>CATEGORY</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        @section('scripts')
                        <script type="application/javascript">
                            $(document).ready( function(){
                                $('#btnEE').click(function(){
                                    $('#tableEmployees').DataTable({
                                    ajax: {
                                        url: '../api/products',
                                        type: 'GET',
                                        dataType: 'json',
                                    },
                                    columns: [
                                        { data: 'id'},
                                        { data: 'name'},
                                        { data: 'description'},
                                        { data: 'quantity'},
                                        { data: 'sale_price'},
                                        { data: 'purchase_price'},
                                        { data: 'image'},
                                        { data: 'category_id'},
                                    ]
                                });
                                })
                            });
                        </script>
                    @endsection
                </div> --}}
                <div class="col-lg-12">
                    <table id="tblProductsDT" class="table table-default">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>CATEGORY</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</section>
@endsection
