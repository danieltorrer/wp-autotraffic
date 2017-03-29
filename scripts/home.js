"use strict";function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function processUp(e,t){if(currentSlide==maxSlide){var i=$(window).scrollTop();(0===i&&t||!t)&&($(".nav-home li").removeClass("active"),slideUpLast(e))}else currentSlide>minSlide&&currentSlide!=maxSlide&&($(".nav-home li").removeClass("active"),slideUp(e))}function processDown(e){currentSlide<maxSlide&&(currentSlide==maxSlide-1?($(".nav-home li").removeClass("active"),slideDownLast(e)):($(".nav-home li").removeClass("active"),slideDown(e)))}function slideDownLast(e){currentSlide++,scrolling=!0,$(".relative-wrapper").removeClass("fixed"),$(".relative-wrapper").velocity({"padding-top":"0vh"},{duration:e,queue:!1,easing:"easeOutQuad",complete:function(){$('.scroll-body .slide[data-slide="'+(currentSlide+1)+'"]').velocity({translateY:"100%"},{duration:0}),postScrollSettings()}})}function slideUpLast(e){currentSlide--,scrolling=!0,$(".relative-wrapper").velocity({"padding-top":"100%"},{duration:e,queue:!1,easing:"easeOutQuad",complete:function(){$(".relative-wrapper").addClass("fixed"),postScrollSettings()}})}function slideDown(e){currentSlide++,scrolling=!0,$('.slide[data-slide="'+currentSlide+'"]').velocity({translateY:"0%"},{duration:e,queue:!1,easing:"easeOutQuad",complete:function(){$('.scroll-body .slide[data-slide="'+(currentSlide+1)+'"]').velocity({translateY:"100%"},{duration:0}),postScrollSettings()}})}function slideUp(e){scrolling=!0,currentSlide--,$('.slide[data-slide="'+(currentSlide+1)+'"]').velocity({translateY:"100%"},{duration:e,queue:!1,easing:"easeOutQuad",complete:function(){postScrollSettings()}})}function postScrollSettings(){scrolling=!1,$('.nav-home li[data-slide="'+currentSlide+'"]').addClass("active"),currentSlide==maxSlide?($(window).scrollTop(0),$("body").removeClass("no-scroll"),$('.slide[data-slide="'+currentSlide+'"]').css({position:"relative"})):$("body").addClass("no-scroll")}function handleTouchStart(e){xDown=e.touches[0].clientX,yDown=e.touches[0].clientY}function handleTouchMove(e){if(xDown&&yDown){var t=e.touches[0].clientX,i=e.touches[0].clientY,n=xDown-t,s=yDown-i;Math.abs(n)>Math.abs(s)||(s>0?processDown(1200):processUp(1200,!0)),xDown=null,yDown=null}}function setup(){particles=[],resizeReset(),opts.particleAmount=numParticles,opts.linkRadius=linkRadius;for(var e=0;e<opts.particleAmount;e++)particles.push(new Particle);window.requestAnimationFrame(loop)}function loop(){if(window.requestAnimationFrame(loop),0==currentSlide){drawArea.clearRect(0,0,w,h);for(var e=0;e<particles.length;e++)particles[e].update(),particles[e].draw();for(var e=0;e<particles.length;e++)linkPoints(particles[e],particles)}}var _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e};!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):"object"==("undefined"==typeof exports?"undefined":_typeof(exports))?module.exports=e:e(jQuery)}(function(e){function t(t){var o=t||window.event,l=r.call(arguments,1),d=0,c=0,u=0,v=0,m=0,p=0;if(t=e.event.fix(o),t.type="mousewheel","detail"in o&&(u=-1*o.detail),"wheelDelta"in o&&(u=o.wheelDelta),"wheelDeltaY"in o&&(u=o.wheelDeltaY),"wheelDeltaX"in o&&(c=-1*o.wheelDeltaX),"axis"in o&&o.axis===o.HORIZONTAL_AXIS&&(c=-1*u,u=0),d=0===u?c:u,"deltaY"in o&&(u=-1*o.deltaY,d=u),"deltaX"in o&&(c=o.deltaX,0===u&&(d=-1*c)),0!==u||0!==c){if(1===o.deltaMode){var f=e.data(this,"mousewheel-line-height");d*=f,u*=f,c*=f}else if(2===o.deltaMode){var g=e.data(this,"mousewheel-page-height");d*=g,u*=g,c*=g}if(v=Math.max(Math.abs(u),Math.abs(c)),(!a||a>v)&&(a=v,n(o,v)&&(a/=40)),n(o,v)&&(d/=40,c/=40,u/=40),d=Math[d>=1?"floor":"ceil"](d/a),c=Math[c>=1?"floor":"ceil"](c/a),u=Math[u>=1?"floor":"ceil"](u/a),h.settings.normalizeOffset&&this.getBoundingClientRect){var w=this.getBoundingClientRect();m=t.clientX-w.left,p=t.clientY-w.top}return t.deltaX=c,t.deltaY=u,t.deltaFactor=a,t.offsetX=m,t.offsetY=p,t.deltaMode=0,l.unshift(t,d,c,u),s&&clearTimeout(s),s=setTimeout(i,200),(e.event.dispatch||e.event.handle).apply(this,l)}}function i(){a=null}function n(e,t){return h.settings.adjustOldDeltas&&"mousewheel"===e.type&&t%120===0}var s,a,o=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],l="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],r=Array.prototype.slice;if(e.event.fixHooks)for(var d=o.length;d;)e.event.fixHooks[o[--d]]=e.event.mouseHooks;var h=e.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var i=l.length;i;)this.addEventListener(l[--i],t,!1);else this.onmousewheel=t;e.data(this,"mousewheel-line-height",h.getLineHeight(this)),e.data(this,"mousewheel-page-height",h.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var i=l.length;i;)this.removeEventListener(l[--i],t,!1);else this.onmousewheel=null;e.removeData(this,"mousewheel-line-height"),e.removeData(this,"mousewheel-page-height")},getLineHeight:function(t){var i=e(t),n=i["offsetParent"in e.fn?"offsetParent":"parent"]();return n.length||(n=e("body")),parseInt(n.css("fontSize"),10)||parseInt(i.css("fontSize"),10)||16},getPageHeight:function(t){return e(t).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};e.fn.extend({mousewheel:function(e){return e?this.bind("mousewheel",e):this.trigger("mousewheel")},unmousewheel:function(e){return this.unbind("mousewheel",e)}})});var _createClass=function(){function e(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,i,n){return i&&e(t.prototype,i),n&&e(t,n),t}}(),VanillaTilt=function(){var e=function(){function e(t){var i=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};if(_classCallCheck(this,e),!(t instanceof Node))throw"Can't initialize VanillaTilt because "+t+" is not a Node.";this.width=null,this.height=null,this.left=null,this.top=null,this.transitionTimeout=null,this.updateCall=null,this.updateBind=this.update.bind(this),this.element=t,this.settings=this.extendSettings(i),this.reverse=this.settings.reverse?-1:1,this.isSafari=navigator.vendor&&navigator.vendor.indexOf("Apple")>-1&&navigator.userAgent&&!navigator.userAgent.match("CriOS"),this.addEventListeners()}return _createClass(e,[{key:"addEventListeners",value:function(){this.onMouseEnterBind=this.onMouseEnter.bind(this),this.onMouseMoveBind=this.onMouseMove.bind(this),this.onMouseLeaveBind=this.onMouseLeave.bind(this),this.element.addEventListener("mouseenter",this.onMouseEnterBind),this.element.addEventListener("mousemove",this.onMouseMoveBind),this.element.addEventListener("mouseleave",this.onMouseLeaveBind)}},{key:"removeEventListeners",value:function(){this.element.removeEventListener("mouseenter",this.onMouseEnterBind),this.element.removeEventListener("mousemove",this.onMouseMoveBind),this.element.removeEventListener("mouseleave",this.onMouseLeaveBind)}},{key:"destroy",value:function(){this.removeEventListeners(),this.element.vanillaTilt=null,delete this.element.vanillaTilt,this.element=null}},{key:"onMouseEnter",value:function(e){this.updateElementPosition(),this.element.style.willChange="transform",this.setTransition()}},{key:"onMouseMove",value:function(e){null!==this.updateCall&&cancelAnimationFrame(this.updateCall),this.event=e,this.updateCall=requestAnimationFrame(this.updateBind)}},{key:"onMouseLeave",value:function(e){this.setTransition(),this.settings.reset&&this.reset()}},{key:"reset",value:function(){var e=this;requestAnimationFrame(function(){e.event={pageX:e.left+e.width/2,pageY:e.top+e.height/2},e.isSafari||(e.element.style.transform="perspective("+e.settings.perspective+"px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)",e.element.style.webkitTransform="-webkit-perspective("+e.settings.perspective+"px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)")})}},{key:"getValues",value:function(){var e=(this.event.clientX-this.left)/this.width,t=(this.event.clientY-this.top)/this.height;e=Math.min(Math.max(e,0),1),t=Math.min(Math.max(t,0),1);var i=(this.reverse*(this.settings.max/2-e*this.settings.max)).toFixed(2),n=(this.reverse*(t*this.settings.max-this.settings.max/2)).toFixed(2);return{tiltX:i,tiltY:n,percentageX:100*e,percentageY:100*t}}},{key:"updateElementPosition",value:function(){var e=this.element.getBoundingClientRect();this.width=this.element.offsetWidth,this.height=this.element.offsetHeight,this.left=e.left,this.top=e.top}},{key:"update",value:function(){var e=this.getValues();this.isSafari||(this.element.style.transform="perspective("+this.settings.perspective+"px) rotateX("+("x"===this.settings.axis?0:e.tiltY)+"deg) rotateY("+("y"===this.settings.axis?0:e.tiltX)+"deg) scale3d("+this.settings.scale+", "+this.settings.scale+", "+this.settings.scale+")"),this.element.dispatchEvent(new CustomEvent("tiltChange",{detail:e})),this.updateCall=null}},{key:"setTransition",value:function(){var e=this;clearTimeout(this.transitionTimeout),this.element.style.transition=this.settings.speed+"ms "+this.settings.easing,this.element.style.webkitTransform=this.settings.speed+"ms "+this.settings.easing,this.transitionTimeout=setTimeout(function(){return e.element.style.transition=""},this.settings.speed)}},{key:"extendSettings",value:function(e){var t={reverse:!1,max:35,perspective:1e3,easing:"cubic-bezier(.03,.98,.52,.99)",scale:"1",speed:"300",transition:!0,axis:null,reset:!0},i={};for(var n in t)if(n in e)i[n]=e[n];else if(this.element.hasAttribute("data-tilt-"+n)){var s=this.element.getAttribute("data-tilt-"+n);try{i[n]=JSON.parse(s)}catch(e){i[n]=s}}else i[n]=t[n];return i}}],[{key:"init",value:function(t,i){t instanceof Node&&(t=[t]),t instanceof NodeList&&(t=[].slice.call(t)),t instanceof Array&&t.forEach(function(t){"vanillaTilt"in t||(t.vanillaTilt=new e(t,i))})}}]),e}();return"undefined"!=typeof document&&(window.VanillaTilt=e,e.init(document.querySelectorAll("[data-tilt]"))),e}(),scrolling=!1,position=$(window).scrollTop(),currentSlide=0,minSlide=0,maxSlide=3;$(document).ready(function(){$("body").addClass("no-scroll"),$(".movilidad-categoria").mouseover(function(e){var t=$(this).attr("data-category");$(".zoom-image").addClass("hide-image"),$(".zoom-image-"+t).removeClass("hide-image")}),document.addEventListener("touchstart",handleTouchStart,!1),document.addEventListener("touchmove",handleTouchMove,!1),$(".scroll-slide-arrow").click(function(e){e.preventDefault(),processDown(1200)}),$(".nav-home li").click(function(e){var t=$(this).attr("data-slide");$(".nav-home li").removeClass("active");var i=t-currentSlide;if(i>0)for(var n=0;n<i;n++)processDown(1200);if(i<0)for(var n=i;n<0;n++)processUp(1200,!1);e.preventDefault()}),$('.scroll-body .slide[data-slide="'+(currentSlide+1)+'"]').velocity({translateY:"100%"},{duration:0}),$('.scroll-body .slide[data-slide="'+(currentSlide+2)+'"]').velocity({translateY:"100%"},{duration:0}),$(document).on("mousewheel",function(e){var t=$("body").hasClass("modal-open");scrolling||menuOpened||t||(e.deltaY>0?processUp(1200,!0):processDown(1200))})});var xDown=null,yDown=null,resizeReset=function(){canvasBody.width=1.3*window.innerWidth,canvasBody.height=1.3*window.innerHeight,w=canvasBody.width,h=canvasBody.height,window.innerWidth<768&&(numParticles=40,linkRadius=90),window.innerWidth>=768&&window.innerWidth<1200&&(numParticles=120,linkRadius=120),window.innerWidth>1201&&window.innerWidth<=1920&&(numParticles=190,linkRadius=160),window.innerWidth>1921&&(numParticles=220,linkRadius=190)};window.addEventListener("resize",function(){deBouncer()});var deBouncer=function(){clearTimeout(tid),tid=setTimeout(function(){resizeReset()},delay)},checkDistance=function(e,t,i,n){return Math.sqrt(Math.pow(i-e,2)+Math.pow(n-t,2))},linkPoints=function(e,t){for(var i=0;i<t.length;i++)if(!t[i].isIcon&&!e.isIcon){var n=checkDistance(e.x,e.y,t[i].x,t[i].y),s=1-n/opts.linkRadius;s>0&&(drawArea.save(),drawArea.globalAlpha=s,drawArea.lineWidth=.5,drawArea.strokeStyle="rgba(255, 255, 255, 1 )",drawArea.beginPath(),drawArea.moveTo(e.x,e.y),drawArea.lineTo(t[i].x,t[i].y),drawArea.closePath(),drawArea.stroke(),drawArea.restore())}},Particle=function(e,t){if(this.x=Math.random()*w,this.y=Math.random()*h,this.speed=opts.defaultSpeed+Math.random()*opts.variantSpeed,this.directionAngle=Math.floor(360*Math.random()),this.color=opts.particleColor,this.radius=opts.defaultRadius+Math.random()*opts.variantRadius,this.isIcon=100*Math.random()>=95,this.opacity=Math.floor(10*Math.random())%2==0?.15:.99,this.increment=.01,this.transparent=!1,this.isIcon){var i=Math.floor(100*Math.random()%opts.icons.length);this.icon=document.querySelector(opts.icons[i])}this.vector={x:Math.cos(this.directionAngle)*this.speed/2,y:Math.sin(this.directionAngle)*this.speed/2},this.update=function(){this.border(),this.x+=this.vector.x,this.y+=this.vector.y},this.border=function(){(this.x>=w||this.x<=0)&&(this.vector.x*=-1),(this.y>=h||this.y<=0)&&(this.vector.y*=-1),this.x>w&&(this.x=w),this.y>h&&(this.y=h),this.x<0&&(this.x=0),this.y<0&&(this.y=0)},this.draw=function(){this.isIcon?(drawArea.save(),drawArea.globalAlpha=this.opacity,this.opacity>=0&&drawArea.drawImage(this.icon,this.x,this.y),this.opacity>=.98?this.increment=-.01:this.opacity<=-.3&&(this.increment=.02),this.opacity=+this.opacity+this.increment,drawArea.restore()):(drawArea.beginPath(),drawArea.arc(this.x,this.y,this.radius,0,2*Math.PI),drawArea.closePath(),drawArea.fillStyle=this.color,drawArea.fill())}},numParticles=40,linkRadius=170,opts={particleColor:"rgba(250,250,250, 0.5)",lineColor:"rgba(250,250,250, 0.5)",particleAmount:numParticles,defaultSpeed:1,variantSpeed:2,defaultRadius:2,variantRadius:1,linkRadius:linkRadius,icons:[".bike-icon",".network-icon",".bus-icon",".car-icon",".cel-icon",".laptop-icon"]},canvasBody=document.getElementById("nodes"),drawArea=canvasBody.getContext("2d"),grd,delay=200,tid,w,h,particles,rgb=opts.lineColor.match(/\d+/g);$(document).ready(function(){resizeReset(),setup()});