(()=>{var e={80425:(e,t,r)=>{"object"==typeof window&&window.Jetpack_Block_Assets_Base_Url&&(r.p=window.Jetpack_Block_Assets_Base_Url)},47701:e=>{"use strict";e.exports=window.wp.domReady}},t={};function r(o){var n=t[o];if(void 0!==n)return n.exports;var i=t[o]={exports:{}};return e[o](i,i.exports,r),i.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e;r.g.importScripts&&(e=r.g.location+"");var t=r.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var o=t.getElementsByTagName("script");o.length&&(e=o[o.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),r.p=e+"../"})(),(()=>{"use strict";r(80425)})(),(()=>{"use strict";var e=r(47701);r.n(e)()((function(){const e=document.querySelector(".wp-block-jetpack-cookie-consent"),t=e.querySelector("span"),r=parseInt(t.textContent),o=new Date(Date.now()+864e5*r),n=e.querySelector(".wp-block-button a");n.setAttribute("role","button"),n.setAttribute("href","javascript:void(0)"),n.addEventListener("click",(function(){try{document.cookie=`eucookielaw=${o.getTime()};path=/;expires=${o.toGMTString()}`,e.classList.add("is-dismissed"),e.addEventListener("transitionend",(()=>e.remove()));const t=new Event("eucookielaw-dismissed");document.dispatchEvent(t)}catch(e){}}))}))})()})();