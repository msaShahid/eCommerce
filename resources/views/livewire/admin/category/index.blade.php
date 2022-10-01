

<div class="row">

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Category Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCategory">
                <div class="modal-body">
                    <h6>Are sure you want delete this data?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <div class="col-md-12">

        @if(session('message'))
        <div class="alert alert-success col-md-6 alert-dismissible fade show" role="alert">
            <strong>Success !</strong> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- <div class="alert alert-success">{{ session('message') }}</div> -->
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Category
                
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Add
                        Category</a>
                        <input type="search" wire:model="search" class="form-control border border-2 rounded-pill  float-end mx-2" placeholder="Type here to search" style="width:250px">
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)

                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/category/'.$category->id.'/edit') }}"
                                    class="btn btn-success btn-sm">Edit</a>
                                <a href="#" wire:click="deleteCategory({{ $category->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2 float-end">
                    {{ $categories->links(); }}
                </div>

            </div>
        </div>
    </div>
</div>

@push('script')

<script>
        window.addEventListener('close-modal', event => {
            
            $('#deleteModal').modal('hide');
        });
</script>

@endpush