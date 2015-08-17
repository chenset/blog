/* CodeMirror - Minified & Bundled
   Generated on 2015/8/16 with http://codemirror.net/doc/compress.html
   Version: HEAD

   Add-ons:
   - active-line.js
 */

!function(a){"object"==typeof exports&&"object"==typeof module?a(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],a):a(CodeMirror)}(function(a){"use strict";function d(a){for(var d=0;d<a.state.activeLines.length;d++)a.removeLineClass(a.state.activeLines[d],"wrap",b),a.removeLineClass(a.state.activeLines[d],"background",c)}function e(a,b){if(a.length!=b.length)return!1;for(var c=0;c<a.length;c++)if(a[c]!=b[c])return!1;return!0}function f(a,f){for(var g=[],h=0;h<f.length;h++){var i=f[h];if(i.empty()){var j=a.getLineHandleVisualStart(i.head.line);g[g.length-1]!=j&&g.push(j)}}e(a.state.activeLines,g)||a.operation(function(){d(a);for(var e=0;e<g.length;e++)a.addLineClass(g[e],"wrap",b),a.addLineClass(g[e],"background",c);a.state.activeLines=g})}function g(a,b){f(a,b.ranges)}var b="CodeMirror-activeline",c="CodeMirror-activeline-background";a.defineOption("styleActiveLine",!1,function(b,c,e){var h=e&&e!=a.Init;c&&!h?(b.state.activeLines=[],f(b,b.listSelections()),b.on("beforeSelectionChange",g)):!c&&h&&(b.off("beforeSelectionChange",g),d(b),delete b.state.activeLines)})});