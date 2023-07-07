<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contacts</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <main class="container">
    <h1 class="display-4 text-center my-5">Contacts</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form>
          <input type="search" name="s" class="form-control mb-3" placeholder="Search..." value="{{ request('s') }}">
        </form>
        <ul class="list-group">
          @foreach($contacts as $id => $contact)
          <li class="list-group-item">
            <a class="text-decoration-none" href="/contacts/{{ $id }}">{{ $contact['first_name'] }} {{ $contact['last_name'] }}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </main> 
  
</body>
</html>