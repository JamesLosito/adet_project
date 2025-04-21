use Illuminate\Support\Facades\Auth;

public function store(Request $request)
{
    $this->validateLogin($request);

    if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
        $request->session()->regenerate();
        return redirect()->route('home'); // Redirect to the home route
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
