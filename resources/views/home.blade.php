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

                    </div>
                    <!-- /image grid -->


                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>

    </div>
    <!-- /form horizontal -->
@endsection
