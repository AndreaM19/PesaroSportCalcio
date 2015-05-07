<?php
//Event type switch
function eventType($type){
	switch ($type) {
		case "torneo":
			return "Torneo";
			break;
		case "campionato":
			return "Campionato";
			break;
		case "manifestazione":
			return "Manifestazione sportiva";
			break;
		case "formazione":
			return "Corso di formazione";
			break;
		case "cultura":
			return "Evento culturale";
			break;
	}
}