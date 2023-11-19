<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $quiz->count() }}</h3>
                <p>Questions</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="/chimadmin/questions" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $categorie->count() }}</h3>
                <p>Category</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/chimadmin/categories" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $user->count() }}</h3>
                <p>User</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More infos <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>3</h3>
                <p>Difficulty</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More infos <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Number of questions in categories</h4>
            </div>
            <div class="card-body">
                @foreach ($categorie as $cat)
                    <div class="info-box mb-3 bg-info">
                        <span class="info-box-icon"><i class="fas fa-fw fa-folder"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ $cat->category }}</span>
                            <span class="info-box-number">{{ $cat->question->count() }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Number of questions in difficulty level</h4>
            </div>
            <div class="card-body">
                <div class="info-box mb-3 bg-success">
                    <span class="info-box-icon"><i class="fas fa-angle-right"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Easy</span>
                        <span class="info-box-number">{{ $quiz->where('level', 'easy')->count() }}</span>
                    </div>
                </div>

                <div class="info-box mb-3 bg-warning">
                    <span class="info-box-icon"><i class="fas fa-angle-up"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Middle</span>
                        <span class="info-box-number">{{ $quiz->where('level', 'middle')->count() }}</span>
                    </div>
                </div>

                <div class="info-box mb-3 bg-danger">
                    <span class="info-box-icon"><i class="fas fa-angle-double-up"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Hard</span>
                        <span class="info-box-number">{{ $quiz->where('level', 'hard')->count() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
