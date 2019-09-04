function addRowHandlers() {
    var table = document.getElementById("customers");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler = 
            function(row) 
            {
                return function() { 
                                        var cell = row.getElementsByTagName("td")[0];
                                        var id = cell.innerHTML;
                                        alert("Are you sure you want to cancel your selected class?");
                                 };
            };

        currentRow.onclick = createClickHandler(currentRow);
		
    }
}
window.onload = addRowHandlers();