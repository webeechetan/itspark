<div>
    @if(session()->has('success'))
        <h5 class="text-center text-success">{{ session('success') }}</h5>
    @endif
    <div class="table-responsive mt-4">
        <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email }}</td>
                    <td class="action-btn wspace-no text-center">	
                       <button class="btn btn-primary" wire:click="edit({{$user->id}})" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                       <button class="btn btn-danger" wire:click="destroy({{$user->id}})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div wire:ignore class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" wire:model="name" placeholder="Name">
                <input type="text" class="form-control" wire:model="email" placeholder="Email">
            </div>
            <input type="hidden" wire:model="user_id" >
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button wire:click="update" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
</div>
