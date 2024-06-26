@extends('admin.layouts.app')
@section('title', 'Case Study List')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Case Study List</h5>
        <a href="{{route('caseStudy.create')}}" class="btn btn-primary btn-sm">Add Case Study</a>
    </div>
    <div class="table-responsive">
        <div class="container">
            <table class="table table-hover" id="datatable-blog">
                <thead>
                    <tr>
                        <!-- <th>Publish Date</th> -->
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($caseStudies as $blog)
                    <tr>
                        <!-- <td>{{$blog->publish_date}}</td> -->
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->slug}}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{route('caseStudy.edit', $blog->id)}}" class="btn btn-primary btn-sm">
                                    <i class="bx bx-edit"></i>
                                </a>
                                <form action="{{route('caseStudy.destroy',$blog->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable-blog').DataTable({
                "order": []
            });
        } );
    </script>
@endsection