@extends('layouts.app')
@section('title','Users')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="row align-items-center">
            <div class="col-md-6">
                <a href="{{ route('user.create') }}" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New User</a>
            </div>
            <div class="col-md-6">
                <div class="input-group search-area">
                    <input type="text" class="form-control h-auto" placeholder="search job title here...">
                    <span class="search-btn"><a href="javascript:void(0)" class="btn btn-primary rounded-circle"><i class="flaticon-381-search-2"></i></a></span>
                </div>
            </div>
        </div>
        
        <!-- Table -->
        <livewire:user />
	</div>
</div>
@endsection
@section('scripts')
<script>
   window.addEventListener('updated', event => {
        $("#exampleModal").modal("hide");
    })

    // $(document).addEventListene
</script> 
@endsection           