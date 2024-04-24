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
                        <th>Task</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Feedback</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th>Project A</th>
                        <td>New blabla</td>
                        <td>Ongoing</td>
                        <td>Feed</td>
                        <td><button class="btn t-2 bg-4 btn-lg">Feedback</button></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection