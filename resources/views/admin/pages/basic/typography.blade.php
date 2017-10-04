@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Typography</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                <li class="breadcrumb-item active">Typography</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Headings</h6>
                    </div>
                    <div class="card-body buttons-demo">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Default Headings</h5>

                                <h1>h1. Bootstrap heading</h1>
                                <h2>h2. Bootstrap heading</h2>
                                <h3>h3. Bootstrap heading</h3>
                                <h4>h4. Bootstrap heading</h4>
                                <h5>h5. Bootstrap heading</h5>
                                <h6>h6. Bootstrap heading</h6>

                                <h3>
                                    Fancy display heading
                                    <small class="text-muted">With faded secondary text</small>
                                </h3>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Display Headings</h5>

                                <h1 class="display-1">Display 1</h1>

                                <h1 class="display-2">Display 2</h1>

                                <h1 class="display-3">Display 3</h1>

                                <h1 class="display-4">Display 4</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Other</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Paragraph</h5>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis eum libero
                                    minima minus obcaecati quae sit soluta tempora, totam.</p>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Paragraph Lead</h5>

                                <p class="lead">
                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
                                    non commodo luctus.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Inline Text Elements</h5>

                                <p>You can use the mark tag to
                                    <mark>highlight</mark>
                                    text.
                                </p>
                                <p>
                                    <del>This line of text is meant to be treated as deleted text.</del>
                                </p>
                                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>

                                <p>
                                    <ins>This line of text is meant to be treated as an addition to the document.</ins>
                                </p>
                                <p><u>This line of text will render as underlined</u></p>

                                <p>
                                    <small>This line of text is meant to be treated as fine print.</small>
                                </p>
                                <p><strong>This line rendered as bold text.</strong></p>

                                <p><em>This line rendered as italicized text.</em></p>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Block Quotes</h5>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                        posuere erat a ante.</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Unordered List</h5>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Ordered List</h5>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ol>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Unstyled List</h5>
                                <ul class="list-unstyled">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="section-semi-title">Inline List</h5>
                                <ul class="list-inline">
                                    <li class="list-inline-item">Lorem ipsum</li>
                                    <li class="list-inline-item">Phasellus iaculis</li>
                                    <li class="list-inline-item">Nulla volutpat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
