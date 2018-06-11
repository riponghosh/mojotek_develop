@extends('backend.template')

@section('title', 'Dashboard')


@section('content')

	<h3 class="heading_b uk-margin-bottom">All</h3>
    @if(count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="uk-alert uk-alert-danger" data-uk-alert>
                <a href="#" class="uk-alert-close uk-close"></a>{{ $error }}
            </div>
        @endforeach
    @endif
    @if(session()->has('flash_notification.message'))
        <div class="uk-alert uk-alert-{{ session('flash_notification.level') }}" data-uk-alert>
                <a href="#" class="uk-alert-close uk-close"></a>{{ session('flash_notification.message') }}
        </div>
    @endif
    <div class="md-card">
        <div class="md-card-content">
        	<!-- code for print custom -->
        	<div class="uk-margin-bottom">
	            <a href="#" class="md-btn uk-margin-right" id="printTable">Print Table</a>
	            <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
	                <button class="md-btn">Columns <i class="uk-icon-caret-down"></i></button>
	                <div class="uk-dropdown">
	                    <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>
	                </div>
	            </div>
	        </div>
            <div class="uk-overflow-container uk-margin-bottom">
                <div style="padding: 5px;margin-bottom: 10px;" class="dt_colVis_buttons"></div>
                <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
                    <thead>
                        <tr>
                            <th data-priority="critical">No</th>
                            <th data-priority="critical">Name</th>
                            <th data-priority="1">Description</th>
                            <th data-priority="2">Updated by</th>
                            <th data-priority="2">Updated at</th>
                            <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th class="uk-text-center">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1 ?>
                    @foreach($all_data as $data_show)
                        <tr>
                            <td><?php echo $i ?></td>
                            <?php $i+=1?>
                            <td>
                                {{$data_show->name}}
                            </td>
                            <td>{{$data_show->description}}</td>
                            <td>{{$data_show->created_at}}</td>
                            <td>{{$data_show->updated_at}}</td>
                            <td class="uk-text-center">
                                <a href="#" class="batch-edit" data-uk-modal="{target:'#view_modal_{{$data_show->id}}'}"><i class="md-icon material-icons uk-margin-right">&#xE8F4;</i></a>
                                <a href="#" class="batch-edit" data-uk-modal="{target:'#edit_modal_{{$data_show->id}}'}"><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
                                <a class="delete_btn"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="md-icon material-icons">&#xE872;</i></a>
                                <input class="course_id" type="hidden" value="{{$data_show->id}}">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Add Batch plus sign -->

            <div class="md-fab-wrapper Batch-create">
                <a ng-click="AddForm()" id="add_topic_name_button" href="#" data-uk-modal="{target:'#add_modal'}" class="md-fab md-fab-accent Batch-create">
                    <i class="material-icons">&#xE145;</i>
                </a>
            </div>

            <!-- Add new course modal -->

            <div class="uk-modal" id="add_modal">
                <div class="uk-modal-dialog ">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <div class="uk-modal-header" style="margin-right: -32px;">
                        <h3 class="uk-modal-title">Add New </h3>
                        <hr>
                    </div>

                    {{ Form::open(array('url' => 'admin/size/store','method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked','files' => true)) }}

                    <div class="uk-overflow-container">
                        <div class="parsley-row uk-margin-bottom">
                            <label for="name">Name<span class="req">*</span></label>
                            <input type="text" id="name" name="name" required class="md-input" />
                        </div>
                        
                        <div class="parsley-row uk-margin-bottom">
                            <label for="description">Description</label>
                            <textarea class="md-input" id="description" name="description" required cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
                        </div>
                    </div>

                    <div class="uk-modal-footer">
                        <hr style="margin: 0 0 25px 0">
                        <div class="uk-float-right">
                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            
            <!-- View Batch Modal -->
            @foreach($all_data as $data_view)
            <div class="uk-modal" id="view_modal_{{$data_view->id}}">
                <div class="uk-modal-dialog">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <div class="uk-modal-header">
                        <h3 class="uk-modal-title">Details</h3>
                        <hr>
                    </div>

                    <div class="uk-overflow-container">
                        <form class="uk-form-stacked">
                            <div class="parsley-row uk-margin-bottom">
                                <p><strong>Name:</strong></p>
                                <p>{{$data_view->name}}</p>
                            </div>
                           
                            <div class="parsley-row uk-margin-bottom">
                                <p><strong>Description:</strong></p>
                                <p>{{$data_view->description}}</p>
                            </div>
                            
                        </form>
                    </div>

                    <div class="uk-modal-footer">
                        <hr style="margin: 0 0 25px 0">
                        <p>
                            <span class="uk-margin-right"><strong>Created at:</strong></span><span>{{$data_view->created_at}}</span>
                            &nbsp;&nbsp;&nbsp;
                            <span class="uk-margin-right"><strong>Updated at:</strong></span><span>{{$data_view->updated_at}}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Edit Batch Modal -->
            @foreach($all_data as $data_edit)
            <div class="uk-modal" id="edit_modal_{{$data_edit->id}}">
                <div class="uk-modal-dialog ">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <div class="uk-modal-header" style="margin-right: -32px;">
                        <h3 class="uk-modal-title">Edit </h3>
                        <hr>
                    </div>

                    <div class="uk-overflow-container">
                    {{ Form::open(array('url' => 'admin/size/update/'.$data_edit->id,'method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked','files' => true)) }}
                         <!-- <form id="add_topic_form" class="uk-form-stacked"> -->
                            
                            <div class="parsley-row uk-margin-bottom">
                                <label for="name">Name<span class="req">*</span></label>
                                <input type="text" id="name" value="{{$data_edit->name}}" name="name" required class="md-input" />
                            </div>
                            
                            <div class="parsley-row uk-margin-bottom">
                                <label for="description">Description</label>
                                <textarea class="md-input" id="description"  name="description" cols="10" rows="3" data-parsley-trigger="keyup" >{{$data_edit->description}}</textarea>
                            </div>
                    </div>
                    <div class="uk-modal-footer"> 
                        <hr style="margin: 0 0 25px 0">
                        <div class="uk-float-right">
                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                        </div>
                    </div>
                {{ Form::close() }}
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
	
@endsection
@section('scripts')
<script>
$('.delete_btn').click(function () {
    var id = $(this).next('.course_id').val();
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then(function () {
        window.location.href = "/admin/size/delete/"+id;
    })
})
    </script>
<script type="text/javascript">
$('#course').addClass('current_section');
</script>
@endsection