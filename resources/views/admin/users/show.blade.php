@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/admin/js/users/users.js"></script>
@stop

@section('content')
    <div class="main-content page-profile">
        <div class="page-header">
            <h3 class="page-title">User Profile</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
                <li class="breadcrumb-item active">Jane Doe</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tabs tabs-default">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#friends" role="tab">Friends</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="avatar-container">
                                                <img src="/assets/admin/img/avatars/avatar-lg.png" alt="Admin Avatar" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4>Jane Doe</h4>
                                            <p class="detail-row"><i class="icon-fa icon-fa-map-marker"></i> New York , United States</p>
                                            <p class="detail-row"><i class="icon-fa icon-fa-birthday-cake"></i> September 7, 1991</p>
                                            <p class="detail-row"><i class="icon-fa icon-fa-wrench"></i> UI Designer / Pro Model</p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12">
                                            <h3 class="section-semi-title">Recent Activity</h3>
                                            <ul class="media-list activity-list">
                                                <li class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object img-thumbnail" src="/assets/admin/img/avatars/avatar1.png" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Shane White <span>just posted an update</span></h4>
                                                        <small>Today at 3.50pm</small>
                                                        <p class="mt-2">"Hello Everyone! Its been a fun morning!"</p>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object img-thumbnail" src="/assets/admin/img/avatars/avatar2.png" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Adam David <span>just became friends with</span> Shane White </h4>
                                                        <small>Yesterday at 9pm</small>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <ul class="media-list activity-list">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-thumbnail" src="/assets/admin/img/avatars/avatar1.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Adam David <span>sent a message</span></h4>
                                                <small>Today at 3.50pm</small>
                                                <p class="mt-2">"When you have children, you always have family. They will always be your priority, your responsibility.
                                                    And a man, a man provides. And he does it even when he's not appreciated or respected or even loved. He simply bears up and he does it. Because he's a man."</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-thumbnail" src="/assets/admin/img/avatars/avatar2.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Shane White <span>sent a message</span></h4>
                                                <small>Yesterday at 9pm</small>
                                                <p class="mt-2">
                                                    “Hey! How you doin?”
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="friends" role="tabpanel">
                                    <ul class="media-list friends-list">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="/assets/admin/img/avatars/avatar1.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Shane White</h4>
                                                <small>2000 friends</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="/assets/admin/img/avatars/avatar2.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Adam David</h4>
                                                <small>200 friends</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="/assets/admin/img/avatars/avatar1.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Shane White</h4>
                                                <small>2000 friends</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="/assets/admin/img/avatars/avatar2.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Adam David</h4>
                                                <small>200 friends</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="/assets/admin/img/avatars/avatar1.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Shane White</h4>
                                                <small>2000 friends</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="/assets/admin/img/avatars/avatar2.png" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Adam David</h4>
                                                <small>200 friends</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
