  @if($errors->has())
      <ul class=" large-6 columns no-bullet ulLoginError">
      {{$errors->first('first_name', '<li>:message</li>')}}
      {{$errors->first('last_name', '<li>:message</li>')}}
      {{$errors->first('phone', '<li>:message</li>')}}
      {{$errors->first('email', '<li>:message</li>')}}
      {{$errors->first('password', '<li>:message</li>')}}
      {{$errors->first('password_confirmation', '<li>:message</li>')}}
       </ul>
   @endif

      @if(Session::has('message'))
      {{Session::get('message')}}
      @endif