@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Tabs & Accordians</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                <li class="breadcrumb-item active">Tabs & Accordians</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Tabs Default</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <h5 class="section-semi-title">Basic</h5>

                        <div class="tabs tabs-default">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nesciunt praesentium totam
                                    vitae? Consequatur delectus eos esse natus odio. Expedita?
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nulla quia quod sed
                                    voluptatem. Aliquam atque error illum nihil quae.
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium
                                    aliquam delectus doloribus eius maxime nisi quia rerum soluta.
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam amet ea,
                                    excepturi fuga fugiat magnam non ratione sunt tenetur.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <h5 class="section-semi-title">Basic Primary Color</h5>

                        <div class="tabs tabs-primary">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages2" role="tab">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings2" role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nesciunt praesentium totam
                                    vitae? Consequatur delectus eos esse natus odio. Expedita?
                                </div>
                                <div class="tab-pane" id="profile2" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nulla quia quod sed
                                    voluptatem. Aliquam atque error illum nihil quae.
                                </div>
                                <div class="tab-pane" id="messages2" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium
                                    aliquam delectus doloribus eius maxime nisi quia rerum soluta.
                                </div>
                                <div class="tab-pane" id="settings2" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam amet ea,
                                    excepturi fuga fugiat magnam non ratione sunt tenetur.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <h5 class="section-semi-title">Vertical</h5>

                        <div class="tabs tabs-vertical">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nesciunt praesentium totam
                                    vitae? Consequatur delectus eos esse natus odio. Expedita?
                                </div>
                                <div class="tab-pane" id="profile1" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nulla quia quod sed
                                    voluptatem. Aliquam atque error illum nihil quae.
                                </div>
                                <div class="tab-pane" id="messages1" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium
                                    aliquam delectus doloribus eius maxime nisi quia rerum soluta.
                                </div>
                                <div class="tab-pane" id="settings1" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam amet ea,
                                    excepturi fuga fugiat magnam non ratione sunt tenetur.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <h5 class="section-semi-title">Vertical Primary Color</h5>

                        <div class="tabs tabs-primary tabs-vertical">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile3" role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home3" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nesciunt praesentium totam
                                    vitae? Consequatur delectus eos esse natus odio. Expedita?
                                </div>
                                <div class="tab-pane" id="profile3" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nulla quia quod sed
                                    voluptatem. Aliquam atque error illum nihil quae.
                                </div>
                                <div class="tab-pane" id="messages3" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium
                                    aliquam delectus doloribus eius maxime nisi quia rerum soluta.
                                </div>
                                <div class="tab-pane" id="settings3" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam amet ea,
                                    excepturi fuga fugiat magnam non ratione sunt tenetur.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Tabs Simple</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <h5 class="section-semi-title">Basic</h5>

                        <div class="tabs tabs-simple">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home4" role="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile4" role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages4" role="tab">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings4" role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home4" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nesciunt praesentium totam
                                    vitae? Consequatur delectus eos esse natus odio. Expedita?
                                </div>
                                <div class="tab-pane" id="profile4" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nulla quia quod sed
                                    voluptatem. Aliquam atque error illum nihil quae.
                                </div>
                                <div class="tab-pane" id="messages4" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium
                                    aliquam delectus doloribus eius maxime nisi quia rerum soluta.
                                </div>
                                <div class="tab-pane" id="settings4" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam amet ea,
                                    excepturi fuga fugiat magnam non ratione sunt tenetur.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <h5 class="section-semi-title">Vertical</h5>

                        <div class="tabs tabs-simple tabs-vertical">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home5" role="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile5" role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages5" role="tab">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings5" role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home5" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nesciunt praesentium totam
                                    vitae? Consequatur delectus eos esse natus odio. Expedita?
                                </div>
                                <div class="tab-pane" id="profile5" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nulla quia quod sed
                                    voluptatem. Aliquam atque error illum nihil quae.
                                </div>
                                <div class="tab-pane" id="messages5" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium
                                    aliquam delectus doloribus eius maxime nisi quia rerum soluta.
                                </div>
                                <div class="tab-pane" id="settings5" role="tabpanel">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam amet ea,
                                    excepturi fuga fugiat magnam non ratione sunt tenetur.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4>Accordians</h4>
            </div>
            <div class="col-lg-6 mt-2">
                <h5 class="section-semi-title">Accordian Default</h5>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse panel-content in" role="tabpanel"
                             aria-labelledby="headingOne">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <a class="collapsed panel-title" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse panel-content" role="tabpanel"
                             aria-labelledby="headingTwo">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <a class="collapsed panel-title" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse panel-content" role="tabpanel"
                             aria-labelledby="headingThree">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
