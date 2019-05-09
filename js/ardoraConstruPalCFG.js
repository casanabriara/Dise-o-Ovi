//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=8; attempts=0; attemptsMax=2;
var score=0; scoreMax=8; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=1;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=true;
var tiAttempts=true;
var tiScore=true;
var startTime;
var colorBack="#FFFDFD"; colorButton="#2020A6"; colorText="#000000"; colorSele="#06B6F9";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=1; scoWrongDo=1; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=4; messageOk="¡Ganaste!"; messageTime="Te quedaste..."; messageError="Error"; messageErrorG="Error"; messageAttempts="Corre..."; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var cp_pal=["UkVRVUVSSU1JRU5UTw","UkVQT1NJVE9SSU8","SFRNTA","R0lUSFVC","Qk9UT04","Q09ESUdP","UEFHSU5BIFdFQg","QUNUVUFMSVpBUg"];var cp_ima=["","","","","","","",""];var cp_mp3=["","","","","","","",""];var cp_ogg=["","","","","","","",""];var cp_que=["UGV0aWNpb24gZGUgYWxnbyBxdWUgc2UgY29uc2lkZXJhIG5lY2VzYXJpbw","ZXMgdW4gZXNwYWNpbyBkb25kZSBzZSBhbG1hY2VuYSB5IHNlIGNvbXBhcnRlIGluZm9ybWFjaW9u","ZXMgdW4gbGVuZ3VhamUgZGUgbWFyY2FkbyBwYXJhIGxhIGVsYWJvcmFjafNuIGRlIHDhZ2luYXMgd2Vi","cGVybWl0ZSBhbG9qYXIgcHJveWVjdG9zIHVzYW5kbyBzaXN0ZW1hIGRlIGNvbnRyb2wgR0lU","UmVjdGFuZ3VsbyBxdWUgcGVybWl0ZSBlbmxhemFyIHVuIGRvY3VtZW50byBvIGFyY2hpdm8u","Y29tYmluYW5jaW9uIGRlIGxldHJhcyB5L28gbvptZXJvcyBxdWUgaW5kaWNhbi4","RG9jdW1lbnRvICBxdWUgbXVlc3RyYSBpbmZvcm1hY2lvbiwgdGV4dG8gaW1hZ2VuZXMgbyB2aWRlbw","UGVybWl0ZSBhcGxpY2FyIGNhbWJpb3MgaGVjaG9z"];var cp_num=[13,11,4,6,5,6,10,10];
var wordsGame="Y29uc3RydXllX3BhbGFicmFz"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var au="";var cp=[];var letters=[];var posAns=0;var lettersId=[];var lettersX=[];var lettersY=[];var lettersAns=[];var answers=[];var indexGame=1;var numle=5; var fillLetter="ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚÜ";var jobindex=[];
