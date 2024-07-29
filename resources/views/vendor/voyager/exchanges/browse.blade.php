@php
    $edit = false;
    $add  = true;
@endphp
@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('content')

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                    <span>Session</span>
                    <div class="d-flex align-items-center my-2">
                        <h3 class="mb-0 me-2">{{ $dataTypeContent->where('user_id', Auth::user()->id)->count() }}</h3>
                    </div>
                    <p class="mb-0">Total {{ $dataType->getTranslatedAttribute('display_name_plural') }}</p>
                    </div>
                    <div class="avatar">
                    <span class="avatar-initial rounded bg-label-primary">
                        <i class="ti ti-user ti-sm"></i>
                    </span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        {{-- Search  --}}
        <div class="card-header border-bottom">
            <form method="get" class="form-search">
                <h5 class="row me-2 border-0 px-3 py-2">Search Filter</h5>
                <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                    <div class="col user_role">
                        <select id="search_key" name="key" class="form-select text-capitalize">
                            @foreach($searchNames as $key => $name)
                                <option value="{{ $key }}" @if($search->key == $key || (empty($search->key) && $key == $defaultSearchKey)) selected @endif>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col user_plan">
                        <select id="filter" name="filter" class="form-select text-capitalize">
                            {{-- <option value="contains" @if($search->filter == "contains") selected @endif>{{ __('voyager::generic.contains') }}</option> --}}
                            <option value="equals" @if($search->filter == "equals") selected @endif>=</option>
                            <option value="more" @if($search->filter == "more") selected @endif>></option>
                            <option value="less" @if($search->filter == "less") selected @endif><</option>
                        </select>
                    </div>
                    <div class="col user_status">
                        <input type="text" class="form-control" placeholder="{{ __('voyager::generic.search') }}" name="s" value="{{ $search->value }}">
                    </div>
                    <div class="col ">
                        <button class="btn btn-secondary add-new btn-primary waves-effect waves-light" type="submit" >
                            <span><i class="ti ti-search me-0 me-sm-1 ti-xs"></i></span>
                        </button>  
                        <a class="btn btn-secondary add-new btn-primary waves-effect waves-light" href="{{ route('frontend.echange') }}" target="_blanck">
                            <span>
                                <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                                <span class="d-none d-sm-inline-block">Nouvelle</span>
                            </span>
                        </a>
                    </div>

                    
                </div>
            </form>
        </div>

        @php
            $key = \Request::input('key');
            $filter = \Request::input('filter');
            $s = \Request::input('s');
        @endphp

        @livewire('admin.echanges-table', ['key' => $key, 'filter' => $filter, 's' => $s ])
        
 
    </div>


    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button> --}}
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-label-danger waves-effect pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-top" tabindex="-1" id="deleteConvas" aria-labelledby="deleteConvasLabel">
        <div class="offcanvas-header">
            <h5 id="deleteConvasLabel" class="offcanvas-title">
                {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }} ?
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form  id="delete_form" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <p>{{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }} ?</p><br>
                <button type="submit"  class="btn btn-primary me-2 delete-confirm">Continue</button>
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </form>
        </div>
    </div>

    {{-- Add New resource   --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header">
        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add new {{ $dataType->getTranslatedAttribute('display_name_plural') }}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <form role="form" class="add-new-user pt-0 form-edit-add" method="POST" enctype="multipart/form-data"
                action="{{  route('voyager.'.$dataType->slug.'.store') }}" >

            <!-- CSRF TOKEN -->
            {{ csrf_field() }}

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @php
                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
            @endphp
                @foreach($dataTypeRows as $row)
                    <!-- GET THE DISPLAY OPTIONS -->
                    @php
                        // $display_options = $row->details->display ?? NULL;
                        // if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
                        //     $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
                        // }
                    @endphp
                    @if (isset($row->details->legend) && isset($row->details->legend->text))
                        <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
                    @endif

                    <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                        {{ $row->slugify }}
                        <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                        @include('voyager::multilingual.input-hidden-bread-edit-add')
                        @if ($add && isset($row->details->view_add))
                            @include($row->details->view_add, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'view' => 'add', 'options' => $row->details])
                        @elseif ($edit && isset($row->details->view_edit))
                            @include($row->details->view_edit, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'view' => 'edit', 'options' => $row->details])
                        @elseif (isset($row->details->view))
                            @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                        @elseif ($row->type == 'relationship')
                            @include('voyager::formfields.relationship', ['options' => $row->details])
                        @else
                            @if ( $row->type == 'color' )
                                <input type="color" class="form-control" name="{{ $row->field }}"  value="#fff">                     
                            @else
                                {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                            @endif
                        @endif

                        @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                            {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                        @endforeach
                        @if ($errors->has($row->field))
                            @foreach ($errors->get($row->field) as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                    Save {{ $dataType->getTranslatedAttribute('display_name_plural') }}
                </button>
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>


        </form>
        </div>
    </div>
@stop

@section('css')
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
    <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@endif
@stop

@section('javascript')
    <!-- DataTables -->
    @if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif
    <script>
        $(document).ready(function () {
            @if (!$dataType->server_side)
                var table = $('#dataTable').DataTable({!! json_encode(
                    array_merge([
                        "order" => $orderColumn,
                        "language" => __('voyager::datatable'),
                        "columnDefs" => [
                            ['targets' => 'dt-not-orderable', 'searchable' =>  false, 'orderable' => false],
                        ],
                    ],
                    config('voyager.dashboard.data_tables', []))
                , true) !!});
            @else
                $('#search-input select').select2({
                    minimumResultsForSearch: Infinity
                });
            @endif

            @if ($isModelTranslatable)
                $('.side-body').multilingual();
                //Reinitialise the multilingual features when they change tab
                $('#dataTable').on('draw.dt', function(){
                    $('.side-body').data('multilingual').init();
                })
            @endif
            $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });


        var deleteFormAction;
        $('td').on('click', '.deleteResourceBtn', function (e) {
            alert();
            $('#delete_form')[0].action = '{{ route('voyager.'.$dataType->slug.'.destroy', '__id') }}'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        @if($usesSoftDeletes)
            @php
                $params = [
                    's' => $search->value,
                    'filter' => $search->filter,
                    'key' => $search->key,
                    'order_by' => $orderBy,
                    'sort_order' => $sortOrder,
                ];
            @endphp
            $(function() {
                $('#show_soft_deletes').change(function() {
                    if ($(this).prop('checked')) {
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 1]), true)) }}"></a>');
                    }else{
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 0]), true)) }}"></a>');
                    }

                    $('#redir')[0].click();
                })
            })
        @endif
        $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>
@stop
