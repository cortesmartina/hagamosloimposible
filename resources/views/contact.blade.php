<h1>Contactanos</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Nombre') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Nombre')) !!}
</div>

<div class="form-group">
    {!! Form::label('Email') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email')) !!}
</div>
<div class="form-group">
    {!! Form::label('Teléfono') !!}
    {!! Form::text('phone', null, 
        array('class'=>'form-control', 
              'placeholder'=>'Dejanos tu teléfono si querés que te contactemos por WhatsApp')) !!}
</div>
<div class="form-group">
    {!! Form::label('Mensaje') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Mensaje')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}