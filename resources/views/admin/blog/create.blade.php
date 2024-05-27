@extends('admin.layouts.app')
@section('title', 'Case Study Add')
@section('content')
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Case Study</h5>
                <small class="text-muted float-end">
                    <a href="{{ route('blog.index') }}"> <button class="btn btn-primary btn-sm">Case Study List </button> </a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('blog.store')}}" class="post-form">
                    @csrf
                    <!-- Basic Details -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Basic Details</h5>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Publish Date</label>
                                <input type="date" class="form-control" id="publish_date" name="publish_date">
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
                                <input type="text" maxlength="250" name="short_description" class="form-control"
                                    placeholder="Thumbnail Title">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Thumbnail<span
                                        class="text-danger"><b>*</b></span> (600*500)</label>
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="menu-icon tf-icons bx bx-file"></i>Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="thumbnail" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label" for="blog_title">Title<span
                                        class="text-danger"><b>*</b></span> </label>
                                <input type="text" required id="input_title" name="blog_title" class="form-control"
                                    placeholder="Title">
                                @error('blog_title')
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
                            <input type="text" name="minutes" class="form-control" placeholder="5 Minutes">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Location</label>
                            <input type="text" name="minutes" class="form-control" placeholder="5 Minutes">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label" for="basic-icon-default-message">Solutions</label>
                            <textarea id="sol_editor" required name="description" class="form-control"
                                placeholder="Description"></textarea>
                            @error('description')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-message">Results</label>
                            <textarea id="res_editor" required name="description" class="form-control"
                                placeholder="Description"></textarea>
                            @error('description')
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
                                <input type="text" name="minutes" class="form-control" placeholder="5 Minutes">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label" for="basic-icon-default-message">Description</label>
                                <textarea id="back_des_editor" required name="description" class="form-control"
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
                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary"><i class="menu-icon tf-icons bx bx-file"></i>Choose</a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="thumbnail" required>
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
                            <input type="text" name="minutes" class="form-control" placeholder="5 Minutes">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="basic-icon-default-message">Description</label>
                            <textarea id="obj_des_editor" required name="description" class="form-control"
                                placeholder="Description"></textarea>
                            @error('description')
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

                        <div class="col-12 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Title</label>
                            <input type="text" name="minutes" class="form-control" placeholder="5 Minutes">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="basic-icon-default-message">Description</label>
                            <textarea id="sol_des_editor" required name="description" class="form-control"
                                placeholder="Description"></textarea>
                            @error('description')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
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
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary"><i class="menu-icon tf-icons bx bx-file"></i>Choose</a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="thumbnail" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-icon-default-message">Title</label>
                            <input type="text" name="minutes" class="form-control">
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
                            <input type="text" name="minutes" class="form-control" placeholder="5 Minutes">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="basic-icon-default-message">Description</label>
                            <textarea id="result_des_editor" required name="description" class="form-control"
                                placeholder="Description"></textarea>
                            @error('description')
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
                            <input type="text" name="minutes" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="basic-icon-default-message">Designation</label>
                            <input type="text" name="minutes" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Profile Image<span class="text-danger"><b>*</b></span> (480*734)</label>
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary"><i class="menu-icon tf-icons bx bx-file"></i>Choose</a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="thumbnail" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="basic-icon-default-message">Description</label>
                            <textarea id="profile_des_editor" required name="description" class="form-control"
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

                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="form-label" for="basic-icon-default-message">Counter Coulmn</label>
                            <input type="text" name="count_numb_1" class="form-control" placeholder="Counter Number">
                            <input type="text" name="count_text_1" class="form-control mt-3" placeholder="Counter Text">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="form-label" for="basic-icon-default-message">Counter Coulmn</label>
                            <input type="text" name="count_numb_2" class="form-control" placeholder="Counter Number">
                            <input type="text" name="count_text_2" class="form-control mt-3" placeholder="Counter Text">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="basic-icon-default-message">Counter Coulmn</label>
                            <input type="text" name="count_numb_3" class="form-control" placeholder="Counter Number">
                            <input type="text" name="count_text_3" class="form-control mt-3" placeholder="Counter Text">
                        </div>

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

    var route_prefix = "https://dwao.in/blog/admin/filemanager";

    $(document).ready(function () {

        $("#thumbnail").change(function () {
            let thumbnail = $(this).val();
            console.log(thumbnail);
            // check for white space in path
            if (/\s/g.test(thumbnail)) {
                setTimeout(() => {
                    alert('Thumbnail path should not contain white space');
                    $(this).val('');
                }, 500);
            }

        });

        $("#banner").change(function () {
            let banner = $(this).val();
            console.log(banner);
            // check for white space in path
            if (/\s/g.test(banner)) {
                setTimeout(() => {
                    alert('Banner path should not contain white space');
                    $(this).val('');
                }, 500);
            }

        });

        $("#featured_thumbnail").change(function () {
            let featured_thumbnail = $(this).val();
            console.log(featured_thumbnail);
            // check for white space in path
            if (/\s/g.test(featured_thumbnail)) {
                setTimeout(() => {
                    alert('Featured Thumbnail path should not contain white space');
                    $(this).val('');
                }, 500);
            }

        });



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

        $('.users').select2({
            placeholder: "Select Author",
        });

        $(".post-form").validate({
            errorElement: "div",
        });


        $('#lfm').filemanager('file', { prefix: route_prefix });
        $('#og_image').filemanager('file', { prefix: route_prefix });
        $('#ft').filemanager('file', { prefix: route_prefix });
        $('#banner-fm').filemanager('file', { prefix: route_prefix });

        $(".is_featured").change(function () {
            if (this.checked) {
                $('#featured_thumbnail').parent().parent().show();
                $('#featured_thumbnail').attr('required', true);
            } else {
                $('#featured_thumbnail').parent().parent().hide();
                $('#featured_thumbnail').attr('required', false);
            }
        });

        $('.add_more_insights').click(function () {
            let insights = `
    <div class="row">
      <div><hr></div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-message">Title</label>
          <input type="text" name="trending_insights_title[]" class="form-control" placeholder="Trending Insights Title">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-message">URL</label>
          <input type="text" name="trending_insights_url[]" class="form-control" placeholder="Trending Insights URL">
        </div>
      </div>
      <div class="d-flex align-items-end"><a href="javascript:;" class="btn btn-danger remove_insights mb-3">Remove</a></div>
    </div>
    `;
            $('.trending_insights').append(insights);
        });

        $(document).on('click', '.remove_insights', function () {
            $(this).parent().parent().remove();
        });


    });

    var options = {
        filebrowserImageBrowseUrl: route_prefix
    };

    CKEDITOR.replace('sol_editor', options);
    CKEDITOR.replace('res_editor', options);
    CKEDITOR.replace('back_des_editor', options);
    CKEDITOR.replace('obj_des_editor', options);
    CKEDITOR.replace('sol_des_editor', options);
    CKEDITOR.replace('result_des_editor', options);
    CKEDITOR.replace('profile_des_editor', options);
</script>
@endsection