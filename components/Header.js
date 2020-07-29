import Link from "next/link";

export default function Header() {
  return (
    <>
      <header className="header">
        <div>
          <h2>
            <Link href="/">
              <a className="pulse">
                <img className="icon-x2" src="/img/kEnAi.svg" alt="kEnAi" />
                <span>jonmircha</span>
              </a>
            </Link>
          </h2>
          <nav className="flex-row-evenly-center fluid-0 menu">
            <Link href="/cursos/">
              <a>Cursos</a>
            </Link>
            <Link href="/blog/">
              <a>Blog</a>
            </Link>
            <Link href="/ahora/">
              <a>Ahora</a>
            </Link>
          </nav>
          <nav className="flex-row-evenly-center fluid-0 social-media">
            <a
              href="https://youtube.com/jonmircha?sub_confirmation=1"
              target="_blank"
              rel="noopener"
            >
              <svg
                className="icon"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <title>Suscríbete a mi canal de YouTube</title>
                <path
                  fill="#F00"
                  d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"
                />
              </svg>
            </a>
            <a
              href="https://twitter.com/jonmircha"
              target="_blank"
              rel="noopener"
            >
              <svg
                className="icon"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Sígueme en Twitter</title>
                <path
                  fill="#1DA1F2"
                  d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"
                />
              </svg>
            </a>
            <a
              href="https://instagram.com/jonmircha"
              target="_blank"
              rel="noopener"
            >
              <svg
                className="icon"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Sígueme en Instagram</title>
                <path
                  fill="#E4405F"
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>
            <a
              href="https://tinyletter.com/jonmircha"
              target="_blank"
              rel="noopener"
            >
              <svg
                className="icon"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Suscríbete a mi lista de correo</title>
                <path
                  fill="#010101"
                  d="M5.564 2.703l3.45 3.734-2.434 4.798 5.14-.921 2.34 5.646L24 2.926 5.564 2.703zm-.636 8.088l.957-.787-1.234.39-.126-.18.51-.495-.669.27C1.813 10.979 0 13.455 0 16.35c0 1.951.822 3.705 2.133 4.947-.563-.99-.885-2.134-.885-3.355 0-2.865 1.809-5.415 4.315-6.42l.315-.766-.75.331-.211-.285.011-.011zm4.364-1.97L10.89 6l9.398-2.201L9.292 8.821z"
                />
              </svg>
            </a>
            <a
              href="https://jonmircha.com/jonmircha-cv.pdf"
              target="_blank"
              rel="noopener"
            >
              <svg
                className="icon"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Descarga mi CV</title>
                <path
                  fill="#18A303"
                  d="M16.365 0a.597.597 0 00-.555.352.582.582 0 00.128.635l4.985 4.996a.605.605 0 00.635.133.59.59 0 00.363-.53V.577A.605.605 0 0021.335 0zM2.661 0a.59.59 0 00-.582.59v22.82a.59.59 0 00.582.59h18.67a.59.59 0 00.59-.59V8.716a.59.59 0 00-.17-.42L13.674.182a.59.59 0 00-.42-.181zm.59 1.184h9.754l7.733 7.77v13.863H3.251z"
                />
              </svg>
            </a>
            <a
              href="https://www.paypal.me/jonmircha"
              target="_blank"
              rel="noopener"
            >
              <svg
                className="icon"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Invítame un Taco en PayPal</title>
                <path
                  fill="#00457C"
                  d="M6.908 24H3.804c-.664 0-1.086-.529-.936-1.18l.149-.674h2.071c.666 0 1.336-.533 1.482-1.182l1.064-4.592c.15-.648.816-1.18 1.48-1.18h.883c3.789 0 6.734-.779 8.84-2.34s3.16-3.6 3.16-6.135c0-1.125-.195-2.055-.588-2.789 0-.016-.016-.031-.016-.046l.135.075c.75.465 1.32 1.064 1.711 1.814.404.75.598 1.68.598 2.791 0 2.535-1.049 4.574-3.164 6.135-2.1 1.545-5.055 2.324-8.834 2.324h-.9c-.66 0-1.334.525-1.484 1.186L8.39 22.812c-.149.645-.81 1.17-1.47 1.17L6.908 24zm-2.677-2.695H1.126c-.663 0-1.084-.529-.936-1.18L4.563 1.182C4.714.529 5.378 0 6.044 0h6.465c1.395 0 2.609.098 3.648.289 1.035.189 1.92.519 2.684.99.736.465 1.322 1.072 1.697 1.818.389.748.584 1.68.584 2.797 0 2.535-1.051 4.574-3.164 6.119-2.1 1.561-5.056 2.326-8.836 2.326h-.883c-.66 0-1.328.524-1.478 1.169L5.7 20.097c-.149.646-.817 1.172-1.485 1.172l.016.036zm7.446-17.369h-1.014c-.666 0-1.332.529-1.48 1.178l-.93 4.02c-.15.648.27 1.179.93 1.179h.766c1.664 0 2.97-.343 3.9-1.021.929-.686 1.395-1.654 1.395-2.912 0-.83-.301-1.445-.9-1.84-.6-.404-1.5-.605-2.686-.605l.019.001z"
                />
              </svg>
            </a>
            <a
              href="https://www.patreon.com/jonmircha"
              target="_blank"
              rel="noopener"
            >
              <svg
                className="icon"
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Apóyame en Patreon</title>
                <path
                  fill="#F96854"
                  d="M15.386.524c-4.764 0-8.64 3.876-8.64 8.64 0 4.75 3.876 8.613 8.64 8.613 4.75 0 8.614-3.864 8.614-8.613C24 4.4 20.136.524 15.386.524M.003 23.537h4.22V.524H.003"
                />
              </svg>
            </a>
          </nav>
        </div>
      </header>
      <style jsx>{`
        .header {
          width: 100%;
          text-align: center;
          background-color: var(--white);
          border-bottom: thin solid var(--gray-light);
        }

        .header a {
          color: var(--dark);
          text-decoration: none;
          font-weight: 900;
        }

        .header a:hover {
          box-shadow: none;
        }

        .header h2 {
          font-size: var(--fluid-1);
        }

        .header h2 > a {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .header nav {
          padding: calc(var(--fluid-0) / 1.5);
        }

        .menu a:hover {
          box-shadow: inset 0 -2px 0 var(--orange);
        }

        .social-media path {
          fill: var(--orange);
        }

        @media screen and (min-width: 780px) {
          .header > div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
          }

          .header h2 {
            padding-left: var(--fluid-0);
            margin-right: auto;
            width: auto;
            flex-basis: auto;
          }

          .menu {
            width: 36%;
            flex-basis: 36%;
          }

          .social-media {
            width: 42%;
            flex-basis: 42%;
            justify-content: space-between;
          }
        }

        @media screen and (min-width: 992px) {
          .header {
            position: sticky;
            top: 0;
            z-index: 999;
            margin-top: var(--fluid-1);
          }

          .header > div {
            margin-left: auto;
            margin-right: auto;
            width: 992px;
          }

          .social-media {
            justify-content: space-evenly;
          }
        }

        @media screen and (min-width: 1024px) {
          .header h2 {
            padding-left: 0;
          }

          .social-media {
            justify-content: space-between;
          }
        }
      `}</style>
    </>
  );
}
