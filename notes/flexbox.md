# Flexbox

<!--*2019-12-06 13:00:00*-->
<!--*En esta nota te comparto mis apuntes y videotutoriales sobre Flexbox CSS*-->
<!--*https://jonmircha.com/img/notas/flex-direction.png*-->

Flexbox CSS es un sistema de maquetación **unidimensional**, pensado principalmente para el acomodo interno de los elementos, componentes y/o widgets de una interfaz de usuario.

<iframe width="560" height="315" src="https://www.youtube.com/embed/AAtvnv6LNMk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## Conceptos Básicos

- Contenedor Padre ( _**Flex Container**_ ).
- Elementos Hijos ( _**Flex Items**_ ).
- Eje Principal ( _**Main Axis**_ )
- Eje Transversal ( _**Cross Axis**_ ).

<img src="https://jonmircha.com/img/notas/flex-conceptos.png" alt="Conceptos Básicos Flexbox" loading="lazy">

<iframe width="560" height="315" src="https://www.youtube.com/embed/1NBMqQkcZ9Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## Propiedades CSS de Flexbox

Flexbox tiene 14 propiedades CSS, 8 que aplican al contenedor padre y 6 a los elementos hijos, a continuación te doy una definición muy puntual sobre cada propiedad, así como los posibles valores que pueden aceptar.

El primer valor que enlisto en cada propiedad es el que toman por defecto.

### Propiedades CSS del contenedor padre

**display**: Define que una caja será flexbox de bloque o flexbox de línea.

```css
display: flex | inline-flex;
```

**flex-direction**: Define el eje principal (_main axis_) _row_ - X, _column_ - Y.

```css
flex-direction: row | row-reverse | column | column-reverse;
```

<img class="img-half" src="https://jonmircha.com/img/notas/flex-direction.png" alt="flex-direction" loading="lazy">

**flex-wrap**: Define si la caja flexbox envuelve o **NO** a sus hijos.

```css
flex-wrap: nowrap | wrap | wrap-reverse;
```

<img class="img-half" src="https://jonmircha.com/img/notas/flex-wrap.png" alt="flex-wrap" loading="lazy">

**flex-flow**: Es un _shorthand_ de _flex-direction_ y _flex-wrap_.

```css
flex-flow: flex-direction flex-wrap;
```

<iframe width="560" height="315" src="https://www.youtube.com/embed/lnWBQ3dMzhw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

**justify-content**: Define la alineación de los hijos en el eje principal (_main axis_).

```css
justify-content: flex-start | center | flex-end | space-between | space-around |
  space-evenly;
```

<img class="img-half" src="https://jonmircha.com/img/notas/justify-content.png" alt="justify-content" loading="lazy">

<iframe width="560" height="315" src="https://www.youtube.com/embed/4eHB6O8d1R0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

**align-items**: Define la alineación de los hijos en el eje transversal (_cross axis_), dentro de cada línea.

```css
align-items: stretch | flex-start | flex-end | center | baseline;
```

<img class="img-half" src="https://jonmircha.com/img/notas/align-items.png" alt="align-items" loading="lazy">

**align-content**: Define la alineación de los hijos en el eje transversal (_cross axis_), **NO** funciona cuando los hijos están en **UNA** sóla línea (es decir cuando _flex-wrap_ tiene el valor de _nowrap_, **NO FUNCIONA**).

```css
align-content: flex-start | flex-end | center | space-between | space-around |
  space-evenly | stretch;
```

<iframe width="560" height="315" src="https://www.youtube.com/embed/ELP5l8IVSJo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

### Propiedades CSS de los elementos hijos

**flex-grow**: Cuando la caja flexbox tenga espacio sobrante, es la **habilidad** o el **factor** de **crecer**, valor por defecto es 0, **NO** se aceptan valores negativos.

```css
flex-grow: 0;
```

<iframe width="560" height="315" src="https://www.youtube.com/embed/Ib9cYYBNQ10" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

**flex-shrink**: Cuando la caja flexbox **NO** tenga espacio sobrante, es la **habilidad** o el **factor** de **encogerse**, valor por defecto es 1, **NO** se aceptan valores negativos.

```css
flex-shrink: 1;
```

<iframe width="560" height="315" src="https://www.youtube.com/embed/cN6O13okUww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

**flex-basis**: Es el tamaño del elemento hijo dentro de la línea de la caja flexbox.

- Si la caja flexbox tiene dirección de fila, flex-basis representa el width.
- Si la caja flexbox tiene dirección de columna, flex-basis representa el height.
- Valor por defecto auto.

```css
flex-basis: auto | 100px | 2rem | 50% | etc...;
```

