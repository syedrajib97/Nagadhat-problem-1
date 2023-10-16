@extends('layouts.app')

@section('content')
<div class="container" >
    <h1>Search History</h1>
    
    <!-- Filter Form -->
    <form id="filter-form">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-4"> 
                    <h2>All Keywords:</h2>
                    @foreach($keywords as $keyword)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keywords[]" value="{{ $keyword }}" id="keyword-{{ $keyword }}">
                        <label class="form-check-label" for="keyword-{{ $keyword }}">
                            {{ $keyword }} ({{ $keywordCounts[$keyword] }} times found)
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <h2>All Users:</h2>
                    @foreach($users as $user)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="users[]" value="{{ $user->id }}" id="user-{{ $user->id }}">
                        <label class="form-check-label" for="user-{{ $user->id }}">
                            {{ $user->name }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4"> 
                    <h2>Time Range:</h2>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="time_range[]" value="yesterday" id="time-range-yesterday">
                        <label class="form-check-label" for="time-range-yesterday">
                            See data from yesterday
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="time_range[]" value="last_week" id="time-range-last-week">
                        <label class="form-check-label" for="time-range-last-week">
                            See data from last week
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="time_range[]" value="last_month" id="time-range-last-month">
                        <label class="form-check-label" for="time-range-last-month">
                            See data from last month
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
    <div class="col-md-2 mb-4">
        <!-- Select Date Range -->
        <h2>Select Date Range:</h2>
        <div class="form-group">
            <label>Start Date:</label>
            <input type="date" class="form-control" name="start_date">
        </div>
        <div class="form-group">
            <label>End Date:</label>
            <input type="date" class="form-control" name="end_date">
        </div>
    </div>
</div>

        <button id="apply-filters" class="btn btn-primary">Apply Filters</button>
    </form>

   Search Results 
    <div id="search-results">
        @include('search-history.results')
    </div>
</div>
