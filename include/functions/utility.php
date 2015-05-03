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
			echo "Manifestazione sportiva";
			break;
		case "formazione":
			echo "Corso di formazione";
			break;
		case "cultura":
			echo "Evento culturale";
			break;
	}
}

