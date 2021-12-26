@extends('layouts.master')
@section('title')
Information
@stop
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/admin/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/admin/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/admin/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/admin/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/admin/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/admin/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hello, Welcome Back!</h2>
                <p class="mg-b-0">{{Auth::user()->name}}</p>
            </div>
        </div>
        <div class="main-dashboard-header-right">
            <div>
                <label class="tx-13 text-center">Last Updated</label>
                <h6 class="tx-13 text-center">{{ date_format(date_create($information->updated_at),'d F Y h:i:sa') }}</h6>
            </div>

        </div>
    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')

        <!-- row -->
        <div class="row">


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has('Add'))
                <script>
                    window.onload = function() {
                        notif({
                            msg: "The skill has been successfully added",
                            type: "success"
                        })
                    }
                </script>
            @endif
            @if (session()->has('Edit'))
                <script>
                    window.onload = function() {
                        notif({
                            msg: "Skill modified successfully",
                            type: "success"
                        })
                    }
                </script>
            @endif
            @if (session()->has('Delete'))
                <script>
                    window.onload = function() {
                        notif({
                            msg: "The skill has been deleted successfully",
                            type: "success"
                        })
                    }
                </script>
            @endif
            <!--div-->
            <div class="col-xl-12 ">
                <div class="card mg-b-20">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                        </div>
                    </div>
                    <div class="card-body">
                        

                    <div class="text-wrap">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-2">
                                <div class=" tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs main-nav-line">
                                            <li><a href="#basic" class="nav-link active" data-toggle="tab">Basic</a></li>
                                            <li><a href="#contact" class="nav-link" data-toggle="tab">Contact</a></li>
                                            <li><a href="#links" class="nav-link" data-toggle="tab">Links</a></li>
                                            <li><a href="#files" class="nav-link" data-toggle="tab">Files</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body main-content-body-right border">
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="basic">
                                            <div class="table-responsive mt-15">
                                                <table class="table table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Sur Name</th>
                                                            <td colspan="3">{{ $information->sur_name }}</td>
                                                            <th scope="row">Nick Name</th>
                                                            <td colspan="3">{{ $information->nick_name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Full Name</th>
                                                            <td colspan="3">{{ $information->full_name }}</td>
                                                            <th scope="row">Title Job</th>
                                                            <td colspan="3">{{ $information->title_job }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Birth Date</th>
                                                            <td>{{ date_format(date_create($information->birth_date),'d F Y') }}</td>
                                                            <th scope="row">Age</th>
                                                            <td>{{ date('Y') - date_format(date_create($information->birth_date),'Y') }}</td>
                                                            <th scope="row">Degree</th>
                                                            <td>{{ $information->degree }}</td>
                                                            <th scope="row">Freelancer</th>
                                                            <td>
                                                                @if ( $information->freelancer ) 
                                                                    <span class="badge bx-flashing bg-success text-white">Available</span>
                                                                @else
                                                                    <span class="badge bx-flashing bg-danger text-white">Not Available</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Summary</th>
                                                            <td colspan="7">{{ $information->summary }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                        <div class="tab-pane" id="contact">
                                            <div class="table-responsive mt-15">
                                                <table class="table table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Phone</th>
                                                            <td>{{ $information->phone }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Whats App</th>
                                                            <td>{{ $information->whatsapp }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Email</th>
                                                            <td>{{ $information->email }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Address</th>
                                                            <td>{{ $information->address }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Links</th>
                                                            <td>
                                                                <div class="fs-1">
                                                                    @if (!empty($information->facebook))<a href='{{$information->facebook}}' class='fs-1' target='_blank'><i class='bx bxl-facebook'></i></a>@endif
                                                                    @if (!empty($information->twitter))<a href='{{$information->twitter}}' class='twitter' target='_blank'><i class='bx bxl-twitter'></i></a>@endif
                                                                    @if (!empty($information->linkedin))<a href='{{$information->linkedin}}' class='linkedin' target='_blank'><i class='bx bxl-linkedin'></i></a>@endif
                                                                    @if (!empty($information->github))<a href='{{$information->github}}' class='github' target='_blank'><i class='bx bxl-github'></i></a>@endif
                                                                    @if (!empty($information->youtube))<a href='{{$information->youtube}}' class='youtube' target='_blank'><i class='bx bxl-youtube'></i></a>@endif
                                                                    @if (!empty($information->instagram))<a href='{{$information->instagram}}' class='instagram' target='_blank'><i class='bx bxl-instagram'></i></a>@endif
                                                                </div>
                                                            </td>
                                                            <td></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="links">
                                            <div class="table-responsive mt-15">
                                                <table class="table table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Website</th>
                                                            <td>{{ $information->website }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Facebook</th>
                                                            <td>@if (!empty($information->facebook))<a href='{{$information->facebook}}' class='facebook' target='_blank'><i class='bx bxl-facebook'></i></a>@endif</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Twitter</th>
                                                            <td>@if (!empty($information->twitter))<a href='{{$information->twitter}}' class='twitter' target='_blank'><i class='bx bxl-twitter'></i></a>@endif</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Linked In</th>
                                                            <td>@if (!empty($information->linkedin))<a href='{{$information->linkedin}}' class='linkedin' target='_blank'><i class='bx bxl-linkedin'></i></a>@endif</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Github</th>
                                                            <td>@if (!empty($information->github))<a href='{{$information->github}}' class='github' target='_blank'><i class='bx bxl-github'></i></a>@endif</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Youtube</th>
                                                            <td>@if (!empty($information->youtube))<a href='{{$information->youtube}}' class='youtube' target='_blank'><i class='bx bxl-youtube'></i></a>@endif</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Instagram</th>
                                                            <td>@if (!empty($information->instagram))<a href='{{$information->instagram}}' class='instagram' target='_blank'><i class='bx bxl-instagram'></i></a>@endif</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="files">
                                            <div class="table-responsive mt-15">
                                                <table class="table table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Phone</th>
                                                            <td>{{ $information->phone }}</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                    </div>
                </div>
            </div>
            <!--/div-->

            <!-- Add modal -->
            <div class="modal" id="add">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Add Skill</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{route('skills.store')}}" method="post" autocomplete="off">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="skill">Skill Name</label>
                                    <input type="text" class="form-control" id="skill" name="skill" >
                                </div>
                                <div class="form-group">
                                    <label for="value">Skill Value</label>
                                    <input class="form-control" type="number" name="value" id="value" min="0" max="100">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="submit">Done</button>
                                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Add modal -->

            <!-- Edit modal-->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Skill</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="skills/update" method="post" autocomplete="off">
                                {{method_field('patch')}}
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="hidden" name="id" id="id" value="">
                                    <label for="skill" class="col-form-label">Skill Name:</label>
                                    <input class="form-control" name="skill" id="skill">
                                </div>
                                <div class="form-group">
                                    <label for="value">Skill Value</label>
                                    <input class="form-control" type="number" type="number" name="value" id="value" min="0" max="100">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Done</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Edit modal -->

            <!-- Delete modal-->
            <div class="modal" id="delete">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Delet Skill</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="skills/destroy" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <div class="modal-body">
                                <p>Are sure of the deleting process ?</p><br>
                                <input type="hidden" name="id" id="id" value="">
                                <input type="text" class="form-control" name="skill" id="skill" readonly>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Done</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Delete modal -->

        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/admin/js/table-data.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/modal.js')}}"></script>
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('assets/admin/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/notify/js/notifit-custom.js') }}"></script>

    <script>
        $('#edit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var skill = button.data('skill')
            var value = button.data('value')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #skill').val(skill);
            modal.find('.modal-body #value').val(value);
        })
    </script>
    <script>
        $('#delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var skill = button.data('skill')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #skill').val(skill);
        })
    </script>

@endsection