**flex**: Es un _shorthand_ de las propiedades flex-grow flex-shrink y flex-basis, en ese orden.

```css
flex: 0 1 auto;
```

<iframe width="560" height="315" src="https://www.youtube.com/embed/jst2jcHDAWA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

**order**: Representa el orden que tendrán los elementos hijos en la caja flexbox.

- Valor por defecto 0.
- Se aceptan valores positivos y negativos.
- Un valor menor siempre irá antes que un valor mayor.

```css
order: 0 | 1 | 2 | -3 | etc...;
```

**align-self**: Sobreescribe el valor de la propiedad align-items sólo para el elemento hijo especificado.

```css
align-self: stretch | flex-start | flex-end | center | baseline;
```

<img class="img-half" src="https://jonmircha.com/img/notas/align-self.png" alt="align-self" loading="lazy">

<iframe width="560" height="315" src="https://www.youtube.com/embed/u-k1kPtOA5o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## Flexbox en la práctica

### Maquetación y Responsive Design

En este video te explico como hacer maquetación y responsive design artesanal con Flexbox, además te explico como funciona internamente la grid de Bootstrap 4 gracias a Flexbox.

<iframe width="560" height="315" src="https://www.youtube.com/embed/KoLOOETh0f4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

### Ejercicios Prácticos

En este videos te enseño a realizar los siguientes casos prácticos con Flexbox:

- _Sticky Footer_.
- Cabecera Responsive con Logo y Menú.
- _Hero Image_.
- Centrado perfecto.

<iframe width="560" height="315" src="https://www.youtube.com/embed/9TcStLE3qzI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

En este videos te enseño a realizar los siguientes casos prácticos con Flexbox:

- Maquetación _Zig Zag_ ( _Split Layout_ ).
- _Responsive Design_ sin _Media Queries_.

<iframe width="560" height="315" src="https://www.youtube.com/embed/po9V3IoxbJc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

### Flexbox y Bootstrap

En este video te enseño a sacarle el máximo provecho a todas las clases utilitarías que trae Bootstrap 4 de Flexbox, además hago todos los ejercicios que hicimos en los 2 videos anteriores pero usando exclusivamente Bootstrap 4.

Con este video terminamos la <a href="https://www.youtube.com/playlist?list=PLvq-jIkSeTUbQc3dGsssp8lxAi5npMrys" target="_blank">miniserie</a> que hice sobre Flexbox en mi canal de <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank">YouTube</a>.

<iframe width="560" height="315" src="https://www.youtube.com/embed/z11iV2JKHVc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## Más información sobre Flexbox

Aquí te dejo algunos enlaces interesantes para que puedas aprender más sobre Flexbox:

- <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank"><i>A Complete Guide to Flexbox</i></a>: La mejor guía que hay sobre Flexbox del blog _CSS Tricks_, dicho artículo siempre está vigente, cada vez que sale algo nuevo sobre Flexbox, el contenido se actualiza 😀.
- <a href="https://getbootstrap.com/docs/4.0/utilities/flex/" target="_blank"><i>Bootstrap Flexbox Utilities</i></a>: En este enlace puedes ver todas las clases utilitarias de Flexbox que trae Bootstrap 4.
- <a href="http://codepen.io/jonmircha/pen/aWWbre" target="_blank">Propiedades Flexbox Interactivas</a>: Repasa los valores de las propiedades Flexbox con este _codepen_ interactivo.
- <a href="http://www.flexboxdefense.com/" target="_blank"><i>Flexbox Defense</i></a>: Aprende Flexbox interactuando con este videojuego.
- <a href="http://flexboxfroggy.com//" target="_blank"><i>Flexbox Froggy</i></a>: Aprende Flexbox interactuando con este videojuego.
- <a href="https://marketplace.visualstudio.com/items?itemName=dzhavat.css-flexbox-cheatsheet" target="_blank"><i>CSS Flexbox Cheatsheet</i></a>: abre una hoja de trucos Flexbox directamente en Visual Studio Code, ¿quieres ver cómo instalarla? puedes verlo en esta <a href="https://jonmircha.com/vscode">nota</a>.
- <a href="https://www.youtube.com/playlist?list=PLvq-jIkSeTUbQc3dGsssp8lxAi5npMrys" target="_blank">Miniserie Flexbox CSS</a>: En esta serie de videos en mi canal de YouTube te enseño todo lo que necesitas saber sobre Flexbox CSS para maquetar sitios y aplicaciones web.
- <a href="https://github.com/jonmircha/youtube-flexbox" target="_blank">Códigos en GitHub</a>: En este repositorio te dejo los códigos que realice en la miniserie sobre Flexbox CSS que hice en mi canal de YouTube.
