@extends('layout.sidebarlayout')

@section('other')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 class="t-4">Feedback</h1>
        </div>
    </div>
    <div class="row">
        <div class="card dashboard-card">
            <div class="card-body">
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label t-4">Feedback </label>
                        <textarea class="form-control " rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn t-2 bg-4 btn-lg">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection