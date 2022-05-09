## _JSON: JavaScript Object Notation_

_**JavaScript Object Notation**_ o Notación de Objetos de _JavaScript_, es un formato ligero de intercambio de datos. Leerlo y escribirlo es simple para humanos, mientras que para las máquinas es fácil de interpretar y generar. Todos los lenguajes de programación lo soportan.

### Sintaxis derivada de los objetos _JavaScript_:

- Los datos se encuentran en pares de nombre / valor.
- Los datos están separados por comas.
- Las llaves **`{}`** contienen objetos.
- Los corchetes **`[]`** contienen arreglos.
- Los datos tienen un nombre y un valor.
- Los datos se escriben como pares de nombre / valor **`"nombre" : "valor"`**.

### Valores _JSON_:

- Un número (entero o de coma flotante).
- Una cadena (entre comillas dobles).
- Un booleano (verdadero o falso).
- Un arreglo (entre corchetes).
- Un objeto (entre llaves).
- Un valor nulo (**`null`**).

### Métodos _JavaScript_ para _JSON_:

[_**`JSON.parse()`**_](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/JSON/parse): Analiza una notación _JSON_ y la convierte en un tipo de dato _JS_.

```js
console.log("*** JSON.parse ***");
console.log(JSON.parse("{}"));
console.log(JSON.parse("[1,2,3]"));
console.log(JSON.parse("true"));
console.log(JSON.parse("false"));
console.log(JSON.parse("19"));
console.log(JSON.parse('"Hola Mundo"'));
console.log(JSON.parse("null"));
//console.log(JSON.parse("undefined"));
console.log(JSON.parse('{ "x": 2, "y": 3 }'));
```

[_**`JSON.stringify()`**_](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/JSON/stringify): Convierte un tipo de dato _JS_ a notación _JSON_.

```js
console.log("*** JSON.stringify ***");
console.log(JSON.stringify({}));
console.log(JSON.stringify([1, 2, 3]));
console.log(JSON.stringify(true));
console.log(JSON.stringify(false));
console.log(JSON.stringify(19));
console.log(JSON.stringify("Hola Mundo"));
console.log(JSON.stringify(null));
console.log(JSON.stringify(undefined));
console.log(JSON.stringify({ x: 2, y: 3 }));
```

[Más información en _JSON.org_](http://www.json.org/json-es.html)

[Ver Video](https://www.youtube.com/watch?v=d1XijkyZRvM&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)
