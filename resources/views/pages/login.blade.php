@extends('layouts.default')

@section('content')

    <div class="wrapper fadeInDown">
        <div id="formContent">
        <!-- Tabs Titles -->
    
        <!-- Icon -->
        <div class="fadeIn first">
            {{-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> --}}
            <br>
            <h4>ToDoList-Web</h4>
        </div>
    
        <!-- Login Form -->
        <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
    
        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>
    
        </div>
    </div>
@endsection