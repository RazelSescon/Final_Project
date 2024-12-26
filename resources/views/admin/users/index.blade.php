@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> List of Users</h4>
      <div class="card">
                <h5 class="card-header">Users</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    	@if(isset($users))
                    		@foreach($users as $user)
			 					<tr>
			                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->name }}</strong></td>
			                        <td>{{ $user->email }}</td>
			                        <td>
			                          <div class="dropdown">
			                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
			                              <i class="bx bx-dots-vertical-rounded"></i>
			                            </button>
			                            <div class="dropdown-menu">
			                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
			                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
			                            </div>
			                          </div>
			                        </td>
			                    </tr>
                    		@endforeach
                    	@endif
                     
                    </tbody>
                  </table>
                </div>
              </div>
    </div>
</div>
@endsection