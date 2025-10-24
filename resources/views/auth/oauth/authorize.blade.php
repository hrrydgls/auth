<!DOCTYPE html>
<html>

<head>
    <title>Authorize Application</title>
</head>

<body>
    <h1>Authorize "{{ $client->name }}"?</h1>

    <p>User: {{ $user->name }}</p>

    <!-- Approve -->
    <form method="post" action="{{ route('passport.authorizations.approve') }}">
        @csrf
        <button type="submit">Approve</button>
    </form>

    <!-- Deny -->
    <form method="post" action="{{ route('passport.authorizations.deny') }}">
        @csrf
        @method('DELETE')
        <button type="submit">Deny</button>
    </form>

    <!-- Debug info -->
    <pre>
Auth check: {{ Auth::check() ? 'yes' : 'no' }}
User: {{ Auth::user()->name ?? 'none' }}
Session token: {{ session()->token() }}
Form CSRF token: {{ csrf_token() }}
    </pre>
</body>

</html>
