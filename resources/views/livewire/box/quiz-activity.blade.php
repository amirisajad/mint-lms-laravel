<div>
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        {{ __("Quiz")}} {{ $box }}
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <a wire:click="show('quiz')" class="btn btn-warning btn-sm" >Attach</a>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-question-circle fa-2x text-warning"></i>
                </div>
            </div>
        </div>
    </div>
</div>