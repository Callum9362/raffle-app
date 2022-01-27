<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Food, Fun and Stuff</title>
    <x-header />
</head>
<body>
    <div class="container mt-5 mb-2">
        @if(session()->has('message'))
        <div class="alert alert-success text-center">
            <span>{{ session()->get('message') }}</span>
        </div>
        @endif
        <div class="row">
            <div class="card">
                <div class="card-header text-center">
                    Add Participant
                </div>
                <div class="card-body">
                    <form action="{{ route('add-entrant') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <labe>Phone Number</label>
                                <input type="telephone" class="form-control" name="telephone" placeholder="Telephone number">
                                @error('telephone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2 mb-3">
                                <label>Select Raffle</label>
                                <select class="form-select" name="raffle">
                                    <option></option>
                                    <option value="Christmas">Christmas Raffle</option>
                                    <option value="Halloween">Halloween Raffle</option>
                                    <option value="Easter">Easter Raffle</option>
                                </select>
                                @error('raffle')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
        </body>
        <footer>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </footer>
</html>
