"use strict";$(document).ready(function(){if(window.innerWidth>768){var e=new ScrollMagic.Controller,n=(new TimelineMax).add([TweenMax.fromTo(".nube-1",1,{scale:1,top:0,right:0},{right:1e3,ease:Linear.easeOut}),TweenMax.fromTo(".nube-2",1,{scale:1,top:-100,right:30},{right:1800,ease:Linear.easeOut})]);new ScrollMagic.Scene({triggerElement:".animation",duration:"100%"}).setTween(n).addTo(e)}});