@extends('layouts.admin')
@extends('layouts.menu')

    @section('page')


        <div class="row">

            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">{{__('Bemor Qo`shish')}}</h1>
                    </div>
                    <form class="user"  method="POST" action="{{ route('patient_insert') }}">
                        @csrf




                        <div class="container">
                        {{--Ism--}}
                         <div class="form-group row">
                             <div class="col-sm-6 mb-3 mb-sm-0">

                                <label for="name" class=" form-check-label"> {{__('Ismi')}}</label>
                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="name" type="text" class="form-control form-control-range @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ismi">
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
                                <label for="fname" class=" form-check-label"> {{__('Familiyasi')}}</label>
                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">

                                <input id="fname" type="text" class="form-control form-control-range @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="Familiyasi">
                            </div>
                            @error('fname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                        {{--Yoshi--}}
                        <div class="form-group row">

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="yoshi" class=" form-check-label"> {{__('Tug`ilgan yili')}}</label>

                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">

                                <input id="yoshi" type="date" class="form-control form-control-range @error('yoshi') is-invalid @enderror"  name="yoshi" value="{{ old('yoshi') }}" required autocomplete="yoshi">

                                @error('yoshi')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        {{--Adress--}}
                        <div class="form-group row">

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="adress" class=" form-check-label"> {{__('Address')}}</label>

                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">

                                <input id="adress" type="text" class="form-control form-control-range @error('adress') is-invalid @enderror" placeholder="Address" name="adress" value="{{ old('adress') }}" required autocomplete="adress">

                                @error('adress')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        {{--Pasport seriyasi, nomeri--}}
                        <div class="form-group row">

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="pasport" class=" form-check-label"> {{__('Pasport seriyasi, no`meri')}}</label>

                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">

                                <input id="pasport" type="text" class="form-control form-control-range @error('pasport') is-invalid @enderror" placeholder="M: AA-1234567" name="pasport" value="{{ old('pasport') }}" required>

                                @error('pasport')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                                {{--Telefon Nomeri--}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <label for="tel" class=" form-check-label"> {{__('Telefon nomer')}}</label>
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="tel" type="tel" class="form-control form-control-range @error('name') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus placeholder="+998771234567">
                                        @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                            {{--Kelgan sana--}}
                            <div class="form-group row " >

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="kelgan_sana" class=" form-check-label"> {{__('Sana')}}</label>

                                </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">

                                    <input id="kelgan_sana" type="date" class="form-control form-control-range @error('kelgan_sana') is-invalid @enderror" name="kelgan_sana" value="{{ old('kelgan_sana') }} " required>

                                    @error('kelgan_sana')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label class=" form-check-label"> {{__('Bemor klinikada yotmoqchimi')}}</label>

                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0" >

                                <input id="check" type="checkbox" class="form-control form-check " style="width: 20px ;height: 20px" name="check"  onclick="checkboxf(this)"  value="false">

                            </div>
                        </div>







                            <div  id="palatahid" class="nav-item" hidden>



                                {{--Kirgan sana--}}
                                <div class="form-group row " >

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="kirgan_sana" class=" form-check-label"> {{__('Palataga kirgan sana')}}</label>

                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <input id="kirgan_sana" type="date" class="form-control form-control-range @error('kirgan_sana') is-invalid @enderror" name="kirgan_sana" value="{{ old('kirgan_sana') }}" >

                                        @error('kirgan_sana')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                 {{--Palata nomeri--}}
                                <div class="form-group row " >

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="palata_no" class=" form-check-label"> {{__('Palataga no`meri')}}</label>

                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <select id="palata_no"  name="palata_no" class="form-control form-control-range @error('palata_no') is-invalid @enderror ">
                                            <option value="10">     10       </option>
                                            <option value="25">     25       </option>
                                            <option value="50">     50       </option>
                                            <option value="100">    100      </option>
                                        </select>


                                        @error('palata_no')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                {{--Yotoq nomeri--}}
                                <div class="form-group row " >

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="yotoq_no" class=" form-check-label"> {{__('Yotoq no`meri')}}</label>

                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <select id="yotoq_no"  name="yotoq_no" class="form-control form-control-range @error('yotoq_no') is-invalid @enderror ">
                                            <option value="10">     10       </option>
                                            <option value="25">     25       </option>
                                            <option value="50">     50       </option>
                                            <option value="100">    100      </option>
                                        </select>


                                        @error('yotoq_no')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>





                            </div>



                            <div class="form-group row">
                                    <label for="tashxis" class=" form-check-label"> {{__('Tashxis')}}</label>

                                <textarea  id="tashxis" class="form-control form-control-range  @error('tashxis') is-invalid @enderror" name="tashxis"  required></textarea>
                                    @error('tashxis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>


                        </div>




                            <button type="submit" class="btn btn-primary btn-user btn-block">
                            {{ __('Register') }}
                            </button>



                        <hr>
                    </form>


                </div>
            </div>
        </div>

    @endsection
