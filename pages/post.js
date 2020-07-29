import { useEffect } from "react";
import { withRouter } from "next/router";
import { Converter } from "showdown";
import Prism from "prismjs";
import Layout from "../components/Layout";
import NewsLetter from "../components/NewsLetter";
import Sponsors from "../components/Sponsors";
import {
  disqusComments,
  disqusHTML,
  shareSocialHTML,
  shareSocialScript,
} from "../helpers/social";
import { cssPost } from "../helpers/css";

function Post({ content, meta: { title, description, poster, slug } }) {
  useEffect(() => {
    Prism.highlightAll();
    disqusComments();
    shareSocialScript();
  }, []);

  return (
    <>
      <Layout
        title={`${title} | jonmircha`}
        description={description}
        poster={poster}
        slug={`/${slug}`}
      >
        <div
          className="fluid-wrap fluid-insulate-bottom post"
          dangerouslySetInnerHTML={{ __html: content }}
        />
        {shareSocialHTML()}
        <NewsLetter />
        {disqusHTML()}
        <Sponsors />
      </Layout>
      {cssPost()}
    </>
  );
}

Post.getInitialProps = function (ctx) {
  const { slug } = ctx.query,
    md = require(`../posts/${slug}.md`),
    converter = new Converter({ metadata: true }),
    content = converter.makeHtml(md),
    meta = converter.getMetadata();

  return { content, meta };
};

export default withRouter(Post);
