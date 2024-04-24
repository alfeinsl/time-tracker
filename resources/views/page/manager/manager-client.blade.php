@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">Tasks</h1>
        </div>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Clients</th>
                        <th>Email</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th>Name A</th>
                        <td>NameA@email.com</td>
                        <td><button class="btn t-2 bg-4 btn-lg">Edit</button>
                            <button class="btn t-2 bg-4 btn-lg">Suspend</button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection