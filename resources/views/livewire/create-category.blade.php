<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create/Edit Category</h3>
        </div>

        <form wire:submit.prevent="addCategory">
            <div class="card-body">
                <div class="form-group">
                    <label for="question">Category</label>
                    <input type="text" class="form-control" id="question" wire:model="category"
                           placeholder="Enter Category">
                    @error('category')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
