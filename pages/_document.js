import Document, { Head, Main, NextScript } from "next/document";

export default class MyDocument extends Document {
  static async getInitialProps(ctx) {
    return await Document.getInitialProps(ctx);
  }

  googleAnalytics() {
    return (
      <>
        <script
          async
          src="https://www.googletagmanager.com/gtag/js?id=UA-114853516-1"
        ></script>
        <script
          dangerouslySetInnerHTML={{
            __html: `
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag("js", new Date());
                  gtag("config", "UA-114853516-1");
                `,
          }}
        />
      </>
    );
  }

  render() {
    return (
      <html lang="es">
        <Head>
          <link
            href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;900&display=swap"
            rel="stylesheet"
          />
          <link
            href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism-okaidia.min.css"
            rel="stylesheet"
          />
          {process.env.analytics ? this.googleAnalytics() : null}
        </Head>
        <body>
          <Main />
          <NextScript />
        </body>
      </html>
    );
  }
}
