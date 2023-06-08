<h2>Login Form In Laravel</h2>
<!-- <h4>{{$errors}}</h4> -->
<form action="login" method="post">
    @csrf
   <label for="username">Username</label> 
   <input type="text" name="username" id="username">
   <span style="color:red">@error('username'){{$message}}@enderror</span>
   <br><br>
   <label for="pwd">Password</label>
   <input type="password" name="password" id="pwd">
   <span style="color:red">@error('password'){{$message}}@enderror
   <br><br>
 <button type="submit" >Login</button>
</form>