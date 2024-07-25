{{--
<x-home>
    <head>
        <!-- Other head content -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    </head>


<div class="container mt-4">
    <h2>Flight Schedules</h2>
    <div id="calendar"></div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        fetch('/schedules/json')
            .then(response => response.json())
            .then(events => {
                console.log(events); // Log events to console
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: events,
                    eventDidMount: function(info) {
                        // Initialize tooltip on event elements
                        $(info.el).tooltip({
                            title: info.event.extendedProps.description,
                            html: true,
                            placement: 'top',
                            trigger: 'hover',
                            container: 'body'
                        });
                    }
                });
                calendar.render();
            })
            .catch(error => {
                console.error('Error fetching events:', error);
            });
    });
</script>

</x-home> --}}
