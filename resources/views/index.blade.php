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
        <div class="mt-5">
            <h6 class="text-center">Current Entrants</h6>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Ticket Number</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Raffle</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($entrants as $entrant)
                    <tr>
                        <td>{{ $entrant['id']}}</td>
                        <td>{{ $entrant['fullname']}}</td>
                        <td>{{ $entrant['telephone']}}</td>
                        <td>{{ $entrant['raffle']}}</td>
                    </tr>
                    @empty
                    <span>There are no entrants at this time.</span>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</footer>
</html>
