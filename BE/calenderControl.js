

$(function() {
    // Initialize the external events
    function ini_events(ele) {
        ele.each(function() {
            // Create an event object with the title from the element's text
            var eventObject = {
                title: $.trim($(this).text())
            };
            $(this).data('eventObject', eventObject);

            // Make the event draggable
            $(this).draggable({
                zIndex: 1070,
                revert: true,
                revertDuration: 0
            });
        });
    }

    ini_events($('#external-events div.external-event'));

    // Initialize the calendar
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;
    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // Enable draggable events
    new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function(eventEl) {
            return {
                title: eventEl.innerText,
                backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
            };
        }
    });

    // Load stored events from local storage
    var storedEvents = JSON.parse(localStorage.getItem('storedEvents')) || [];

    var calendar = new Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        themeSystem: 'bootstrap',
        events: storedEvents, // Load events from local storage
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        eventClick: function(info) {
            if (confirm("Are you sure you want to delete this event?")) {
                var eventIndex = storedEvents.findIndex(function(e) {
                    return e.start === info.event.startStr && e.title === info.event.title;
                });
                if (eventIndex > -1) {
                    storedEvents.splice(eventIndex, 1); // Remove the event from the array
                    localStorage.setItem('storedEvents', JSON.stringify(storedEvents)); // Update local storage
                    info.event.remove(); // Remove the event from the calendar
                }
            }
        },
        drop: function(info) {
            // Create an event object and store it in local storage
            var eventObject = {
                title: info.draggedEl.innerText,
                start: info.dateStr,
                backgroundColor: info.draggedEl.style.backgroundColor,
                borderColor: info.draggedEl.style.backgroundColor,
                textColor: info.draggedEl.style.color
            };

            // Add the event to the array and save it to local storage
            storedEvents.push(eventObject);
            localStorage.setItem('storedEvents', JSON.stringify(storedEvents));

            // Remove the event element if 'remove after drop' is checked
            if (checkbox.checked) {
                info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
        }
    });

    calendar.render();

    // Bind the color picker for new events
    $('#color-chooser > li > a').click(function(e) {
        e.preventDefault();
        // Save color and add color effect to button
        var currColor = $(this).css('color');
        $('#add-new-event').css({
            'background-color': currColor,
            'border-color': currColor
        });
    });

    // Add new event
    $('#add-new-event').click(function(e) {
        e.preventDefault();
        var val = $('#new-event').val();
        if (val.length == 0) {
            return;
        }

        // Create a new event element
        var event = $('<div />');
        event.css({
            'background-color': $('#add-new-event').css('background-color'),
            'border-color': $('#add-new-event').css('border-color'),
            'color': '#fff'
        }).addClass('external-event');
        event.html(val);

        $('#external-events').prepend(event);

        // Add draggable functionality and clear the input field
        ini_events(event);
        $('#new-event').val('');
    });
});