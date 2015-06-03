// JavaScript Document
function confirmAction(msg) {
	msg='Sei sicuro di voler eliminare questo elemento?';
   	if(confirm(msg)) return true;
	else return false;
}