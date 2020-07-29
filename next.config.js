const withPWA = require("next-pwa"),
  fs = require("fs"),
  path = require("path"),
  postsDirectory = path.join(process.cwd(), "posts"),
  postsFiles = fs.readdirSync(postsDirectory),
  postsSlugs = postsFiles.map((file) => file.slice(0, -3)),
  postsURLs = {
    "/": { page: "/" },
    "/ahora": { page: "/ahora" },
    "/cursos": { page: "/cursos" },
    "/blog": { page: "/blog" },
    "/bryan": { page: "/bryan" },
    "/maratones": { page: "/maratones" },
    "/mecenas": { page: "/mecenas" },
    /* "/flexbox": {
      page: "/post",
      query: {
        slug: "flexbox",
      },
    }, */
  };

postsSlugs.map((slug) => {
  let newURL = [`/${slug}`];
  postsURLs[newURL] = {
    page: "/post",
    query: {
      slug,
    },
  };
});

module.exports = withPWA({
  env: {
    analytics: false, //true activar ga
  },
  pwa: {
    disable: true, //false para activar pwa
    dest: "public",
  },
  //assetPrefix: "/site", //build en subcarpeta específica
  exportTrailingSlash: true, //true páginas en carpetas
  exportPathMap: function () {
    return postsURLs;
  },
  webpack: function (config) {
    config.module.rules.push({
      test: /\.md$/,
      use: "raw-loader",
    });

    return config;
  },
});
