<?php

namespace App\Http\Controllers;

use App\Models\ChildMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\UserActivity;
use App\Models\Post;
use App\Models\Emiten;
use App\Models\TransaksiHarian;
use Carbon\Carbon;
use App\Exports\StockExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    protected $casts = [
        'date_transaction' => 'datetime',
    ];
    
    public function landing()
    {
        $posts = Post::with(['user', 'likes', 'comments.user'])
            ->where('DELETE_MARK', '0')
            ->latest('CREATE_DATE')
            ->get();
        $userRoleId = auth()->user()->ID_JENIS_USER;
        $setting_menu_user = DB::table('SETTING_MENU_USER')
            ->join('MENU', 'SETTING_MENU_USER.MENU_ID', '=', 'MENU.ID_MENU')
            ->where('SETTING_MENU_USER.ID_JENIS_USER', $userRoleId)
            ->where('MENU.DELETE_MARK', '!=', '1')
            ->select('MENU.MENU_NAME', 'MENU.MENU_LINK', 'MENU.PARENT_ID as PARENT_ID', 'SETTING_MENU_USER.ID_JENIS_USER')
            ->get();
        $submenus = DB::table('MENU_LEVEL')->where('DELETE_MARK', '!=', '1')->get();
        
        return view('index', ['submenus' => $submenus, 'setting_menu_user' => $setting_menu_user, 'posts' => $posts]);
    }
    
    public function index()
    {
        return view('auth.login');
    }
    
    public function login(Request $request){
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        
        Session::flash('failed','Account not found');
        return back()->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function dashboard(Request $request)
    {
        return view('management.dashboard');
    }
    
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:100|unique:users,EMAIL',
            'name' => 'required|string|max:60',
            'phone' => 'required|string|max:30',
            'password' => [
                'required',
                'string',
                'confirmed',
                'min:8',               // Minimum 8 karakter (sesuai BVA-U-02)
                'max:20',              // Maksimum 20 karakter (sesuai BVA-U-06)
                'regex:/[a-z]/',       // Harus memiliki huruf kecil (sesuai ECP-U-04)
                'regex:/[A-Z]/',       // Harus memiliki huruf besar (sesuai ECP-U-05)
                'regex:/[0-9]/',       // Harus memiliki angka (sesuai ECP-U-06)
            ],
        ], [
            'password.min' => 'Password harus minimal 8 karakter.',
            'password.max' => 'Password tidak boleh lebih dari 20 karakter.',
            'password.regex' => 'Password harus mengandung huruf besar, huruf kecil, dan angka.',
        ]);

        DB::table('users')->insert([
            'NAMA_USER' => $request->input('name'),
            'NO_HP' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'ID_JENIS_USER' => 2,
            'STATUS_USER' => 'active',
            'CREATE_DATE' => now(),
            'DELETE_MARK' => '0',
        ]);

        return redirect()->route('login')->with('success', 'Registration successful, please login.');
    }
    
    /**
     * Fungsi validasi password sesuai dengan kriteria pengujian
     * @param string $password
     * @return array
     */
    private function validatePassword($password)
    {
        // Periksa panjang password (8-20 karakter)
        if (strlen($password) < 8) {
            return ['status' => false, 'message' => 'Password harus minimal 8 karakter.'];
        }
        
        if (strlen($password) > 20) {
            return ['status' => false, 'message' => 'Password tidak boleh lebih dari 20 karakter.'];
        }
        
        // Periksa huruf besar
        if (!preg_match('/[A-Z]/', $password)) {
            return ['status' => false, 'message' => 'Password harus mengandung minimal 1 huruf besar.'];
        }
        
        // Periksa huruf kecil
        if (!preg_match('/[a-z]/', $password)) {
            return ['status' => false, 'message' => 'Password harus mengandung minimal 1 huruf kecil.'];
        }
        
        // Periksa angka
        if (!preg_match('/[0-9]/', $password)) {
            return ['status' => false, 'message' => 'Password harus mengandung minimal 1 angka.'];
        }
        
        return ['status' => true];
    }
}