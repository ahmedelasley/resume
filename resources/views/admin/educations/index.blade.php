@extends('layouts.master')
@section('title')
المؤهلات
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
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">أهلاً، مرحباً بعودتك !</h2>
                <p class="mg-b-0">{{Auth::user()->name}}</p>
            </div>
        </div>
        <div class="main-dashboard-header-right">
            <div>
                <label class="tx-13 text-center">عدد المؤهلات</label>
                <h5 class="tx-13 text-center">{{\App\Education::count()}}</h5>
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
                            msg: "تم أضافة المهارة بنجاح",
                            type: "success"
                        })
                    }
                </script>
            @endif
            @if (session()->has('Edit'))
                <script>
                    window.onload = function() {
                        notif({
                            msg: "تم تعديل المهارة بنجاح",
                            type: "success"
                        })
                    }
                </script>
            @endif
            @if (session()->has('Delete'))
                <script>
                    window.onload = function() {
                        notif({
                            msg: "تم حذف المهارة بنجاح",
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
                            <a class="modal-effect btn btn-sm btn-primary " data-effect="effect-scale" data-toggle="modal" href="#add"><i class="las la-plus"></i> إضافة مهارة</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table key-buttons text-md-nowrap text-center">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">#</th>
                                        <th class="border-bottom-0">أسم الشهادة</th>
                                        <th class="border-bottom-0">تاريخ الالتحاق</th>
                                        <th class="border-bottom-0">تاريخ التخرج</th>
                                        <th class="border-bottom-0">الكلية</th>
                                        <th class="border-bottom-0">القسم</th>
                                        <th class="border-bottom-0">الجامعة</th>
                                        <th class="border-bottom-0">مشروع التخرج</th>
                                        <th class="border-bottom-0">رابط المشروع</th>
                                        <th class="border-bottom-0">رابط الجيت هاب</th>
                                        <th class="border-bottom-0">العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0 ?>
                                    @foreach($educations as $education)
                                        <?php $i++ ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$education->title}}</td>
                                            <td>{{$education->start_date}}</td>
                                            <td>{{!empty($education->end_date) ? $education->end_date : "Present"}}</td>
                                            <td>{{$education->college}}</td>
                                            <td>{{$education->department}}</td>
                                            <td>{{$education->university}}</td>
                                            <td>{{$education->project}}</td>
                                            <td>
                                                @if (!empty($education->url))
                                                    <a href ="{{ $education->url }}" class="website" target="_blank"><h3 class="bx bx-link-alt"></h3></a>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!empty($education->github))
                                                    <a href="{{ $education->github }}" class="github" target="_blank"><h3 class="bx bxl-github"></h3></a>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary btn-sm" data-toggle="dropdown" type="button"> العمليات <i class="fas fa-caret-down ml-1"></i></button>
                                                    <div class="dropdown-menu tx-13">
                                                        <a class="dropdown-item btn btn-success" data-id="{{ $education->id }}" data-title="{{ $education->title }}" data-toggle="modal" href="#edit" title="تعديل"><i class="text-success las la-pen"></i> تعديل</a>
                                                        <a class="dropdown-item btn text-danger" data-id="{{ $education->id }}" data-skill="{{ $education->title }}" data-toggle="modal" href="#delete" title="حذف"><i class="text-danger las la-trash"></i> حذف</a>
                                                    </div>
                                                </div>
                                            </td>			
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                            <h6 class="modal-title">إضافة مهارة</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{route('educations.store')}}" method="post" autocomplete="off">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="skill">أسم المهارة</label>
                                    <input type="text" class="form-control" id="skill" name="skill" >
                                </div>
                                <div class="form-group">
                                    <label for="value">قيمة المهارة</label>
                                    <input class="form-control" type="number" name="value" id="value" min="0" max="100">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="submit">تأكيد</button>
                                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">إغلاق</button>
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
                            <h5 class="modal-title" id="exampleModalLabel">تعديل المهارة</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="educations/update" method="post" autocomplete="off">
                                {{method_field('patch')}}
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="hidden" name="id" id="id" value="">
                                    <label for="skill" class="col-form-label">اسم المهارة:</label>
                                    <input class="form-control" name="skill" id="skill">
                                </div>
                                <div class="form-group">
                                    <label for="value">قيمة المهارة</label>
                                    <input class="form-control" type="number" type="number" name="value" id="value" min="0" max="100">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
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
                            <h6 class="modal-title">حذف المهارة</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="educations/destroy" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <div class="modal-body">
                                <p>هل انت متاكد من عملية الحذف ؟</p><br>
                                <input type="hidden" name="id" id="id" value="">
                                <input type="text" class="form-control" name="skill" id="skill" readonly>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                <button type="submit" class="btn btn-danger">تاكيد</button>
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
