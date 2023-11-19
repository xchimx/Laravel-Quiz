<div class="row">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Place</th>
            <th scope="col">Name</th>
            <th scope="col">Level</th>
            <th scope="col">Category</th>
            <th scope="col">Points</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($highscore as $score)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $score['name'] }}</td>
                <td>{{ $score['level'] }}</td>
                <td>{{ $score->categorie['category'] ?? 'all' }}</td>
                <td>{{ $score['score'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-outline-danger float-center" wire:click="resetGame">restart
        Quiz
    </button>
</div>
