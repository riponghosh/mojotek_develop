@extends('backend.template')

@section('title', 'Dashboard')


@section('content')

	<div class="md-card">
	    <div class="md-card-content">
	        <div class="uk-margin-bottom">
	            <a href="#" class="md-btn uk-margin-right" id="printTable">Print Table</a>
	            <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
	                <button class="md-btn">Columns <i class="uk-icon-caret-down"></i></button>
	                <div class="uk-dropdown">
	                    <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>
	                </div>
	            </div>
	        </div>
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
	        <div class="uk-overflow-container uk-margin-bottom">
	            <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
	                <thead>
	                <tr>
	                    <th data-name="Select" data-priority="5">No</th>
	                    <th data-priority="critical">Title</th>
	                    <th data-priority="critical">Category</th>
	                    <th data-priority="1">Sub Category</th>
	                    <th data-priority="1">Seller</th>
	                    <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
	                </tr>
	                </thead>
	                <tfoot>
	                    <tr>
	                        <th>No</th>
	                        <th>Name</th>
	                        <th>Category</th>
	                        <th>Sub Category</th>
	                        <th>Seller</th>
	                        <th class="uk-text-center">Actions</th>
	                    </tr>
	                </tfoot>
	                <tbody>
	                <?php $i=1; ?>
	                @foreach($all_data as $data)
	                <tr>
	                    <td><?php echo $i; $i++; ?></td>
	                    <td>{{$data->name}}</td>
	                    <td>{{$data->category->name}}</td>
	                    <td>{{$data->subcategory->name}}</td>
	                    <td>{{$data->user->name}}</td>
	                    <td class="uk-text-center">
	                        <!-- <a href="{{url('admin/issue/homelessness/latestnews/show/')}}" class="batch-edit"><i class="md-icon material-icons uk-margin-right">&#xE8F4;</i></a> -->
	                        <a href="{{url('/admin/product/edit/'.$data->id)}}" class="batch-edit"><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
	                        <a class="delete_btn"><i class="md-icon material-icons">&#xE872;</i></a>
	                        <input class="id" type="hidden" value="{{ $data->id }}">
	                    </td>
	                </tr>
	                @endforeach
	               
	                </tbody>
	            </table>
	        </div>
	        <ul class="uk-pagination ts_pager">
	            <li data-uk-tooltip title="Select Page">
	                <select class="ts_gotoPage ts_selectize"></select>
	            </li>
	            <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
	            <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
	            <li><span class="pagedisplay"></span></li>
	            <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
	            <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
	            <li data-uk-tooltip title="Page Size">
	                <select class="pagesize ts_selectize">
	                    <option value="5">5</option>
	                    <option value="10">10</option>
	                    <option value="25">25</option>
	                    <option value="50">50</option>
	                </select>
	            </li>
	        </ul>
	    </div>
	</div>

	<!-- Add Batch plus sign -->

	<div class="md-fab-wrapper Batch-create">
	    <a id="add_topic_name_button" href="{{route('admin_product_create')}}" class="md-fab md-fab-accent Batch-create">
	        <i class="material-icons">&#xE145;</i>
	    </a>
	</div>
	
@endsection
@section('scripts')
    <script type="text/javascript">
    	$('.delete_btn').click(function () {
		    var id = $(this).next('.id').val();
		    swal({
		        title: 'Are you sure?',
		        text: "You won't be able to revert this!",
		        type: 'warning',
		        showCancelButton: true,
		        confirmButtonColor: '#3085d6',
		        cancelButtonColor: '#d33',
		        confirmButtonText: 'Yes, delete it!'
		    }).then(function () {
		        window.location.href = "/admin/product/delete/"+id;
		    })
		})
    </script>
@endsection