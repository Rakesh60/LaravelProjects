<h2>Adit Registeration Form In Laravel</h2>
<!-- <h4>{{$errors}}</h4> -->
<table><form action="aditdata" method="post">
    @csrf
    <tr> 
         <td><label for="name">Name</label> </td>
         <td><input type="text" name="name" id="name"></td>
    </tr>
   
    <tr>
        <td><label for="email">Email</label>             </td>
        <td><input type="email" name="email" id="email"> </td>
    </tr>

    <tr>
        <td><label for="pin">Pincode</label></td>
        <td><input type="text" name="pincode" id="pin"></td>
    <tr> 

    <tr>
        <td><label for="state">State</label> </td>
        <td><input type="text" name="state" id="state"></td>
    <tr> 

  <tr> 
        <td><label for="pwd">Password</label></td>
        <td><input type="password" name="password" id="pwd"></td>
  <tr> 

   <tr><td ><button type="submit" >Login</button></td></tr>
</form>
</table>