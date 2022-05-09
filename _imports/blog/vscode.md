## Mi configuración

Hola, en esta nota te comparto la configuración inicial y las extensiones que uso para _Visual Studio Code_.

### Configuración inicial

Para copiarla en el archivo **_settings.json_** de tu _VSCode_, sólo debes:

1. Ir al Menú _File_ (Archivo),
1. luego a _Preferences_ (Preferencias),
1. y seleccionar _Settings_ (Configuraciones),
1. ahí sólo da clic en el botón _Open Settings (JSON)_ que está en la esquina superior derecha,
1. y listo, copía la configuración que te sirva.

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
  "workbench.iconTheme": "vs-seti",
  "terminal.integrated.shell.windows": "C:\\Program Files\\Git\\bin\\bash.exe",
  "php.validate.executablePath": "C:\\Bitnami\\wampstack-7.3.10-0\\php\\php.exe",
  "terminal.integrated.fontFamily": "Consolas, 'Courier New', monospace",
  "extensions.ignoreRecommendations": true,
  "editor.multiCursorModifier": "ctrlCmd",
  "editor.snippetSuggestions": "top",
  "editor.formatOnPaste": true,
  "editor.formatOnSave": true,
  "[html]": {
    "editor.formatOnSave": true,
    "editor.defaultFormatter": "vscode.html-language-features"
  },
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "[javascript]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "liveServer.settings.donotShowInfoMsg": true,
  "liveServer.settings.donotVerifyTags": true,
  "editor.codeActionsOnSave": null,
  "workbench.colorTheme": "Default Dark+",
  "window.zoomLevel": 1
}
```

### Extensiones

La siguientes son mis extensiones imperdibles para _Visual Studio Code_:

1. [_Spanish Language Pack for Visual Studio Code_](https://marketplace.visualstudio.com/items?itemName=MS-CEINTL.vscode-language-pack-es): para usar la interfaz de _VS Code_ en español.
1. [_Prettier - Code formatter_](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode): formatea mi código _frontend_ <small>(_HTML_, _CSS_ y _JavaScript_)</small>.
1. [_Bracket Pair Colorizer_](https://marketplace.visualstudio.com/items?itemName=CoenraadS.bracket-pair-colorizer): pinta de diferente color cada par de paréntesis, corchetes y llaves en el código para que sea más fácil identificar cada juego de estos caracteres.
1. [_EditorConfig for VS Code_](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig): para integrar [_EditorConfig_](https://editorconfig.org/) a _Visual Studio Code_.
1. [_ESLint_](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint): para integrar [_ESLint_](https://eslint.org/) a _Visual Studio Code_.
1. [_CSS Flexbox Cheatsheet_](https://marketplace.visualstudio.com/items?itemName=dzhavat.css-flexbox-cheatsheet): abre una hoja de trucos _flexbox_ directamente en _Visual Studio Code_.
1. [_Live Server_](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer): levanta un servidor local de desarrollo con función de recarga en vivo para páginas estáticas y dinámicas desde _Visual Studio Code_.

### Videotutorial

En este video te explico mi configuración inicial de <i>Visual Studio Code</i>.

[Ver Video](https://www.youtube.com/watch?v=twrKk-2vRbU)
