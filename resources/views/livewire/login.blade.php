<div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center h-100 mt-5">
            <div class="col-md-4 shadow-sm p-5 border bg-primary">
                <form method="post" id="login" wire:submit.prevent='login'>
                    <div class="text-center mt-2 mb-2"><span class="bg-primary p-3">
                        {{-- <img class="lazyloaded" src="https://maryjane-assests.s3.ap-south-1.amazonaws.com/images/logo.png" class="logo" alt="Euler Logo"></span> --}}
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-white"><b>Email</b></label>
                        <input type="email" wire:model="email"  class="form-control" placeholder="Enter Email">
                        @error('email') 
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-white"><b>Password</b></label>
                        <input type="password" wire:model="password" class="form-control" placeholder="Enter Password">
                        @error('password') 
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group mb-2 mt-4">
                        <button type="submit" wire:loading.attr="disabled" class="btn btn-sm btn-white">Login</button>
                    </div>
                </form>
                @if(session()->has('failed'))
                <h5 class="text-center text-danger">{{ session('failed') }}</h5>
                @endif
            </div>
        </div>
    </div>
</div>
