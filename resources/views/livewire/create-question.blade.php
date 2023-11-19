<div class="col-md-12">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create/edit question</h3>
        </div>


        <form wire:submit.prevent="addQuestion">
            <div class="card-body">
                <div class="form-group">
                    <label for="question">Question</label>
                    <input type="text" class="form-control" id="question" wire:model="question"
                           placeholder="Enter question">
                    @error('question')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="answer">Answers</label>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="a" wire:model="a"
                                   placeholder="Answer A">
                            @error('a')
                            <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="b" wire:model="b"
                                   placeholder="Answer B">
                            @error('b')
                            <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="c" wire:model="c"
                                   placeholder="Answer C">
                            @error('c')
                            <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="d" wire:model="d"
                                   placeholder="Answer D">
                            @error('d')
                            <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answer">Correct answer</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" value="a" id="correctA" name="correct" wire:model="correct"
                               class="custom-control-input">
                        <label class="custom-control-label" for="correctA">Answer A</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" value="b" id="correctB" name="correct" wire:model="correct"
                               class="custom-control-input">
                        <label class="custom-control-label" for="correctB">Answer B</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" value="c" id="correctC" name="correct" wire:model="correct"
                               class="custom-control-input">
                        <label class="custom-control-label" for="correctC">Answer C</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" value="d" id="correctD" name="correct" wire:model="correct"
                               class="custom-control-input">
                        <label class="custom-control-label" for="correctD">Answer D</label>
                    </div>
                    @error('correct')
                    <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label for="level">Difficulty</label>
                            <select class="form-control" wire:model="level" id="level">
                                <option>Select...</option>
                                <option value="easy">Easy</option>
                                <option value="middle">Middle</option>
                                <option value="hard">Hard</option>
                            </select>
                            @error('level')
                            <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="group">Subject area</label>
                            <select class="form-control" wire:model="categorie_id" id="categorie_id">
                                <option>Select...</option>
                                @foreach ($categorie as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                                @endforeach
                            </select>
                            @error('categorie_id')
                            <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

</div>
