
<link href="/css/custom.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Search History</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Search Keyword</th>
                        <th>User</th>
                        <th>Search Time</th>
                        <th>Results</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($searchHistories as $searchHistory)
                    <tr>
                        <td>{{ $searchHistory->search_keyword }}</td>
                        <td>{{ $searchHistory->user ? $searchHistory->user->name : 'N/A' }}</td>
                        <td>{{ $searchHistory->search_time }}</td>
                        <td>{{ $searchHistory->results }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
