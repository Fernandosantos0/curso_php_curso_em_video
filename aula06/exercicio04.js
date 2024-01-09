'use strict';

// Capturando o elemento do DOM
const slcAnos = window.document.querySelector('#c-ano');

// Manipulando a data
const data = new Date();
let ano = data.getFullYear();

// Função para criar elementos HTML
const elemet = (tag) => window.document.createElement(tag);

// Estrutura de repetição para a inserção dos elementos options
for(let i = 0; i < 170; i++) {
    const option = elemet('option');
    option.setAttribute('value', ano);
    option.textContent = ano;

    slcAnos.insertAdjacentElement('beforeend', option);

    ano--;
}