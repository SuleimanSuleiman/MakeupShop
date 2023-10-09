<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Calendar</title>
        <link rel="icon" href="/logo-header.png">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
<script src='/dist/index.global.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'multiMonthYear,dayGridMonth,timeGridWeek'
      },
      initialView: 'multiMonthYear',
      initialDate: '2023-01-12',
      editable: false,
      selectable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      // multiMonthMaxColumns: 1, // guarantee single column
      // showNonCurrentDates: true,
      // fixedWeekCount: false,
      // businessHours: true,
      // weekends: false,
      events: [
        @foreach ($allOffer as $offer)
        {
          title: "{{$offer->getTranslations('OfferName')['en']}}",
          start: '{{$offer->startDate}}',
          end: '{{$offer->EndDate}}',
          url: '{{route('admin.offer.show',['offer'=> $offer->id])}}',
          color: '#fe6b1d'
        },
        @endforeach
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 1200px;
    margin: 12px auto;
    height: 90vh;
  }

</style>
</head>
<body>
    <div class="flex">
        <x-sidbare stage="Calendar" btn="false"/>
        <div class="w-full">
            <div id='calendar'></div>
            <div class="px-28 flex justify-start items-center">
                <p class="text-xs text-gray-700">Categories</p>
                <div class="ml-1 w-4 h-4 rounded-full bg-[#fe6b1d]"></div>
                <p class="text-xs text-gray-700 ml-8">Products</p>
                <div class="ml-1 w-4 h-4 rounded-full bg-[#03c3ec]"></div>
            </div>
        </div>
    </div>
</body>
</html>
