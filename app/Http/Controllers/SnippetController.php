<?php

namespace App\Http\Controllers;

use App\Models\Snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function createSnippet(Request $request) {
        
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'language' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        Snippet::create($incomingFields);
        
        return redirect('/dashboard');
    }
}
