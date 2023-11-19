<div class="col-12">
    <!-- Modal question-->
    <div wire:ignore.self class="modal fade" id="askme" tabindex="-1" role="dialog" aria-labelledby="askmeLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="askmeLabel">
                        Delete quiz category:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">No</button>
                    <button type="button" wire:click.prevent="deleteCategory()" class="btn btn-primary close-modal">Yes
                        delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal question end-->

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">All categories</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search"
                           wire:model.prevent="search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed text-wrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categorie as $cat)
                    <tr>
                        <td><span class="badge badge-info right">{{ $cat->id }}</span></td>
                        <td>{{ $cat->category }}</td>
                        <td>
                            <div class="btn-group-vertical">
                                <button wire:click="editCategory({{ $cat->id }})" type="button"
                                        class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button wire:click="openAsk({{ $cat->id }})" type="button"
                                        class="btn btn-danger"><i class="fas fa-eraser"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $categorie->links() }}
        </div>
    </div>
</div>
