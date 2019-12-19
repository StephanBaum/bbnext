document.addEventListener("nav-click", function(e) {
  console.log(e.detail); // Prints "Example of an event"
});

let element = document.getElementById(nav);
element.dispatchEvent(new Event("nav-click")); // or whatever the event type might be