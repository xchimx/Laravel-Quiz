<div class="p-5 m-1 bg-light border rounded-3">
    <div class="container-fluid py-5">
        <h3>Hello {{ session('name') }}, now the last settings </h3>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="level">Number of rounds</label>
                    <select class="form-control" wire:model="rounds" id="runden">
                        <option>Select...</option>
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                    </select>
                    @error('rounds')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="level">Difficulty</label>
                    <select class="form-control" wire:model="level" id="level">
                        <option>Select...</option>
                        <option value="all">All</option>
                        <option value="easy">Easy</option>
                        <option value="middle">Middle</option>
                        <option value="hard">Hard</option>
                    </select>
                    @error('level')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="group">Subject area</label>
                    <label for="category"></label><select class="form-control" wire:model="category" id="category">
                        <option>Select...</option>
                        <option value="0">All</option>
                        @foreach ($categorie as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                @if (session()->has('message'))
                    <br>
                    <div class="mt-2 alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-outline-danger btn-lg"
                            wire:click="enterDetails">Save and start quiz
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
