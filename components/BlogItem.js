import Link from "next/link";
import { humanDate } from "../helpers/formatDate";

export default function BlogItem({ post }) {
  let href = post.page ? `/${post.slug}` : `/post?slug=${post.slug}`;
  return (
    <>
      <Link as={`/${post.slug}`} href={href}>
        <a className="box-shadow-none blog-item">
          <figure>
            <img
              className="icon-x3"
              src={`/img/category/${post.category}.svg`}
              alt={post.category}
              title={`Categoría: ${post.category}`}
              loading="lazy"
            />
            <figcaption>
              <span>{post.title}</span>
              <small>{humanDate(post.date)}</small>
            </figcaption>
          </figure>
        </a>
      </Link>
      <style jsx>{`
        .blog-item {
          border: thin solid transparent;
          border-bottom-color: var(--gray-light);
          display: block;
          font-size: var(--fluid-0);
          font-weight: 900;
          text-decoration: none;
          color: var(--text-color);
        }

        .blog-item:hover {
          background-color: var(--gray-light);
          opacity: 1;
        }

        .blog-item figure {
          padding: calc(var(--fluid-0) * 0.5);
          width: 100%;
          height: 100%;
          display: flex;
          align-items: center;
        }

        .blog-item figcaption {
          margin-left: var(--fluid-2);
          flex-grow: 1;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          align-items: center;
        }

        .blog-item span,
        .blog-item small {
          width: 100%;
        }

        .blog-item small {
          font-weight: 400;
        }

        @media screen and (min-width: 780px) {
          .blog-item span {
            width: 80%;
          }

          .blog-item small {
            width: 20%;
            text-align: right;
          }
        }
      `}</style>
    </>
  );
}
