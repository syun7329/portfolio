$(document).ready(function() {
  $('.drawer').drawer();
});

$('.drawer').on('drawer.open', function () {
	$('.hamburger').addClass('active');
});
$('.drawer').on('drawer.close', function () {
		$('.hamburger').removeClass('active');
});
$(document).on('click', '.drawer-menu-item', function() {
 $('.drawer').drawer('close');
});

!function (e) {
  "use strict";
  "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function (e) {
  "use strict";
  var t = "drawer",
    n = "undefined" != typeof document.ontouchstart,
    s = {
      init: function (n) {
        return n = e.extend({
          iscroll: {
            mouseWheel: !0,
            preventDefault: !1
          },
          showOverlay: !0
        }, n), s.settings = {
          state: !1,
          "class": {
            nav: "drawer-nav",
            toggle: "drawer-toggle",
            overlay: "drawer-overlay",
            open: "drawer-open",
            close: "drawer-close",
            dropdown: "drawer-dropdown"
          },
          events: {
            opened: "drawer.opened",
						closed: "drawer.closed",
						open: "drawer.open",
						close: "drawer.close"
          },
          dropdownEvents: {
            opened: "shown.bs.dropdown",
            closed: "hidden.bs.dropdown"
          }
        }, this.each(function () {
          var o = this,
            r = e(this),
            a = r.data(t);
          if (!a) {
            n = e.extend({}, n), r.data(t, {
              options: n
            });
            var i = new IScroll("." + s.settings["class"].nav, n.iscroll);
            n.showOverlay && s.addOverlay.call(o), e("." + s.settings["class"].toggle).on("click." + t, function () {
              return s.toggle.call(o), i.refresh()
						}), e(window).resize(function () {
              return s.close.call(o, true), i.refresh()
            }), e("." + s.settings["class"].dropdown).on(s.settings.dropdownEvents.opened + " " + s.settings.dropdownEvents.closed, function () {
              return i.refresh()
            })
          }
        })
      },
      addOverlay: function () {
        var t = e(this),
          n = e("<div>").addClass(s.settings["class"].overlay + " " + s.settings["class"].toggle);
        return t.append(n)
      },
      toggle: function () {
				var e = this;
        return s.settings.state ? s.close.call(e) : s.open.call(e)
      },
      open: function (o) {
				var r = e(this);
				return o = r.data(t).options, n && r.on("touchmove." + t, function (e) {
          e.preventDefault()
        }), r.trigger(s.settings.events.open), r.removeClass(s.settings["class"].close).addClass(s.settings["class"].open).css({
          overflow: "hidden"
        }).drawerCallback(function () {
					s.settings.state = !0, r.trigger(s.settings.events.opened)
        })
      },
      close: function (o) {
				var r = e(this);
				if (o == undefined) {
					r.trigger(s.settings.events.close);
				}
        return o = r.data(t).options, n && r.off("touchmove." + t), r.removeClass(s.settings["class"].open).addClass(s.settings["class"].close).css({
          
          : "auto"
				}).drawerCallback(function () {
          s.settings.state = !1, r.trigger(s.settings.events.closed)
        })
      },
      destroy: function () {
        return this.each(function () {
          var n = e(this);
          e(window).off("." + t), n.removeData(t)
        })
      }
    };
  e.fn.drawerCallback = function (t) {
    var n = "transitionend webkitTransitionEnd";
    return this.each(function () {
      var s = e(this);
      s.on(n, function () {
        return s.off(n), t.call(this)
      })
    })
  }, e.fn.drawer = function (n) {
    return s[n] ? s[n].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof n && n ? void e.error("Method " + n + " does not exist on jQuery." + t) : s.init.apply(this, arguments)
  }
});