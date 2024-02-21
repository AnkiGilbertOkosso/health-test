<!-- resources/views/diaries/calendar.blade.php -->

@extends('layout')

@section('content')
    <div id="calendar"></div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    @foreach($diaries as $diary)
                        {
                            title: 'Diary Entry',
                            start: '{{ $diary->date }}',
                            url: '{{ route('diaries.show', $diary->id) }}'
                        },
                    @endforeach
                ]
            });
            calendar.render();
        });
    </script>
@endpush
