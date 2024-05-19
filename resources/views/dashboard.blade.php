<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="card-group">
        <div class="card p-2 p-lg-3">
            <div class="p-lg-3 p-2">
                <div class="d-flex align-items-center">
                    <button class="btn btn-circle btn-danger text-white btn-lg" href="javascript:void(0)">
                    <i class="ti-clipboard"></i>
                </button>
                    <div class="ms-4" style="width: 38%;">
                        <h4 class="fw-normal">Total Projects</h4>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                        </div>
                    </div>
                    <div class="ms-auto">
                        <h2 class="display-7 mb-0">23</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card p-2 p-lg-3">
            <div class="p-lg-3 p-2">
                <div class="d-flex align-items-center">
                    <button class="btn btn-circle btn-cyan text-white btn-lg" href="javascript:void(0)">
                    <i class="ti-wallet"></i>
                </button>
                    <div class="ms-4" style="width: 38%;">
                        <h4 class="fw-normal">Total Earnings</h4>
                        <div class="progress">
                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                        </div>
                    </div>
                    <div class="ms-auto">
                        <h2 class="display-7 mb-0">76</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card p-2 p-lg-3">
            <div class="p-lg-3 p-2">
                <div class="d-flex align-items-center">
                    <button class="btn btn-circle btn-warning text-white btn-lg" href="javascript:void(0)">
                    <i class="fas fa-dollar-sign"></i>
                </button>
                    <div class="ms-4" style="width: 38%;">
                        <h4 class="fw-normal">Total Earnings</h4>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                        </div>
                    </div>
                    <div class="ms-auto">
                        <h2 class="display-7 mb-0">83</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Products yearly sales, Weather Cards Section  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="d-flex align-items-stretch col-lg-8">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <h5 class="card-title">Products Yearly Sales</h5>
                        <ul class="list-inline dl mb-0 ms-auto">
                            <li class="list-inline-item text-danger"><i class="fa fa-circle"></i> Mac</li>
                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Windows</li>
                        </ul>
                    </div>

                    <div id="products-yearly-sales"></div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-stretch col-lg-4">
            <div class="card w-100">
                <div class="bg-danger d-flex justify-content-center">
                    <div id="week-sales" class="mx-auto" style="height: 304px"></div>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="font-weight-medium card-title">Week Sales</h4>
                            <h5 class="card-subtitle mb-0">Ios app - 160 sales</h5>
                        </div>
                        <div class="ms-auto">
                            <button class="btn btn-circle btn-info text-white btn-lg" href="javascript:void(0)">
                                <i class="ti-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Manage Table & Walet Cards Section  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs manage-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#users" role="tab">
                            <span class="hidden-sm-up">
                                <h4><i data-feather="users" class="feather-sm"></i></h4>
                            </span>
                            <span class="d-none d-md-block">Select Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#permissions" role="tab">
                            <span class="hidden-sm-up">
                                <h4><i data-feather="lock" class="feather-sm"></i></h4>
                            </span>
                            <span class="d-none d-md-block">Set Permissions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                            <span class="hidden-sm-up">
                                <h4><i data-feather="file-text" class="feather-sm"></i></h4>
                            </span>
                            <span class="d-none d-md-block">Message Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#save" role="tab">
                            <span class="hidden-sm-up">
                                <h4><i data-feather="check-circle" class="feather-sm"></i></h4>
                            </span>
                            <span class="d-none d-md-block">Save and Finish</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="users" role="tabpanel">
                        <div class="row py-4 px-5 no-gutters mt-3">
                            <div class="col-sm-12 col-md-6 d-flex justify-content-start">
                                <h3 class="card-title mb-0">Select Users to Manage</h3>
                            </div>
                            <div class="col-sm-12 col-md-6 justify-content-end d-flex">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">
                                        <i data-feather="user-plus" class="feather-sm"></i>
                                        <span class="ms-2 fw-normal fs-4">Add User</span>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i data-feather="edit-2" class="feather-sm"></i>
                                        <span class="ms-2 fw-normal">Edit User</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light">
                            <div class="table-responsive border-top manage-table px-4 py-3">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0">Name</th>
                                            <th scope="col" class="border-0">Position</th>
                                            <th scope="col" class="border-0">Joined</th>
                                            <th scope="col" class="border-0">Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="advanced-table active">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c1" checked="">
                                                    <label class="form-check-label" for="c1">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/1.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Andrew Simons</td>
                                            <td>Modulator</td>
                                            <td>6 May 2021</td>
                                            <td>Gujrat, India</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c2">
                                                    <label class="form-check-label" for="c2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/2.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Hanna Gover</td>
                                            <td>Admin </td>
                                            <td>13 Jan 2005</td>
                                            <td>Texas, United states</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c3">
                                                    <label class="form-check-label" for="c3">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/3.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Joshi Nirav</td>
                                            <td>Admin</td>
                                            <td>21 Mar 2001</td>
                                            <td>Bhavnagar, India</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c4">
                                                    <label class="form-check-label" for="c4">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/4.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Joshi Sunil</td>
                                            <td>Admin</td>
                                            <td>21 Mar 2004</td>
                                            <td>Gujarat, India</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-4 mt-2">
                            <h3 class="card-title mb-0">1 members selected</h3>
                            <div class="ms-auto">
                                <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="permissions" role="tabpanel">
                        <div class="row py-4 px-5 no-gutters mt-3">
                            <div class="col-sm-12 col-md-6 d-flex justify-content-start">
                                <h3 class="card-title mb-0">Set User Permission</h3>
                            </div>
                            <div class="col-sm-12 col-md-6 justify-content-end d-flex">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">
                                        <i data-feather="user-plus" class="feather-sm"></i>
                                        <span class="ms-2 fw-normal fs-4">Add User</span>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i data-feather="edit-2" class="feather-sm"></i>
                                        <span class="ms-2 fw-normal">Edit User</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light">
                            <div class="table-responsive border-top manage-table px-4 py-3">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0">Name</th>
                                            <th scope="col" class="border-0">Position</th>
                                            <th scope="col" class="border-0">Joined</th>
                                            <th scope="col" class="border-0">Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c5">
                                                    <label class="form-check-label" for="c5">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/1.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Andrew Simons</td>
                                            <td>Modulator</td>
                                            <td>6 May 2021</td>
                                            <td>Gujrat, India</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table active">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c6" checked="">
                                                    <label class="form-check-label" for="c6">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/2.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Hanna Gover</td>
                                            <td>Admin </td>
                                            <td>13 Jan 2005</td>
                                            <td>Texas, United states</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c7">
                                                    <label class="form-check-label" for="c7">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/3.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Joshi Nirav</td>
                                            <td>Admin</td>
                                            <td>21 Mar 2001</td>
                                            <td>Bhavnagar, India</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c8">
                                                    <label class="form-check-label" for="c8">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/4.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Joshi Sunil</td>
                                            <td>Admin</td>
                                            <td>21 Mar 2004</td>
                                            <td>Gujarat, India</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-4 mt-2">
                            <h3 class="card-title mb-0">1 members selected</h3>
                            <div class="ms-auto">
                                <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <div class="row py-4 px-5 no-gutters mt-3">
                            <div class="col-sm-12 col-md-6 d-flex justify-content-start">
                                <h3 class="card-title mb-0">Manage Users</h3>
                            </div>
                            <div class="col-sm-12 col-md-6 justify-content-end d-flex">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">
                                        <i data-feather="user-plus" class="feather-sm"></i>
                                        <span class="ms-2 fw-normal fs-4">Add User</span>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i data-feather="edit-2" class="feather-sm"></i>
                                        <span class="ms-2 fw-normal">Edit User</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light">
                            <div class="table-responsive border-top manage-table px-4 py-3">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0">Name</th>
                                            <th scope="col" class="border-0">Position</th>
                                            <th scope="col" class="border-0">Joined</th>
                                            <th scope="col" class="border-0">Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c9">
                                                    <label class="form-check-label" for="c9">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/1.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Andrew Simons</td>
                                            <td>Modulator</td>
                                            <td>6 May 2021</td>
                                            <td>Gujrat, India</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c10">
                                                    <label class="form-check-label" for="c10">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/2.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Hanna Gover</td>
                                            <td>Admin </td>
                                            <td>13 Jan 2005</td>
                                            <td>Texas, United states</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table active">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c11" checked="">
                                                    <label class="form-check-label" for="c11">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/3.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Joshi Nirav</td>
                                            <td>Admin</td>
                                            <td>21 Mar 2001</td>
                                            <td>Bhavnagar, India</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c12">
                                                    <label class="form-check-label" for="c12">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/4.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Joshi Sunil</td>
                                            <td>Admin</td>
                                            <td>21 Mar 2004</td>
                                            <td>Gujarat, India</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-4 mt-2">
                            <h3 class="card-title mb-0">1 members selected</h3>
                            <div class="ms-auto">
                                <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="save" role="tabpanel">
                        <div class="row py-4 px-5 no-gutters mt-3">
                            <div class="col-sm-12 col-md-6 d-flex justify-content-start">
                                <h3 class="card-title mb-0">Save & Finish</h3>
                            </div>
                            <div class="col-sm-12 col-md-6 justify-content-end d-flex">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">
                                        <i data-feather="user-plus" class="feather-sm"></i>
                                        <span class="ms-2 fw-normal fs-4">Add User</span>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i data-feather="edit-2" class="feather-sm"></i>
                                        <span class="ms-2 fw-normal">Edit User</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light">
                            <div class="table-responsive border-top manage-table px-4 py-3">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0"></th>
                                            <th scope="col" class="border-0">Name</th>
                                            <th scope="col" class="border-0">Position</th>
                                            <th scope="col" class="border-0">Joined</th>
                                            <th scope="col" class="border-0">Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c13">
                                                    <label class="form-check-label" for="c13">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/1.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Andrew Simons</td>
                                            <td>Modulator</td>
                                            <td>6 May 2021</td>
                                            <td>Gujrat, India</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c14">
                                                    <label class="form-check-label" for="c14">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/2.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Hanna Gover</td>
                                            <td>Admin </td>
                                            <td>13 Jan 2005</td>
                                            <td>Texas, United states</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c15">
                                                    <label class="form-check-label" for="c15">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/3.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Joshi Nirav</td>
                                            <td>Admin</td>
                                            <td>21 Mar 2001</td>
                                            <td>Bhavnagar, India</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="sml-pd"></td>
                                        </tr>
                                        <tr class="advanced-table active">
                                            <td class="ps-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="c16" checked="">
                                                    <label class="form-check-label" for="c16">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/users/4.jpg') }}" class="rounded-circle" width="30">
                                            </td>
                                            <td>Joshi Sunil</td>
                                            <td>Admin</td>
                                            <td>21 Mar 2004</td>
                                            <td>Gujarat, India</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-4 mt-2">
                            <h3 class="card-title mb-0">1 members selected</h3>
                            <div class="ms-auto">
                                <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-flex mt-3">
                        <button class="btn btn-circle btn-success text-white btn-lg" href="javascript:void(0)">
                            <i class="ti-plus"></i>
                        </button>
                        <div class="ms-3">
                            <h2 class="display-6">$456.90</h2>
                            <h5 class="fw-light">Your wallet Balance</h5>
                        </div>
                    </div>
                    <div id="wallet-balance" class="mt-3"></div>
                </div>
                <ul class="list-style-none">
                    <li class="py-2 px-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="ti-wallet font-24 text-info"></i>
                            <a href="#" class="ms-3 fs-4">Withdrow money</a>
                        </div>
                    </li>
                    <li class="py-2 px-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="ti-bag font-24 text-info"></i>
                            <a href="#" class="ms-3 fs-4">Shop Now</a>
                        </div>
                    </li>
                    <li class="py-2 px-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="ti-briefcase font-24 text-info"></i>
                            <a href="#" class="ms-3 fs-4">Add funds</a>
                        </div>
                    </li>
                    <li class="py-2 px-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="ti-wallet font-24 text-info"></i>
                            <a href="#" class="ms-3 fs-4">Shop Now</a>
                        </div>
                    </li>
                    <li class="py-2 px-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="ti-wallet font-24 text-info"></i>
                            <a href="#" class="ms-3 fs-4">Withdrow money</a>
                        </div>
                    </li>
                    <li class="py-2 px-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="ti-bag font-24 text-info"></i>
                            <a href="#" class="ms-3 fs-4">Shop Now</a>
                        </div>
                    </li>
                    <li class="py-2 px-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="ti-wallet font-24 text-info"></i>
                            <a href="#" class="ms-3 fs-4">Withdrow money</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- User Table & Profile Cards Section  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Manage Users</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="border-0 fs-4 font-weight-medium ps-4">#</th>
                                <th scope="col" class="border-0 fs-4 font-weight-medium">Name</th>
                                <th scope="col" class="border-0 fs-4 font-weight-medium">Occupation</th>
                                <th scope="col" class="border-0 fs-4 font-weight-medium">Email</th>
                                <th scope="col" class="border-0 fs-4 font-weight-medium">Category</th>
                                <th scope="col" class="border-0 fs-4 font-weight-medium">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">1</td>
                                <td>
                                    <h5 class="font-weight-medium mb-0">Daniel Kristeen</h5>
                                    <span class="text-muted">Texas, Unitedd states</span>
                                </td>
                                <td>
                                    <span>Visual Designer</span><br>
                                    <span>Past : teacher</span>
                                </td>
                                <td>
                                    <span>daniel@website.com</span><br>
                                    <span>999 - 444 - 555</span>
                                </td>
                                <td>
                                    <select class="form-select category-select" id="exampleFormControlSelect1">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">2</td>
                                <td>
                                    <h5 class="font-weight-medium mb-0">Emma Smith</h5>
                                    <span class="text-muted">Texas, Unitedd states</span>
                                </td>
                                <td>
                                    <span>Visual Designer</span><br>
                                    <span>Past : teacher</span>
                                </td>
                                <td>
                                    <span>daniel@website.com</span><br>
                                    <span>999 - 444 - 555</span>
                                </td>
                                <td>
                                    <select class="form-select category-select" id="exampleFormControlSelect1">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">3</td>
                                <td>
                                    <h5 class="font-weight-medium mb-0">Olivia Johnson</h5>
                                    <span class="text-muted">Texas, Unitedd states</span>
                                </td>
                                <td>
                                    <span>Visual Designer</span><br>
                                    <span>Past : teacher</span>
                                </td>
                                <td>
                                    <span>daniel@website.com</span><br>
                                    <span>999 - 444 - 555</span>
                                </td>
                                <td>
                                    <select class="form-select category-select" id="exampleFormControlSelect1">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">4</td>
                                <td>
                                    <h5 class="font-weight-medium mb-0">Isabella Williams</h5>
                                    <span class="text-muted">Texas, Unitedd states</span>
                                </td>
                                <td>
                                    <span>Visual Designer</span><br>
                                    <span>Past : teacher</span>
                                </td>
                                <td>
                                    <span>daniel@website.com</span><br>
                                    <span>999 - 444 - 555</span>
                                </td>
                                <td>
                                    <select class="form-select category-select" id="exampleFormControlSelect1">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">5</td>
                                <td>
                                    <h5 class="font-weight-medium mb-0">Sophia Jones</h5>
                                    <span class="text-muted">Texas, Unitedd states</span>
                                </td>
                                <td>
                                    <span>Visual Designer</span><br>
                                    <span>Past : teacher</span>
                                </td>
                                <td>
                                    <span>daniel@website.com</span><br>
                                    <span>999 - 444 - 555</span>
                                </td>
                                <td>
                                    <select class="form-select category-select" id="exampleFormControlSelect1">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">6</td>
                                <td>
                                    <h5 class="font-weight-medium mb-0">Charlotte Brown</h5>
                                    <span class="text-muted">Texas, Unitedd states</span>
                                </td>
                                <td>
                                    <span>Visual Designer</span><br>
                                    <span>Past : teacher</span>
                                </td>
                                <td>
                                    <span>daniel@website.com</span><br>
                                    <span>999 - 444 - 555</span>
                                </td>
                                <td>
                                    <select class="form-select category-select" id="exampleFormControlSelect1">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="text-info edit"><i data-feather="eye" class="feather-sm fill-white"></i></a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2"><i data-feather="trash-2" class="feather-sm fill-white"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Todo list & Calender application  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="d-flex align-items-center px-3 py-4 border-bottom">
                    <div>
                        <h4 class="card-title">To-do List</h4>
                        <h5 class="card-subtitle mb-0">This Months Task</h5>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-danger text-white btn-rounded" data-bs-toggle="modal" data-bs-target="#addtask">Add Task</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="todo-widget">
                        <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                            <li class="list-group-item border-0 mb-0 pb-3 pe-3 ps-0" data-role="task">
                                <div class="form-check border-start border-2 border-info ps-1">
                                    <input type="checkbox" class="form-check-input ms-2" id="inputSchedule" name="inputCheckboxesSchedule">
                                    <label for="inputSchedule" class="form-check-label ps-2 fw-normal"> <span>Schedule meeting with</span> </label>
                                </div>
                                <ul class="assignedto list-inline m-0 ps-4 ms-3 mt-2">
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/1.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Steave"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/2.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Jessica"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/3.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Priyanka"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/4.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Selina"></li>
                                </ul>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="form-check border-start border-2 border-danger ps-1 d-flex">
                                    <input type="checkbox" class="form-check-input ms-2" id="inputCall" name="inputCheckboxesCall">
                                    <label for="inputCall" class="form-check-label ps-2 fw-normal"> <span>Give Purchase report to</span> <span class="badge bg-light-danger text-danger">Today</span> </label>
                                </div>
                                <ul class="assignedto list-inline m-0 ps-4 ms-3 mt-2">
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/3.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Priyanka"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/4.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Selina"></li>
                                </ul>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="form-check border-start border-2 border-primary ps-1">
                                    <input type="checkbox" class="form-check-input ms-2" id="inputBook" name="inputCheckboxesBook">
                                    <label for="inputBook" class="form-check-label ps-2 fw-normal"> <span>Book flight for holiday</span> </label>
                                </div>
                                <div class="item-date fs-2 ps-4 ms-3 text-muted d-inline-block"> 26 jun 2021</div>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="form-check border-start border-2 border-warning ps-1">
                                    <input type="checkbox" class="form-check-input ms-2" id="inputForward" name="inputCheckboxesForward">
                                    <label for="inputForward" class="form-check-label ps-2 fw-normal"> <span>Forward all tasks</span> <span class="badge bg-light-warning text-warning">2 weeks</span> </label>
                                </div>
                                <div class="item-date fs-2 ps-4 ms-3 text-muted d-inline-block"> 26 jun 2021</div>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="form-check border-start border-2 border-primary ps-1">
                                    <input type="checkbox" class="form-check-input ms-2" id="inputRecieve" name="inputCheckboxesRecieve">
                                    <label for="inputRecieve" class="form-check-label ps-2 fw-normal"> <span>Recieve shipment</span> </label>
                                </div>
                                <div class="item-date fs-2 ps-4 ms-3 text-muted d-inline-block"> 26 jun 2021</div>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="form-check border-start border-2 border-info ps-1">
                                    <input type="checkbox" class="form-check-input ms-2" id="inputpayment" name="inputCheckboxespayment">
                                    <label for="inputpayment" class="form-check-label ps-2 fw-normal"> <span>Send payment today</span> </label>
                                </div>
                                <div class="item-date fs-2 ps-4 ms-3 text-muted d-inline-block"> 26 jun 2021</div>
                            </li>
                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="form-check border-start border-2 border-success ps-1">
                                    <input type="checkbox" class="form-check-input ms-2" id="inputForward2" name="inputCheckboxesd">
                                    <label for="inputForward2" class="form-check-label ps-2 fw-normal"> <span>Important tasks</span> <span class="badge bg-light-success text-success">2 weeks</span> </label>
                                </div>
                                <ul class="assignedto list-inline m-0 ps-4 ms-3 mt-2">
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/1.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Steave"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/2.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Jessica"></li>
                                    <li class="list-inline-item"><img class="rounded-circle" src="{{ asset('assets/images/users/4.jpg') }}" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Selina"></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="addtask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                                <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="text_name">Name</label>
                                        <input type="text" class="form-control" id="text_name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_email">Email Address</label>
                                        <input type="email" class="form-control" id="txt_email" placeholder="Enter Email">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="calender-sidebar">
                    <div id="calendar"></div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-bs-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Social Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/images/big/img1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted"><i data-feather="calendar" class="feather-sm text-info"></i> May 16</span>
                        <div class="ms-auto">
                            <a href="javascript:void(0)" class="text-muted"><i data-feather="heart" class="feather-sm text-danger"></i> 30</a>
                        </div>
                    </div>
                    <h4 class="mt-3">Top 20 Models are on the ramp</h4>
                    <p class="mt-3 text-muted">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                    <button class="btn btn-light-primary text-primary btn-rounded waves-effect waves-light mt-2">Read more</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/images/big/img2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted"><i data-feather="calendar" class="feather-sm text-info"></i> May 16</span>
                        <div class="ms-auto">
                            <a href="javascript:void(0)" class="text-muted"><i data-feather="heart" class="feather-sm text-danger"></i> 30</a>
                        </div>
                    </div>
                    <h4 class="mt-3">Top 20 Models are on the ramp</h4>
                    <p class="mt-3 text-muted">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                    <button class="btn btn-light-primary text-primary btn-rounded waves-effect waves-light mt-2">Read more</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/images/big/img3.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <span class="text-muted"><i data-feather="calendar" class="feather-sm text-info"></i> May 16</span>
                        <div class="ms-auto">
                            <a href="javascript:void(0)" class="text-muted"><i data-feather="heart" class="feather-sm text-danger"></i> 30</a>
                        </div>
                    </div>
                    <h4 class="mt-3">Top 20 Models are on the ramp</h4>
                    <p class="mt-3 text-muted">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                    <button class="btn btn-light-primary text-primary btn-rounded waves-effect waves-light mt-2">Read more</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Chat App, Timeline & Chat Listing  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <h5 class="card-title p-3 card-header mb-0">
                    Chat Listing
                </h5>
                <div class="p-3">
                    <ul class="list-style-none chat-list">
                        <li class="mb-3">
                            <a href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/users/1.jpg') }}" class="rounded-circle" width="40">
                                    <div class="ms-3">
                                        <h5 class="mb-0">Varun Dhavan</h5>
                                        <small class="text-success">Online</small>
                                    </div>
                                    <div class="ms-auto chat-icon">
                                        <button type="button" class="btn btn-light-success text-success btn-circle btn-circle">
                                            <i data-feather="phone" class="feather-sm"></i>
                                          </button>
                                        <button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">
                                            <i data-feather="message-circle" class="feather-sm"></i>
                                          </button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/users/2.jpg') }}" class="rounded-circle" width="40">
                                    <div class="ms-3">
                                        <h5 class="mb-0">Akshay Kumar</h5>
                                        <small class="text-muted">Offline</small>
                                    </div>
                                    <div class="ms-auto chat-icon">
                                        <button type="button" class="btn btn-light-success text-success btn-circle btn-circle">
                                            <i data-feather="phone" class="feather-sm"></i>
                                          </button>
                                        <button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">
                                            <i data-feather="message-circle" class="feather-sm"></i>
                                          </button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/users/3.jpg') }}" class="rounded-circle" width="40">
                                    <div class="ms-3">
                                        <h5 class="mb-0">Shraddha Kapoor</h5>
                                        <small class="text-success">Online</small>
                                    </div>
                                    <div class="ms-auto chat-icon">
                                        <button type="button" class="btn btn-light-success text-success btn-circle btn-circle">
                                            <i data-feather="phone" class="feather-sm"></i>
                                          </button>
                                        <button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">
                                            <i data-feather="message-circle" class="feather-sm"></i>
                                          </button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/users/4.jpg') }}" class="rounded-circle" width="40">
                                    <div class="ms-3">
                                        <h5 class="mb-0">Madhuri Dixit</h5>
                                        <small class="text-danger">Busy</small>
                                    </div>
                                    <div class="ms-auto chat-icon">
                                        <button type="button" class="btn btn-light-success text-success btn-circle btn-circle">
                                            <i data-feather="phone" class="feather-sm"></i>
                                          </button>
                                        <button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">
                                            <i data-feather="message-circle" class="feather-sm"></i>
                                          </button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/users/5.jpg') }}" class="rounded-circle" width="40">
                                    <div class="ms-3">
                                        <h5 class="mb-0">Shaina Nehwal</h5>
                                        <small class="text-muted">Offline</small>
                                    </div>
                                    <div class="ms-auto chat-icon">
                                        <button type="button" class="btn btn-light-success text-success btn-circle btn-circle">
                                            <i data-feather="phone" class="feather-sm"></i>
                                          </button>
                                        <button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">
                                            <i data-feather="message-circle" class="feather-sm"></i>
                                          </button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/users/6.jpg') }}" class="rounded-circle" width="40">
                                    <div class="ms-3">
                                        <h5 class="mb-0">Varun Dhavan</h5>
                                        <small class="text-success">Online</small>
                                    </div>
                                    <div class="ms-auto chat-icon">
                                        <button type="button" class="btn btn-light-success text-success btn-circle btn-circle">
                                            <i data-feather="phone" class="feather-sm"></i>
                                          </button>
                                        <button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">
                                            <i data-feather="message-circle" class="feather-sm"></i>
                                          </button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/users/2.jpg') }}" class="rounded-circle" width="40">
                                    <div class="ms-3">
                                        <h5 class="mb-0">Akshay Kumar</h5>
                                        <small class="text-muted">Offline</small>
                                    </div>
                                    <div class="ms-auto chat-icon">
                                        <button type="button" class="btn btn-light-success text-success btn-circle btn-circle">
                                            <i data-feather="phone" class="feather-sm"></i>
                                          </button>
                                        <button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">
                                            <i data-feather="message-circle" class="feather-sm"></i>
                                          </button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/users/3.jpg') }}" class="rounded-circle" width="40">
                                    <div class="ms-3">
                                        <h5 class="mb-0">Shraddha Kapoor</h5>
                                        <small class="text-success">Online</small>
                                    </div>
                                    <div class="ms-auto chat-icon">
                                        <button type="button" class="btn btn-light-success text-success btn-circle btn-circle">
                                            <i data-feather="phone" class="feather-sm"></i>
                                          </button>
                                        <button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">
                                            <i data-feather="message-circle" class="feather-sm"></i>
                                          </button>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <h5 class="card-title p-3 card-header mb-0">
                    User Activity
                </h5>
                <div class="card-body scrollable" style="height: 598px;">
                    <div class="steamline mt-0">
                        <div class="sl-item">
                            <div class="sl-left">
                                <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                      <i class="ti-user"></i>
                    </button>
                            </div>
                            <div class="sl-right">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">John Doe</h5> <span class="sl-date ms-2">5 minutes ago</span>
                                </div>
                                    <p class="mt-1">Contrary to popular belief</p>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <button type="button" class="btn btn-info btn-circle btn-circle text-white">
                      <i class="fas fa-image"></i>
                    </button>
                            </div>
                            <div class="sl-right">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Hritik Roshan</h5>
                                    <span class="sl-date ms-2">5 minutes ago</span>
                                </div>
                                <p class="mt-1">Lorem Ipsum is simply dummy</p>
                                <div class="row mb-3">
                                    <div class="col">
                                        <img src="{{ asset('assets/images/big/img1.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('assets/images/big/img2.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('assets/images/big/img3.jpg') }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="rounded-circle" /> </div>
                            <div class="sl-right">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Gohn Doe</h5>
                                    <span class="sl-date ms-2">5 minutes ago</span>
                                </div>
                                <p class="mt-1">The standard chunk of ipsum</p>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="rounded-circle" /> </div>
                            <div class="sl-right">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Herry Deo</h5>
                                    <span class="sl-date ms-2">5 minutes ago</span>
                                </div>
                                <p class="">Contrary to popular belief hi there..!</p>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="{{ asset('assets/images/users/5.jpg') }}" alt="user" class="rounded-circle" /> </div>
                            <div class="sl-right">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Tiger Sroff</h5>
                                    <span class="sl-date ms-2">5 minutes ago</span>
                                </div>
                                <p class="mt-1">The generated lorem ipsum</p>
                                <button class="btn btn-outline-success btn-rounded mb-3">Approve</button>
                                <button class="btn btn-outline-danger btn-rounded mb-3 ms-2">Refuse</button>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                  <i class="ti-user"></i>
                                </button>
                            </div>
                            <div class="sl-right">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Peterson</h5> <span class="sl-date ms-2">15 minutes ago</span>
                                </div>
                                    <p class="mt-1">Contrary to popular belief</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <h5 class="card-title p-3 card-header mb-0">
                    Recent Chat
                </h5>
                <div class="card-body">
                    <div class="chat-box scrollable" style="height:434px;">
                        <!--chat Row -->
                        <ul class="chat-list m-0 p-0">
                            <!--chat Row -->
                            <li class="mt-4">
                                <div class="chat-img d-inline-block align-top"><img
                                        src="{{ asset('assets/images/users/1.jpg') }}" alt="user"
                                        class="rounded-circle" /></div>
                                <div class="chat-content ps-3 d-inline-block">
                                    <h5 class="text-muted fs-3 fw-normal">James Anderson</h5>
                                    <div class="message fs-3 bg-primary text-white d-inline-block mb-2 fw-normal shadow">
                                        Lorem Ipsum
                                        is simply dummy text of the printing & type setting industry.</div>
                                </div>
                                <div class="chat-time d-inline-block text-end fs-2 font-weight-medium">10:56 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="mt-4">
                                <div class="chat-img d-inline-block align-top"><img
                                        src="{{ asset('assets/images/users/2.jpg') }}" alt="user"
                                        class="rounded-circle" /></div>
                                <div class="chat-content ps-3 d-inline-block">
                                    <h5 class="text-muted fs-3 fw-normal">Bianca Doe</h5>
                                    <div class="message fs-3 bg-primary text-white d-inline-block mb-2 fw-normal shadow">
                                        It’s
                                        Great opportunity to work.</div>
                                </div>
                                <div class="chat-time d-inline-block text-end fs-2 font-weight-medium">10:57 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="odd mt-4">
                                <div class="chat-content ps-3 d-inline-block text-end">
                                    <div class="message fs-3 bg-light-inverse d-inline-block mb-2 font-weight-medium">
                                        I would
                                        love to join the team.</div>
                                    <br />
                                </div>
                                <div class="chat-time d-inline-block text-end fs-2 font-weight-medium">10:58 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="odd mt-4">
                                <div class="chat-content ps-3 d-inline-block text-end">
                                    <div class="message fs-3 bg-light-inverse d-inline-block mb-2 font-weight-medium">
                                        Whats
                                        budget of the ample admin project.</div>
                                    <br />
                                </div>
                                <div class="chat-time d-inline-block text-end fs-2 font-weight-medium">10:59 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="mt-4">
                                <div class="chat-img d-inline-block align-top"><img
                                        src="{{ asset('assets/images/users/3.jpg') }}" alt="user"
                                        class="rounded-circle" /></div>
                                <div class="chat-content ps-3 d-inline-block">
                                    <h5 class="text-muted fs-3 fw-normal">Angelina Rhodes</h5>
                                    <div class="message fs-3 bg-primary text-white d-inline-block mb-2 fw-normal shadow">
                                        Well we
                                        have good budget for the project</div>
                                </div>
                                <div class="chat-time d-inline-block text-end fs-2 font-weight-medium">11:00 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="mt-4">
                                <div class="chat-img d-inline-block align-top"><img
                                        src="{{ asset('assets/images/users/1.jpg') }}" alt="user"
                                        class="rounded-circle" /></div>
                                <div class="chat-content ps-3 d-inline-block">
                                    <h5 class="text-muted fs-3 fw-normal">James Anderson</h5>
                                    <div class="message fs-3 bg-primary text-white d-inline-block mb-2 fw-normal shadow">
                                        Lorem Ipsum
                                        is simply dummy text of the printing &
                                        type setting industry.</div>
                                </div>
                                <div class="chat-time d-inline-block text-end fs-2 font-weight-medium">10:56 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="odd mt-4">
                                <div class="chat-content ps-3 d-inline-block text-end">
                                    <div class="message fs-3 bg-light-inverse d-inline-block mb-2 font-weight-medium">
                                        Whats
                                        budget of the new project.</div>
                                    <br />
                                </div>
                                <div class="chat-time d-inline-block text-end fs-2 font-weight-medium">10:59 am</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row">
                        <div class="col-9">
                            <div class="input-field mt-0 mb-0">
                                <input type="text" id="textarea1" placeholder="Type and enter" class="form-control border-0">
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <a class="btn-circle btn-lg btn-success btn text-white" href="javascript:void(0)"><i data-feather="send" class="feather-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
