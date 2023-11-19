<div class="p-5 m-1 bg-light border rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">What is your name?</h1>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="John Doe" wire:model="name"
                   wire:keydown.enter="enterName">
            <div class="input-group-append">
                <button class="btn btn-outline-danger" type="button"
                        wire:click="enterName">Save
                </button>
            </div>
        </div>
        @error('name')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
</div>
