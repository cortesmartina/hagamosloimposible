<div class="col-md-6 col-md-push-1">
  <h2>Sumate!</h2>

  <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>

  {!! Form::open(array('route' => 'contact', 'class' => 'form')) !!}
      <div class="form-group">
        {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Nombre')) !!}
      </div>

      <div class="form-group">
          {!! Form::text('email', null, 
          array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email')) !!}
      </div>
      <div class="form-group">
          {!! Form::text('phone', null, 
          array('class'=>'form-control', 
              'placeholder'=>'Teléfono')) !!}
      </div>
      <div class="form-group">
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
</div>
