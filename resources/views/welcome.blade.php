<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Gym-management</title>
    </head>
    <body>
        <div class="container m-4 p-5">
                <h1 class="fw-bold">Gym-management</h1>
                <p class="pt-3">This is Gym-management system</p> <hr>
            <div class="col-md-12 pt-3">
                <div class="row">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" >New member</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="col-form-label">name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label">Email:</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="membership_type" class="col-form-label">membership_type</label>
                                        <input type="text" class="form-control" name="membership_type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="membership_expiration" class="col-form-label">membership_expiration</label>
                                        <input type="date" class="form-control" name="membership_expiration">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a href="#"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                                <a href="/welcome"></a> <button type="sumbit" class="btn btn-primary" data-bs-dismiss="modal">submit</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <table class="table mt-3">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>membership_type</th>
                        <th>membership_expiration</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Alan Demol</td>
                        <td>alandemol05@gmail.com</td>
                        <td>Silver</td>
                        <td>2025/01/01</td>
                        <td>
                            <a class="btn btn-sm btn-light" href="#">✔</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('member.destroy', $member->id) }}">❌</a>
                        </td>
                    </tr> 
                </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
