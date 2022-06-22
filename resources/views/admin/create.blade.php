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
       <div class="row">

        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h3 class="text-center text-danger"><b>Add New Destination</b></h3>
            <div class="form-group">
                <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="destination" class="form-control m-3" placeholder="title">
                {{-- FOR LOCATIONS --}}
                <select class="form-select" name="location" aria-label="Default select example">
                    <option selected>Select a location</option>
                    <option value="mainland">mainland</option>
                    <option value="lekki">lekki</option>
                    <option value="ibeju-lekki">ibeju-lekki</option>
                    <option value="badagry">badagry</option>
                    <option value="lagos-island">lagos-island</option>
                  </select>

                {{-- <input type="text" name="location" class="form-control m-3" placeholder="author"> --}}
                <textarea name="description" id="" cols="20" rows="4" class="form-control m-2" placeholder="body"></textarea>
                <label for="cover" class="m-2">Cover Image</label>
                <input type="file" name="cover" id="input-image" class="form-control m-2">

                <label for="image" class="m-2">Images</label>
                <input type="file" name="images[]" id="input-more-image" class="form-control m-2" multiple>

                <button type="submit" class="btn btn-danger mt-3">Submit</button>
                </form>
            </div>
        </div>
       </div>
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
