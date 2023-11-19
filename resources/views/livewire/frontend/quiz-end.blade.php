<div class="p-5 m-1 bg-light border rounded-3">
    <div class="confetti-container mx-auto">
        <div class=" anim-y anim-y-1">
            <div class=" anim-x anim-x-1 col-1 delay"></div>
        </div>
        <div class="anim-y anim-y-1">
            <div class="confetti anim-x anim-x-2 col-2"></div>
        </div>
        <div class="anim-y anim-y-1 delay">
            <div class="confetti anim-x anim-x-3 col-3 delay"></div>
        </div>
        <div class="anim-y anim-y-2">
            <div class="confetti anim-x anim-x-1 col-4"></div>
        </div>
        <div class="anim-y anim-y-2 delay">
            <div class="confetti anim-x anim-x-2 col-5 delay"></div>
        </div>
        <div class="anim-y anim-y-2">
            <div class="confetti anim-x anim-x-3 col-1"></div>
        </div>
        <div class="anim-y anim-y-3">
            <div class="confetti anim-x anim-x-1 col-2 delay"></div>
        </div>
        <div class="anim-y anim-y-3 delay">
            <div class="confetti anim-x anim-x-2 col-3"></div>
        </div>
        <div class="anim-y anim-y-3">
            <div class="confetti anim-x anim-x-3 col-4"></div>
        </div>
        <div class="anim-y anim-y-1">
            <div class="confetti anim-x anim-x-4 col-5"></div>
        </div>
        <div class="anim-y anim-y-2">
            <div class="confetti anim-x anim-x-4 col-1 delay"></div>
        </div>
        <div class="anim-y anim-y-3">
            <div class="confetti anim-x anim-x-4 col-2"></div>
        </div>
        <div class="anim-y anim-y-1  delay">
            <div class="confetti anim-x col-3"></div>
        </div>
        <div class="anim-y anim-y-2">
            <div class="confetti anim-x col-4"></div>
        </div>
        <div class="anim-y anim-y-3">
            <div class="confetti anim-x col-5"></div>
        </div>
    </div>
    <div class="container-fluid py-5 text-center">
        <h1 class="display-5 fw-bold">Congratulations {{ session('name') }}!</h1>
        <h2 class="display-6 fw-bold ">You have {{ session('score') }}
            points achieved.</h2>
        <h3><a href="/highscore">Take a look at the highscore list!</a></h3>
        <br>
        <button type="button" class="btn btn-outline-danger float-center" wire:click="resetGame">
            restart Quiz
        </button>
    </div>
</div>
