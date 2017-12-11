//  Copyright (c) 2000-2013 ZEDO Inc. All Rights Reserved.
var p29="http://axp.zedo.com/asw";var e13='';
function B33(){
var d15=navigator.userAgent.toLowerCase();var d38=(d15.indexOf('mac')!=-1);var v37=parseInt(navigator.appVersion);
var p34=(!d38&&(d15.indexOf('opera')==-1)&&(d15.indexOf('msie')!=-1)&&(v37>=4)&&(d15.indexOf('webtv')==-1
)&&(d15.indexOf('msie 4')==-1));
if(p34){
document.writeln('<scr'+'ipt language=VBS'+'cript>');
document.writeln('on error resume next');
document.writeln('e13=IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.5"))');
document.writeln('if(e13<=0)then e13=IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.4"))');
document.writeln('</scr'+'ipt>');
}
else if(navigator.mimeTypes&&
navigator.mimeTypes["application/x-shockwave-flash"]&&
navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin){
if(navigator.plugins&&navigator.plugins["Shockwave Flash"]){
var v30=navigator.plugins["Shockwave Flash"].description;
if(parseInt(v30.substring(v30.indexOf(".")-2))>=4){
e13=1;
}}}
var z36=navigator.javaEnabled();var q16=1;
if(z36){q16 |=4;}
if(e13){q16 |=8;}
if(p34){
if(document.documentElement){
document.documentElement.style.behavior='url(#default#clientCaps)';
if(document.documentElement.connectionType=='lan'){
q16 |=16;
}}
else if(document.body){
document.body.style.behavior='url(#default#clientCaps)';
if(document.body.connectionType=='lan'){
q16 |=16;
}}}
return q16;
}
var r10=B33();
if(r10==null){
r10='';
}

