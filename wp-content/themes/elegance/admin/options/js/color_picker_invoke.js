!function(r,a,e,o){"use strict";typeof Color.fn.toString!==o&&(Color.fn.toString=function(){if(this._alpha<1)return this.toCSS("rgba",this._alpha).replace(/\s+/g,"");var r=parseInt(this._color,10).toString(16);if(this.error)return"";if(r.length<6)for(var a=6-r.length-1;a>=0;a--)r="0"+r;return"#"+r}),r.cs_ParseColorValue=function(r){var a=r.replace(/\s+/g,""),e=-1!==a.indexOf("rgba")?parseFloat(100*a.replace(/^.*,(.+)\)/,"$1")):100,o=100>e?!0:!1;return{value:a,alpha:e,rgba:o}},r.fn.cs_wpColorPicker=function(){return this.each(function(){var a=r(this);if(a.data("rgba")!==!1){var e=r.cs_ParseColorValue(a.val());a.wpColorPicker({clear:function(){a.trigger("keyup")},change:function(r,e){var o=e.color.toString();a.closest(".wp-picker-container").find(".cs-alpha-slider-offset").css("background-color",o),a.val(o).trigger("change")},create:function(){var o=a.data("a8cIris"),c=a.closest(".wp-picker-container"),l=r('<div class="cs-alpha-wrap"><div class="cs-alpha-slider"></div><div class="cs-alpha-slider-offset"></div><div class="cs-alpha-text"></div></div>').appendTo(c.find(".wp-picker-holder")),i=l.find(".cs-alpha-slider"),t=l.find(".cs-alpha-text"),n=l.find(".cs-alpha-slider-offset");i.slider({slide:function(r,e){var c=parseFloat(e.value/100);o._color._alpha=c,a.wpColorPicker("color",o._color.toString()),t.text(1>c?c:"")},create:function(){var s=parseFloat(e.alpha/100),p=1>s?s:"";t.text(p),n.css("background-color",e.value),c.on("click",".wp-picker-clear",function(){o._color._alpha=1,t.text(""),i.slider("option","value",100).trigger("slide")}),c.on("click",".wp-picker-default",function(){var e=r.cs_ParseColorValue(a.data("default-color")),c=parseFloat(e.alpha/100),l=1>c?c:"";o._color._alpha=c,t.text(l),i.slider("option","value",e.alpha).trigger("slide")}),c.on("click",".wp-color-result",function(){l.toggle()}),r("body").on("click.wpcolorpicker",function(){l.hide()})},value:e.alpha,step:1,min:1,max:100})}})}else a.wpColorPicker({clear:function(){a.trigger("keyup")},change:function(r,e){a.val(e.color.toString()).trigger("change")}})})},r(e).ready(function(){r(".cs-wp-color-picker").cs_wpColorPicker()})}(jQuery,window,document);