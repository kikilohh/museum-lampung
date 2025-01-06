<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Handle the incoming comment submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Menyimpan komentar yang sudah divalidasi
        Comment::create($validated);

        // Mengarahkan kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Komentar berhasil dikirim.');
    }
}
