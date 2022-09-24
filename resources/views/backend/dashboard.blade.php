@extends('backend.layouts.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="text-muted font-weight-bold mr-4">#XRS-45670</span>
				<a target="_balnk" href="{{route('home')}}" class="btn btn-light-warning font-weight-bolder btn-sm">Website</a>
				<!--end::Actions-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Actions-->
				<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Today</a>
				<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Month</a>
				<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Year</a>
				<!--end::Actions-->
				<!--begin::Daterange-->
				<a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
					<span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
					<span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
				</a>
				<!--end::Daterange-->
				<!--begin::Dropdowns-->
				<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
					<a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="svg-icon svg-icon-success svg-icon-lg">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
						<!--begin::Navigation-->
						<ul class="navi navi-hover py-5">
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-drop"></i>
									</span>
									<span class="navi-text">New Group</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-list-3"></i>
									</span>
									<span class="navi-text">Contacts</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-rocket-1"></i>
									</span>
									<span class="navi-text">Groups</span>
									<span class="navi-link-badge">
										<span class="label label-light-primary label-inline font-weight-bold">new</span>
									</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-bell-2"></i>
									</span>
									<span class="navi-text">Calls</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-gear"></i>
									</span>
									<span class="navi-text">Settings</span>
								</a>
							</li>
							<li class="navi-separator my-3"></li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-magnifier-tool"></i>
									</span>
									<span class="navi-text">Help</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-bell-2"></i>
									</span>
									<span class="navi-text">Privacy</span>
									<span class="navi-link-badge">
										<span class="label label-light-danger label-rounded font-weight-bold">5</span>
									</span>
								</a>
							</li>
						</ul>
						<!--end::Navigation-->
					</div>
				</div>
				<!--end::Dropdowns-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	@php
	$countuser = \App\Models\User::count();
	@endphp
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-lg-12 col-xxl-4">
					<!--begin::Mixed Widget 1-->
					<div class="card card-custom bg-gray-100 card-stretch gutter-b">
						<!--begin::Header-->

						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 position-relative overflow-hidden">
							<!--begin::Chart-->
							<div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-spacer mt-n25">
								<!--begin::Row-->
								<div class="row m-0">
									<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
													<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
													<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
													<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="" class="text-warning font-weight-bold font-size-h6">Admin ( {{$countuser}} )</a>
									</div>
									<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
										<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="" class="text-primary font-weight-bold font-size-h6 mt-2">Order</a>
									</div>

								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row m-0">
									<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
													<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
													<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
													<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="" class="text-warning font-weight-bold font-size-h6">Complete Project</a>
									</div>
									<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
										<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">Queue Project </a>
									</div>

								</div>
								<!--end::Row-->
								
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 1-->
				</div>
			</div>
			<!--end::Row-->
			<!--begin::Row-->

			<!--end::Row-->
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
@endsection