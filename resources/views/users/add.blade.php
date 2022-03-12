@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center mb-4 flex-wrap">
	<h4 class="fs-20 font-w600  me-auto">New User</h4>
</div>

<div class="row">
    <div class="col-xl-12">
        <livewire:user-form/>
    </div>
</div>
@endsection
            