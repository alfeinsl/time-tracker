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
                    <div class="mb-4">
                        <h4>Select Project </h4>
                    </div>
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
                        <th>Add new page</th>
                        <td>New page</td>
                        <td>Complete</td>
                        <td>Feed</td>
                        <td><button class="btn t-2 bg-4 btn-lg">Update</button></td>
                        </tr>
                        <tr>
                        <th>Delete old button</th>
                        <td>New button</td>
                        <td>On going</td>
                        <td>Feed</td>
                        <td><button class="btn t-2 bg-4 btn-lg">Update</button></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection