@extends('dairy.templates.dairy_template')

@section('dairy_content')

<div class="ui pointing menu">
  <a class="active item">Home </a>
  <a class="item">Messages </a>
  <a class="item">Друзья </a>
  <div class="right menu">
    <div class="item">
      <div class="ui transparent icon input">
        <input placeholder="Search..." type="text">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>
</div>
<div class="ui segment">
  <p></p>
</div>

@endsection