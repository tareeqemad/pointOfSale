@extends('layouts.admin')

@section('title', 'البائعين')
@section('content-header', 'البائعين')
@section('content-actions')
    <a href="{{route('vendor.create')}}" class="btn btn-primary">اضافة بائع</a>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Basic Data Table</h4>
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
