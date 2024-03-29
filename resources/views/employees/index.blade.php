@extends('layouts.admin')
@section('content')
    <div class="col-12 py-2 px-3 row">
        <div class="col-12 px-2 pt-4 " style="background: #fff;min-height: 80vh">
            <div class="col-12 py-4 justify-content-between row d-flex">
                <div class="col-12 col-lg-4 px-2 mb-2">
                    <form method="get" action="">
                        <input type="" name="key" class="form-control" style="border-radius: 0px;border:1px solid #ddd"
                            placeholder="بحث .. " autofocus="" value="{{ request()->get('key') }}">
                    </form>
                </div>
                <div class="col-12 col-lg-4 px-2 justify-content-end d-flex mb-2">
                    <a href="{{route('employees.create')}}">
                        <button class="btn btn-primary pb-2 rounded-0"><span class="fas fa-plus"></span> إضافة
                            موظف</button>
                    </a>
                </div>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الاسم</th>
                        <th scope="col">البريد الإلكتروني</th>
                        <th scope="col">الصلاحيات</th>
                        <th scope="col">تحكم</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)

                        <tr>
                            <td scope="col">
                                {{ $employee->id }}
                            </td>
                            <td scope="col">
                                {{ $employee->name }}
                            </td>
                            <td scope="col">
                                {{ $employee->email }}
                            </td>
                            <td scope="col">
                                @if ($employee->roles == 0)
                                    {{ __('مدير') }}
                                @elseif($employee->roles == 1)
                                    {{ __('موظف موارد بشرية') }}
                                @else
                                    {{ __('موظف') }}
                                @endif
                            </td>
                            <td class=" row d-flex">
                                <form method="POST" action="" id="">@csrf @method('DELETE')</form>
                                <a href=""
                                    style="width: 30px;height: 30px;color: #fff;background: #2381c6;border-radius: 2px"
                                    class="d-flex align-items-center justify-content-center mx-1">
                                    <span class="fas fa-edit"></span>
                                </a>

                                <a href="#" style="width: 30px;height: 30px;color: #fff;background: #c00;border-radius: 2px"
                                    class="d-flex align-items-center justify-content-center mx-1">
                                    <span class="fas fa-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $employees->links() }}
            <div class="col-12 px-0 py-2">
                {{-- Search results --}}
                {{-- {{$clients->appends(request()->query())->render() }} --}}
            </div>
        </div>
    </div>
@endsection
