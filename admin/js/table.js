function editRow(button) {
  var row = button.parentNode.parentNode;
  var cells = row.getElementsByTagName("td");
  var name = cells[0].innerText;
  var age = cells[1].innerText;

  var newName = prompt("Введите новое имя:", name);
  var newAge = prompt("Введите новый email:", age);

  if (newName !== null && newAge !== null) {
    cells[0].innerText = newName;
    cells[1].innerText = newAge;
  }
}

function addRow() {
  var name = document.getElementById("nameInput").value;
  var age = document.getElementById("ageInput").value;

  if (name !== "" && age !== "") {
    var table = document.getElementById("myTable");
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    cell1.innerHTML = name;
    cell2.innerHTML = age;
    cell3.innerHTML = '<button onclick="editRow(this)">Редактировать</button> <button onclick="deleteRow(this)">Удалить</button>';
  }
}

function deleteRow(button) {
  var row = button.parentNode.parentNode;
  row.parentNode.removeChild(row);
}

function saveToLocalStorage() {
  var tableRows = Array.from(document.getElementById('myTable').rows).map(row => ({
    name: row.cells[0].innerText,
    age: row.cells[1].innerText
  }));
  localStorage.setItem('tableData', JSON.stringify(tableRows));
}