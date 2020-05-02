@extends('layouts.admin')
@extends('layouts.menu')

@section('page')
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{__('ИД')}}</th>
                            <th>{{ __('Исми Фамилияси') }}</th>
                            <th>{{ __('Ёши') }}</th>
                            <th>{{ __('Адрес') }}</th>
                            <th>{{ __('Сана') }}</th>
                            <th>{{ __('Тел раками') }}</th>
                            <th>{{__('Паспорт серияси, номери') }}</th>
                            <th>{{__('Submit')}}</th>
                        </tr>

                        </thead>
                        <tfoot>
                        <tr>
                            <th>{{__('ИД')}}</th>
                            <th>{{ __('Исми Фамилияси') }}</th>
                            <th>{{ __('Ёши') }}</th>
                            <th>{{ __('Адрес') }}</th>
                            <th>{{ __('Сана') }}</th>
                            <th>{{ __('Тел раками') }}</th>
                            <th>{{__('Паспорт серияси,номери') }}</th>
                            <th>{{__('Submit')}}</th>


                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($patient as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->pname." ".$p->psurname}}</td>
                            <td>{{$p->yoshi}}</td>
                            <td>{{$p->adress}}</td>
                            <td>{{$p->kelgan_sana}}</td>
                            <td>{{$p->tel}}</td>
                            <td>{{$p->pnomer}}</td>
                            <td>
                                <li class="nav-item">
                                    <a class=" collapse-item" href="#" data-toggle="collapse" data-target="#a{{$p->id}}" aria-expanded="true" aria-controls="collapsePages">
                                            <span>Pages</span>
                                    </a>
                                    <div id="a{{$p->id}}" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <a class="collapse-item d-inline-block" href="login.html">{{__('Davolash')}}</a><br>
                                            <a class="collapse-item d-inline-block" href="register.html">{{__('O`chirish')}}</a><br>
                                            <a class="collapse-item d-inline-block" href="forgot-password.html">{{__('Yangilash')}}</a><br>
                                            <a class="collapse-item d-inline-block" href="forgot-password.html">{{__('Tashrif')}}</a>
                                        </div>
                                    </div>
                                </li>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    </div>



@endsection
