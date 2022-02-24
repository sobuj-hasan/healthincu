@extends('account.layouts.app',['title' => 'Admin Users'])


@section('content')
               <!--start content-->
               <main class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
                  <div class="pe-3"><h5 class="text-white m-0">Admin Users</h5></div>
                  <div class="ms-auto">
                        {{-- <a href="#" class="btn btn-primary"> <i class="lni lni-circle-plus custom-head-link"></i> Create User</a> --}}
                  </div>
                </div>
                <!--end breadcrumb-->
    
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        
                          <form class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                            <input class="form-control ps-5" type="text" placeholder="search">
                          </form>
                      </div>
                      <div class="table-responsive mt-3">
                        <table class="table align-middle">
                          <thead class="table-secondary">
                            <tr>
                             <th>#</th>
                             <th>Username</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Phone</th>
                             <th>Country</th>
                             <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                              @forelse ($users as $item)
                            <tr>
                             <td>{{$loop->iteration}}</td>
                              <td>{{$item->username}}</td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->phone}}</td>
                              <td>{{$item->country}}</td>
                              <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                  <a href="{{route('admin.user.show',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                  <a href="{{route('admin.user.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                  <a href="{{route('admin.user.change.password',$item->id)}}" class="text-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Change Password" aria-label="Change Password"><i class="lni lni-key"></i></a>

                                  <form action="{{route('admin.user.destroy',$item->id)}}" method="POST" id="delete-form">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="delete-admin" onclick="deleteItem()">
                                      <span  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></span>
                                    </button>
                                  </form>
                                      
                                </div>
                              </td>
                            </tr>
                            @empty
                              <h3 class="text-danger">User Not Found</h3>
                            @endforelse

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
    
              </main>
           <!--end page main-->
@endsection