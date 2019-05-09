//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=5; attempts=0; attemptsMax=2;
var score=0; scoreMax=1; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=2;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=true;
var tiAttempts=false;
var tiScore=true;
var startTime;
var colorBack="#FFFDFD"; colorButton="#C4C9EE"; colorText="#000000"; colorSele="#8DACE0";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="FELICIDADES"; messageTime="SE ACABO EL TIEMPO"; messageError="ERROR"; messageErrorG="ERROR"; messageAttempts="VUELVE A INTENTARLO"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="cmVsYWNpb25hcl9wYWxhYnJhcw"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var joinPar=[["R0lUSFVC", "VVNBIFNJU1RFTUEgREUgQ09OVFJPTEVT"],["UkVQT1NJVE9SSU8", "VVNPIERFIENPRElHTw"],["SFRNTA", "TEVOR1VBSkUgREUgTUFSQ0FETw"],["Q0xBU0U", "TU9ERUxPIERFIENPTkpVTlRPIERFIFZBUklBQkxFUw"],["QVRSSUJVVE8", "Q0FSQUNURVJJU1RJQ0FTIFFVRSBERUZJTkVO"]];
var c=[[6,24],[11,13],[4,19],[5,31],[8,27]];
var con1=["GITHUB","REPOSITORIO","HTML","CLASE","ATRIBUTO"];
var con2=["USA SISTEMA DE CONTROLES","USO DE CODIGO","LENGUAJE DE MARCADO","MODELO DE CONJUNTO DE VARIABLES","CARACTERISTICAS QUE DEFINEN"];
var sel1=""; join1=[]; join2=[];
