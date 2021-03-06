/* CodeMirror - Minified & Bundled
 Generated on 2015/8/21 with http://codemirror.net/doc/compress.html
 Version: HEAD

 Add-ons:
 - search.js
 */

!function (a) {
    "object" == typeof exports && "object" == typeof module ? a(require("../../lib/codemirror"), require("./searchcursor"), require("../dialog/dialog")) : "function" == typeof define && define.amd ? define(["../../lib/codemirror", "./searchcursor", "../dialog/dialog"], a) : a(CodeMirror)
}(function (a) {
    "use strict";
    function b(a, b) {
        return "string" == typeof a ? a = new RegExp(a.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&"), b ? "gi" : "g") : a.global || (a = new RegExp(a.source, a.ignoreCase ? "gi" : "g")), {
            token: function (b) {
                a.lastIndex = b.pos;
                var c = a.exec(b.string);
                return c && c.index == b.pos ? (b.pos += c[0].length, "searching") : (c ? b.pos = c.index : b.skipToEnd(), void 0)
            }
        }
    }

    function c() {
        this.posFrom = this.posTo = this.lastQuery = this.query = null, this.overlay = null
    }

    function d(a) {
        return a.state.search || (a.state.search = new c)
    }

    function e(a) {
        return "string" == typeof a && a == a.toLowerCase()
    }

    function f(a, b, c) {
        return a.getSearchCursor(b, c, e(b))
    }

    function g(a, b, c, d) {
        a.openDialog(b, d, {
            value: c, selectValueOnOpen: !0, closeOnEnter: !1, onClose: function () {
                p(a)
            }
        })
    }

    function h(a, b, c, d, e) {
        a.openDialog ? a.openDialog(b, e, {value: d, selectValueOnOpen: !0}) : e(prompt(c, d))
    }

    function i(a, b, c, d) {
        a.openConfirm ? a.openConfirm(b, d) : confirm(c) && d[0]()
    }

    function j(a) {
        return a.replace(/\\(.)/g, function (a, b) {
            return "n" == b ? "\n" : "r" == b ? "\r" : b
        })
    }

    function k(a) {
        var b = a.match(/^\/(.*)\/([a-z]*)$/);
        if (b)try {
            a = new RegExp(b[1], -1 == b[2].indexOf("i") ? "" : "i")
        } catch (c) {
        } else a = j(a);
        return ("string" == typeof a ? "" == a : a.test("")) && (a = /x^/), a
    }

    function m(a, c, d) {
        c.queryText = d, c.query = k(d), a.removeOverlay(c.overlay, e(c.query)), c.overlay = b(c.query, e(c.query)), a.addOverlay(c.overlay), a.showMatchesOnScrollbar && (c.annotate && (c.annotate.clear(), c.annotate = null), c.annotate = a.showMatchesOnScrollbar(c.query, e(c.query)))
    }

    function n(b, c, e) {
        var f = d(b);
        if (f.query)return o(b, c);
        var i = b.getSelection() || f.lastQuery;
        e && b.openDialog ? g(b, l, i, function (c, d) {
            a.e_stop(d), c && (c != f.queryText && m(b, f, c), o(b, d.shiftKey))
        }) : h(b, l, "Search for:", i, function (a) {
            a && !f.query && b.operation(function () {
                m(b, f, a), f.posFrom = f.posTo = b.getCursor(), o(b, c)
            })
        })
    }

    function o(b, c) {
        b.operation(function () {
            var e = d(b), g = f(b, e.query, c ? e.posFrom : e.posTo);
            (g.find(c) || (g = f(b, e.query, c ? a.Pos(b.lastLine()) : a.Pos(b.firstLine(), 0)), g.find(c))) && (b.setSelection(g.from(), g.to()), b.scrollIntoView({
                from: g.from(),
                to: g.to()
            }, 20), e.posFrom = g.from(), e.posTo = g.to())
        })
    }

    function p(a) {
        a.operation(function () {
            var b = d(a);
            b.lastQuery = b.query, b.query && (b.query = b.queryText = null, a.removeOverlay(b.overlay), b.annotate && (b.annotate.clear(), b.annotate = null))
        })
    }

    function t(a, b) {
        if (!a.getOption("readOnly")) {
            var c = a.getSelection() || d(a).lastQuery;
            h(a, q, "Replace:", c, function (c) {
                c && (c = k(c), h(a, r, "Replace with:", "", function (d) {
                    if (d = j(d), b)a.operation(function () {
                        for (var b = f(a, c); b.findNext();)if ("string" != typeof c) {
                            var e = a.getRange(b.from(), b.to()).match(c);
                            b.replace(d.replace(/\$(\d)/g, function (a, b) {
                                return e[b]
                            }))
                        } else b.replace(d)
                    }); else {
                        p(a);
                        var e = f(a, c, a.getCursor()), g = function () {
                            var d, b = e.from();
                            !(d = e.findNext()) && (e = f(a, c), !(d = e.findNext()) || b && e.from().line == b.line && e.from().ch == b.ch) || (a.setSelection(e.from(), e.to()), a.scrollIntoView({
                                from: e.from(),
                                to: e.to()
                            }), i(a, s, "Replace?", [function () {
                                h(d)
                            }, g]))
                        }, h = function (a) {
                            e.replace("string" == typeof c ? d : d.replace(/\$(\d)/g, function (b, c) {
                                return a[c]
                            })), g()
                        };
                        g()
                    }
                }))
            })
        }
    }

    var l = 'Search: <input type="text" style="width: 10em" class="CodeMirror-search-field"/> <span style="color: #888" class="CodeMirror-search-hint">(Use /re/ syntax for regexp search)</span>', q = 'Replace: <input type="text" style="width: 10em" class="CodeMirror-search-field"/> <span style="color: #888" class="CodeMirror-search-hint">(Use /re/ syntax for regexp search)</span>', r = 'With: <input type="text" style="width: 10em" class="CodeMirror-search-field"/>', s = "Replace? <button>Yes</button> <button>No</button> <button>Stop</button>";
    a.commands.find = function (a) {
        p(a), n(a)
    }, a.commands.findPersistent = function (a) {
        p(a), n(a, !1, !0)
    }, a.commands.findNext = n, a.commands.findPrev = function (a) {
        n(a, !0)
    }, a.commands.clearSearch = p, a.commands.replace = t, a.commands.replaceAll = function (a) {
        t(a, !0)
    }
});