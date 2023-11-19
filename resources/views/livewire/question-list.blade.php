<div class="col-12">
    <!-- Modal question-->
    <div wire:ignore.self class="modal fade" id="askme" tabindex="-1" role="dialog" aria-labelledby="askmeLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="askmeLabel">
                        Delete quiz question:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">No</button>
                    <button type="button" wire:click.prevent="deleteQuestion()" class="btn btn-primary close-modal">Yes
                        delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal question end-->

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">All questions</h3>
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
                    <th>Question</th>
                    <th>Difficulty</th>
                    <th>Subject area</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($quiz as $item)
                    <tr>
                        <td><span class="badge badge-info right">{{ $item->id }}</span></td>
                        <td>{{ Str::limit($item->question, 200) }}</td>
                        <td>{{ $item->level }}</td>
                        <td>{{ $item->categorie['category'] ?? 'kA' }}</td>
                        <td>
                            <div class="btn-group-vertical">
                                <button wire:click="editQuestion({{ $item->id }})" type="button"
                                        class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button wire:click="openAsk({{ $item->id }})" type="button"
                                        class="btn btn-danger"><i class="fas fa-eraser"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $quiz->links() }}
        </div>
    </div>
</div>
