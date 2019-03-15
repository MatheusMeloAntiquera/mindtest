<div class="post">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=1" class="card-img"
                    alt>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">
                        {{ $post->title }}
                        <span class="buttons-right-top">
                            <a href="#" role="button" class="btn btn-warning"><i class="fa fa-pencil-square-o fa-lg"></i>Edit</a>
                            <a href="#" role="button" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
                        </span>
                    </h4>
                    <p class="card-text">{{ $post->text }}</p>
                    <p class="card-text">
                        {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                        <small class="text-muted">{{ $post->created_at }}</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
