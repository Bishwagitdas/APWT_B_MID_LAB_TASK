 <!DOCTYPE html>
<html>
<head>
  <title>SignUp Page</title>
</head>
<body>

  <form method="post" action="/user/signup">
   @csrf
    <center>
    <fieldset  style="width: 500px">
      <legend> CMS SignUp Page</legend>
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
                <tr>
          <td>Confirm-Password</td>
          <td><input type="password" name="confirm"></td>
        </tr>
        <tr>
          <td>Type</td>
          <td><input type="text" name="type"></td>
        </tr>
        
       </table>
      <hr width="100%" align="left">
      <input type="submit" name="submit" value="submit">
      <a href="/admin/login">Sign In </a>

    </table>
    </fieldset>
  </center>
  </form>

    <div>
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
        </div>
</body>
</html>