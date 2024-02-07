<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration Form</title>
</head>
<body>

  <h2>User Registration</h2>

  <form action="{{Route('Register.Registr')}}" method="post">
    @csrf
    @method('post')
   
    <label for="email"><title></title>:</label>
    <input type="email" id="email" name="email" required>
    <br>

    
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>

    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>

    
    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" id="confirmPassword" name="confirmPassword" required>
    <br>

    <!-- Submit Button -->
    <input type="submit" value="Register">
  </form>



  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>

  <tbody>
    @foreach(user as $key => $value)
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
<!--view pour invalable book-->
@foreach($unavailableBooks as $book)
    <p>{{ $book->title }}</p>
    @endforeach
</body>
</html>
   


