@extends('layouts.admin')
@extends('layouts.menu')

@section('page')

    <!-- Qarzdor bemorlar-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Qarzdor bemoorlar')}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="kassaTable" width="100%" cellspacing="0">
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
                        <th>{{__('Паспорт серияси, номери') }}</th>
                        <th>{{__('Submit')}}</th>


                    </tr>
                    </tfoot>
                    <tbody>

                    {{--@foreach($patient as $p)--}}
                    {{--<tr>--}}
                    {{--<td>{{$p->id}}</td>--}}
                    {{--<td>{{$p->pname." ".$p->psurname}}</td>--}}
                    {{--<td>{{$p->yoshi}}</td>--}}
                    {{--<td>{{$p->adress}}</td>--}}
                    {{--<td>{{$p->kelgan_sana}}</td>--}}
                    {{--<td>{{$p->tel}}</td>--}}
                    {{--<td>{{$p->pnomer}}</td>--}}
                    {{--<td>--}}
                    {{--<a class="collapse-item d-inline-block" href="login.html">{{__('Qarzni to`lash')}}</a><br>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>



  <!-- Qarzdor bemorming qarzlari-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{__('Bemorning Klinikadan qarzdorlik hisoboti')}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="kassaTable1" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>{{__('ИД')}}</th>
                        <th>{{ __('Тащриф сана') }}</th>
                        <th>{{ __('Умумий сумма') }}</th>
                        <th>{{ __('Чегирма суммаси') }}</th>
                        <th>{{ __('Карздорлик') }}</th>
                        <th>{{ __('Чегирма %') }}</th>
                        <th>{{__('Статус') }}</th>

                    </tr>

                    </thead>
                    <tfoot>
                    <tr>
                        <th>{{__('ИД')}}</th>
                        <th>{{ __('Тащриф сана') }}</th>
                        <th>{{ __('Умумий сумма') }}</th>
                        <th>{{ __('Чегирма суммаси') }}</th>
                        <th>{{ __('Карздорлик') }}</th>
                        <th>{{ __('Чегирма %') }}</th>
                        <th>{{__('Статус') }}</th>


                    </tr>
                    </tfoot>
                    <tbody>

                    {{--@foreach($patient as $p)--}}
                    {{--<tr>--}}
                    {{--<td>{{$p->id}}</td>--}}
                    {{--<td>{{$p->pname." ".$p->psurname}}</td>--}}
                    {{--<td>{{$p->yoshi}}</td>--}}
                    {{--<td>{{$p->adress}}</td>--}}
                    {{--<td>{{$p->kelgan_sana}}</td>--}}
                    {{--<td>{{$p->tel}}</td>--}}
                    {{--<td>{{$p->pnomer}}</td>--}}

                    {{--</tr>--}}
                    {{--@endforeach--}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection

