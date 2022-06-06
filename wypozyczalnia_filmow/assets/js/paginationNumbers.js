//Funkcje umożliwiające stronnicowanie przy użyciu przycisków

var currentPage = 0;
var pageNumber ="";
var tableUrl;

function setPageNumber( pageNumber ) {
    this.pageNumber = pageNumber;
}

function setTableUrl( tableUrl ) {
    this.tableUrl = tableUrl;
}

function ajaxPaginationToMostLeft( id ) {
    currentPage = 0;
    ajaxGetPage( currentPage, id );
}

function ajaxPaginationToLeft( id ) {
    if( currentPage != 0 ) {
        currentPage--;
    }
    ajaxGetPage( currentPage, id );
}

function ajaxPaginationToMostRight( id ) {
	currentPage = pageNumber;
    ajaxGetPage( currentPage, id );
}

function ajaxPaginationToRight( id ) {
    if( currentPage != pageNumber ) {
        currentPage++;
    }
    ajaxGetPage( currentPage, id );
}

function ajaxPaginationNumber( number, id ) {}

function ajaxGetPage( number, id ) {

    var tableForm = new FormData(); 
    tableForm.append("page", number);
    var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById(id).innerHTML = xmlHttp.responseText;
		}
	}
    xmlHttp.open("POST", tableUrl, true); 
    xmlHttp.send(tableForm); 

}