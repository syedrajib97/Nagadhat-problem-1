// public/js/filter.js
<script src="{{ asset('js/filter.js') }}"></script>

$(document).ready(function () {
    $('#apply-filters').on('click', function (e) {
        e.preventDefault(); 

        // Serialize the form data
        var formData = $('#filter-form').serialize();

        // Send an AJAX request 
        $.ajax({
            url: '{{ route("search-history.filter") }}',
            type: 'POST',
            data: formData,
            success: function (data) {
                // Replace the search results with the updated results
                $('#search-results').html(data);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
});
