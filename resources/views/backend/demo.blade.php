@extends('backend.template')

@section('title', 'Dashboard')


@section('content')

	<h3 class="heading_b uk-margin-bottom">All Course</h3>
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
                            <th data-priority="critical">Course Name</th>
                            <th data-priority="1">Description</th>
                            <th data-priority="2">Updated by</th>
                            <th data-priority="2">Updated at</th>
                            <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Course Name</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th class="uk-text-center">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1 ?>
                    
                        <tr>
                            <td><?php echo $i ?></td>
                            <?php $i+=1?>
                            <td>
                                name
                            </td>
                            <td>description</td>
                            <td>created_at</td>
                            <td>updated_at</td>
                            <td class="uk-text-center">
                                <a href="#" class="batch-edit" data-uk-modal="{target:'#view_modalcourse_id'}"><i class="md-icon material-icons uk-margin-right">&#xE8F4;</i></a>
                                <a href="#" class="batch-edit" data-uk-modal="{target:'#edit_modalcourse_id'}"><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
                                <a class="delete_btn"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="md-icon material-icons">&#xE872;</i></a>
                                <input class="course_id" type="hidden" value="course_id">
                            </td>
                        </tr>
                    
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
                        <h3 class="uk-modal-title">Add New Course </h3>
                        <hr>
                    </div>

                    <div class="uk-overflow-container">
                    {{ Form::open(array('url' => 'admin/courses','method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked','files' => true)) }}
                            <div class="uk-width-1-2">
                                <label for="add_branch_select" class="uk-form-label">Select Language</label>
                                <select id="add_branch_select" required name="language" class="single-select" style="width: 100%;" >
                                    <option value="bn">Bangla</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                            <div class="parsley-row uk-margin-bottom">
                                <label for="course_name">Course Name<span class="req">*</span></label>
                                <input type="text" id="course_name" name="course_name" required class="md-input" />
                            </div>
                            
                            <div class="parsley-row uk-margin-bottom">
                                <label for="course_description">Description</label>
                                <textarea class="md-input" id="course_description" name="course_description" required cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
                            </div>

                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    <div class="uk-form-file md-btn md-btn-primary">
                                        Select
                                        <input id="form-file" name="thumbnail" type="file">
                                    </div>
                                    Select Thumbnail(Must be jpg,png)
                                </div>
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

            <div class="uk-modal" id="view_modalcourse_id">
                <div class="uk-modal-dialog">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <div class="uk-modal-header">
                        <h3 class="uk-modal-title">Course Details</h3>
                        <hr>
                    </div>

                    <div class="uk-overflow-container">
                        <form class="uk-form-stacked">
	                    <div class="parsley-row uk-margin-bottom">
	                        <p><strong>Course Type:</strong></p>
	                            
	                             English
	                            
                            </div>
                            <div class="parsley-row uk-margin-bottom">
                                <div class="">
                                    <img style="width: 100px; height:90px; " src="{{url('uploads/thumbnail/image.png')}}" alt="" class="">
                                </div>
                            </div>
                            <div class="parsley-row uk-margin-bottom">
                                <p><strong>Course Name:</strong></p>
                                <p>course_name</p>
                            </div>
                           
                            <div class="parsley-row uk-margin-bottom">
                                <p><strong>Description:</strong></p>
                                <p>description</p>
                            </div>
                            
                        </form>
                    </div>

                    <div class="uk-modal-footer">
                        <hr style="margin: 0 0 25px 0">
                        <p>
                            <span class="uk-margin-right"><strong>Created at:</strong></span><span>created_at</span>
                            &nbsp;&nbsp;&nbsp;
                            <span class="uk-margin-right"><strong>Updated at:</strong></span><span>updated_at</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Edit Batch Modal -->

            <div class="uk-modal" id="edit_modalcourse_id">
                <div class="uk-modal-dialog ">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <div class="uk-modal-header" style="margin-right: -32px;">
                        <h3 class="uk-modal-title">Edit Course </h3>
                        <hr>
                    </div>

                    <div class="uk-overflow-container">
                    {{ Form::open(array('url' => 'admin/courses/update','method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked','files' => true)) }}
                         <form id="add_topic_form" class="uk-form-stacked">
                            <div class="uk-width-1-2">
                                <label for="add_branch_select" class="uk-form-label">Select Language</label>
                                <select id="add_branch_select" required name="language" class="single-select" style="width: 100%;">
                                    
                                    <option value="bn" selected>Bangla</option>
                                    <option value="en">English</option>
                                    
                                </select>
                            </div>
                            <div class="parsley-row uk-margin-bottom">
                                <label for="add_topic_name">Course Name<span class="req">*</span></label>
                                <input type="text" id="course_name" value="course_name" name="course_name" required class="md-input" />
                            </div>
                            
                            <div class="parsley-row uk-margin-bottom">
                                <label for="add_topic_description">Description</label>
                                <textarea class="md-input" id="course_description"  name="course_description" cols="10" rows="3" data-parsley-trigger="keyup" >course_description</textarea>
                            </div>
                           
                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    
                                    <div style="margin-bottom: 20px;" class="thumbnail">
                                        
                                         <img style="height: 70px; width: 90px;" src="{{url('uploads/thumbnail/image.png')}}" alt="user avatar"/>
	                               
                                      
                                    </div>
                                    <div class="uk-form-file md-btn md-btn-primary">
                                        Select
                                        <input id="form-file" name="thumbnail" type="file">
                                    </div>
                                    Select New Thumbnail
                                </div>
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
        window.location.href = "/admin/courses/delete/"+id;
    })
})
    </script>
<script type="text/javascript">
$('#course').addClass('current_section');
</script>
@endsection