<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $contact['first_name'] }} {{ $contact['last_name'] }}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <main class="container">
    <h1 class="display-4 text-center my-5">{{ $contact['first_name'] }} {{ $contact['last_name'] }}</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <p><strong>Email:</strong> {{ $contact['email'] }}</p>
        <p><strong>Phone:</strong> {{ sprintf("(%s) %s-%s", substr($contact['phone'], 0, 3), substr($contact['phone'], 4, 3), substr($contact['phone'], 6)) }}</p>
        <p><strong>Birthday:</strong> {{ $contact['birthday'] }}</p>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <a href="/contacts" class="btn btn-primary">Back to all contacts</a>
      </div>
    </div>
  </main> 
  
</body>
</html>