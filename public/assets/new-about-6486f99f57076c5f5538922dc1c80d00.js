!function e(i,n,o){function t(s,r){if(!n[s]){if(!i[s]){var l="function"==typeof require&&require;if(!r&&l)return l(s,!0);if(d)return d(s,!0);var a=new Error("Cannot find module '"+s+"'");throw a.code="MODULE_NOT_FOUND",a}var u=n[s]={exports:{}};i[s][0].call(u.exports,function(e){var n=i[s][1][e];return t(n?n:e)},u,u.exports,e,i,n,o)}return n[s].exports}for(var d="function"==typeof require&&require,s=0;s<o.length;s++)t(o[s]);return t}({1:[function(e,i,n){var o=(window.jQuery,e("modules/VideoPlayer/view.js"));!function(e){new o({el:".js-video-container"})}(MD)},{"modules/VideoPlayer/view.js":2}],2:[function(e,i,n){var o=window.Backbone;VideoPlayerView=o.View.extend({events:{"click .js-video-play":"handleClick"},initialize:function(){_.bindAll(this,"handleEnded"),this.$video=this.$(".js-video"),this.$videoPlaceholder=this.$(".js-video-placeholder"),this.$(".js-video-play").removeClass("is-hidden"),this.subscribe()},subscribe:function(){this.$video.bind("ended",this.handleEnded)},handleClick:function(){this.setVideoVisible(!0),this.$video[0].play()},handleEnded:function(){this.setVideoVisible(!1)},setVideoVisible:function(e){this.$videoPlaceholder.toggleClass("is-hidden",e),this.$video.toggleClass("is-hidden",!e)}}),i.exports=VideoPlayerView},{}]},{},[1]);