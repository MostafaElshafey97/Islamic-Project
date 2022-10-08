@extends('Dashboard.layouts.master')
@section('css')

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/plugins/sumoselect/sumoselect-rtl.css') }}">
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

    <!-- Internal Select2 css -->
    <link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{URL::asset('Dashboard/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{URL::asset('Dashboard/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">

@section('title')
اضافة تفسير مرئي جديد@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">  التفسير المرئي</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
               اضافة تفسير مرئي جديد</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @include('Dashboard.messages_alert')

    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('quran_visual_interpretation.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-12">
                        <label>السورة</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                           <option value="">البقره</option>
                           <option value="">ال عمران</option>
                        </select>
                    </div>

                </div>

                <br>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <label>من الاية</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label>الى الاية</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12">
                        <label>التفسير</label>
                        <textarea class="form-control" rows="5" placeholder="نص التفسير"></textarea>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <label>حاله التفسير</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">منشور</option>
                            <option value="0">غير منشور</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label>رابط التفسير</label>
                        <input type="url" class="form-control" placeholder="رابط التفسير اذا وجد">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <p class="text-danger">* صيغة المرفق mp4 </p>
                        <h5 class="card-title">التفسير</h5>
    
                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".mp4" data-height="70" />
                        </div>
                    </div>
                </div>
                <br />

                <div class="row">
                    <div class="col-12 col-md-12 ">
                        <button class="btn btn-success">اضافه تفسير مرئي جديد</button>
                    </div>
                </div>

       
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')

<script>
    tinymce.init({
        selector: 'textarea',  // change this value according to your HTML
        plugins: 'a_tinymce_plugin',
        a_plugin_option: true,
        a_configuration_option: 400,
        language: 'ar',
    });
    // tinymce.init({
    //     selector: '#sheikh_textarea',  // change this value according to your HTML
    //     plugins: 'a_tinymce_plugin',
    //     a_plugin_option: true,
    //     a_configuration_option: 400,
    //     language: 'ar',
    // });
    // tinymce.init({
    //     selector: '#association_textarea',  // change this value according to your HTML
    //     plugins: 'a_tinymce_plugin',
    //     a_plugin_option: true,
    //     a_configuration_option: 400,
    //     language: 'ar',
    // });
</script>

  

    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('Dashboard/js/select2.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/js/advanced-form-elements.js') }}"></script>

    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('Dashboard/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>


    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('dashboard/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('dashboard/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('dashboard/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{URL::asset('dashboard/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('dashboard/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('dashboard/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('dashboard/js/form-elements.js')}}"></script>


@endsection
