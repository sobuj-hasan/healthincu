@extends('account.layouts.app',['title' => 'Contract'])



@section('content')
    <!--start content-->
    <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Contract</h5></div>
        <div class="ms-auto">
            <a href="{{route('admin.product.create')}}" class="btn btn-primary custom-head-link"> <i class="lni lni-circle-plus custom-head-link"></i> Create Product</a>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                <tr>
                    <th>#SL</th>
                    <th>Name</th>


                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>
                        Contract/Question
                    </th>

                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($contract as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->subject}}</td>
                    <td>{{$item->message}}</td>

                    <td>

                        @if ($item->askquestion == 0)
                            <span class="btn btn-primary status-btn">Contract</span>
                        @elseif($item->askquestion == 1)
                        <span class="btn btn-warning status-btn">Message</span>
                        @endif



                    </td>








                    <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">



                        <form id="delete-form" action="{{route('admin.contract.destroy',$item->id)}}" method="GET">
                            @csrf

                            <button type="button" class="delete-admin" onClick="deleteItem()">
                                <span  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
                            </button>
                        </form>
                    </div>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>
            </div>
        </div>
        </div>


    </main>
<!--end page main-->
@endsection
