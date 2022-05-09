_Flexbox CSS_ es un sistema de maquetación **unidimensional**, pensado principalmente para el acomodo interno de los elementos, componentes y/o _widgets_ de una interfaz de usuario.

[Ver Video](https://www.youtube.com/watch?v=AAtvnv6LNMk)

## Conceptos Básicos

- Contenedor Padre ( _**Flex Container**_ ).
- Elementos Hijos ( _**Flex Items**_ ).
- Eje Principal ( _**Main Axis**_ )
- Eje Transversal ( _**Cross Axis**_ ).

![Conceptos Básicos Flexbox](https://jonmircha.com/img/blog/flex-conceptos.png)

[Ver Video](https://www.youtube.com/watch?v=1NBMqQkcZ9Y)

---

## Propiedades _CSS_

_Flexbox_ tiene 14 propiedades _CSS_, 8 que aplican al contenedor padre y 6 a los elementos hijos, a continuación te doy una definición muy puntual sobre cada propiedad, así como los posibles valores que pueden aceptar.

El primer valor que enlisto en cada propiedad es el que toman por defecto.

### Propiedades del contenedor padre

**_display_**: Define que una caja será _flexbox_ de bloque o _flexbox_ de línea.

```css
display: flex | inline-flex;
```

**_flex-direction_**: Define el eje principal (_main axis_) _row_ - X, _column_ - Y.

```css
flex-direction: row | row-reverse | column | column-reverse;
```

![flex-direction](https://jonmircha.com/img/blog/flex-direction.png)

**_flex-wrap_**: Define si la caja _flexbox_ envuelve o **NO** a sus hijos.

```css
flex-wrap: nowrap | wrap | wrap-reverse;
```

![flex-wrap](https://jonmircha.com/img/blog/flex-wrap.png)

**flex-flow**: Es un _shorthand_ de _flex-direction_ y _flex-wrap_.

```css
flex-flow: flex-direction flex-wrap;
```

[Ver Video](https://www.youtube.com/watch?v=lnWBQ3dMzhw)

**_justify-content_**: Define la alineación de los hijos en el eje principal (_main axis_).

```css
justify-content: flex-start | center | flex-end | space-between | space-around |
  space-evenly;
```

![justify-content](https://jonmircha.com/img/blog/justify-content.png)

[Ver Video](https://www.youtube.com/watch?v=4eHB6O8d1R0)

**_align-items_**: Define la alineación de los hijos en el eje transversal (_cross axis_), dentro de cada línea.

```css
align-items: stretch | flex-start | flex-end | center | baseline;
```

![align-items](https://jonmircha.com/img/blog/align-items.png)

**_align-content_**: Define la alineación de los hijos en el eje transversal (_cross axis_), **NO** funciona cuando los hijos están en **UNA** sóla línea (es decir cuando _flex-wrap_ tiene el valor de _nowrap_, **NO FUNCIONA**).

```css
align-content: flex-start | flex-end | center | space-between | space-around |
  space-evenly | stretch;
```

[Ver Video](https://www.youtube.com/watch?v=ELP5l8IVSJo)

### Propiedades de los elementos hijos

**_flex-grow_**: Cuando la caja _flexbox_ tenga espacio sobrante, es la **habilidad** o el **factor** de **crecer**, valor por defecto es 0, **NO** se aceptan valores negativos.

```css
flex-grow: 0;
```

[Ver Video](https://www.youtube.com/watch?v=Ib9cYYBNQ10)

**_flex-shrink_**: Cuando la caja _flexbox_ **NO** tenga espacio sobrante, es la **habilidad** o el **factor** de **encogerse**, valor por defecto es 1, **NO** se aceptan valores negativos.

```css
flex-shrink: 1;
```

[Ver Video](https://www.youtube.com/watch?v=cN6O13okUww)

**_flex-basis_**: Es el tamaño del elemento hijo dentro de la línea de la caja _flexbox_.

- Si la caja _flexbox_ tiene dirección de fila, _flex-basis_ representa el _width_.
- Si la caja _flexbox_ tiene dirección de columna, _flex-basis_ representa el _height_.
- Valor por defecto _auto_.

```css
flex-basis: auto | 100px | 2rem | 50% | etc...;
```

**_flex_**: Es un _shorthand_ de las propiedades _flex-grow_, _flex-shrink_ y _flex-basis_, en ese orden.

```css
flex: 0 1 auto;
```

[Ver Video](https://www.youtube.com/watch?v=jst2jcHDAWA)

**_order_**: Representa el orden que tendrán los elementos hijos en la caja _flexbox_.

- Valor por defecto 0.
- Se aceptan valores positivos y negativos.
- Un valor menor siempre irá antes que un valor mayor.

```css
order: 0 | 1 | 2 | -3 | etc...;
```

**_align-self_**: Sobreescribe el valor de la propiedad _align-items_ sólo para el elemento hijo especificado.

```css
align-self: stretch | flex-start | flex-end | center | baseline;
```

![align-self](https://jonmircha.com/img/blog/align-self.png)

[Ver Video](https://www.youtube.com/watch?v=u-k1kPtOA5o)

---

## _Flexbox_ en la práctica

### Maquetación y _Responsive Design_

En este video te explico como hacer maquetación y _responsive design_ artesanal con _Flexbox_, además te explico como funciona internamente la _grid_ de _Bootstrap_ 4 gracias a _Flexbox_.

[Ver Video](https://www.youtube.com/watch?v=KoLOOETh0f4)

### Ejercicios Prácticos

En este videos te enseño a realizar los siguientes casos prácticos con _Flexbox_:

- _Sticky Footer_.
- Cabecera _Responsive_ con Logo y Menú.
- _Hero Image_.
- Centrado perfecto.

[Ver Video](https://www.youtube.com/watch?v=9TcStLE3qzI)

En este videos te enseño a realizar los siguientes casos prácticos con _Flexbox_:

- Maquetación _Zig Zag_ ( _Split Layout_ ).
- _Responsive Design_ sin _Media Queries_.

[Ver Video](https://www.youtube.com/watch?v=po9V3IoxbJc)

### _Flexbox_ y _Bootstrap_

En este video te enseño a sacarle el máximo provecho a todas las clases utilitarías que trae _Bootstrap_ 4 de _Flexbox_, además hago todos los ejercicios que hicimos en los 2 videos anteriores pero usando exclusivamente _Bootstrap_ 4.

[Ver Video](https://www.youtube.com/watch?v=z11iV2JKHVc)

Con este video terminamos la miniserie que hice sobre _Flexbox_ en mi canal de <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank" rel="noopener"><i>YouTube</i></a>.

---

## Más información sobre _Flexbox_

Aquí te dejo algunos enlaces interesantes para que puedas aprender más sobre _Flexbox_:

- [_A Complete Guide to Flexbox_](https://css-tricks.com/snippets/css/a-guide-to-flexbox/): La mejor guía que hay sobre _Flexbox_ del _blog_ _CSS Tricks_, dicho artículo siempre está vigente, cada vez que sale algo nuevo sobre _Flexbox_, el contenido se actualiza 😀.
- [_Bootstrap Flexbox Utilities_](https://getbootstrap.com/docs/4.0/utilities/flex/): En este enlace puedes ver todas las clases utilitarias de _Flexbox_ que trae _Bootstrap_ 4.
- [Propiedades _Flexbox_ Interactivas](http://codepen.io/jonmircha/pen/aWWbre): Repasa los valores de las propiedades _Flexbox_ con este _codepen_ interactivo.
- [_Flexbox Defense_](http://www.flexboxdefense.com/): Aprende _Flexbox_ interactuando con este videojuego.
- [_Flexbox Froggy_](http://flexboxfroggy.com/): Aprende _Flexbox_ interactuando con este videojuego.
- [_CSS Flexbox Cheatsheet_](https://marketplace.visualstudio.com/items?itemName=dzhavat.css-flexbox-cheatsheet): abre una hoja de trucos _Flexbox_ directamente en _Visual Studio Code_, ¿quieres ver cómo instalarla? puedes verlo en este [artículo](/vscode).
- [Miniserie _Flexbox CSS_](https://youtube.com/playlist?list=PLvq-jIkSeTUbQc3dGsssp8lxAi5npMrys): En esta serie de videos en mi canal de _YouTube_ te enseño todo lo que necesitas saber sobre _Flexbox CSS_ para maquetar sitios y aplicaciones _web_.
- [Códigos en _GitHub_](https://github.com/jonmircha/youtube-flexbox): En este repositorio te dejo los códigos que realice en la miniserie sobre _Flexbox CSS_ que hice en mi canal de _YouTube_.

[Ver Curso](https://www.youtube.com/playlist?list=PLvq-jIkSeTUbQc3dGsssp8lxAi5npMrys)

Adicionalmente al contenido sobre _Flexbox CSS_ que puedes encontrar en mi sitio y canal de _YouTube_, también te invito a ver mi [artículo](/grid) y [curso](https://youtube.com/playlist?list=PLvq-jIkSeTUY628cyd9LVbXSXi2xG9mUl) sobre _Grid CSS_ que es el modelo de maquetación que complementa a _Flexbox CSS_, con ambas herramientas serás una poderosa y afilada navaja suiza 😎🪒 en términos de maquetación web.
