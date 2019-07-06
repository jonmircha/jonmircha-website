<style>
.u-responsiveFlexbox {
  display: flex;
  flex-wrap: wrap
}

.u-responsiveFlexbox>* {
  flex: 1 1 200px
}

.u-responsiveGrid {
  display: grid;
  grid-gap: 1em;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr))
}

.u-responsiveVideo {
  height: 0;
  padding-bottom: 56.25%;
  position: relative
}

.u-responsiveVideo>iframe,
.u-responsiveVideo>video {
  position: absolute;
  width: 100%;
  height: 100%
}

.u-fullScreen {
  width: 100%;
  min-height: 100vh
}

.u-fullWidth {
  position: relative;
  width: 100vw;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
}

.u-maxWidth {
  display: block;
  max-width: var(--max-width);
  margin-left: auto;
  margin-right: auto
}

.u-afterFixed {
  padding-top: var(--navbar-height)
}

.u-flexRowCenter {
  display: flex;
  justify-content: center;
  align-items: center
}

.u-flexRowSpaceEvenly {
  display: flex;
  justify-content: space-evenly;
  align-items: center
}

.u-flexColumnCenter {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center
}

.u-flowText {
  font-size: 1rem
}

@media screen and (min-width:20em) {
  .u-flowText {
    font-size: 1.25rem
  }
}

@media screen and (min-width:30em) {
  .u-flowText {
    font-size: 1.5rem
  }
}

@media screen and (min-width:45em) {
  .u-flowText {
    font-size: 1.75rem
  }
}

@media screen and (min-width:64em) {
  .u-flowText {
    font-size: 2rem
  }
}

@media screen and (min-width:75em) {
  .u-flowText {
    font-size: 2.5rem
  }
}

/* ********** Pages Classes ********** */
.Error-404 {
  padding: 1rem;
  text-align: center
}

.Error-404 > * {
  margin-bottom: 1rem
}

.Error-404 img {
  max-width: 400px
}
</style>
