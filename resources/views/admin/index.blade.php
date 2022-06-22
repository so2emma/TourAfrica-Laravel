<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD with Multiple Image Upload</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Font-Awesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container" style="margin-top: 50px">
        <h3 class="text-center text-danger"><b>Laravel Crud With Multiple Image Upload</b></h3>
        <a href="/create" class="btn btn-outline-success">Add New Destination</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destination</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Cover</th>
                    <th>Update</th>
                    <th>Delete</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinations as $destination)
                <tr>
                    <th scope="row">{{ $destination->id }}</th>
                    <td>{{ $destination->destination }}</td>
                    <td>{{ $destination->location }}</td>
                    <td>{{ $destination->description }}</td>
                    <td><img src="cover/{{ $destination->cover }}" class="img-fluid" height="100px" width="100px" alt=""></td>
                    <td><a href="/edit/{{ $destination->id }}" class="btn btn-outline-primary">Update</a></td>
                    <td>
                        <form action="/delete/{{ $destination->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
