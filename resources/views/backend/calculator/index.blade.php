@extends('backend.master')

@section('title')
    Calculator
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Calculator</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('calculator-result') }}" method="post">
                            @csrf
                            <div class="row">
                                <label for="" class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_number" value="{{ session('first_number') }}" class="form-control" placeholder="First Number">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Last Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_number" value="{{ session('last_number') }}" class="form-control" placeholder="Last Number">
                                </div>
                            </div>
                              <div class="row mt-3">
                                <label for="" class="col-md-4">Operators</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" checked name="operator" value="+">Add</label>
                                    <label for=""><input type="radio" name="operator" value="-">Sub</label>
                                    <label for=""><input type="radio" name="operator" value="*">Multi</label>
                                    <label for=""><input type="radio" name="operator" value="/">Div</label>
                                    <label for=""><input type="radio" name="operator" value="%">Mod</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input type="text" name="" class="form-control" value="{{ session('result') }}" placeholder="Result">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Get Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
