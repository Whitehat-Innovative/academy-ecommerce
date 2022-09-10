@extends('layouts.dashboard')

@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Editable Table</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Editable Table</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Table Edit</h4>
                            <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows
                                editable.</p>

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Discount Price</th>
                                            <th>Percentage Discount</th>
                                            <th>image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr data-id="1">
                                            <td data-field="id" style="width: 80px">1</td>
                                            <td data-field="name">{{ $product->name }}</td>
                                            <td data-field="age">{{ $product->description}}</td>
                                            <td data-field="gender">{{ $product->category->name }}</td>
                                            <td data-field="age">{{ $product->price }}</td>
                                            <td data-field="age">{{ $product->discount }}</td>
                                            <td data-field="age">{{ $product->percentage_discount }}</td>

                                            <td><img height="100px" width="100px" src="/storage/assets/images/{{$product->image}}"  alt=""
                                                    class="img-fluid"></td>

                                            <td style="width: 100px">
                                                <a href="{{ route('edit_product',$product->id) }}"
                                                    class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                            <td style="width: 100px">
                                                <a href="{{ route('delete_product', $product->id) }}"
                                                    class="btn btn-outline-secondary btn-sm edit" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())

                    </script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


@endsection
