// JavaScript code to modify the items in VenueList
var list = document.getElementById("VenueList");
// Create a new venue
var newItem = document.createElement("li");
newItem.textContent = "Room C";
// Add the new venue to the end of VenueList
list.appendChild(newItem);