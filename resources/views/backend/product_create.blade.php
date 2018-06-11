@extends('backend.template')

@section('title', 'Dashboard')


@section('content')

	<div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
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
            {{ Form::open(array('url' => 'admin/product/store','method' => 'POST', 'role' => 'form' , 'class' => 'uk-form-stacked', 'id' => 'user_edit_form','files' => true)) }}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Add New Product</span></h2>
                                </div>
                            </div>

                            <div class="user_content">
                                <div class="uk-margin-top">

                                    <div class="uk-grid subcategory" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="category_id">Category<span></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <select id="category_id" name="category_id" data-md-selectize>
                                                    <option value="">Select</option>
                                                    
                                                    @foreach($category as $category)
                                                        @if(isset($category_id))
                                                            @if($category->id==$category_id)
                                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                            @else
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endif
                                                        @else
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endif
                                                    @endforeach
                                                        
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="subcategory_id">Sub Category<span></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <select id="subcategory_id" name="subcategory_id" data-md-selectize>
                                                    <option value="">Select</option>
                                                    @foreach($subcategory as $subcategory)
                                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    

                                    


                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="name">Title<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <input type="text" id="name" name="name" required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="price">price<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <input type="text" id="price" name="price" required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="brand">brand<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <input type="text" id="brand" name="brand" required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="condition">condition<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <input type="text" id="condition" name="condition" class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="color">color<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <input type="text" id="color" name="color" required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="description">Description<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <textarea type="text" id="description" name="description" class="md-input"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    <div id='addr0' class="c1">
                                        <h3 class="full_width_in_card heading_c">
                                             Give Product Image
                                        </h3>

                
                                        <div class="uk-grid" data-uk-grid-margin>
                                            <div class="uk-width-1-5">
                                                <div class="parsley-row">
                                                    <label for="image">Image<span></span></label>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <div class="md-card">
                                                    <div class="md-card-content">
                                                        <h3 class="heading_a uk-margin-small-bottom">
                                                            Default
                                                        </h3>
                                                        <input type="file" id="input-file-a" name="image[]" class="dropify" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    </div>
                                    <!-- <div id='addr1'></div> -->
<hr>
                                    <a id="add_row" class="md-btn md-btn-primary md-btn-wave-light b1" onclick="repeat()">Add Row</a><a id='delete_row' class="md-btn md-btn-danger md-btn-wave-light uk-float-right" onclick="deleted()">Delete Row</a>

                                    <div><hr></div>

                                    <!-- <div class="uk-grid" data-uk-grid-margin  id="tab_logic">
                                        <div class="uk-width-1-5">
                                            <div class="parsley-row">
                                                <label for="course_name">Featured Highlights<span></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <div class="parsley-row">
                                                <select id="select_demo_4" name="featured_highlight" data-md-selectize>
                                                    <option value="">Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1 uk-float-right">
                                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{ Form::close() }}
        </div>
    </div>
	
@endsection
@section('scripts')
    <script type="text/javascript">
    var i = 0;
var original = document.getElementById('addr0');

function repeat() {
  var clone = original.cloneNode(true);
  clone.id = "addr" + (++i);
  original.parentNode.appendChild(clone);

}

function deleted() {
  var nested = document.getElementById("addr"+ (i));
  original.parentNode.removeChild(nested);
  i--;
}

</script>
<script type="text/javascript">
    $('#category_id').on('change',function(){
        var category_id = $('#category_id option:selected').val();
        if(category_id == '')
        {
            var address = "/admin/product/create";
        }
        else
        {
            
            var address = "/admin/product/create/"+category_id;
        }
        window.location=address;
        // $( ".subcategory" ).load(address );
    });
</script>
@endsection