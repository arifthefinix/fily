@extends('layouts.admin')

@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Users</h4>
            </div>
            <div class="col-xs-8 text-right m-b-20">
                <a href="{{ route('user.index') }}" class="btn btn-primary rounded pull-right"><i class="fa fa-plus"></i> All Users</a>
            </div>
        </div>
        <div class="row staff-grid-row">
            <div class="m-b-30">
	               <form action="{{ route('user.store') }}" method="post">
                       @csrf
                       <div class="row">
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">Name <span class="text-danger">*</span></label>
                                       <input placeholder="Enter New User Name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
                                       @error('name')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                   </div>
                               </div>
							</div>
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">Email <span class="text-danger">*</span></label>
                                       <input placeholder="Enter New User Email" value="{{ old('email') }}" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required>
                                       @error('email')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror
                                   </div>
                               </div>
							</div>
                           <div class="col-md-12">
                               <div class="col-md-offset-3 col-md-6">
                                   <div class="form-group">
                                       <label class="control-label">Password <span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" readonly value="12345678">
                                   </div>
                               </div>
							</div>

                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary">Create User</button>
                        </div>
                    </form>
			</div>

        </div>
    </div>
@endsection

@section('footer_script')
@if (session('status'))
    <script type="text/javascript">
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
    });

    Toast.fire({
        type: 'success',
        title: '{{session('status')}}'
    })
    </script>
@endif
@endsection
