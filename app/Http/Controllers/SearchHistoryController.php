<?php

namespace App\Http\Controllers;

use App\Models\SearchHistory;
use App\Models\User;
use Illuminate\Http\Request;

class SearchHistoryController extends Controller
{
    public function index()
    {
        $keywords = SearchHistory::distinct('search_keyword')->pluck('search_keyword');
        $users = User::all();
        $keywordCounts = SearchHistory::select('search_keyword')->selectRaw('count(*) as count')
        ->groupBy('search_keyword')->get()
        ->pluck('count', 'search_keyword');
        
        // Fetch search histories for display in the index view
        $searchHistories = SearchHistory::all();
    
        return view('search-history.index', compact('keywords', 'users', 'keywordCounts', 'searchHistories'));
    }
    public function filter(Request $request)
    {
        $query = SearchHistory::query();
    
        if ($request->has('keywords')) {
            $query->whereIn('search_keyword', $request->input('keywords'));
        }
    
        if ($request->has('users')) {
            $query->whereIn('user_id', $request->input('users'));
        }
    
        // Handle other filters like time range and date range here
    
        $searchHistories = $query->get();
    
        return view('search-history.results', ['searchHistories' => $searchHistories]);
    }
    
    
    
    
    
}
