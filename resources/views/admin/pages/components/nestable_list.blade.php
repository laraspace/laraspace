@extends('admin.layouts.layout-basic')

@section('scripts')

    <script>

        $(document).ready(function()
        {

            var updateOutput = function(e)
            {
                var list   = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            };

            // activate Nestable for list 1
            $('#nestable').nestable({
                group: 1
            })
                .on('change', updateOutput);

            // activate Nestable for list 2
            $('#nestable2').nestable({
                group: 1
            })
                .on('change', updateOutput);

            // output initial serialised data
            updateOutput($('#nestable').data('output', $('#nestable-output')));
            updateOutput($('#nestable2').data('output', $('#nestable2-output')));

            $('#nestable-menu').on('click', function(e)
            {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });

            $('#nestable3').nestable();

        });
    </script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Nestable Lists</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.nestable_list')}}">Components</a></li>
                <li class="breadcrumb-item active">Nestable List</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
             <div class="card">
                <div class="card-header">
                    <h6>Nestable List</h6>
                </div>
                 <div class="card-block">
                     <menu id="nestable-menu">
                         <button type="button" data-action="expand-all">Expand All</button>
                         <button type="button" data-action="collapse-all">Collapse All</button>
                     </menu>

                     <div class="cf nestable-lists">

                         <div class="dd" id="nestable">
                             <ol class="dd-list">
                                 <li class="dd-item" data-id="1">
                                     <div class="dd-handle">Item 1</div>
                                 </li>
                                 <li class="dd-item" data-id="2">
                                     <div class="dd-handle">Item 2</div>
                                     <ol class="dd-list">
                                         <li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
                                         <li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
                                         <li class="dd-item" data-id="5">
                                             <div class="dd-handle">Item 5</div>
                                             <ol class="dd-list">
                                                 <li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
                                                 <li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
                                                 <li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
                                             </ol>
                                         </li>
                                         <li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
                                         <li class="dd-item" data-id="10"><div class="dd-handle">Item 10</div></li>
                                     </ol>
                                 </li>
                                 <li class="dd-item" data-id="11">
                                     <div class="dd-handle">Item 11</div>
                                 </li>
                                 <li class="dd-item" data-id="12">
                                     <div class="dd-handle">Item 12</div>
                                 </li>
                             </ol>
                         </div>

                         <div class="dd" id="nestable2">
                             <ol class="dd-list">
                                 <li class="dd-item" data-id="13">
                                     <div class="dd-handle">Item 13</div>
                                 </li>
                                 <li class="dd-item" data-id="14">
                                     <div class="dd-handle">Item 14</div>
                                 </li>
                                 <li class="dd-item" data-id="15">
                                     <div class="dd-handle">Item 15</div>
                                     <ol class="dd-list">
                                         <li class="dd-item" data-id="16"><div class="dd-handle">Item 16</div></li>
                                         <li class="dd-item" data-id="17"><div class="dd-handle">Item 17</div></li>
                                         <li class="dd-item" data-id="18"><div class="dd-handle">Item 18</div></li>
                                     </ol>
                                 </li>
                             </ol>
                         </div>

                     </div>

                     <p><strong>Serialised Output (per list)</strong></p>

                     <textarea id="nestable-output"></textarea>
                     <textarea id="nestable2-output"></textarea>

                     <p>&nbsp;</p>

                     <div class="cf nestable-lists">

                         <p><strong>Draggable Handles</strong></p>

                         <p>If you're clever with your CSS and markup this can be achieved without any JavaScript changes.</p>

                         <div class="dd" id="nestable3">
                             <ol class="dd-list">
                                 <li class="dd-item dd3-item" data-id="13">
                                     <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 13</div>
                                 </li>
                                 <li class="dd-item dd3-item" data-id="14">
                                     <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 14</div>
                                 </li>
                                 <li class="dd-item dd3-item" data-id="15">
                                     <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 15</div>
                                     <ol class="dd-list">
                                         <li class="dd-item dd3-item" data-id="16">
                                             <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 16</div>
                                         </li>
                                         <li class="dd-item dd3-item" data-id="17">
                                             <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 17</div>
                                         </li>
                                         <li class="dd-item dd3-item" data-id="18">
                                             <div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 18</div>
                                         </li>
                                     </ol>
                                 </li>
                             </ol>
                         </div>

                     </div>
                 </div>
             </div>
            </div>
        </div>
    </div>
@stop
