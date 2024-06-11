@extends('admin.master')
@section('title', 'Order Page')
@section('body')
    <div class="breadcrumb-wrapper">
        <div>
            <h1>All Orders</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>All Orders
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Total Proice</th>
                                    <th>Order Date</th>
                                    <th>Payment type</th>
                                    <th>Shipping address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>#00{{ $loop->iteration }}</td>
                                        <td>{{ $order->customer->name }} <br> <small>{{ $order->customer->mobile }}</small>
                                        </td>
                                        <td>{{ $order->order_total }}</td>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->payment_method }}</td>
                                        <td>{{ $order->delivery_address }}</td>
                                        <td> @if ($order->delivery_status=="Pending")
                                            <span class="badge badge-primary">{{ $order->delivery_status }}</span> 
                                            @elseif ($order->delivery_status=="Processing")
                                            <span class="badge badge-warning">{{ $order->delivery_status }}</span> 
                                            @elseif ($order->delivery_status=="Confirmed")
                                            <span class="badge badge-success">{{ $order->delivery_status }}</span> 
                                            @elseif ($order->delivery_status=="Canceled")
                                            <span class="badge badge-danger">{{ $order->delivery_status }}</span> 
                                        @endif </td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <a href="{{ route('order.detail', ['id' => $order->id]) }}" class="btn btn-outline-success">Info</a>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('order.detail', ['id' => $order->id]) }}">Order
                                                        detail</a>
                                                        <a class="dropdown-item"
                                                        href="{{ route('order.edit', ['id' => $order->id]) }}">Order
                                                        edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('order.invoice', ['id' => $order->id]) }}">Order
                                                        invoice</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
