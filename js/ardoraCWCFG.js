//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=50; timeIni=50; timeBon=0;
var successes=0; successesMax=1; attempts=0; attemptsMax=2;
var score=0; scoreMax=1; scoreInc=1; scoreDec=1;
var typeGame=0;
var tiTime=false;
var tiTimeType=2;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=true;
var tiAttempts=true;
var tiScore=true;
var startTime; var tiAudio=false;
var colorBack="#FFFDFD"; colorButton="#14A6B1"; colorText="#000000"; colorSele="#669999";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fDefs="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="¡Ganaste!"; messageTime="Se te acabo el tiempo..."; messageError="ERROR"; messageErrorG="ERROR"; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="Y3J1Y2lncmFtYQ"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var col=0; row=0; writeDir=0;
var cw=[["UA","QQ","Rw","SQ","Tg","QQ","Og","Og","","","RA",""],["","","SQ","Og","","Og","","RQ","","","SQ",""],["Og","QQ","VA","Ug","SQ","Qg","VQ","VA","Tw","Og","Uw",""],["","","SA","","","Tw","","SQ","Og","Vw","RQ","Qg"],["","","VQ","","","VA","","UQ","","","0Q",""],["","","Qg","","","Tw","","VQ","","","Tw",""],["","","Og","","Og","Tg","","RQ","","","Og",""],["","","","","UA","Og","Og","VA","","","",""],["Uw","RQ","Rw","VQ","Ug","SQ","RA","QQ","RA","Og","",""],["","","","","Tw","","QQ","Uw","","","",""],["","","","","WQ","","VA","Og","","","",""],["","","","","RQ","","Tw","","","","",""],["","","","","Qw","","Uw","","","","",""],["","","","","VA","","Og","","","","",""],["","","Og","Qg","Tw","RA","WQ","Og","","","",""]];
var x1=[];
var y1=[];
var x2=[];
var y2=[];
var imaCW=[];
var audioCW=[];
var defCW=[];
var colNum=12;
var rowNum=15;
