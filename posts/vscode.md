---
title: Mi configuración de Visual Studio Code
description: En esta nota te comparto la configuración inicial y las extensiones que uso para Visual Studio Code
slug: vscode
category: vscode
date: 2019-10-25T17:27:00
poster: /img/blog/vscode.png
---

# _Visual Studio Code_

<small class="date">Última actualización: _Oct 25 2019_</small>

<img class="icon-x5" src="/img/category/vscode.svg" alt="Categoría: vscode" title="Categoría: vscode" loading="lazy">

## Mi configuración

Hola, en esta nota te comparto la configuración inicial y las extensiones que uso para _Visual Studio Code_.

### Configuración inicial

Para copiarla en el archivo **_settings.json_** de tu _VSCode_, sólo debes:

1. Ir al Menú _File_ <small>( Archivo )</small>
1. luego a _Preferences_ <small>( Preferencias )</small>
1. y seleccionar _Settings_ <small>( Configuraciones )</small>,
1. ahí sólo da clic en el botón _Open Settings (JSON)_ que está en la esquina superior derecha
1. y listo, copía la configuración que te sirva.

<div class="full-width">

```json
{
  "editor.fontFamily": "'Consolas, 'Courier New', monospace",
  "editor.wordWrap": "on",
  "editor.insertSpaces": true,
  "editor.detectIndentation": false,
  "editor.renderWhitespace": "all",
  "editor.tabSize": 2,
  "emmet.syntaxProfiles": {
    "javascript": "html"
  },
  "emmet.includeLanguages": {
    "javascript": "html"
  },
  "emmet.triggerExpansionOnTab": true,
  "files.autoSave": "onFocusChange",
  "window.restoreWindows": "none",
  "window.zoomLevel": 1,
  "workbench.colorTheme": "Monokai",
  "workbench.iconTheme": "vs-seti",
  "terminal.integrated.shell.windows": "C:\\Program Files\\Git\\bin\\bash.exe",
  "terminal.integrated.fontFamily": "Consolas, 'Courier New', monospace",
  "extensions.ignoreRecommendations": true,
  "editor.multiCursorModifier": "ctrlCmd",
  "editor.snippetSuggestions": "top",
  "editor.formatOnPaste": true,
  "editor.formatOnSave": true,
  "[html]": {
    "editor.formatOnSave": true,
    "editor.defaultFormatter": "vscode.html-language-features"
  }
}
```

</div>

### Extensiones

La siguientes son mis extensiones imperdibles para _Visual Studio Code_:

1. <a href="https://marketplace.visualstudio.com/items?itemName=MS-CEINTL.vscode-language-pack-es" target="_blank" rel="noopener"><i>Spanish Language Pack for Visual Studio Code</i></a>: para usar la interfaz de <i>VS Code</i> en español.
1. <a href="https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode" target="_blank" rel="noopener"><i>Prettier - Code formatter</i></a>: formatea mi código <i>frontend</i> <small>(<i>HTML</i>, <i>CSS</i> y <i>JavaScript</i>)</small>.
1. <a href="https://marketplace.visualstudio.com/items?itemName=CoenraadS.bracket-pair-colorizer" target="_blank" rel="noopener"><i>Bracket Pair Colorizer</i></a>: pinta de diferente color cada par de paréntesis, corchetes y llaves en el código para que sea más fácil identificar cada juego de estos caracteres.
1. <a href="https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig" target="_blank" rel="noopener"><i>EditorConfig for VS Code</i></a>: para integrar <a href="https://editorconfig.org/" target="_blank" rel="noopener"><i>EditorConfig</i></a> a <i>Visual Studio Code</i>.
1. <a href="https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint" target="_blank" rel="noopener"><i>ESLint</i></a>: para integrar <a href="https://eslint.org/" target="_blank"><i>ESLint</i></a> a <i>Visual Studio Code</i>.
1. <a href="https://marketplace.visualstudio.com/items?itemName=dzhavat.css-flexbox-cheatsheet" target="_blank" rel="noopener"><i>CSS Flexbox Cheatsheet</i></a>: abre una hoja de trucos <i>flexbox</i> directamente en <i>Visual Studio Code</i>.
1. <a href="https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer" target="_blank" rel="noopener"><i>Live Server</i></a>: levanta un servidor local de desarrollo con función de recarga en vivo para páginas estáticas y dinámicas desde <i>Visual Studio Code</i>.

### Videotutorial

En este video te explico mi configuración inicial de <i>Visual Studio Code</i>.

<a class="btn-pulse" href="https://www.youtube.com/watch?v=twrKk-2vRbU" target="_blank" rel="noopener">Ver video</a>
