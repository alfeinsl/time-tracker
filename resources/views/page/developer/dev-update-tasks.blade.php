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
                    <div class="mb-1">
                        <h4>Task name </h4>
                    </div>
                    <div class="mb-3">
                        <p>Add new page </p>
                    </div>
                    <div class="mb-1">
                        <h4>Description </h4>
                    </div>
                    <div class="mb-3">
                        <p>New page </p>
                    </div>
                    <div class="mb-3">
                        <h4>Status </h4>
                        <select class="form-select form-select-sm">
                            <option selected>Complete</option>
                            <option selected>On going</option>
                            <option selected>On hold</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <h4>Update status (%) </h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn t-2 bg-4 btn-lg">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection