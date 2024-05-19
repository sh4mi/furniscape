<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="border-bottom title-part-padding row">

            <h4 class="card-title mb-0">Orders</h4>


        </div>
        <div class="card-body">

            <div class="table-responsive m-t-40">
                <table id="zero_config" class="table display table-bordered table-striped no-wrap">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 40; $i++)
                        <tr>
                            <td>Tiger</td>
                            <td>Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>
                                <a href="javascript:void(0)" class="text-dark pe-2">
                                    <i data-feather="edit-2"  class="feather-sm fill-white"></i>
                                </a>
                                <a href="javascript:void(0)" class="text-dark">
                                        <i data-feather="trash-2"  class="feather-sm fill-white"></i>
                                </a>
                            </td>
                        </tr>
                        @endfor


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
