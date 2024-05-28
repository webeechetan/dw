@extends('admin.layouts.app')
@section('title', 'Case Study Add')
@section('content')
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Case Study</h5>
                <small class="text-muted float-end">
                    <a href="{{ route('caseStudy.index') }}"> <button class="btn btn-primary btn-sm">Case Study List </button> </a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('caseStudy.update',$caseStudy->id)}}" class="post-form">
                    @csrf
                    @method('PUT')
                    <!-- Basic Details -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Basic Details</h5>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Publish Date</label>
                                <input type="date" class="form-control" id="published_at" name="published_at">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Category<span
                                        class="text-danger"><b>*</b></span> </label>
                                <select name="category_id" id="" class="form-control categories" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Sub Category<span
                                        class="text-danger"><b>*</b></span> </label>
                                <select name="sub_category_id" id="" class="form-control sub_categories" required>
                                    <option value="">Select Sub Category</option>
                                    @foreach ($subCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Thumbnail Title</label>
                                <input type="text" maxlength="250" name="thumbnail_title" class="form-control"
                                    placeholder="Thumbnail Title">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Thumbnail<span
                                        class="text-danger"><b>*</b></span> (600*500)</label>
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm" data-input="thumbnail_image" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="menu-icon tf-icons bx bx-file"></i>Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail_image" class="form-control" type="text" name="thumbnail_image" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="blog_title">Title<span
                                        class="text-danger"><b>*</b></span> </label>
                                <input type="text" required id="input_title" name="title" class="form-control"
                                    placeholder="Title">
                                @error('title')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-company">Slug<span
                                        class="text-danger"><b>*</b></span></label>
                                <input type="text" id="slug" required name="slug" class="form-control"
                                    placeholder="Slug">
                                @error('slug')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Banner <span
                                        class="text-danger"><b>*</b></span> Recommended Size (920*750) </label>
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="banner-fm" data-input="banner" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="menu-icon tf-icons bx bx-file"></i>Choose
                                        </a>
                                    </span>
                                    <input id="banner" class="form-control" type="text" name="banner" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 my-4">
                            <hr>
                        </div>
                    </div>

                    <!-- Overview -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Overview</h5>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Industry</label>
                            <input type="text" name="overview_industry" class="form-control" placeholder="Overview Industry">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Location</label>
                            <input type="text" name="overview_location" class="form-control" placeholder="Overview Location">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label" for="basic-icon-default-message">Solutions</label>
                            <textarea id="sol_editor" required name="overview_solutions" class="form-control"
                                placeholder="Description"></textarea>
                            @error('overview_solutions')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-message">Results</label>
                            <textarea id="res_editor" required name="overview_results" class="form-control"
                                placeholder="Description"></textarea>
                            @error('overview_results')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 my-4"><hr></div>
                    </div>
                    <!-- Background -->
                    <div class="row">
                        <div class="row">
                            <div class="col-12">
                                <h5>Background</h5>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label" for="basic-icon-default-message">Title</label>
                                <input type="text" name="background_title" class="form-control" placeholder="Background title">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label" for="basic-icon-default-message">Description</label>
                                <textarea id="back_des_editor" required name="background_description" class="form-control"
                                    placeholder="Description"></textarea>
                                @error('description')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-message">Thumbnail<span class="text-danger"><b>*</b></span> (1920*850)</label>
                                    <div class="input-group">
                                        <span class="input-group-btn text-white">
                                            <a id="lfm-background_image" data-input="background_image" data-preview="holder" class="btn btn-primary"><i class="menu-icon tf-icons bx bx-file"></i>Choose</a>
                                        </span>
                                        <input id="background_image" class="form-control" type="text" name="background_image" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-4"><hr></div>
                        </div>
                    </div>

                    <!-- Objective -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Objective</h5>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Title</label>
                            <input type="text" name="objective_title" class="form-control" placeholder="objective_title">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="basic-icon-default-message">Description</label>
                            <textarea id="obj_des_editor" required name="objective_description" class="form-control"
                                placeholder="Description"></textarea>
                            @error('objective_description')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 my-4"><hr></div>

                    </div>

                    <!-- Solution -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Solution</h5>
                        </div>

                        <div class="solutions-list">
                          @foreach ($caseStudy->solution_title as $solution)
                          <div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="basic-icon-default-message">Title</label>
                                <input type="text" name="solution_title[]" value="{{ $solution }}" class="form-control" placeholder="solution_title">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="basic-icon-default-message">Description</label>
                                <textarea id="sol_des_editor" required name="solution_description[]" class="form-control sol-editor"
                                    placeholder="Description">{{ $caseStudy->solution_description[$loop->index] }}</textarea>
                                @error('solution_description')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <a class="btn btn-danger btn-sm remove-solutions">Remove</a>
                          </div>
                          @endforeach
                        </div>
                        <div class="mt-4">
                            <a class="btn btn-success btn-sm add-more-solutions">Add More Solutions</a>
                        </div>

                        

                        <div class="col-12 my-4"><hr></div>

                    </div>

                    <!-- Case Study -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Case Study</h5>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Left Image<span class="text-danger"><b>*</b></span> (480*734)</label>
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm-case_study_image" data-input="case_study_image" data-preview="holder" class="btn btn-primary"><i class="menu-icon tf-icons bx bx-file"></i>Choose</a>
                                    </span>
                                    <input id="case_study_image" class="form-control" type="text" name="case_study_image" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-message">Title</label>
                            <input type="text" name="case_study_title" class="form-control">
                        </div>

                        <div class="col-12 my-4"><hr></div>

                    </div>

                    <!-- Result -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Result</h5>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Title</label>
                            <input type="text" name="result_title" class="form-control" placeholder="result_title">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="basic-icon-default-message">Description</label>
                            <textarea id="result_des_editor" required name="result_description" class="form-control"
                                placeholder="Description"></textarea>
                            @error('result_description')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 my-4"><hr></div>

                    </div>

                    <!-- User Profile -->
                    <div class="row">
                        <div class="col-12">
                            <h5>User Profile</h5>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Name</label>
                            <input type="text" name="user_pofile_name" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Designation</label>
                            <input type="text" name="user_pofile_designation" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Profile Image<span class="text-danger"><b>*</b></span> (480*734)</label>
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm-user_pofile_image" data-input="user_pofile_image" data-preview="holder" class="btn btn-primary"><i class="menu-icon tf-icons bx bx-file"></i>Choose</a>
                                    </span>
                                    <input id="user_pofile_image" class="form-control" type="text" name="user_pofile_image" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="basic-icon-default-message">Description</label>
                            <textarea id="profile_des_editor" required name="user_pofile_description" class="form-control"
                                placeholder="Description"></textarea>
                            @error('description')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 my-4"><hr></div>

                    </div>

                    <!-- Counter -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Counter Numbers</h5>
                        </div>
                        @foreach ($caseStudy->counter_numbers as $counter)
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="form-label" for="basic-icon-default-message">Counter Coulmn</label>
                            <input type="text" name="counter_numbers[]" value="{{ $counter }}" class="form-control" placeholder="Counter Number">
                            <input type="text" name="counter_text[]" value="{{ $caseStudy->counter_text[$loop->index] }}" class="form-control mt-3" placeholder="Counter Text">
                        </div>
                        @endforeach

                        <div class="col-12 my-4"><hr></div>

                    </div>

                    <!-- Meta Tags -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Meta Tags</h5>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Meta Description</label>
                            <input type="text" name="meta_description" class="form-control" placeholder="Meta Description">
                        </div>

                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label" for="basic-icon-default-message">OG Title</label>
                            <input type="text" name="og_title" class="form-control" placeholder="Og Title">
                        </div>

                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label" for="basic-icon-default-message">Og Image</label>
                            <div class="input-group">
                                <span class="input-group-btn text-white">
                                    <a id="og_image" data-input="og_image_input" data-preview="og_image_holder" class="btn btn-primary"><i class="menu-icon tf-icons bx bx-file"></i>Choose</a>
                                </span>
                                <input id="og_image_input" class="form-control" type="text" name="og_image">
                            </div>
                            <div id="og_image_holder" class="img-fluid" width="250px"></div>
                        </div>

                        <div class="col-12 my-4"><hr></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script>

    var route_prefix = "{{ env('FILE_MANAGER_URL') }}";

    var toolbar = [
        { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
        { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
        { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak'] },
        { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
        { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl'] },
        { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
        { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
    ];

    var options = {
        filebrowserImageBrowseUrl: route_prefix,
        toolbar: toolbar,
    };

    $(document).ready(function () {

      var caseStudy = @json($caseStudy);

      // set form values get each field by name and set value

      for (const key in caseStudy) {
        if (Object.hasOwnProperty.call(caseStudy, key)) {
          const element = caseStudy[key];
          $(`[name="${key}"]`).val(element);
        }
      }

        $(".categories").change(function () {
            let catId = $(this).val();
            $.ajax({
                url: "{{ route('get.subcategories') }}/" + catId,
                type: "GET",
                success: function (response) {
                    let html = '';
                    response.forEach(element => {
                        html += `<option value="${element.id}">${element.name}</option>`;
                    });
                    $('.sub_categories').html(html);
                }
            });
        });

        $(".post-form").validate({
            errorElement: "div",
        });


        $('#thumbnail_image').filemanager('file', { prefix: route_prefix });
        $('#banner-fm').filemanager('file', { prefix: route_prefix });
        $('#lfm').filemanager('file', { prefix: route_prefix });
        $('#lfm-background_image').filemanager('file', { prefix: route_prefix });
        $('#lfm-case_study_image').filemanager('file', { prefix: route_prefix });
        $('#lfm-user_pofile_image').filemanager('file', { prefix: route_prefix });
        $('#og_image').filemanager('file', { prefix: route_prefix });
        $('#ft').filemanager('file', { prefix: route_prefix });
        let counter = 1;

        $('.add-more-solutions').click(function () {
            counter++;
            let html = `
                <div class="solutions-list">
                    <div class="col-12 mb-3">
                        <label class="form-label" for="basic-icon-default-message">Title</label>
                        <input type="text" name="solution_title[]" class="form-control" placeholder="solution_title">
                    </div>
                    <div class="col-12">
                        <label class="form-label
                        " for="basic-icon-default-message">Description</label>
                        <textarea id="sol_des_editor_${counter}" required name="solution_description[]" class="form-control" placeholder="Description"></textarea>
                        @error('solution_description')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <a class="btn btn-danger btn-sm remove-solutions">Remove</a>
                </div>
            `;
            $('.add-more-solutions').before(html);

            // make appended description editor

            CKEDITOR.replace(`sol_des_editor_${counter}`, options);

        });

        $(document).on('click', '.remove-solutions', function () {
            $(this).parent().remove();
        });

    });

    

    CKEDITOR.replace('sol_editor', options);
    CKEDITOR.replace('res_editor', options);
    CKEDITOR.replace('back_des_editor', options);
    CKEDITOR.replace('obj_des_editor', options);
    // CKEDITOR.replace('sol_des_editor', options);
    CKEDITOR.replace('result_des_editor', options);
    CKEDITOR.replace('profile_des_editor', options);

    // .sol-editor is the class of the textarea where CKEditor will be initialized

    $('.sol-editor').each(function (index, element) {
      CKEDITOR.replace(element, options);
    });
</script>
@endsection