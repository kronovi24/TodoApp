
function createData() {
    let title = document.getElementById("title").value;
    let about = document.getElementById("about").value;


    if (title == "") {
        alert("Input title")
    }
    else if (about == "") {
        alert("Input About the task")
    }
    else {
        fetch(`dbconn.php?Title=${title}&About=${about}&Action=create`)
            .then((response) => {
                console.log(response.text());
                document.getElementById("title").value = '';
                document.getElementById("about").value = '';
            })

        getData();
    }

}


function getData() {
    fetch(`dbconn.php?Action=get`)
        .then((response) => {
            return response.json();
        })
        .then(function (data) {
            console.log(data)
            let main = document.getElementById("items")
            main.innerHTML = "";

            for (let i = 0; i < data.length; i++) {
                main.insertAdjacentHTML("beforeend",
                    `<tr class="${data[i].ID}">
                <td scope="row"><div class="datas">${data[i].ID} </div></td>
                <td><div class="datas">${data[i].Title} </div></td>
                <td><div class="datas">${data[i].About}  </div></td>
                <td><div class="datas">${data[i].curDate}  </div></td>
                <td><button class="btn btn-success" onclick="deleteData(${data[i].ID});"> Done</button></td>
                </tr>`
                )
            }
        })
}

function deleteData(ID) {
    fetch(`dbconn.php?Action=delete&ID=${ID}`)
        .then((response) => {
            return response.text();
        })
        .then(function (data) {
            console.log(data);
        })
        .then(getData())

}


getData();
