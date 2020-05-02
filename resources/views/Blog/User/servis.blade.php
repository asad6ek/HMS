@extends('layouts.admin')
@extends('layouts.menu')

@section('page')

    <form action="{{route('servis_insert')}}" class="user" method="post">
        @csrf




        <div class="container">
            {{--Ism--}}
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="name" class=" form-check-label"> {{__('Servis nomi')}}</label>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="name" type="text" class="form-control form-control-range @error('name') is-invalid @enderror" name="s_nomi" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nomi">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            {{--Familiya--}}
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="summ" class=" form-check-label"> {{__('Summasi')}}</label>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">

                    <input id="summ" type="text" class="form-control form-control-range @error('summ') is-invalid @enderror" name="summ" value="{{ old('summ') }}" required autocomplete="summ" autofocus placeholder="Summa">
                </div>
                @error('fname')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0 offset-3">

                <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Saqlash') }}
            </button>
                </div>
            </div>
        </div>

    </form>


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
                        <th>{{ __('Сервис номи') }}</th>
                        <th>{{ __('Суммаси') }}</th>
                        <th>{{__('Submit')}}</th>
                    </tr>

                    </thead>
                    <tfoot>
                    <tr>
                        <th>{{__('ИД')}}</th>
                        <th>{{ __('Сервис номи') }}</th>
                        <th>{{ __('Суммаси') }}</th>
                        <th>{{__('Submit')}}</th>


                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($servis as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->servisnomi}}</td>
                            <td>{{$p->summ}}</td>

                            <td>
                                <li class="nav-item">
                                    <a class=" collapse-item" href="#" data-toggle="collapse" data-target="#a{{$p->id}}" aria-expanded="true" aria-controls="collapsePages">
                                        <span>Pages</span>
                                    </a>
                                    <div id="a{{$p->id}}" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <a class="collapse-item d-inline-block" href="#">{{__('O`chirish')}}</a><br>
                                            <a class="collapse-item d-inline-block" href="#">{{__('Yangilash')}}</a><br>
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
    @endsection