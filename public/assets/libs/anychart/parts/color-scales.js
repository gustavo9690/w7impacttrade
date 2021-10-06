if(!_.color_scales){_.color_scales=1;(function($){var XM,$M,aN,bN,eN;$.UM=function(a,b){var c=a.i("fontSize")!=b;null===b?delete a.Ad.fontSize:a.Ad.fontSize=b;c&&a.u(4)};$.VM=function(a){var b={};$.Dc(a.La,function(a,d){if($.n(a)){if("adjustByHeight"==d||"adjustByWidth"==d)d="adjustFontSize";b[d]=this.dd(d)}},a);return b};$.WM=function(a,b){return $.wk(Eea,a,b||"clip")};XM=function(){$.py.call(this)};
$.YM=function(){$.ry.call(this);this.Fa("defaultColorRange");$.Ut(this,this,this.pg,this.Dg,null,this.pg);this.tc.ra(this,"mousedown",this.Dv);this.Be|=1024;$.T(this.va,[["length",this.Be,9],["align",this.Be,9],["colorLineSize",this.Be,9]])};$.ZM=function(a){a.line&&(a.line.il(),a.line.remove(),a.line=null);a.lines&&(a.lines.length=0)};
$M=function(a){if(a.b){var b=a.scale();if(b&&$.K(b,$.Hy)){a.N={};for(var c=a.b,d=c.xc();d.advance();){var e=($.n(c.ga)?d.o(c.ga):null)||d.get(c.Re?c.Re.ml:c.ir[1]);!(e=b.kn(e))||(0,window.isNaN)(e.start)||(0,window.isNaN)(e.end)||(a.N[e.sourceIndex]||(a.N[e.sourceIndex]=[]),a.N[e.sourceIndex].push(d.la()))}}}};aN=function(a,b,c){var d=0;b.enabled()&&(d=b.i("length"),b=b.i("position"),d="center"==b?Math.max((d-a.i("colorLineSize"))/2,0):$.n(c)?0<c?"outside"==b?0:d:0>c?"inside"==b?0:d:d:d);return d};
bN=function(a){var b=0,c=$.ir(a,"marker");if(c&&c.enabled()){a=a.i("orientation");b=2*c.i("size");var d=c.i("offsetX");c=c.i("offsetY");d=$.n(d)?d:0;c=$.n(c)?c:0;switch(a){case "top":b+=c;break;case "right":b-=d;break;case "bottom":b-=c;break;case "left":b+=d}}return b};
$.cN=function(a,b){if(a.b){var c=a.scale(),d=$.ir(a,"marker"),e=a.b,f=e.ud()||(e.jn?e.jn():void 0),h=d&&d.enabled();e=e.enabled()&&f==c;if(a.enabled()&&h&&c&&e&&(c=a.line.mb(),h=$.Za(a.scale().transform(b,.5),0,1),!(0,window.isNaN)(h))){e=a.i("orientation");f=d.i("size");switch(e){case "top":var k=c.left+c.width*h;var l=c.top+c.height+f;var m=180;break;case "bottom":k=c.left+c.width*h;l=c.top-f;m=0;break;case "left":k=c.left+c.width+f;l=c.top+c.height-c.height*h;m=90;break;case "right":k=c.left-f,
l=c.top+c.height-c.height*h,m=-90}$.V(d);d.qa("rotation",m);d.Ec({value:{x:k,y:l}});d.da(!1);d.$();d.Id().visible(!0)}}};$.dN=function(a){var b=$.ir(a,"marker");a.scale()&&b&&b.Id().visible(!1)};eN=function(){$.YM.call(this)};$.bx.prototype.jn=$.ca(22,function(){return this.Kb});var Eea={wka:"always-show",qla:"clip",Xla:"drop"};$.H(XM,$.py);
XM.prototype.v_=function(a,b,c,d,e){b=Math.round(b.left+a*b.width);b=1==a?b+e:b-e;a=this.i("length");e=this.i("position");if("outside"==e){var f=c.top-d/2;var h=-a}else"center"==e?(f=c.top+(c.height-a)/2,h=a):"inside"==e&&(f=c.Ta()+d/2,h=a);this.path.moveTo(b,f);this.path.lineTo(b,f+h)};
XM.prototype.HR=function(a,b,c,d,e){b=Math.round(b.top+b.height-a*b.height);b=1==a?b-e:b+e;a=this.i("length");e=this.i("position");"outside"==e?(c=c.$a()+d/2,d=a):"center"==e?(c=c.left+(c.width-a)/2,d=a):(c=c.left-d/2,d=-a);this.path.moveTo(c,b);this.path.lineTo(c+d,b)};
XM.prototype.CR=function(a,b,c,d,e){b=Math.round(b.left+a*b.width);b=1==a?b+e:b-e;a=this.i("length");e=this.i("position");if("outside"==e){var f=c.Ta()+d/2;var h=a}else"center"==e?(f=c.top+(c.height-a)/2,h=a):"inside"==e&&(f=c.top-d/2,h=-a);this.path.moveTo(b,f);this.path.lineTo(b,f+h)};
XM.prototype.FR=function(a,b,c,d,e){b=Math.round(b.top+b.height-a*b.height);b=1==a?b-e:b+e;a=this.i("length");e=this.i("position");if("outside"==e){var f=c.left-d/2;var h=-a}else"center"==e?(f=c.left+(c.width-a)/2,h=a):"inside"==e&&(f=c.$a()+d/2,h=a);this.path.moveTo(f,b);this.path.lineTo(f+h,b)};$.H($.YM,$.ry);var fN={};$.gq(fN,[[0,"colorLineSize",$.oq],$.Z.RI,$.Z.TI]);$.U($.YM,fN);$.g=$.YM.prototype;$.g.sa=$.ry.prototype.sa|1024;$.g.Sk=function(){return new XM};$.g.EE=function(){this.line||($.K(this.scale(),$.Ey)?this.line=$.nk():$.K(this.scale(),$.Hy)&&(this.line=$.lk(),this.lines=[]),this.line.zIndex(this.zIndex()),this.line.parent(this.P()),this.line.cursor("pointer"),$.Tt(this,this.line));return this.line};
$.g.ar=function(a){this.Il||(this.Il=new $.Ex,$.W(this,"marker",this.Il),this.Il.Ec({value:{x:0,y:0}}),$.L(this.Il,this.o9,this));return $.n(a)?(this.Il.K(a),this.u(1024,1),this):this.Il};$.g.o9=function(a){$.X(a,1)&&this.u(1024,1)};$.g.target=function(a){return $.n(a)?(this.b!=a&&(this.b=a,$M(this),$.L(this.b,this.Bja,this)),this):this.b};$.g.Bja=function(a){$.X(a,132)&&$M(this)};
$.g.Qp=function(a,b){var c=this.scale(),d={};if($.K(c,$.Ey)){var e=(0,window.parseFloat)(b);var f=c.HD(e);var h="number"}else if($.K(c,$.Hy)){e=b;f=c.Sa().names()[a];h="string";var k=c.kn(b);k&&(d.colorRange={value:{color:k.color,end:k.end,name:k.name,start:k.start,index:k.sourceIndex},type:""})}d.index={value:a,type:"number"};d.value={value:f,type:h};d.tickValue={value:e,type:"number"};d.max={value:$.n(c.max)?c.max:null,type:"number"};d.min={value:$.n(c.min)?c.min:null,type:"number"};d.scale={value:c,
type:""};return $.Pu(new $.fw(d))};
$.g.FP=function(a,b,c,d,e){c=a.top+a.height+c/2-d;var f=this.scale();if($.K(f,$.Ey))this.line.moveTo(a.left+b,c).lineTo(a.left-b+a.width,c).lineTo(a.left-b+a.width,c-e).lineTo(a.left+b,c-e).close();else if($.K(f,$.Hy)){d=f.Rq();f=f.kj();for(var h=a.width/(d.length-1),k=0,l=d.length-1;k<l;k++){var m=d[k];m=m.color||f[m.sourceIndex]||f[f.length-1];var p=this.lines[k]?this.lines[k].clear():this.lines[k]=this.line.path(),q=a.left+b+h*k;p.moveTo(q,c).lineTo(q+h,c).lineTo(q+h,c-e).lineTo(q,c-e).close();
p.stroke(this.i("stroke"));p.fill(m)}}};
$.g.DE=function(a,b,c,d,e){c=a.left-c/2+d;var f=this.scale();if($.K(f,$.Ey))this.line.moveTo(c,a.top+b).lineTo(c,a.top-b+a.height).lineTo(c+e,a.top-b+a.height).lineTo(c+e,a.top+b).close();else if($.K(f,$.Hy)){d=f.Rq();f=f.kj();for(var h=a.height/(d.length-1),k=0,l=d.length-1;k<l;k++){var m=d[k];m=m.color||f[m.sourceIndex]||f[f.length-1];var p=this.lines[k]?this.lines[k].clear():this.lines[k]=this.line.path(),q=a.top+b+h*(d.length-1-k-1);p.moveTo(c,q).lineTo(c,q+h).lineTo(c+e,q+h).lineTo(c+e,q).close();
p.stroke(this.i("stroke"));p.fill(m)}}};
$.g.BE=function(a,b,c,d,e){c=a.top-c/2+d;var f=this.scale();if($.K(f,$.Ey))this.line.moveTo(a.left+b,c).lineTo(a.left-b+a.width,c).lineTo(a.left-b+a.width,c+e).lineTo(a.left+b,c+e).close();else if($.K(f,$.Hy)){d=f.Rq();f=f.kj();for(var h=a.width/(d.length-1),k=0,l=d.length-1;k<l;k++){var m=d[k];m=m.color||f[m.sourceIndex]||f[f.length-1];var p=this.lines[k]?this.lines[k].clear():this.lines[k]=this.line.path(),q=a.left+b+h*k;p.moveTo(q,c).lineTo(q+h,c).lineTo(q+h,c+e).lineTo(q,c+e).close();p.stroke(this.i("stroke"));
p.fill(m)}}};
$.g.CE=function(a,b,c,d,e){c=a.left+a.width+c/2-d;var f=this.scale();if($.K(f,$.Ey))this.line.moveTo(c,a.top+b).lineTo(c,a.top-b+a.height).lineTo(c-e,a.top-b+a.height).lineTo(c-e,a.top+b).close();else if($.K(f,$.Hy)){d=f.Rq();f=f.kj();for(var h=a.height/(d.length-1),k=0,l=d.length-1;k<l;k++){var m=d[k];m=m.color||f[m.sourceIndex]||f[f.length-1];var p=this.lines[k]?this.lines[k].clear():this.lines[k]=this.line.path(),q=a.top+b+h*(d.length-1-k-1);p.moveTo(c,q).lineTo(c,q+h).lineTo(c-e,q+h).lineTo(c-
e,q).close();p.stroke(this.i("stroke"));p.fill(m)}}};
$.g.Ip=function(){var a=this.EE(),b=this.scale();b||this.scale($.Fy());if($.K(b,$.Ey))a.clear(),a.stroke(this.i("stroke")),b=$.Vb(b.kj()),this.Hb()?b.angle=0:b.angle=90,a.fill(b);else if($.K(b,$.Hy))for(a=0,b=this.lines.length;a<b;a++)this.lines[a].clear();switch(this.i("orientation")){case "top":var c=this.FP;break;case "right":c=this.DE;break;case "bottom":c=this.BE;break;case "left":c=this.CE}a=this.i("stroke");a=$.Yb(a);a=!a||$.Uo(a)?0:a.thickness?(0,window.parseFloat)(a.thickness):1;b=0==a%2?
0:.5;var d=this.nb(),e=bN(this),f=Math.round(this.i("colorLineSize")),h=aN(this,this.Sa(),1),k=aN(this,this.qb(),1);c.call(this,d,b,a,Math.max(h,k,e),f)};
$.g.nb=function(){if(!this.hq||this.J(4)){var a=this.ja();if(a){a.top=Math.round(a.top);a.left=Math.round(a.left);a.width=Math.round(a.width);a.height=Math.round(a.height);if(this.Hb()){var b=a.width;var c=a.height}else b=a.height,c=a.width;var d=this.ng(b);c=this.width()?$.M(this.width(),c):$.vy(this,a,d);var e=this.padding(),f=$.M(e.i("top"),a.height),h=$.M(e.i("right"),a.width),k=$.M(e.i("bottom"),a.height);e=$.M(e.i("left"),a.width);var l=this.i("align"),m;this.Hb()?(d+h+e>b&&(d=b-(h+e)),"left"==
l||"top"==l?m=e:"right"==l||"bottom"==l?m=b-d-h:"center"==l&&(m=(b-d-h-e)/2)):(d+k+f>b&&(d=b-(k+f)),"left"==l||"top"==l?m=f:"right"==l||"bottom"==l?m=b-d-k:"center"==l&&(m=(b-d-k-f)/2));switch(this.i("orientation")){case "top":var p=a.top+f;var q=a.left+m;var r=c;var t=d;break;case "right":p=a.top+m;q=a.left+a.width-c-h;r=d;t=c;break;case "bottom":p=a.top+a.height-c-k;q=a.left+m;r=c;t=d;break;case "left":p=a.top+m,q=a.left+e,r=d,t=c}this.hq=new $.J(Math.round(q),Math.round(p),Math.round(t),Math.round(r))}else this.hq=
new $.J(0,0,0,0);this.I(4)}return this.hq};$.g.ng=function(a){return $.M(this.i("length"),a)};
$.g.DZ=function(a,b){var c=this.Sa(),d=this.qb(),e=c.i("position"),f=d.i("position");c=aN(this,c);var h=aN(this,d);d=bN(this);"outside"==e?"outside"==f?e=Math.max(a+c,b+h):(e="inside"==f?Math.max(a+c,b):Math.max(a+c,b+h),d=Math.max(h,d)):"inside"==e?"outside"==f?(e=Math.max(a,b+h),d=Math.max(c,d)):(e="inside"==f?Math.max(a,b):Math.max(a,b+h),d=Math.max(c,h,d)):"outside"==e?(e=Math.max(a+c,b+h),d=Math.max(c,d)):(e="inside"==f?Math.max(a+c,b):Math.max(a+c,b+h),d=Math.max(c,h,d));f=this.i("stroke");
f=!f||$.Uo(f)?0:f.thickness?(0,window.parseFloat)(f.thickness):1;f=Math.round(this.i("colorLineSize"))+f;return e+d+f};$.g.scale=function(a){(a=$.YM.B.scale.call(this,a))||(this.g||(this.g=$.Fy(),this.g.kj("#fff","#000")),a=this.g);return a};$.g.oS=function(){return 48};$.g.hg=function(a){$.X(a,2)&&$.ZM(this);$.YM.B.hg.call(this,a)};
$.g.$=function(){if(!this.Bc())return this;var a=$.ir(this,"marker");this.J(1024)&&(a&&(a.P(this.P()),a.zIndex(this.zIndex()+1),a.$(),a.Id().visible(!1)),this.I(1024));if(a&&(this.J(2)&&a.P(this.P()),this.J(8))){var b=this.zIndex();a.zIndex(b+1)}return $.YM.B.$.call(this)};
$.g.Dv=function(a){if(this.b){var b=this.scale(),c=this.b,d=c&&(c.ud()||(c.jn?c.jn():void 0));if(this.enabled()&&b&&c.enabled()&&d==b){d=this.line.mb();if(this.Hb()){var e=a.clientX;var f=d.left+$.Wj(this.P().Ha()).x;d=(e-f)/d.width}else e=a.clientY,f=d.top+$.Wj(this.P().Ha()).y,d=(d.height-(e-f))/d.height;d=b.Oc(d);a.metaKey||a.shiftKey||!c.map||c.map.$d();if($.K(b,$.Hy))d=b.kn(d),b&&c&&(e=this.N[d.sourceIndex],b=c.lc(),b=b.Tc(),"single"==b.i("hoverMode")?this.Ef={W:c,od:e}:this.Ef=[{W:c,od:e,tn:e[e.length-
1],we:{index:e[e.length-1],dg:0}}]);else if($.K(b,$.Ey)){a=c.xc();e=window.Infinity;for(var h=window.NaN,k=b.wh(),l=b.Ph();a.advance();){f=a.get(c.Re?c.Re.ml:c.ir[1]);f=$.Za(f,k,l);var m=Math.abs(d-f);e>m&&(e=m,h=f)}e=[];a=c.xc();for(d=h;a.advance();)f=a.get(c.Re?c.Re.ml:c.ir[1]),f=$.Za(f,k,l),f==d&&e.push(a.la());b&&c&&(b=c.lc(),b=b.Tc(),"single"==b.i("hoverMode")?this.Ef={W:c,od:e}:this.Ef=[{W:c,od:e,tn:e[e.length-1],we:{index:e[e.length-1],dg:0}}])}}}};
$.g.pg=function(a){if(this.b){var b=this.scale(),c=this.b,d=c.ud()||(c.jn?c.jn():void 0);if(this.enabled()&&b&&c.enabled()&&d==b){d=this.line.mb();if(this.Hb()){var e=a.clientX;var f=d.left+$.Wj(this.P().Ha()).x;d=(e-f)/d.width}else e=a.clientY,f=d.top+$.Wj(this.P().Ha()).y,d=(d.height-(e-f))/d.height;d=b.Oc(d);if($.K(b,$.Hy)){a=b.kn(d);var h=this.N[a.sourceIndex];b=c.lc();f=b.Tc();"single"==f.i("hoverMode")?this.Ef={W:c,od:h}:this.Ef=[{W:c,od:h,tn:h[h.length-1],we:{index:h[h.length-1],dg:0}}]}else if($.K(b,
$.Ey)&&c){f=c.xc();h=window.Infinity;for(var k=window.NaN,l=b.wh(),m=b.Ph();f.advance();){e=f.get(c.Re?c.Re.ml:c.ir[1]);e=$.Za(e,l,m);var p=Math.abs(d-e);h>p&&(h=p,k=e)}h=[];f=c.xc();for(d=k;f.advance();)e=f.get(c.Re?c.Re.ml:c.ir[1]),e=$.Za(e,l,m),e==d&&h.push(f.la());b&&c&&(b=c.lc(),f=b.Tc(),"single"==f.i("hoverMode")?(this.Ef&&!(0,$.DC)(h,function(a){return $.Aa(this.Ef.od,a)},this)&&b.dispatchEvent(b.Ck("hovered",a,[{W:c,od:[],we:{index:this.Ef.od[this.Ef.od.length-1],dg:0}}],!1)),this.Ef={W:c,
od:h}):this.Ef=[{W:c,od:h,tn:h[h.length-1],we:{index:h[h.length-1],dg:0}}])}$.cN(this,d)}}};$.g.Dg=function(){$.dN(this);var a=this.b;a&&(this.Pa=a)};$.g.remove=function(){var a=$.ir(this,"marker");a&&a.remove();$.YM.B.remove.call(this)};$.g.F=function(){var a=$.YM.B.F.call(this);$.Fq(this,fN,a);a.marker=this.ar().F();return a};$.g.X=function(a,b){$.YM.B.X.call(this,a,b);$.xq(this,fN,a,b);this.ar(a.marker)};$.g.R=function(){$.td(this.Il,this.g);this.g=this.Il=null;$.YM.B.R.call(this)};$.H(eN,$.YM);
$.Zt(eN,$.YM);var gN=$.YM.prototype;gN.marker=gN.ar;gN=eN.prototype;$.F("anychart.standalones.colorRange",function(){var a=new eN;a.Fa("standalones.colorRange");return a});gN.padding=gN.padding;gN.draw=gN.$;gN.parentBounds=gN.ja;gN.container=gN.P;}).call(this,$)}
