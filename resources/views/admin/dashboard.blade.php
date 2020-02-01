@extends('backend.layouts.app')

@section('title', 'Dashboard')

@push('styles')

@endpush


@section('content')

    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">TOTAL PROPERTY</div>
                    <div class="number count-to" data-from="0" data-to="{{ $propertycount }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">help</i>
                </div>
                <div class="content">
                    <div class="text">TOTAL POST</div>
                    <div class="number count-to" data-from="0" data-to="{{ $postcount }}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->

    <div class="row clearfix">
        <!-- RECENT PROPERTIES -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2>RECENT PROPERTIES</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <!-- <th>City</th> -->
                                    <th><i class="material-icons small">star</i></th>
                                    <th>Manager</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($properties as $key => $property)
                                <tr>
                                    <td>{{ ++$key }}.</td>
                                    <td>
                                        <span title="{{ $property->title }}">
                                            {{ str_limit($property->title, 10) }}
                                        </span>
                                    </td>
                                    <td>Rp {{ number_format($property->price,2) }}</td>
                                    <!-- <td>{{ $property->city }}</td> -->
                                    <td>
                                        @if($property->featured == 1)
                                            <span class="label bg-green">F</span>
                                        @endif
                                    </td>
                                    <td>{{ strtok($property->user->name, " ")}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# RECENT PROPERTIES -->

        <!-- RECENT POSTS -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2>RECENT POSTS</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th><i class="material-icons small">comment</i></th>
                                    <th>Author</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $key => $post)
                                <tr>
                                    <td>{{ ++$key }}.</td>
                                    <td>
                                        <span title="{{ $post->title }}">
                                            {{ str_limit($post->title, 30) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="label bg-green">{{ $post->comments_count }}</span>
                                    </td>
                                    <td>{{ strtok($post->user->name, " ")}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# RECENT POSTS -->
    </div>

@endsection

@push('scripts')

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('backend/js/pages/index.js') }}"></script>

@endpush
