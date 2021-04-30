@extends('system._layouts.main')

@section('content')
<div class="content content-components section-wrapper mb-5">
    <div>
        <div class="row">
        <div class="col-lg-12">
            <h4 id="section1" class="mg-b-10">User Information</h4>
        </div>
            <div class="col-lg-4 mt-2">
                <span>Full Name</span>
                <h5>Dhen Mark Torreno</h5>
            </div>
            <div class="col-lg-4 mt-2">
                <span>Main Address</span>
                <h5>Block 209 lot 3 Acacia St. Pembo, Makati City</h5>
            </div>
            <div class="col-lg-4 mt-2">
                <span>Nationality</span>
                <h5>Filipino</h5>
            </div>
            <div class="col-lg-4 mt-2">
                <span>Email Address</span>
                <h5>tdhenmark@gmail.com</h5>
            </div>
            <div class="col-lg-4 mt-2">
                <span>Contact Number</span>
                <h5>098875879</h5>
            </div>
            <div class="col-lg-4 mt-2">
                <span>Status</span>
                <h5 class="mt-1"><span class="bg-success text-white p-1 rounded">Active</span></h5>
            </div>
            <div class="col-lg-12">
            <hr>
            </div>
        </div>
        <div class="d-flex justify-content-md-between mb-2 mt-2">
            <h4 id="section1" class="mg-b-10">List of Transaction</h4>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="df-example demo-table">
                    <div class="table-responsive">
                        <table class="table table-hover mg-b-0">
                            <thead>
                                <tr>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Reference No</th>
                                    <th scope="col">Shipping Address</th>
                                    <th scope="col">Transaction Date</th>
                                    <th scope="col">Payment Date</th>

                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="pt-3 pb-3">5878955</th>
                                    <td class="pt-3 pb-3">3123123</td>
                                    <td class="pt-3 pb-3">Lorem ipsum</td>
                                    <td class="pt-3 pb-3">02-18-2020</td>
                                    <td class="pt-3 pb-3">02-18-2020</td>
                                    <td class="pt-3 pb-3">PHP 10,000.00</td>
                                    <td class="pt-3 pb-3"><span class="bg-success p-2 rounded text-white">Completed</span></td>

                                    <td>
                                        <a href="{{route('system.transaction.show')}}" class="btn btn-sm btn-light text-white bg-success">
                                            <i data-feather="eye"></i>
                                        </a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- table-responsive -->
                </div>
                <!-- df-example -->
            </div>

        </div>

    </div>
    <!-- container -->
</div>
<!-- content -->
@stop