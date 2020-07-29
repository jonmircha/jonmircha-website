import fs from "fs";
import { join } from "path";
import { Converter } from "showdown";
import { pagesLikePost } from "./data.json";

const postsDirectory = join(process.cwd(), "posts");

function getMDs() {
  return fs.readdirSync(postsDirectory);
}

export function getAllPosts() {
  const mds = getMDs(),
    posts = mds.map((post) => {
      let md = require(`../posts/${post}`),
        converter = new Converter({ metadata: true }),
        content = converter.makeHtml(md),
        meta = converter.getMetadata();

      return { ...meta };
    });

  return { posts };
}

export function getAllPostsByDate() {
  const posts = [...getAllPosts().posts, ...pagesLikePost],
    postsByDate = posts.sort((a, b) => {
      a = new Date(a.date);
      b = new Date(b.date);
      return a > b ? -1 : a < b ? 1 : 0;
    });

  return [...postsByDate];
}
