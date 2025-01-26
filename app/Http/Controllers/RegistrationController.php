<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;
class RegistrationController extends Controller
{
    public function showRegisterGroup()
    {
        return view('auth.registerGroup');
    }
    public function submitRegisterGroup(Request $request)
    {
        $request->validate([
            'group_name' => 'required|string|max:255|unique:registrations,group_name',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[A-Z]/',    // tes Uppercase
                'regex:/[a-z]/',    // tes Lowercase
                'regex:/[0-9]/',    // tes Angka
                'regex:/[@$!%*?&#]/', // tes karakter spesial
                'confirmed',       // sama dengan password konfirmasi
            ],
            'password_confirmation' => 'required',
            'binusian_status' => 'required|in:Binusian,Non-Binusian',
        ]);
        session([
            'group_name' => $request->group_name,
            'password' => bcrypt($request->password),
            'binusian_status' => $request->binusian_status,
        ]);

        if ($request->binusian_status === 'Binusian') {
            return redirect()->route('auth.registerBinusian');
        } else {
            return redirect()->route('auth.registerNonBinusian');
        }
    }
    public function showRegisterBinusian()
    {
        return view('auth.registerBinusian');
    }
    public function showRegisterNonBinusian()
    {
        return view('auth.registerNonBinusian');
    }
    public function submitRegisterBinusian(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations,email',
            'whatsapp' => 'required|string|max:15',
            'line_id' => 'required|string|max:50|unique:registrations,line_id',
            'github_id' => 'required|string|max:100',
            'birthplace' => 'required|string|max:100',
            'birthdate' => 'required|date',
            'cv' => 'required|mimes:pdf|max:2048',
            'id_card' => 'required|mimes:jpg,jpeg,png|max:2048',
        ], [
            'email.unique' => 'Email is already taken, please use another one.',
            'line_id.unique' => 'Line ID is already taken, please use another one.',
            'email.email' => 'Please enter a valid email like user@gmail.com.',
        ]);

        $cvPath = $request->file('cv')->store('uploads/cv', 'public');
        $idCardPath = $request->file('id_card')
            ? $request->file('id_card')->store('uploads/id_cards', 'public')
            : null;

        Registration::create([
            'group_name' => session('group_name'),
            'password' => session('password'),
            'binusian_status' => session('binusian_status'),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'line_id' => $request->line_id,
            'github_id' => $request->github_id,
            'birthplace' => $request->birthplace,
            'birthdate' => $request->birthdate,
            'cv' => $cvPath,
            'id_card' => $idCardPath,
        ]);

        return redirect()->route('login')->with('message', 'Registration successful!');
    }
    public function submitRegisterNonBinusian(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations,email',
            'whatsapp' => 'required|string|max:15',
            'line_id' => 'required|string|max:50|unique:registrations,line_id',
            'github_id' => 'required|string|max:100',
            'birthplace' => 'required|string|max:100',
            'birthdate' => 'required|date',
            'cv' => 'required|mimes:pdf|max:2048',
            'id_card' => 'required|mimes:jpg,jpeg,png|max:2048',
        ], [
            'email.unique' => 'Email is already taken, please use another one.',
            'line_id.unique' => 'Line ID is already taken, please use another one.',
            'email.email' => 'Please enter a valid email like user@gmail.com.',
        ]);

        $cvPath = $request->file('cv')->store('uploads/cv', 'public');
        $idCardPath = $request->file('id_card')
            ? $request->file('id_card')->store('uploads/id_cards', 'public')
            : null;

        Registration::create([
            'group_name' => session('group_name'),
            'password' => session('password'),
            'binusian_status' => session('binusian_status'),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'line_id' => $request->line_id,
            'github_id' => $request->github_id,
            'birthplace' => $request->birthplace,
            'birthdate' => $request->birthdate,
            'cv' => $cvPath,
            'id_card' => $idCardPath,
        ]);

        return redirect()->route('login')->with('message', 'Registration successful!');
    }
}
