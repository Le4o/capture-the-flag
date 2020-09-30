# ascii-matrix

Found at source code of web page
```js
let titulozipfile = "ZG9jdW1lbnQudGl0bGUudG9Mb3dlckNhc2UoKS5tYXRjaCgvW3Qtel0vZykuam9pbignJyk="
```

After base64 the hash above we get
```js
Decrypt = document.title.toLowerCase().match(/[t-z]/g).join('')
```
document.title is __Desafio: Ascii Matrix - CTF | Hacker Security__

Passing through this js script we get `txtuty`

Acessing `https://capturetheflag.com.br/desafio/ascii-matrix/txtuty.zip` we can download the zip file

Using `decrypter.py` we can see part of the resolution, but some keys are missing

The missing keys can be finded in ascii table, you just need to add 10 to the key value to find the character.

Flag: `_desafioAsciiHS_Z1834FD4%fsPoKCve3*3*F#bh`
