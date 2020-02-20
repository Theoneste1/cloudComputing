var row = 1;

var entry = document.getElementById("entry")
entry.addEventListener("click", displayDetails);

function displayDetails(event) {
	event.preventDefault();
	var bname = document.getElementById("bname").value;
	var authname = document.getElementById("authname").value;
	var bquantity = document.getElementById("bquantity").value;

	if (!bname || !authname || !bquantity) {
		alert("Please fill all the fields")
		return;
	}

	var display = document.getElementById("display")
	var newRow = display.insertRow(row);
	var cell1 = newRow.insertCell(0);
	var cell2 = newRow.insertCell(1);
	var cell3 = newRow.insertCell(2);

	cell1.innerHTML = bname;
	cell2.innerHTML = authname;
	cell3.innerHTML = bquantity;

	row++;

}