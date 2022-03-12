<div>
    <form class="form-horizontal" wire:submit.prevent="save">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Username<span class="text-danger scale5 ms-2">*</span></label>
                        <input type="text" class="form-control solid" wire:model="name" placeholder="Name" aria-label="name">
                        @error('name') 
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Email<span class="text-danger scale5 ms-2">*</span></label>
                        <input type="email" class="form-control solid" wire:model="email" placeholder="Email" aria-label="name">
                        @error('email') 
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="col-xl-6  col-md-6 mb-4">
                        <label  class="form-label font-w600">Password<span class="text-danger scale5 ms-2">*</span></label>
                        <input type="password" class="form-control solid" wire:model="password" placeholder="Password" aria-label="name">
                        @error('password') 
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>  
                </div>
                <div class="card-footer text-end">
                    <div>
                        <a href="javascript:void(0);" class="btn btn-primary me-3">Close</a>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
