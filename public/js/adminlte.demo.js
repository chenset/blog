!function(e,a){function o(o){e("body").toggleClass(o),a.layout.fixSidebar(),"layout-boxed"==o&&a.controlSidebar._fix(e(".control-sidebar-bg")),e("body").hasClass("fixed")&&"fixed"==o&&(a.pushMenu.expandOnHover(),a.controlSidebar._fixForFixed(e(".control-sidebar")),a.layout.activate())}function t(a){return e.each(n,function(a){e("body").removeClass(n[a])}),e("body").addClass(a),i("skin",a),!1}function i(e,a){"undefined"!=typeof Storage?localStorage.setItem(e,a):alert("Please use a modern browser to properly view this template!")}function s(e){return"undefined"!=typeof Storage?localStorage.getItem(e):void alert("Please use a modern browser to properly view this template!")}function l(){var i=s("skin");i&&e.inArray(i,n)&&t(i),e("[data-skin]").on("click",function(a){a.preventDefault(),t(e(this).data("skin"))}),e("[data-layout]").on("click",function(){o(e(this).data("layout"))}),e("[data-controlsidebar]").on("click",function(){o(e(this).data("controlsidebar"));var t=!a.options.controlSidebarOptions.slide;a.options.controlSidebarOptions.slide=t,t||e(".control-sidebar").removeClass("control-sidebar-open")}),e("[data-sidebarskin='toggle']").on("click",function(){var a=e(".control-sidebar");a.hasClass("control-sidebar-dark")?(a.removeClass("control-sidebar-dark"),a.addClass("control-sidebar-light")):(a.removeClass("control-sidebar-light"),a.addClass("control-sidebar-dark"))}),e("[data-enable='expandOnHover']").on("click",function(){e(this).attr("disabled",!0),a.pushMenu.expandOnHover(),e("body").hasClass("sidebar-collapse")||e("[data-layout='sidebar-collapse']").click()}),e("body").hasClass("fixed")&&e("[data-layout='fixed']").attr("checked","checked"),e("body").hasClass("layout-boxed")&&e("[data-layout='layout-boxed']").attr("checked","checked"),e("body").hasClass("sidebar-collapse")&&e("[data-layout='sidebar-collapse']").attr("checked","checked")}var n=["skin-blue","skin-black","skin-red","skin-yellow","skin-purple","skin-green","skin-blue-light","skin-black-light","skin-red-light","skin-yellow-light","skin-purple-light","skin-green-light"];l()}(jQuery,$.AdminLTE);