@extends('layouts.admin')
@section('content')
<div class="col-12 py-2 px-3 row">

	<div class="col-6 col-sm-4 col-lg-3 col-xl-2 px-2 mb-3">
		<div class="col-12 px-0 py-2 d-flex " style="background: #fff;">
			<div style="width: 80px;" class="p-2">
				<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #11233b;height: 64px;border-radius: 50%;">
					<span class="fas fa-users font-5" style="color: #fff"></span>
				</div>
			</div>
			<div style="width: calc(100% - 80px)" class="px-2 py-2">
				<h6 class="font-1">عدد الموظفين</h6>
				<h6 class="font-3">{{\App\Models\User::count()}}</h6>
			</div>
		</div>
	</div>


	<div class="col-6 col-sm-4 col-lg-3 col-xl-2 px-2 mb-3">
		<div class="col-12 px-0 py-2 d-flex " style="background: #fff;">
			<div style="width: 80px;" class="p-2">
				<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #11233b;height: 64px;border-radius: 50%;">
					<span class="fas fa-user-check font-5" style="color: #fff"></span>
				</div>
			</div>
			<div style="width: calc(100% - 80px)" class="px-2 py-2">
				<h6 class="font-1">الحضور</h6>
				<h6 class="font-3">80</h6>
			</div>
		</div>
	</div>
	<div class="col-6 col-sm-4 col-lg-3 col-xl-2 px-2 mb-3">
		<div class="col-12 px-0 py-2 d-flex " style="background: #fff;">
			<div style="width: 80px;" class="p-2">
				<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #11233b;height: 64px;border-radius: 50%;">
					<span class="fas fa-user-times font-5" style="color: #fff"></span>
				</div>
			</div>
			<div style="width: calc(100% - 80px)" class="px-2 py-2">
				<h6 class="font-1">الغياب</h6>
				<h6 class="font-3">22</h6>
			</div>
		</div>
	</div>


	<div class="col-12 px-3 row">
		<div class="col-12 col-lg-6 px-0 py-2 d-flex" style="background: #fff">
            <div class="col-6 py-4 offset-2 text-center">
                <span class="fas fa-user-cog font-10" style="height: 65px"></span>
                <div class="col-12 text-center font-2 mt-2">
                    إدارة الموظفين
                </div>
                <div class="col-12 text-center py-3">
                    <a href="{{route('employees.index')}}">
                        <button class="btn pb-2 px-4 pt-1" style="border-radius: 50px;background: #03a9f4;color:#fff">صفحة الموظفين</button>
                    </a>
                </div>
            </div>

		</div>
	</div>



</div>
@endsection
