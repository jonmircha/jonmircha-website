export function disqusComments() {
  var disqus_config = function () {
    this.page.url = `https://jonmircha.com/${slug}`;
    this.page.identifier = slug;
  };

  (function () {
    var d = document,
      s = d.createElement("script");
    s.src = "https://jonmircha.disqus.com/embed.js";
    s.setAttribute("data-timestamp", +new Date());
    (d.head || d.body).appendChild(s);
  })();
}

export function disqusHTML() {
  return (
    <>
      <div id="disqus_thread" className="fluid-wrap" />
      <noscript>
        Por favor habilita JavaScript para ver los{" "}
        <a href="https://disqus.com/?ref_noscript">
          comentarios gestionados por Disqus.
        </a>
      </noscript>
    </>
  );
}

export async function driftChat() {
  (function () {
    "use strict";
    !(function () {
      var t = (window.driftt = window.drift = window.driftt || []);
      if (!t.init) {
        if (t.invoked)
          return void (
            window.console &&
            console.error &&
            console.error("Drift snippet included twice.")
          );
        (t.invoked = !0),
          (t.methods = [
            "identify",
            "config",
            "track",
            "reset",
            "debug",
            "show",
            "ping",
            "page",
            "hide",
            "off",
            "on",
          ]),
          (t.factory = function (e) {
            return function () {
              var n = Array.prototype.slice.call(arguments);
              return n.unshift(e), t.push(n), t;
            };
          }),
          t.methods.forEach(function (e) {
            t[e] = t.factory(e);
          }),
          (t.load = function (t) {
            var e = 3e5,
              n = Math.ceil(new Date() / e) * e,
              o = document.createElement("script");
            (o.type = "text/javascript"),
              (o.async = !0),
              (o.crossorigin = "anonymous"),
              (o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js");
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(o, i);
          });
      }
    })();
    drift.SNIPPET_VERSION = "0.3.1";
    drift.load("cga87pv427td");
  })();
}

export function shareSocialScript() {
  (function () {
    const d = document,
      s = d.createElement("script");

    s.src =
      "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d98208b017c1d74";
    d.body.appendChild(s);
  })();
}

export function shareSocialHTML() {
  return (
    <aside className="fluid-wrap text-center">
      <p className="fluid-2">Si te sirvió mi contenido, compártelo 🤗.</p>
      <div className="addthis_inline_share_toolbox_6qma" />
    </aside>
  );
}