function U52(){
var o37=new Array('d1','d2','d3','d4','d5','d6','d7','d8','d9','da','db','dc','dd','de','df');
return o37;
}
var d27=0;var p27='';var y15=0;var y15=0;var d39;var p37;var r38;var q38;var c38;var y37;var v38='';var o12='0';var z10=0;var c24='';var zd_$='';var e13=0;var t26='';var y23='';var z30="";var i27='';
var n29='';var y13=new Array();var o18='';var t27=0;var i24='';var i8="";var n24="";var z31="";var q12="";var q23="";var r19="";
if(typeof zflag_nid!='undefined'){
d27=zflag_nid;
zflag_nid=0;
}
if(typeof zflag_charset!='undefined'){
p27="charset="+zflag_charset;
zflag_charset="";
}
if(typeof zflag_sid!='undefined'){
y15=zflag_sid;
}
if(typeof zflag_pbnw!='undefined'){
i8+="&pn="+zflag_pbnw;
zflag_pbnw=0;
}
if(typeof zflag_6!='undefined'){
i8+="&6="+zflag_6;
zflag_6=0;
}
if(typeof zflag_pbad!='undefined'){
i8+="&pa="+zflag_pbad;
zflag_pbad=0;
}
if(typeof zflag_pbch!='undefined'){
if(zflag_pbch.indexOf("/")!=-1){
var q36=zflag_pbch.substr(0,zflag_pbch.indexOf("/"));
i8+="&pc="+q36;
}
else{
i8+="&pc="+zflag_pbch;
}
zflag_pbch="0";
}
if(typeof zflag_pbr!='undefined'){
i8+="&pr="+zflag_pbr;
zflag_pbr=0;
}
if(typeof zflag_pbsid!='undefined'){
i8+="&ps="+zflag_pbsid;
}
if(typeof zflag_tmy!='undefined'){
n24+="&tmy="+zflag_tmy;
zflag_tmy=0;
}
if(typeof zflag_cid!='undefined'){
o12=zflag_cid;
if(o12<0||o12>999999){
o12=0;
}}
if(typeof zflag_chanlimits!='undefined'){
t27=zflag_chanlimits;
zflag_chanlimits=0;
}
if(typeof zflag_sz!='undefined'){
z10=zflag_sz;
if(z10<0||z10>95){
z10=0;
}
zflag_sz=0;
}
if(typeof zflag_alter_sz!='undefined'){
q12=zflag_alter_sz;
if(q12<0||q12>95){
q12=0;
}
zflag_alter_sz=0;
}
if(typeof zflag_kw!='undefined'){
zflag_kw=zflag_kw.replace(/&/g,'zzazz');
c24=zflag_kw;
zflag_kw="";
}
if(typeof zflag_$!='undefined'){
zd_$=zflag_$;
zflag_$='';
}
if(typeof zflag_geo!='undefined'){
if(!isNaN(zflag_geo)){
t26="&gc="+zflag_geo;
zflag_geo=0;
}}
if(typeof zflag_param!='undefined'){
z30="&p="+zflag_param;
zflag_param="";
}
if(typeof zflag_click!='undefined'){
zzTrd=escape(zflag_click);
y23='&l='+zzTrd;
zflag_click="";
}
if(typeof zflag_ad_title!='undefined'){
zzTitle=escape(zflag_ad_title);
i24='&t='+zzTitle;
zflag_ad_title="";
}
if(typeof zflag_hasAd!='undefined'){
i27='&y='+zflag_hasAd;
}
if(typeof zflag_num!='undefined'){
n29=zflag_num;
zflag_num=0;
}
if(typeof zflag_ck!='undefined'){
o18='&ck='+zflag_ck;
zflag_ck=0;
}
if(typeof zflag_message_transport!='undefined'){
z31=zflag_message_transport;
zflag_message_transport=0;
}
if(typeof zflag_multi_param!='undefined'){
q23="&mp="+zflag_multi_param;
zflag_multi_param="";
}
if(typeof zflag_smooth!='undefined'){
r19+="&ssm="+zflag_smooth;
}
if(typeof zflag_slide_speed!='undefined'){
r19+="&ssp="+zflag_slide_speed;
}
if(typeof zflag_slider_close_text!='undefined'){
r19+="&sct="+zflag_slider_close_text;
}
y13=U52();
for(var i=0;i<y13.length;i++){
if(eval('typeof(zflag_'+y13[i]+')!="undefined"')){
o18=o18+'&'+y13[i]+'='+eval('zflag_'+y13[i]);
eval('zflag_'+y13[i]+'="";');
}}
var zzStr='';
if(typeof zzCountry=='undefined'){
var zzCountry=255;}
if(typeof zzMetro=='undefined'){
var zzMetro=0;}
if(typeof zzState=='undefined'){
var zzState=0;}var zzSection=y15;var zzPbNId=p37;var zzPbEId=r38;var zzPbAId=q38;var zzPbCId=c38;var zzPbGeoLvl=y37;var zzPbk=v38;
if(typeof zzPbk=='undefined'){
zzPbk=-1;
}
var zzPbSId=d39;var zzD=window.document;var zzRand=(Math.floor(Math.random()* 1000000)% 10000);var zzCustom='';var zzPat='';var zzSkip='';var zzExp='';var zzTrd='';var zzPos=0;var zzNw=0;var zzCh=0;
var zzDmCodes=new Array();var zzDmValues=new Array();var zzBr=99;var zzLang=99;var zzAGrp=0;var zzAct=new Array();var zzActVal=new Array();
if(r10<0||r10>31){
r10=1;
}
var v18=new Array();
function B22(zp_label){
if(!v18[zp_label]){
var t38=document.cookie;var t14=new Array();var e28=new Array();
t14=t38.split(';');
var z38=(t14!=null)?t14.length:0;
for(var i=0;i<z38;i++){
t14[i]=t14[i].replace(/^\s/,'');
e28=t14[i].split('=');
v18[e28[0]]=e28[1];
}}
if(v18[zp_label]){
return v18[zp_label];
}else{
return '';
}}

zd_url=p29+'/fm.js?c='+o12+'&a='+t27+'&f='+n29+'&n='+d27
+'&r='+r10+'&d='+z10+'&adm='+q12+'&q='+c24+'&$='+zd_$+i8+n24+'&s='+y15+t26+z30+y23+i27+i24+
o18+'&z='+Math.random()+'&tt=0'+q23;
zd_url='<scr'+'ipt language="javascript" src="'+zd_url+'" '+p27+'></scr'+'ipt>';
var z24=B22("ZEDOIDA");
if(!(z24=="OPT_OUT"&&z10==15)){
document.write(zd_url);
}