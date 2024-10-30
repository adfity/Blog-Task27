<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Like;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        // Hitung jumlah komentar dan like dari user
        $totalUserComments = Comment::where('user_id', $user->id)->count();
        $totalUserLikes = Like::where('user_id', $user->id)->count();
        
        // Ambil data post yang di-like oleh user
        $posts = Post::where('status', 'active')->limit(6)->get();
    
        // Cek usertype untuk menampilkan halaman sesuai role
        if ($user->usertype == 'user') {
            return view('users.dashboard', [
                'totalUserComments' => $totalUserComments,
                'totalUserLikes' => $totalUserLikes,
                'posts' => $posts,
            ]);
        } else {
            return view('admin.dashboard', [
                'totalUserComments' => $totalUserComments,
                'totalUserLikes' => $totalUserLikes,
                'posts' => $posts,
            ]);
        }
    }
    
}
