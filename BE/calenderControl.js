$(function() {
function ini_events(ele) {
ele.each(function() {

var eventObject = {
title: $.trim($(this).text()) // use the element's text as the event title
}
$(this).data('eventObject', eventObject)

$(this).draggable({
zIndex: 1070,
revert: true, // will cause the event to go back to its
revertDuration: 0 // original position after the drag
})

})
}

ini_events($('#external-events div.external-event'))

var date = new Date()
var d = date.getDate(),
m = date.getMonth(),
y = date.getFullYear()

var Calendar = FullCalendar.Calendar;
var Draggable = FullCalendar.Draggable;

var containerEl = document.getElementById('external-events');
var checkbox = document.getElementById('drop-remove');
var calendarEl = document.getElementById('calendar');

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

var calendar = new Calendar(calendarEl, {
headerToolbar: {
left: 'prev,next today',
center: 'title',
right: 'dayGridMonth,timeGridWeek,timeGridDay'
},
themeSystem: 'bootstrap',
events: [{
title: 'All Day Event',
start: new Date(y, m, 1),
backgroundColor: '#f56954', //red
borderColor: '#f56954', //red
allDay: true
},
{
title: 'Long Event',
start: new Date(y, m, d - 5),
end: new Date(y, m, d - 2),
backgroundColor: '#f39c12', //yellow
borderColor: '#f39c12' //yellow
},
{
title: 'Meeting',
start: new Date(y, m, d, 10, 30),
allDay: false,
backgroundColor: '#0073b7', //Blue
borderColor: '#0073b7' //Blue
},
{
title: 'Lunch',
start: new Date(y, m, d, 12, 0),
end: new Date(y, m, d, 14, 0),
allDay: false,
backgroundColor: '#00c0ef', //Info (aqua)
borderColor: '#00c0ef' //Info (aqua)
},
{
title: 'Birthday Party',
start: new Date(y, m, d + 1, 19, 0),
end: new Date(y, m, d + 1, 22, 30),
allDay: false,
backgroundColor: '#00a65a', //Success (green)
borderColor: '#00a65a' //Success (green)
},
{
title: 'Click for Google',
start: new Date(y, m, 28),
end: new Date(y, m, 29),
url: 'https://www.google.com/',
backgroundColor: '#3c8dbc', //Primary (light-blue)
borderColor: '#3c8dbc' //Primary (light-blue)
}
],
editable: true,
droppable: true, // this allows things to be dropped onto the calendar !!!
drop: function(info) {
// is the "remove after drop" checkbox checked?
if (checkbox.checked) {
// if so, remove the element from the "Draggable Events" list
info.draggedEl.parentNode.removeChild(info.draggedEl);
}
}
});

calendar.render();
// $('#calendar').fullCalendar()

/* ADDING EVENTS */
var currColor = '#3c8dbc' //Red by default
// Color chooser button
$('#color-chooser > li > a').click(function(e) {
e.preventDefault()
// Save color
currColor = $(this).css('color')
// Add color effect to button
$('#add-new-event').css({
'background-color': currColor,
'border-color': currColor
})
})
$('#add-new-event').click(function(e) {
e.preventDefault();
// Get value and make sure it is not null
var val = $('#new-event').val();
var activeColorElement = $('#color-chooser li a.active');

// Check if there is an active color element and retrieve the color
var color = activeColorElement.length > 0 ? activeColorElement.attr('class').replace('text-', '') : '';
if (val.length == 0) {
return;
}

// Create events
function createEvent(title, color) {
var event = $('<div/>')
event.css({
'background-color': currColor,
'border-color': currColor,
'color': '#fff'
}).addClass('external-event');
// Edit button
var editButton = $('<button class="btn btn-sm btn-info edit-event">Edit</button>');
editButton.on('click', function() {
// Add logic for editing the event (e.g., open a modal)
alert('Edit event: ' + title);
});

// Delete button
var deleteButton = $('<button class="btn btn-sm btn-danger delete-event">Delete</button>');
deleteButton.on('click', function() {
// Add logic for deleting the event
event.remove();
});

// Append title and buttons to the event
event.append('<span class="event-title">' + title + '</span>');
event.append(editButton);
event.append(deleteButton);
event.text(val);
$('#external-events').prepend(event)

// Add draggable funtionality
ini_events(event)

// Remove event from text input
$('#new-event').val('')
}
createEvent(val, color);

// Initialize events when the DOM is ready
$(document).ready(function() {

// Add new event
$('#add-new-event').on('click', function() {
var title = $('#new-event').val();
var color = $('#color-chooser li a.active').attr('class').replace('text-', '');

// Use AJAX to send data to the PHP script
$.ajax({
type: 'POST',
url: 'create_event.php', // Path to your PHP script
data: {
title: title,
color: color
},
success: function(response) {
// Handle the response from the server
var data = JSON.parse(response);
if (data.status === 'success') {
// Event created successfully
// You can update the calendar or show a success message
alert(data.message);
} else {
// Error in creating the event
alert(data.message);
}
},
error: function() {
// Handle AJAX errors
alert('Error connecting to the server');
}
});

// Reset input field
$('#new-event').val('');
});
});

});
});