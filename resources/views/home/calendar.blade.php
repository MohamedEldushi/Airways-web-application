<x-home>
    {{-- <!-- FullCalendar CSS -->
  <!-- FullCalendar CSS -->
  <style>#calendar {
    max-width: 600px;
    margin: 0 auto;
    font-family: 'Arial', sans-serif; /* Update to match your design */
}

.fc-toolbar-title {
    color: #333; /* Color for the month/year title */
}

.fc-button {
    background-color: #fff;
    color: #333;
    border: 1px solid #ddd;
}

.fc-button-primary {
    color: #555;
    background-color: #eee;
    border-color: #ccc;
}

.fc-daygrid-day-number {
    color: #666;
}
.fc-event-title {
    font-size: 0.85em; // Smaller font size for event titles
}

.fc-event-time {
    font-size: 0.75em; // Smaller font size for event times
}

.fc-event {
    padding: 2px 5px; // Reduce padding inside events for more space
}
.fc-event-title {
    font-size: 0.9em; // Adjust based on your preference
    white-space: normal; // Ensures text wraps if needed
}

.fc-event {
    cursor: pointer; // Indicates interactiveness
    padding: 4px 6px; // Adjust padding to ensure visibility
}

</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet">

<!-- Container for the calendar -->
<div class="container my-4">
    <div id='calendar'></div>
</div>

<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: '/api/flights',
        eventTimeFormat: { // Example of customizing time format
            hour: '2-digit',
            minute: '2-digit',
            meridiem: false
        }
    });
    calendar.render();
});




    </script> --}}


</x-home>
