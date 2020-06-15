
@section('style')
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}} " rel="stylesheet">
@endsection

@section('sidebar')
    <li class="nav-item">
        <a class="nav-link" href="{{route('patient.create')}}">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>{{__('Registratsiya')}}</span></a>
    </li>

    <!-- Nav Item - Navbat -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>{{__('Navbat')}}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Buxalteriya Menyu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#BuxalteriyaPages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Buxalteriya</span>
        </a>
        <div id="BuxalteriyaPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{url('kassa')}}">{{__('Kassa')}}</a>
                <a class="collapse-item" href="{{url('xarj')}}">{{__('Xarajatlar')}}</a>
                <hr class="sidebar-dark">
                <h6 class="collapse-header">Buxalteriya</h6>
                <a class="collapse-item" href="{{url('firmalar')}}">{{__('Firmalar')}}</a>
                <a class="collapse-item" href="{{url('tranzaction')}}">{{__('Tranzaksiya')}}</a>
                <a class="collapse-item" href="{{url('tushumlar')}}">{{__('Tushumlar')}}</a>

            </div>
        </div>
    </li>



    <!-- Nav Item - Xizmatlar Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>{{__('Xizmatlar')}}</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">{{__('Dori')}}</a>
                <a class="collapse-item" href="{{route('servis')}}">{{__('Servis')}}</a>
                <a class="collapse-item" href="utilities-animation.html">{{__('O`rin')}}</a>
            </div>
        </div>
    </li>



    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>{{__('Doktorlar')}}</span></a>
    </li>




@endsection

@section('scripts')


    <!-- Page level plugins -->
    <script src=" {{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection
