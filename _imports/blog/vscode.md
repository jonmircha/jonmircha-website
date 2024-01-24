Hola, en esta nota te comparto la configuración inicial y las extensiones básicas que uso para desarrollo _web_ _frontend_ en [_Visual Studio Code_](https://code.visualstudio.com/).

## Configuración inicial

```json
{
  "window.zoomLevel": 1,
  "editor.wordWrap": "on",
  "files.autoSave": "onFocusChange",
  "window.restoreWindows": "none",
  "security.workspace.trust.untrustedFiles": "open",
  "editor.detectIndentation": false,
  "editor.tabSize": 2,
  "editor.bracketPairColorization.enabled": true,
  "editor.guides.bracketPairs": true,
  "editor.renderWhitespace": "all",
  "terminal.integrated.defaultProfile.windows": "Git Bash",
  "emmet.includeLanguages": {
    "javascript": "html"
  },
  "liveServer.settings.donotVerifyTags": true,
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "editor.formatOnPaste": true,
  "editor.formatOnSave": true,
  "editor.formatOnType": true
}
```

Para copiar la configuración en el archivo **_settings.json_** de tu _VSCode_, sólo debes:

1. Ir al Menú _File_ (Archivo),
1. luego a _Preferences_ (Preferencias),
1. y seleccionar _Settings_ (Configuraciones),
1. ahí sólo da clic en el botón _Open Settings (JSON)_ que está en la esquina superior derecha,
1. y listo, copía la configuración que te sirva.

![Configuración VSCode](img/blog/vscode-config.jpg)

## Extensiones

La siguientes son mis extensiones imperdibles para _Visual Studio Code_:

1. [_Spanish Language Pack for Visual Studio Code_](https://marketplace.visualstudio.com/items?itemName=MS-CEINTL.vscode-language-pack-es): para usar la interfaz de _VS Code_ en español.
1. [_Live Server_](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer): levanta un servidor local de desarrollo con función de recarga en vivo para páginas estáticas y dinámicas desde _Visual Studio Code_.
1. [_Prettier - Code formatter_](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode): formatea mi código _frontend_ <small>(_HTML_, _CSS_ y _JavaScript_)</small>.
1. [_ESLint_](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint): para integrar [_ESLint_](https://eslint.org/) a _Visual Studio Code_.

## Atajos de teclado

- [_Keyboard shortcuts for Linux_](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-linux.pdf).
- [_Keyboard shortcuts for macOS_](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-macos.pdf).
- [_Keyboard shortcuts for Windows_](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf).

## Aprende más

En este curso te explico, cómo instalar, configurar y usar <i>Visual Studio Code</i>.

[Ver Curso](https://www.youtube.com/watch?v=KpgVF0mXOUs)

---
