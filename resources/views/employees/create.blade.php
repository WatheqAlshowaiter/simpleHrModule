@extends('layouts.admin')
@section('content')
    <div class="col-12 py-0 px-3 row">
        <div class="col-12  pt-4" style="background: #fff;min-height: 80vh">
            <div class="col-12 px-3">
                <h4 class="font-4">إضافة موظف</h4>
            </div>
            <form class="col-12" method="POST" action="{{ route('employees.store') }}">
                @csrf
                <div class="col-12 p-2 row">
                    <div class="col-12 col-lg-8 p-2">
                        <div class="col-12 px-0 d-flex mb-3">
                            <div class="col-3 px-2 text-end pt-1">
                                اسم الموظف
                            </div>
                            <div class="col-9 px-2">
                                <input type="" name="name" class="form-control" value="{{ old('name') }}" required=""
                                    min="3" max="255">
                            </div>
                        </div>
                        <div class="col-12 px-0 d-flex mb-3">
                            <div class="col-3 px-2 text-end pt-1">
                                البريد الإلكتروني
                            </div>
                            <div class="col-9 px-2">
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                    required="" min="3" max="255">
                            </div>
                        </div>
                        <div class="col-12 px-0 d-flex mb-3">
                            <div class="col-3 px-2 text-end pt-1">
                                كلمة المرور
                            </div>
                            <div class="col-9 px-2">
                                <input type="password" name="password" class="form-control" value="{{ old('password') }}"
                                    required min="3" max="255">
                            </div>
                        </div>
                        <div class="col-12 px-0 d-flex mb-3">
                            <div class="col-3 px-2 text-end pt-1">
                                الصلاحيات
                            </div>
                            <div class="col-9 px-2">
                                <select name="roles" id="roles" required>
                                    <option value="2" selected>موظف</option>
                                    <option value="1">موظف موارد بشرية</option>
                                    <option value="0">مدير</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  px-0 d-flex mb-3">
                        <div class="col-12 px-2">
                            <style>
                                #submitEvaluation:hover {
                                    opacity: .8;
                                }

                            </style>
                            <button class="btn pb-2 px-4" id="submitEvaluation"
                                style="background: #ffa725;border-radius: 0px;color: #fff ">
                                حفظ
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
