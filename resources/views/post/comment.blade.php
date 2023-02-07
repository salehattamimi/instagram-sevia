<div class="timeline-row">

    <div class="panel panel-flat timeline-content">

        <div class="panel-body">
            <form action="{{ route('comment.store') }}" method="POST">
                {{ csrf_field() }}

                <ul class="media-list chat-list content-group">

                    @foreach ($comment as $r)
                        @if ($r->user->id == Auth::user()->id)
                            <li class="media reversed">
                                <div class="media-body">
                                    <div class="media-content">{{ $r->comment }}</div>
                                    <span
                                        class="media-annotation display-block mt-10">{{ $r->created_at->format('d M Y h i') }}
                                        <a href="#"><i
                                                class="icon-pin-alt position-right text-muted"></i></a></span>
                                </div>

                                <div class="media-right">
                                    <a href="#">
                                        {{ $r->user->username }}
                                    </a>
                                </div>
                            </li>
                        @else
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        {{ $r->user->username }}

                                    </a>
                                </div>

                                <div class="media-body">
                                    <div class="media-content">{{ $r->comment }}
                                    </div>
                                    <span
                                        class="media-annotation display-block mt-10">{{ $r->created_at->format('d M Y h i') }}
                                        <a href="#"><i
                                                class="icon-pin-alt position-right text-muted"></i></a></span>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>

                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                <input type="hidden" value="{{ $id }}" name="post_id">
                <textarea class="form-control content-group" name="comment" id="comment" rows="3" cols="1"
                    placeholder="Enter your message..."></textarea>

                <div class="row">
                    <div class="col-xs-6">
                    </div>

                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i
                                    class="icon-circle-right2"></i></b> Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
