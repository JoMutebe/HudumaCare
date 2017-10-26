
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Medical History </h2>

    <h3>Reason for visit to HAU </h3> {!! Form::open(['action' => 'yyyyController@store']) !!}

    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> Pain and Symptom Control
        </label>
    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"> Psychological Support
        </label>
    </div>

    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> End of Life Care
        </label>
    </div>


    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> Chemotherapy Funding
        </label>
    </div>

    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> Other
        </label>
    </div>

    <div class="form-group">
        {!! Form::label('', 'Please Specify') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('','Diagnosis') !!}
        <select class="form-control" id="" name="">
            <option value="HIV">HIV</option>
            <option value="Cancer">Cancer</option>
            <option value="HIV and Cancer"> HIV and Cancer</option>
            <option value="Unknown"> Unknown</option>
            <option value="Other">Other</option>


        </select>
    </div>

    <h3> HIV</h3>
    <div class="form-group">
        {!! Form::label('','HIV Status') !!}
        <select class="form-control" id="" name="">
            <option value="Positive">Positive</option>
            <option value="Negative">Negative</option>
            <option value="Unknown">Unknown</option>



        </select>
    </div>

    <div class="form-group">
        {!! Form::label('','Status Collection Method') !!}
        <select class="form-control" id="" name="">
            <option value="Positive">Self</option>
            <option value="Negative">Lab Report</option>
            <option value="Unknown">Care Giver</option>



        </select>
    </div>


    <div class="form-group">
        {!! Form::label('','HAART') !!}
        <select class="form-control" id="" name="">
            <option value="1st Line">1st Line</option>
            <option value="2nd Line">2nd Line</option>
            <option value="3rd Line">3rd Line</option>



        </select>
    </div>
    <div class="form-group">
        {!! Form::label('','HIV Prophylaxis') !!}
        <select class="form-control" id="" name="">
            <option value="jjjj">jjjj</option>
            <option value="kkkk">kkkk</option>
            <option value="llll">llll</option>



        </select>
    </div>

    <h3> Cancer  </h3>
    <div class="form-group">
        {!! Form::label('','Cancer Name') !!}
        <select class="form-control" id="" name="">
            <option value="Cancer 1"> Cancer 1</option>
            <option value="Cancer 2"> Cancer 2</option>
            <option value="Cancer 3"> Cancer 3</option>



        </select>
    </div>

    <div class="form-group">
        {!! Form::label('','Primary Site') !!}
        <select class="form-control" id="" name="">
            <option value="Throat">Throat</option>
            <option value="Brian">Brian</option>
            <option value="Lungs">Lungs</option>



        </select>
    </div>


    <div class="form-group">
        {!! Form::label('','State') !!}
        <select class="form-control" id="" name="">
            <option value="Benign">Benign</option>
            <option value="mmmm">mmm</option>
            <option value="other">other</option>



        </select>
    </div>


    <div class="form-group">
        {!! Form::label('','Stage') !!}
        <select class="form-control" id="" name="">
            <option value="Stage 1"> Stage 1</option>
            <option value="Stage 2"> Stage 2</option>
            <option value="Stage 3"> Stage 3</option>



        </select>
    </div>

    <div class="form-group">
        {!! Form::label('', 'Description') !!} {!! Form::textarea('', '',['class' => 'form-control']) !!}
    </div>


</div>



<div class="form-group">
    <button type="back" class="btn btn-primary">
        Back
    </button>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</div>

<div class="form-group">
    <button type="next" class="btn btn-primary">
        Next
    </button>
</div>
{!! Form::close() !!}
</div>
@endsection