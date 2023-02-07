@extends('layout')
@section('tempat_content')
    @include('include.function')
    <div class="row">

        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">
                    <a class="create-post" onclick="create_post('{{ csrf_token() }}',  '#ModalBiruSm')" target="_blank">
                        <i class="glyphicon glyphicon-plus my-float"></i>
                    </a>

                    <div class="row">
                        @foreach ($post as $r)
                            @php
                                $count_like = App\Models\LikePost::where('post_id', $r->id)->count();
                                $count_comment = App\Models\Comment::where('post_id', $r->id)->count();
                                
                            @endphp
                            <div class="col-lg-6">
                                <div class="panel panel-flat timeline-content">
                                    <div class="panel-heading">
                                        <h6 class="panel-title"></h6>
                                    </div>

                                    <div class="panel-body">
                                        <a href="#" class="display-block content-group">
                                            <img src="{{ asset($r->file_ig) }}" style="width:300px;height:300px"
                                                class="img-responsive content-group" alt="">
                                        </a>

                                        <h6 class="content-group">
                                            <i class="icon-comment-discussion position-left"></i>
                                            <a href="#">{{ $r->user->name }}</a>
                                        </h6>

                                        <blockquote>
                                            <p>{{ $r->caption }}</p>
                                            {{-- <footer>Jason, <cite title="Source Title">10:39 am</cite></footer> --}}
                                        </blockquote>
                                    </div>

                                    <div class="panel-footer panel-footer-transparent">
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-condensed heading-text">
                                                <li><a href="#" class="text-default"
                                                        onclick="like_post('{{ csrf_token() }}', '{{ $r->id }}')"><i
                                                            class="icon-thumbs-up2 position-left"></i>
                                                        {{ $count_like }}</a></li>
                                                <li><a href="#" class="text-default"
                                                        onclick="comment_post('{{ csrf_token() }}', '{{ $r->id }}', '#ModalUngu')"><i
                                                            class="icon-comment-discussion position-left"></i>
                                                        {{ $count_comment }}</a></li>
                                            </ul>

                                            <span class="heading-btn pull-right">
                                                <a href="#"
                                                    onclick="comment_post('{{ csrf_token() }}', '{{ $r->id }}', '#ModalUngu')"
                                                    class="btn btn-link">Comment <i
                                                        class="icon-arrow-right14 position-right"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                    {{-- <div class="row">
                        @foreach ($post as $r)
                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="{{ asset($r->file_ig) }}" style="padding:50px" alt="">
                                    </div>

                                    <div class="caption">
                                        <h6 class="no-margin-top text-semibold"><a href="#"
                                                class="text-default">{{ $r->user->name }}</a> <a style="color:black"
                                                href="#" class="text-muted pull-right">{{ $r->like }} &nbsp;<i
                                                    class="glyphicon glyphicon-thumbs-up pull-right"></i></a>
                                        </h6>
                                        {{ $r->caption }}
                                    </div>
                                    <div style="text-align: right;padding:10px"><button
                                            onclick="comment_post('{{ csrf_token() }}', '{{ $r->id }}', '#ModalUngu')"
                                            class="btn bg-purple btn-xs"><i class="icon-comment"></i>&nbsp;Comment</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div> --}}
                    <!-- /image grid -->


                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>

    </div>
    <!-- /form horizontal -->
@endsection
