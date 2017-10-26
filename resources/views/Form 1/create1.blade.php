<div class="container">
    <h3>Patient Bio Data </h3> {!! Form::open(['action' => 'xxxxController@store']) !!}

    <div class="form-group">
        {!! Form::label('', 'Patient ID') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
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
        {!! Form::text('date', '', array('id' => 'datepicker')) !!}

    </div>


    <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('gender','Gender') !!}
        <select class="form-control" id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

    </div>

    <div class="form-group">
        {!! Form::label('contact', 'Contact') !!} {!! Form::text('contact', '',['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('','Nationality') !!}
        <select class="form-control" id="" name="">
            <option value="Ugandan">Ugandan</option>
            <option value="Kenyan">Kenyan</option>
            <option value="Tanzanian"> Tanzanian</option>


        </select>
    </div>


    <div class="form-group">
        {!! Form::label('','Tribe') !!}
        <select class="form-control" id="" name="">
            <option value="Muganda">Muganda</option>
            <option value="Mutooro">Mutooro</option>

        </select>
    </div>





    <div class="form-group">
        {!! Form::label('','Religion') !!}
        <select class="form-control" id="" name="">
            <option value="Protestant"> Protestant</option>
            <option value="Catholic"> Catholic</option>

        </select>
    </div>



    <div class="form-group">
        {!! Form::label('', 'Residence') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('','District') !!}
        <select class="form-control" id="" name="">
            <option value="Kampala">Kampala</option>
            <option value="Hoima">Hoima</option>
            <option value="Wakiso">Wakiso</option>
            <option value="Mbarara"> Mbarara </option>

        </select>
    </div>

    <h3>Care Giver Details  </h3>

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
        {!! Form::label('','Relationship to patient') !!}
        <select class="form-control" id="" name="">
            <option value="x">x</option>
            <option value="y">y</option>
            <option value="z">z</option>
            <option value="t"> y </option>

        </select>
    </div>

    <div class="form-group">
        {!! Form::label('','Type of Care Giver') !!}
        <select class="form-control" id="" name="">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value="t"></option>

        </select>
    </div>

    <div class="form-group">
        {!! Form::label('', 'Personal_contact') !!} {!! Form::text('', '',['class' => 'form-control']) !!}
    </div>



</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Back
    </button>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Next
    </button>
</div>
{!! Form::close() !!}
</div>

@endsection