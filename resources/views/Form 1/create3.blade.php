@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Referral Information </h3> {!! Form::open(['action' => 'zzzController@store']) !!}

    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> For VCT for self/family, specify which
        </label>
    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"> For HIV treatment/inv
        </label>
    </div>

    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> For Cancer inv
        </label>
    </div>


    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> For TB inv/treatment
        </label>
    </div>

    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> For malaria inv/treatment
        </label>
    </div>

    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> For Psycho-social support-please state type
        </label>
    </div>

    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> For other clinical care, specify
        </label>
    </div>




    <h3> List Place/ Give Details </h3>
    <div class="form-group">
        {!! Form::label('', '') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', '') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', '') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', '') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', '') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', '') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', '') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>




    <div class="form-group">
        {!! Form::label('','Referred To') !!}
        <select class="form-control" id="" name="">
            <option value="Mulago National Referral Hospital">Mulago National Referral Hospital</option>
            <option value="JCRC">JCRC</option>
            <option value="IDI">IDI</option>
            <option value="MildMay">MildMay</option>
            <option value="Hospice Mankindye">Hospice Mankindye</option>
            <option value="Hospice Mbarara">Hospice Mbarara</option>
            <option value="Hospice Hoima">Hospice Hoima</option>



        </select>
    </div>

    <div class="form-group">
        {!! Form::label('','Support Given') !!}
        <select class="form-control" id="" name="">
            <option value="Given">Given </option>
            <option value="Not Given">Not Given</option>
        </select>
    </div>


    <div class="form-group">
        {!! Form::label('','Nature of Support') !!}
        <select class="form-control" id="" name="">
            <option value="Amount">Amount in UGX</option>
            <option value="Medication"> Medication</option>

        </select>
    </div>


    <div class="form-group">
        {!! Form::label('','Morphine Given') !!}
        <select class="form-control" id="" name="">
            <option value="Yes">Yes </option>
            <option value="No"> No</option>

        </select>
    </div>
    <div class="form-group">
        {!! Form::label('','Strength of Morphine') !!}
        <select class="form-control" id="" name="">
            <option value="5mg/ml">5mg/ml</option>
            <option value="10mg/ml">10mg/ml</option>

        </select>
    </div>


    <div class="form-group">
        {!! Form::label('','Quantity of Morphine') !!}
        <select class="form-control" id="" name="">
            <option value="unknown 1">unknown 1 </option>
            <option value="unknown 2">unknown 2 </option>
            <option value="unknown 3">unknown 3 </option>


        </select>
    </div>

    <h3> HAU Staff Details </h3>

    <div class="form-group">
        {!! Form::label('', 'Staff ID') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('', 'First Name') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('', 'Last Name') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('', 'Other Name') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('', 'Other Name') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('','Team Number') !!}
        <select class="form-control" id="" name="">
            <option value="Team 1">Team 1 </option>
            <option value="Team 2">Team 2 </option>
            <option value="Team 3">Team 3 </option>


        </select>
    </div>

    <div class="form-group">
        {!! Form::label('','Position') !!}
        <select class="form-control" id="" name="">
            <option value="Position 1">Position 1 </option>
            <option value="Position 2">Position 2 </option>
            <option value="Position 3">Position 3 </option>


        </select>
    </div>

    <div class="form-group">
        {!! Form::label('', 'Contact') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('','Site of Assessment') !!}
        <select class="form-control" id="" name="">
            <option value="Hospice Mankindye">Hospice Mankindye </option>
            <option value="Hospice Hoima">Hospice Hoima </option>
            <option value="Hospice Mbarara"> Hospice Mbarara </option>
            <option value="Hospital"> Hospital </option>



        </select>
    </div>

</div>



<div class="form-group">
    <button type="back" class="btn btn-primary">
        Back
    </button>
</div>

<div class="form-group">
    <button type="save" class="btn btn-primary">
        Save
    </button>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</div>
{!! Form::close() !!}
</div>

@endsection