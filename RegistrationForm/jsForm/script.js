var datasel = null;



function onFormSubmit(e)
{
	
	var formData = readFormData();
	if (datasel == null) {
		insertData(formData);
	}else{
		updatedRecord(formData);
	}
}


//retrive data
function readFormData(){
	var formData={};
	formData["sname"] = document.getElementById("sname").value;
	formData["cityName"]= document.getElementById("cityName").value;
	formData["email"] = document.getElementById("email").value;
	formData["password"] = document.getElementById("password").value;
	formData["phone"]= document.getElementById("phone").value;
	return formData;
}
function insertData(data)
{
	var tbl = document.getElementById("studList").getElementsByTagName('tbody')[0];
	var newRow = tbl.insertRow(tbl.length);
	c1 = newRow.insertCell(0);
		c1.innerHTML=data.sname;
	c2 = newRow.insertCell(1);
		c2.innerHTML= data.cityName;
	c3 = newRow.insertCell(2);
		c3.innerHTML = data.email;
	c4 = newRow.insertCell(3);
		c4.innerHTML = data.password;
	c5 = newRow.insertCell(4);
		c5.innerHTML = data.phone;	
	c6 = newRow.insertCell(5);
		c6.innerHTML = '<button onClick="onEdit(this)">Edit</button><button onClick="onDelete(this)">Delete</button>'
		console.log("hii");
}
//edit data
function onEdit(td)
{
	datasel = td.parentElement.parentElement;
	document.getElementById("sname").value = datasel.cells[0].innerHTML;
	document.getElementById("cityName").value = datasel.cells[1].innerHTML;
	document.getElementById("email").value = datasel.cells[2].innerHTML;
	document.getElementById("password").value = datasel.cells[3].innerHTML;
	document.getElementById("phone").value = datasel.cells[4].innerHTML;
}
function updatedRecord(formData)
{
	datasel.cells[0].innerHTML = formData.sname;
	datasel.cells[1].innerHTML = formData.cityName;
	datasel.cells[2].innerHTML = formData.email;
	datasel.cells[3].innerHTML = formData.password;
	datasel.cells[4].innerHTML = formData.phone;
}
//delete data
function onDelete(td)
{
	if (confirm('do you want to delete this record?')) {
		row = td.parentElement.parentElement;
		document.getElementById('studList').deleteRow(row.rowIndex);
	}
}
