$.post(
'calendarApi.php',
{ action: 'selectdesc' },
function (res) {
    var tby = document.getElementById("customers").getElementsByTagName("tbody")[0]
    res.msg.forEach(function (mg) {
        var ntr = document.createElement("tr");
        var td1 = document.createElement("td");
        td1.innerText = mg.id;
        ntr.appendChild(td1)
        var td2 = document.createElement("td");
        td2.innerText = mg.course_name;
        ntr.appendChild(td2)
        var td3 = document.createElement("td");
        td3.innerText = mg.trainer;
        ntr.appendChild(td3)
        var st = new Date(mg.date + " 00:00:00").getTime();

        var td4 = document.createElement("td");
        td4.innerText = mg.date;
        ntr.appendChild(td4)
        var td5 = document.createElement("td");
        td5.innerText = mg.time;
        ntr.appendChild(td5)
        var td6 = document.createElement("td");
        td6.className = "cancel-btn";
        td6.setAttribute("data-id", mg.id)
		var td7 = document.createElement("td");
        td6.className = "cancel-btn";
        td6.setAttribute("data-id", mg.id)
        if (new Date().getTime() <= st) {
            td6.innerHTML = "<a href='javascript:void(0)' data-id='" + mg.id + "'>Cancel class</a>"
            td6.onclick = function (e) {
                if (confirm("Are you sure you want to cancel your class?")) {
					 alert("You have cancelled your class");
                    var id = $(e.target).attr('data-id');

                    $.post(
                        'calendarApi.php',
                        { action: 'cancel', id: id },
                        function (res) {
                            if (res.status == 1) {
                                var pr = e.target.parentElement;
                                while (pr.tagName.toLowerCase() != "tr") {
                                    pr = pr.parentElement;
                                }
                                pr.parentElement.removeChild(pr)

                            } else {
                                alert(res.msg);
                            }
                        },
                        'json'
                    );
                }
            }
        } else {
            td6.innerHTML = "Class inactive";
        }
        ntr.appendChild(td6)

        tby.appendChild(ntr)
    })
},
'json'
);
