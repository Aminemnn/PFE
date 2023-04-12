<!-- Proposal history page -->
<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">


<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 04:14:23 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Proposal history</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('FreeAssets/images/favicon.ico')}}">

    <!-- plugin css -->
    <link href="{{asset('FreeAssets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset('FreeAssets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('FreeAssets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('FreeAssets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('FreeAssets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('FreeAssets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<x-freelancer-layout>
<!-- Begin page -->
<div id="layout-wrapper" >
    <div class="main-content">

        <div class="page-content">
            <!-- container-fluid -->
            <div class="container-fluid" style="position: relative;bottom: 160px">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Proposals</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">page1</a></li>
                                    <li class="breadcrumb-item active">to page 2</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="orderList">
                            <div class="card-header border-0">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <h5 class="card-title mb-0">Proposals History</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border border-dashed border-end-0 border-start-0">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xxl-5 col-sm-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for Proposal ID, customer, Proposal status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-2 col-sm-6">
                                            <div>
                                                <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-2 col-sm-4">
                                            <div>
                                                <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                                    <option value="">Status</option>
                                                    <option value="all" selected>All</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Inprogress">Inprogress</option>
                                                    <option value="Cancelled">Cancelled</option>
                                                    <option value="Returns">Returns</option>
                                                    <option value="Delivered">Delivered</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-2 col-sm-4">
                                            <div>
                                                <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idPayment">
                                                    <option value="">Select Payment</option>
                                                    <option value="all" selected>All</option>
                                                    <option value="Mastercard">Mastercard</option>
                                                    <option value="Paypal">Paypal</option>
                                                    <option value="Visa">Visa</option>
                                                    <option value="COD">COD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-1 col-sm-4">
                                            <div>
                                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-1 align-bottom"></i>
                                                    Filters
                                                </button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active All py-3" data-bs-toggle="tab" id="All" href="#home1" role="tab" aria-selected="true">
                                                <i class="ri-store-2-fill me-1 align-bottom"></i> All Orders
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-3 Delivered" data-bs-toggle="tab" id="Delivered" href="#delivered" role="tab" aria-selected="false">
                                                <i class="ri-checkbox-circle-line me-1 align-bottom"></i> Delivered
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-3 Pickups" data-bs-toggle="tab" id="Pickups" href="#pickups" role="tab" aria-selected="false">
                                                <i class="ri-truck-line me-1 align-bottom"></i> Pickups <span class="badge bg-danger align-middle ms-1">2</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-3 Returns" data-bs-toggle="tab" id="Returns" href="#returns" role="tab" aria-selected="false">
                                                <i class="ri-arrow-left-right-fill me-1 align-bottom"></i> Returns
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-3 Cancelled" data-bs-toggle="tab" id="Cancelled" href="#cancelled" role="tab" aria-selected="false">
                                                <i class="ri-close-circle-line me-1 align-bottom"></i> Cancelled
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="table-responsive table-card mb-1">
                                        <table class="table table-nowrap align-middle" id="orderTable">
                                            <thead class="text-muted table-light">
                                            <tr class="text-uppercase">
                                                <th scope="col" style="width: 25px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th class="sort" data-sort="id">Proposal ID</th>
                                                <th class="sort" data-sort="customer_name">Customer</th>
                                                <th class="sort" data-sort="product_name">Title</th>
                                                <th class="sort" data-sort="date">Order Date</th>
                                                <th class="sort" data-sort="amount">Amount</th>
                                                <th class="sort" data-sort="payment">Payment Method</th>
                                                <th class="sort" data-sort="status">Price Category</th>
                                                <th class="sort" data-sort="status">Week Or Date</th>
                                                <th class="sort" data-sort="status"> Status</th>

                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            <tr>
                                                @foreach($proposition as $proposition)
                                                <th scope="row">
                                                    #
                                                </th>
                                                <td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">{{$proposition->id}}</a></td>
                                                <td class="customer_name">{{$proposition->name_user}}</td>
                                                <td class="product_name">{{$proposition->title_projet}}</td>
                                                <td class="date">{{$proposition->created_at}}</td>
                                                <td class="amount">{{$proposition->price}}</td>
                                                <td class="payment">{{$proposition->price_categorie}}</td>
                                                    <td class="payment">{{$proposition->type_price}}</td>
                                                    <td class="payment">@if($proposition->semaine==null){{$proposition->date}}@else{{$proposition->semaine}}@endif</td>
                                                <td class="status"><form style="display: inline-block;margin: 13px"> <button type="submit" class="btn btn-success"><a href="#" style="text-decoration: none;color: #FFFFFF">Accept</a></button></form><form action="{{route('refuser')}}" method="post" style="display: inline-block"> @csrf <button type="submit" value="{{$proposition->id}}" name="refuser" class="btn btn-danger">Refuse</button></form>
                                                </td>
                                                @endforeach
                                            </tr>
                                            </tbody>
                                        </table>
                                        @if(session('refuser'))
                                            <script>
                                                const Toast = Swal.mixin({
                                                    toast: true,
                                                    position: 'top-end',
                                                    showConfirmButton: false,
                                                    timer: 3000,
                                                    timerProgressBar: true,
                                                    didOpen: (toast) => {
                                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                                    }
                                                })

                                                Toast.fire({
                                                    icon: 'success',
                                                    title: '{{session("refuser")}}'
                                                })
                                            </script>
                                        @endif
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body p-5 text-center">
                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                <div class="mt-4 text-center">
                                                    <h4>You are about to delete a order ?</h4>
                                                    <p class="text-muted fs-15 mb-4">Deleting your order will remove all of your information from our database.</p>
                                                    <div class="hstack gap-2 justify-content-center remove">
                                                        <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                        <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->

</div>
</x-freelancer-layout>

<!-- JAVASCRIPT -->
<script src="{{asset('FreeAssets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('FreeAssets/js/plugins.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('FreeAssets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- Vector map-->
<script src="{{asset('FreeAssets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/jsvectormap/maps/world-merc.js')}}"></script>

<!-- Dashboard init -->
<script src="{{asset('FreeAssets/js/pages/dashboard-analytics.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('Freeassets/js/app.js')}}"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 04:14:23 GMT -->
</html>
